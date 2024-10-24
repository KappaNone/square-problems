const dropdownButtons = document.querySelectorAll('.DrpDwnPrice');
dropdownButtons.forEach(button => {
    button.addEventListener('click', () => {
        const dropdownText = button.parentElement.nextElementSibling;
        dropdownText.classList.toggle('visible');
        button.querySelector('i').classList.toggle('fa-chevron-up');
        button.querySelector('i').classList.toggle('fa-chevron-down');
    });
});
