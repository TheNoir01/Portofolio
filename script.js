document.addEventListener('DOMContentLoaded', () => {
    
    /* ==========================================
       DARK MODE TOGGLE (BOOTSTRAP 5.3)
    ========================================== */
    const themeToggleBtn = document.getElementById('theme-toggle');
    const htmlElement = document.documentElement;
    
    // Cek Local Storage
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        htmlElement.setAttribute('data-bs-theme', savedTheme);
    } else {
        // Cek OS preference jika belum ada di local storage
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            htmlElement.setAttribute('data-bs-theme', 'dark');
        }
    }

    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', () => {
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            htmlElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        });
    }

    /* ==========================================
       STICKY NAVBAR & ACTIVE LINK
    ========================================== */
    const navbar = document.getElementById('navbar');
    const sections = document.querySelectorAll('section, header');
    const navItems = document.querySelectorAll('.nav-links a, .navbar-nav .nav-link');
    const navbarCollapse = document.getElementById('navbarNav');
    
    window.addEventListener('scroll', () => {
        // Sticky Navbar
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
            navbar.classList.add('shadow');
            navbar.classList.remove('shadow-sm');
        } else {
            navbar.classList.remove('scrolled');
            navbar.classList.add('shadow-sm');
            navbar.classList.remove('shadow');
        }

        // Active Nav Link on Scroll
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });

        navItems.forEach(a => {
            a.classList.remove('active');
            if (a.getAttribute('href') === `#${current}`) {
                a.classList.add('active');
            }
        });
    });

    // Close mobile menu on link click
    navItems.forEach(item => {
        item.addEventListener('click', () => {
            if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                bsCollapse.hide();
            }
        });
    });

    /* ==========================================
       PROJECT FILTERING
    ========================================== */
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            btn.classList.add('active');

            const filterValue = btn.getAttribute('data-filter');

            projectItems.forEach(item => {
                const category = item.getAttribute('data-category');
                
                if (filterValue === 'all' || filterValue === category) {
                    item.classList.remove('d-none');
                    // Tambahkan delay kecil untuk trigger animasi masuk
                    setTimeout(() => {
                        item.style.opacity = '';
                        item.style.transform = '';
                        item.classList.add('visible');
                    }, 50);
                } else {
                    item.classList.add('d-none');
                    item.classList.remove('visible');
                    item.style.opacity = '';
                    item.style.transform = '';
                }
            });
        });
    });

    /* ==========================================
       SCROLL ANIMATION (FADE IN)
    ========================================== */
    const fadeElements = document.querySelectorAll('.fade-up, .fade-left');

    const fadeOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    };

    const fadeObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Hanya animasi sekali
            }
        });
    }, fadeOptions);

    fadeElements.forEach(el => {
        fadeObserver.observe(el);
    });

    /* ==========================================
       BACK TO TOP BUTTON
    ========================================== */
    const backToTopBtn = document.getElementById('back-to-top');

    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    /* ==========================================
       BOOTSTRAP MODAL GALLERY LOGIC
    ========================================== */
    const galleryModal = document.getElementById('galleryModal');
    if (galleryModal) {
        galleryModal.addEventListener('show.bs.modal', event => {
            // Element yang mentrigger modal
            const triggerElement = event.relatedTarget;
            
            // Ekstrak info dari atribut data-bs-*
            const imgSrc = triggerElement.getAttribute('data-bs-img');
            const imgTitle = triggerElement.getAttribute('data-bs-title');
            
            // Update konten modal
            const modalImage = galleryModal.querySelector('#modalImg');
            const modalCaption = galleryModal.querySelector('#modalCaption');
            
            modalImage.src = imgSrc;
            modalCaption.textContent = imgTitle;
        });
    }

});
