<script>
    let lastScroll = 0;
    const header = document.getElementById("header");
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", function() {
        const currentScroll = window.pageYOffset;
        if (currentScroll > lastScroll) {
            header.classList.add("-top-12");
            header.classList.remove("top-0");
            navbar.classList.add("top-0");
            navbar.classList.remove("top-12");
        } else {
            header.classList.add("top-0");
            header.classList.remove("-top-12");
            navbar.classList.add("top-12");
            navbar.classList.remove("top-0");
        }
        lastScroll = currentScroll <= 0 ? 0 : currentScroll;
    });

    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const closeMenu = document.getElementById("close-menu");

    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.remove("translate-x-full");
    });

    closeMenu.addEventListener("click", () => {
        mobileMenu.classList.add("translate-x-full");
    });
</script>
<script>
    const links = document.querySelectorAll(".nav-link");
    const currentPage = window.location.pathname.split("/").pop();

    links.forEach((link) => {
        const linkPage = link.getAttribute("href");

        if (
            linkPage === currentPage ||
            (linkPage === "index.html" && currentPage === "")
        ) {
            link.classList.add("bg-blue-200", "text-blue-800", "font-bold");
        } else {
            link.classList.add("hover:bg-blue-100");
        }
    });
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
    AOS.init({
        duration: 1000
    });

    new Swiper(".hero-swiper", {
        loop: true,
        effect: "fade",
        fadeEffect: {
            crossFade: true
        },
        speed: 900,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        a11y: true,
    });

    new Swiper(".reviews-carousel", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".reviews-carousel .swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".reviews-carousel .swiper-button-next",
            prevEl: ".reviews-carousel .swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
</script>
