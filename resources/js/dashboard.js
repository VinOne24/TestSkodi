const navLinks = document.querySelectorAll('.side-menu');

    navLinks.forEach(navLink => {
        navLink.addEventListener('click', () => {
            if (!navLink.classList.contains('side-menu--active')) {
                navLink.forEach(link => link.classList.remove('side-menu--active', 'side-menu--open'));
                navLink.classList.add('side-menu--active', 'side-menu--open');
                sessionStorage.setItem('selectedNav', navLink.getAttribute('data-target'));
            }
        });
    });

    const selectedNav = sessionStorage.getItem('selectedNav');
    if(selectedNav) {
        const navLink = document.querySelector(`[data-target="${selectedNav}"]`);
        navLink.classList.add('side-menu--active', 'side-menu--open');
    }