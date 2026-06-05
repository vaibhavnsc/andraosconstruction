const nav = document.getElementById('mainNav');

if (nav) {

    window.addEventListener('scroll', () => {

        if (window.scrollY > 50) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }

    });

}