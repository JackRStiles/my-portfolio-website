document.getElementById('navbar-toggle').addEventListener('click', toggleNav);

function toggleNav() {
    var nav = document.getElementById('navbarMenuHeroA');
    var className = nav.getAttribute('class');
    if (className == 'navbar-menu') {
        nav.className = 'navbar-menu is-active';
    } else {
        nav.className = 'navbar-menu';
    }
}