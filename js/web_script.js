// Storage Management

if (typeof module !== "undefined") {
    const { TypedMap, OptionError, searchElement } = require( "./script" );
}

class WebStorageManager {
    constructor(prefix, storage) {
        if (!String.testValidConversion(prefix)) throw new TypeError("prefixo com valor inválido para conversão em string");
        prefix = String(prefix);
        if (storage == "session") storage = window.sessionStorage;
        if (storage == "local") storage = window.localStorage;

        if (!prefix.length.isBetween(1, 50, true)) throw new RangeError("prefixo de tamanho inválido (entre 1 e 50)");
        if (!(storage instanceof Storage)) throw new TypeError("armazenamento não encontrado");

        this.#storage = storage;
        this.#prefix = prefix;
    }

    #prefix;
    #storage;
    #values = new TypedMap(WebStorageManager.#Data, String);
    #data_types = new TypedMap(String, String);

    get prefix() {
        return this.#prefix;
    }

    get storage() {
        return this.#storage;
    }

    key(key) {
        if (!String.testValidConversion(key)) throw new TypeError("chave inválida para conversão em string");
        return `${this.prefix}:${key}`;
    }

    unkey(key) {
        if (!String.testValidConversion(key)) throw new TypeError("chave inválida para conversão em string");
        key = String(key);
        let regexp = new RegExp(`${this.#prefix}:.+`);
        if (regexp.test(key)) {
            return key.slice((this.#prefix + ":").length);
        } else {
            return undefined;
        }
    }

    static #illegal_values = ["storage_data_types"];

    static #Data = class WebStorageManagerData {
        /**
         * 
         * @param {string} key
         * @param {any} value
         * @param {"string"|"number"|"boolean"|"json"|"raw"} type
         */
        constructor(key, value, type) {
            if (!String.testValidConversion(key)) throw new TypeError("chave inválida para conversão em string");
            key = String(key);
            const DataConstructor = WebStorageManager.#Data
            if (!DataConstructor.#dataTypes.includes(type)) throw new TypeError(`tipo de valor inválido (${DataConstructor.#dataTypes.join(', ')})`);

            let unmatchError = (type) => new TypeError(`valor inválido para ${type}`);

            this.set(value, type);

            this.#key = key;
        }

        #key;
        #value;
        #rawValue;
        #type;

        get key() {
            return this.#key;
        }

        get value() {
            return this.#value;
        }

        get rawValue() {
            return this.#rawValue;
        }

        set value(newValue) {
            this.set(newValue, this.#type);
        }

        get type() {
            return this.#type;
        }

        set(value, type) {
            switch (type) {
                case "boolean":
                    if (typeof value !== "boolean") throw unmatchError(type);
                    break;
                case "json":
                    if (typeof value !== "object" || value === null) throw unmatchError(type);
                    break;
                case "number":
                    if (typeof value !== "number") throw unmatchError(type);
                    break;
                case "string":
                    if (typeof value !== "string") throw unmatchError(type);
                    break;
            }

            if (type === "raw") {
                this.#value = String(value);
                this.#rawValue = String(value);
            } else {
                this.#value = value;
                this.#rawValue = JSON.stringify(value)
            }

            this.#type = type;
        }

        static #dataTypes = [ "string", "number", "boolean", "json", "raw" ];
    }

    get #dataTypesObject() {
        return JSON.stringify(Object.fromEntries(this.#data_types.entries()));
    }

    set(key, value, type = "raw") {
        if (WebStorageManager.#illegal_values.includes(key)) throw new TypeError("chave ilegal");
        if (!String.testValidConversion(key)) throw new TypeError("chave inválida para conversão em string");
        key = String(key);

        if (this.#values.has(key)) {
            const data = this.#values.get(key);
            data.set(value, type);
        } else {
            this.#values.set(key, new WebStorageManager.#Data(key, value, type));
        }

        const data = this.#values.get(key);
        let prefixKey = this.key(data.key);
        this.#storage.setItem(prefixKey, data.rawValue);
        this.#data_types.set(key, data.type);
        this.#storage.setItem(this.key('storage_data_types'), this.#dataTypesObject);
    }

    get(key) {
        if (this.#values.has(key)) {
            return this.#values.get(key).value;
        } else {
            return undefined;
        }
    }

    remove(key) {
        if (this.#values.has(key)) {
            this.#values.delete(key);
            this.#data_types.delete(key);
            let prefixKey = this.key(key);
            this.#storage.removeItem(prefixKey);
            this.#storage.setItem(this.key('storage_data_types'), this.#dataTypesObject);
        }
    }

    clear() {
        [...this.#values.keys()].forEach(key => {
            this.remove(key);
        });
    }

    *dataObjects() {
        for (const value of this.#values.values()) {
            yield {
                key: value.key,
                value: value.value,
                rawValue: value.rawValue,
                type: value.type
            };
        }
    }

    *values() {
        for (const value of this.#values.values()) {
            yield value.value;
        }
    }

    *keys() {
        for (const key of this.#values.keys()) {
            yield key;
        }
    }

    *entries(dataObjects = false) {
        dataObjects = Boolean(dataObjects);
        for (const [key, value] of this.#values.entries()) {
            if (dataObjects) {
                yield [
                    key,
                    {
                        key: value.key,
                        value: value.value,
                        rawValue: value.rawValue,
                        type: value.type
                    }
                ];
            } else {
                yield [
                    key,
                    value.value
                ];
            }
        }
    }

    *[Symbol.iterator]() {
        yield* this.entries(false);
    }

    #loaded = false;

    load() {
        if (this.#loaded) return;
        this.#loaded = true;

        let types = JSON.parse(this.#storage.getItem(this.key('storage_data_types')));
        if (!types) types = {};
        
        for (let i = 0; i < this.#storage.length; i++) {
            const key = this.#storage.key(i);
            const value = this.#storage.getItem(key);
            
            const unkey = this.unkey(key);
            const type = types[unkey];
            if (unkey) {
                if (WebStorageManager.#illegal_values.includes(unkey)) continue;
                if (type == undefined || type == "raw") {
                    this.set(unkey, value, type);
                } else {
                    this.set(unkey, JSON.parse(value), type);
                }
            }
        }
    }
}

// Visual Control

class ChromaticManager {
    constructor() {
        throw new TypeError("impossível utilizar este construtor");
    }

    static Theme = class ChromaticPackageTheme {
        constructor(name, base, vars, filters, reverse) {
            if (!String.testValidConversion(name)) throw new TypeError("nome inválido para conversão em string.");
            if (!String.testValidConversion(base)) throw new TypeError("base inválida para conversão em string.");
            if (!String.testValidConversion(reverse)) throw new TypeError("nome de tema inverso inválido para conversão em string.");

            name = String(name);
            reverse = String(reverse);
            base = String(base);
            if (!isValidHexColor(base)) throw new TypeError("cor base não é uma cor hexadecimal");

            if (!(vars instanceof Array)) throw new TypeError("cores variantes precisam estar num array");
            if (vars.length == 0) throw new RangeError("não existem cores variantes");
            if (!(filters instanceof Array)) throw new TypeError("filtros precisam estar num array");
            if (filters.length == 0) throw new RangeError("não existem filtros");

            vars.forEach((varColor, index) => {
                if (!isValidHexColor(varColor)) throw new TypeError(`cor variante [${index}] não é uma cor hexadecimal`);
            });
            filters.forEach((filter, index) => {
                if (!isValidHexColor(filter)) throw new TypeError(`filtro [${index}] não é uma cor hexadecimal`);
            });

            this.#name = name;
            this.#base = base;
            this.#vars.push(...vars);
            this.#filters.push(...filters);
            this.#reverse = reverse;

            ChromaticManager.#themeList.set(name, this)
        }

        #name = "";
        #base = "";
        #vars = [];
        #filters = [];
        #reverse = "";

        get name() { return this.#name }
        get base() { return this.#base }
        get vars() { return [...this.#vars] }
        get filters() { return [...this.#filters] }
        get reverse() { return this.#reverse }
    }

    static Color = class ChromaticPackageColor {
        constructor(name) {
            if (!String.testValidConversion(name)) throw new TypeError("nome inválido para conversão em string.");
            name = String(name);
            this.#name = name;

            ChromaticManager.#colorList.set(name, this);
        }

        setThemeColor(theme, color, vars, filters) {
            if (!String.testValidConversion(color)) throw new TypeError("cor inválida para conversão em string.");
            if (!String.testValidConversion(theme)) throw new TypeError("tema inválido para conversão em string.");
            color = String(color);
            theme = String(theme);
            if (!isValidHexColor(color)) throw new TypeError("cor inserida não é uma cor hexadecimal");
            if (![...ChromaticManager.#themeList.keys()].includes(theme)) throw new ReferenceError("tema selecionado não foi encontrado na lista de temas");
            if (!(vars instanceof Array)) throw new TypeError("cores variantes precisam estar num array");
            if (!(filters instanceof Array)) throw new TypeError("filtros precisam estar num array");

            vars.forEach((varColor, index) => {
                if (!isValidHexColor(varColor)) throw new TypeError(`cor variante [${index}] não é uma cor hexadecimal`);
            });

            filters.forEach((filter, index) => {
                if (!isValidHexColor(filter)) throw new TypeError(`filtro [${index}] não é uma cor hexadecimal`);
            });
            this.#colors.set(theme, new ChromaticManager.Color.#ThemeColor(theme, color, vars, filters));

            return this;
        }

        #name;
        #colors = new TypedMap(ChromaticManager.Color.#ThemeColor, String);

        get name() { return this.#name }
        get colors() {
            let returnObj = {};
            for (const [theme, color] of this.#colors.entries()) {
                returnObj[theme] = color;
            }
            return returnObj;
        }

        static #ThemeColor = class ChromaticPackageColorThemeInstance {
            constructor(theme, color, vars, filters) {
                this.theme = theme;
                this.color = color;
                this.#vars.push(...vars);
                this.#filters.push(...filters);
            }

            #vars = [];
            #filters = [];

            get vars() {
                return [...this.#vars];
            }

            get filters() {
                return [...this.#filters];
            }
        }
    }

    static #themeList = new TypedMap(ChromaticManager.Theme, String);
    static #colorList = new TypedMap(ChromaticManager.Color, String);

    static applyTheme(theme, target = searchElement('html', 'query')) {
        if (!(target instanceof HTMLElement)) throw new TypeError("não é possível aplicar tema fora de um elemento");

        if (theme instanceof ChromaticManager.Theme) {
            theme = theme.name;
        } else if (String.testValidConversion(theme)) {
            theme = String(theme);
        } else {
            throw new TypeError("tema inválido para ser aplicado");
        }

        let themes = [...ChromaticManager.#themeList.keys()];

        if (themes.includes(theme)) {
            themes.forEach(checkTheme => {
                if (checkTheme === theme) {
                    target.classList.add(`${checkTheme}Theme`);
                } else {
                    target.classList.remove(`${checkTheme}Theme`);
                }
            });
        } else {
            throw new ReferenceError("tema não encontrado na lista de temas.");
        }
    }

    static applyColor(color, target = searchElement('html', 'query')) {
        if (!(target instanceof HTMLElement)) throw new TypeError("não é possível aplicar cor fora de um elemento");

        if (color instanceof ChromaticManager.Color) {
            color = color.name;
        } else if (String.testValidConversion(color)) {
            color = String(color);
        } else {
            throw new TypeError("cor inválida para ser aplicado");
        }

        let colors = [...ChromaticManager.#colorList.keys()];

        if (colors.includes(color)) {
            colors.forEach(checkColor => {
                if (checkColor === color) {
                    target.classList.add(`${checkColor}Main`);
                } else {
                    target.classList.remove(`${checkColor}Main`);
                }
            });
        } else {
            throw new ReferenceError("cor não encontrada na lista de cores.");
        }
    }

    static apply(theme, color, target = searchElement('html', 'query')) {
        this.applyTheme(theme, target);
        this.applyColor(color, target);
    }

    static loadJSON = async function loadJSON(jsonlocation) {
        const json = await fetch(jsonlocation).then(resp => resp.json())
        
        Object.values(json).forEach(theme => {
            const name = theme.name;
            const reverse = theme.reverse;
            const base = theme.base;
            const vars = Object.values(theme.vars);
            const filters = Object.values(theme.filters);

            new ChromaticManager.Theme(name, base, vars, filters, reverse);

            Object.entries(theme.colors).forEach(colorDouble => {
                const [ name, color ] = colorDouble;

                const code = color.code;
                const vars = Object.values(color.vars);
                const filters = Object.values(color.filters);

                if (this.#colorList.has(name)) {
                    this.#colorList.get(name).setThemeColor(theme.name, code, vars, filters);
                } else {
                    new ChromaticManager.Color(name);
                    this.#colorList.get(name).setThemeColor(theme.name, code, vars, filters);
                }
            });
        });

        return json;
    }
}

// Interactive Elements

class DynamicInput {
    constructor(input, events = {}) {
        if (!(input instanceof HTMLElement)) throw new TypeError("é necessário utilizar um elemento HTML");
        if (typeof events !== "object" || events === null) throw new TypeError("eventos precisam estar armazenados num objeto <event, callback>");
        this.#input = input;

        DynamicInput.#validEvents.forEach(event => {
            if (events[event] == undefined) return;
            const eventCallback = events[event];
            if (typeof eventCallback !== "function") throw new TypeError("um evento precisa ser uma função");
            this.#events.set(event, eventCallback);
            this.#input.addEventListener(event, eventCallback);
        });
    }

    #input;
    #events = new TypedMap(Function, String);
    
    static #validEvents = [ "input", "change", "focus", "blur" ];
}

class DynamicSearch {
    constructor(searchLink, join = "?") {
        if (!String.testValidConversion(searchLink)) throw new TypeError("URL de pesquisa inválido para conversão em string");
        searchLink = String(searchLink);

        if (join !== "?" || join !== "&") throw new TypeError("junção pode ser apenas ? e &");

        this.#join = join;
        this.#link = searchLink;
    }

    #link;
    #join = "?";

    link(search = "") {
        if (!String.testValidConversion(search)) throw new TypeError("pesquisa inválida para conversão em string");
        search = encodeURI(String(search));

        return `${this.#link}${this.#join}search=${search}`;
    }

    async search(search, callback = (search) => {}) { {}
        const link = this.link(search);
        if (typeof callback !== "function") throw new TypeError("callback precisa ser uma função");
        
        search = await fetch(link).then(resp => resp.json());

        callback(search);
        return search;
    }
}