document.addEventListener('DOMContentLoaded', function () {
    const menu_icono = document.querySelector('.menu__icono');
    const menu = document.querySelector('.menu');
    const exit_icono = document.querySelector('.exit__icono');

    menu_icono.addEventListener('click', function () {
        menu.style.top = '0px';
        document.body.style.overflowY = document.body.style.overflowY === 'hidden' ? 'auto' : 'hidden';
    });

    exit_icono.addEventListener('click', function () {
        menu.style.top = '-100vh';
        document.body.style.overflowY = document.body.style.overflowY === 'hidden' ? 'auto' : 'hidden';
    });

    console.log("Entro")
});