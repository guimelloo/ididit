document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('myModal');
    var closeModalSpan = document.getElementsByClassName('close')[0];

    // Exibe o modal automaticamente ao carregar a página
    modal.style.display = 'block';

    // Fecha o modal quando o usuário clica no botão de fechar
    closeModalSpan.addEventListener('click', function() {
        modal.style.display = 'none';
    });
});
