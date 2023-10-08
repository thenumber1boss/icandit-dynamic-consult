document.addEventListener("DOMContentLoaded", function () {
    const hero = document.querySelector(".hero");
    const heroTitle = document.getElementById("hero-title");
    const heroText = document.getElementById("hero-text");

    // Define an array of background image URLs
    const backgroundImages = [
        "img/hero1.jpg",
        "img/hero2.jpg",
        "img/hero3.jpg",
    ];

    // Preload the background images
    const imagePreloads = backgroundImages.map((url) => {
        const img = new Image();
        img.src = url;
        return img;
    });

    // Define an array of text content
    const textContent = [
        { title: "Ace Your Examinations With Ease", text: "Get professional coaching at your pace and convenience." },
        { title: "Embrace A Hitch-free Journey!", text: "Tap into our pool of experience as an educational expert." },
        { title: "State of The Art Coaching Facility", text: "Experience the best of service delivery at our physical and online classrooms." },
    ];

    let currentIndex = 0;

    function changeBackgroundAndText() {
        const nextIndex = (currentIndex + 1) % backgroundImages.length;

        // Set the new background image
        hero.style.backgroundImage = `url(${backgroundImages[nextIndex]})`;

        // Remove previous animation classes from title and text
        heroTitle.classList.remove("animate__animated", "animate__fadeIn");
        heroText.classList.remove("animate__animated", "animate__fadeIn");

        setTimeout(() => {
            heroTitle.textContent = textContent[nextIndex].title;
            heroTitle.classList.add("animate__animated", "animate__fadeIn");
        }, 700);

        setTimeout(() => {
            heroText.textContent = textContent[nextIndex].text;
            heroText.style.opacity = 0;
        }, 1200);

        setTimeout(() => {
            heroText.classList.add("animate__animated", "animate__fadeIn");
            heroText.style.opacity = 1;
        }, 1700);

        setTimeout(() => {
            heroText.style.opacity = 0;
        }, 5700);

        currentIndex = nextIndex;
    }

    // Initial call
    changeBackgroundAndText();

    // Change background and text every 5000ms
    setInterval(changeBackgroundAndText, 5000);


    // Initialize ScrollReveal for scrolling up
    ScrollReveal().reveal('.scroll-reveal-up', {
        duration: 1000,
        scale: 1,
        distance: '20px',
        origin: 'bottom',
        easing: 'ease-out',
        reset: true,
        viewFactor: 0.1,
        beforeReveal: function (domEl) {
            domEl.classList.add("animate__animated", "animate__slideInUp");
        },
        beforeReset: function (domEl) {
            domEl.classList.remove("animate__animated", "animate__slideInUp");
        }
    });


       // Initialize ScrollReveal for scrolling up
    ScrollReveal().reveal('.scroll-reveal-left', {
        duration: 1000,
        scale: 1,
        distance: '20px',
        origin: 'bottom',
        easing: 'ease-out',
        reset: true,
        viewFactor: 0.1,
        beforeReveal: function (domEl) {
            domEl.classList.add("animate__animated", "animate__slideInLeft");
        },
        beforeReset: function (domEl) {
            domEl.classList.remove("animate__animated", "animate__slideInLeft");
        }
    });

       // Initialize ScrollReveal for scrolling up
    ScrollReveal().reveal('.scroll-reveal-right', {
        duration: 1000,
        scale: 1,
        distance: '20px',
        origin: 'bottom',
        easing: 'ease-out',
        reset: true,
        viewFactor: 0.1,
        beforeReveal: function (domEl) {
            domEl.classList.add("animate__animated", "animate__slideInRight");
        },
        beforeReset: function (domEl) {
            domEl.classList.remove("animate__animated", "animate__slideInRight");
        }
    });

       // Initialize ScrollReveal for scrolling up
    ScrollReveal().reveal('.scroll-reveal-down', {
        duration: 1000,
        scale: 1,
        distance: '20px',
        origin: 'bottom',
        easing: 'ease-out',
        reset: true,
        viewFactor: 0.1,
        beforeReveal: function (domEl) {
            domEl.classList.add("animate__animated", "animate__slideInDown");
        },
        beforeReset: function (domEl) {
            domEl.classList.remove("animate__animated", "animate__slideInDown");
        }
    });


});
