import './bootstrap';
document.addEventListener('DOMContentLoaded', function () {
    const dropdownLink = document.getElementById('dropdownLink');
    const dropdownList = document.getElementById('dropdownList');

    dropdownLink.addEventListener('click', function () {
        dropdownList.classList.toggle('hidden');
        dropdownLink.parentElement.classList.toggle('open');
        const caretIcon = dropdownLink.querySelector('.fa-caret-right');
        caretIcon.classList.toggle('open');
    });
});


