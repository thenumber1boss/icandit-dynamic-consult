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

 // Unmute intro video
const video = document.getElementById('myVideo');
const unmuteButton = document.getElementById('unmute');

// Unmute research video
const researchVideo = document.getElementById('researchVideo');
const researchUnmuteButton = document.getElementById('unmuteResearch');

unmuteButton.addEventListener('click', () => {
  video.muted = !video.muted;
  unmuteButton.style.display = 'none';
});

researchUnmuteButton.addEventListener('click', () => {
  researchVideo.muted = !researchVideo.muted;
  researchUnmuteButton.style.display = 'none';
});

// Set up Intersection Observer for intro video
const observer = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        video.play();
        observer.unobserve(video); // Stop observing the video once it has been played
      } else if (entry.target === video && entry.intersectionRatio <= 0 && video.ended) {
        // Check if the video has ended and the button is still visible
        unmuteButton.style.display = 'none';
      }
    });
  },
  { threshold: 0.5 } // Adjust the threshold as needed
);

// Observe the intro video element
observer.observe(video);

// Listen for the intro video end event
video.addEventListener('ended', () => {
  // Check if the unmute button is still visible when the video ends
  if (unmuteButton.style.display !== 'none') {
    unmuteButton.style.display = 'none';
  }
});

// Set up Intersection Observer for research video
const researchObserver = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        researchVideo.play();
        researchObserver.unobserve(researchVideo); // Stop observing the video once it has been played
      } else if (entry.target === researchVideo && entry.intersectionRatio <= 0 && researchVideo.ended) {
        // Check if the video has ended and the button is still visible
        researchUnmuteButton.style.display = 'none';
      }
    });
  },
  { threshold: 0.5 } // Adjust the threshold as needed
);

// Observe the research video element
researchObserver.observe(researchVideo);

// Listen for the research video end event
researchVideo.addEventListener('ended', () => {
  // Check if the unmute button is still visible when the video ends
  if (researchUnmuteButton.style.display !== 'none') {
    researchUnmuteButton.style.display = 'none';
  }
});


function smoothScroll(targetId) {
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
        const scrollTime = getComputedStyle(document.documentElement).getPropertyValue('--scroll-time');
        targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start',
            inline: 'nearest'
        });

        // Delay scroll time for better effect
        setTimeout(() => {
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start',
                inline: 'nearest'
            });
        }, parseFloat(scrollTime) * 1000);
    }
}
function updateActiveClass(targetId) {
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // Remove active class from all menu items
    navLinks.forEach(link => {
        link.classList.remove('active');
    });

    // Add active class to the clicked menu item
    const clickedLink = document.querySelector(`.navbar-nav .nav-link[href="#${targetId}"]`);
    if (clickedLink) {
        clickedLink.classList.add('active');
    }
}

// Add an event listener for when scrolling is finished
window.addEventListener('scroll', function () {
    // Update the active class based on the currently visible section
    const sections = document.querySelectorAll('section');
    let found = false;

    sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        const isInViewport = (rect.top <= window.innerHeight / 2) && (rect.bottom >= window.innerHeight / 2);

        if (isInViewport && !found) {
            const targetId = section.id;
            updateActiveClass(targetId);
            found = true; // Set to true to update active class only for the first visible section
        }
    });
});






});
