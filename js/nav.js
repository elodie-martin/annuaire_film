const burger = document.querySelector('#burger');
const accordion = document.querySelector('#accordion');

burger.addEventListener('click', function () {

    if (accordion.classList.contains('d-none')) {

        accordion.classList.remove('d-none');
        accordion.classList.add('d-block');

    } else {
        accordion.classList.remove('d-block');
        accordion.classList.add('d-none');
    }

})