let caixaPreview = document.querySelector('.produtos-preview');
let caixasPreview = caixaPreview.querySelectorAll('.preview');

document.querySelectorAll('.produtos-caixa .produto').forEach(produto => {
  produto.onclick = () => {
    caixaPreview.style.display = 'flex';
    let nome = produto.getAttribute('data-nome');
    caixasPreview.forEach(preview => {
      let alvo = preview.getAttribute('data-alvo');
      if (nome === alvo) {
        preview.classList.add('ativo');
      }
    });
  };
});

caixasPreview.forEach(preview => {
  preview.querySelector('.fa-times').onclick = () => {
    preview.classList.remove('ativo');
    caixaPreview.style.display = 'none';
  };
});
