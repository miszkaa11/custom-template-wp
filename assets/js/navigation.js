// Navigation
document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNavigation = document.querySelector('.main-navigation');

    menuToggle.addEventListener('click', function () {
        mainNavigation.classList.toggle('toggled');
    });

    document.addEventListener('click', function (event) {
        if (!menuToggle.contains(event.target) && !mainNavigation.contains(event.target)) {
            mainNavigation.classList.remove('toggled');
        }
    });
});

// Submenu
document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.menu-item-has-children');

    menuItems.forEach(function(menuItem) {
        const link = menuItem.querySelector('a');

        link.addEventListener('click', function(e) {
            e.preventDefault();
            const subMenu = menuItem.querySelector('.sub-menu');

            // Toggle the display of the sub-menu
            if (subMenu.style.display === 'block') {
                subMenu.style.display = 'none';
            } else {
                subMenu.style.display = 'block';
            }
        });
    });
});

