history.replaceState(null, null, location.href);

ChromaticManager.loadJSON(project_dir + 'css/themes.json').then(json => darkTheme())