<?php
// ==========================================
// DATA PORTFOLIO (UBAH DATA DI SINI)
// ==========================================

$profile = [
    'name' => 'Haidar Ali Abidin',
    'role' => 'Software Developer & 3D Designer',
    'description' => 'Mahasiswa Teknik Informatika Semester 4 yang antusias dengan pengembangan web, aplikasi mobile, dan desain 3D. Selalu bersemangat untuk belajar teknologi baru dan menciptakan solusi digital yang bermanfaat.',
    'email' => 'aliabidinhaidar@gmail.com',
    'whatsapp' => '+6285718537229',
    'github' => 'https://github.com/TheNoir01',
    'linkedin' => 'www.linkedin.com/in/haidaraliabidin',
    'instagram' => 'https://www.instagram.com/haidarali.01/',
    'photo' => 'assets/images/profile/photo.jpeg',
    'cv' => 'assets/documents/cv/curriculum_vitae.pdf'
];

$skills = [
    ['name' => 'HTML5', 'icon' => 'assets/images/icon/html.png'],
    ['name' => 'CSS3', 'icon' => 'assets/images/icon/css.png'],
    ['name' => 'JavaScript', 'icon' => 'assets/images/icon/js.png'],
    ['name' => 'PHP Native', 'icon' => 'assets/images/icon/php.png'],
    ['name' => 'Blender 3D', 'icon' => 'assets/images/icon/blender.png'],
    ['name' => 'UI/UX Design', 'icon' => 'assets/images/icon/uiux.png'],
];

$experiences = [
    [
        'year' => '2024 - Sekarang',
        'title' => 'Mahasiswa Teknik Informatika',
        'company' => 'Universitas Buana Perjuangan Karawang',
        'description' => 'Aktif dalam berbagai proyek pengembangan perangkat lunak, algoritma, dan desain 3D.'
    ],
    [
        'year' => '2024 - 2025',
        'title' => 'Internship IT Support & 3D Design',
        'company' => 'PT. KALBE MORINAGA INDONESIA',
        'description' => 'Melakukan troubleshoot pada jaringan, hardware, dan software. Serta membuat visualisasi 3D untuk kebutuhan internal perusahaan.'
    ],
];

$projects = [
    [
        'title' => 'Zeven Marketplace',
        'category' => 'website',
        'image' => 'assets/images/website/Zeven.png',
        'description' => 'Website marketplace dengan fitur keranjang belanja dan checkout modern.',
        'tech' => ['PHP', 'HTML', 'CSS', 'JS','MYSQL'],
        'year' => '2026',
        'demo_url' => 'https://zeven.kelompok27.com/',
        'github_url' => '#'
    ],
    [
        'title' => 'Arus',
        'category' => 'mobile',
        'image' => 'assets/images/mobile/Preview_ArusKas.png',
        'description' => 'Aplikasi mobile untuk mencatat dan mengelola keuangan.',
        'tech' => ['Ionic Framework', 'Typescript', 'Android'],
        'year' => '2026',
        'demo_url' => 'https://play.google.com/store/apps/details?id=com.aruskas.myapp',
        'github_url' => 'https://github.com/TheNoir01/ArusKas'
    ],
    [
        'title' => 'Sci-Fi Character Model',
        'category' => 'design3d',
        'image' => 'assets/images/design3d/project1.jpg',
        'description' => 'Pemodelan karakter 3D bertema fiksi ilmiah dengan tekstur PBR.',
        'tech' => ['Blender', 'Substance Painter'],
        'year' => '2024',
        'demo_url' => '#',
        'github_url' => '#'
    ]
];

$gallery3d = [
    ['title' => 'Cyberpunk Car', 'image' => 'assets/images/design3d/render1.jpg'],
    ['title' => 'Cozy Room', 'image' => 'assets/images/design3d/render2.jpg'],
    ['title' => 'Fantasy Weapon', 'image' => 'assets/images/design3d/render3.jpg'],
];

$certificates = [
    [
        'title' => 'Sertifikat Junior Web Developer',
        'issuer' => 'Kementerian Kominfo',
        'year' => '2023',
        'image' => 'assets/images/certificate/cert1.jpg',
        'file' => 'assets/documents/certificate/cert1.pdf'
    ],
    [
        'title' => 'Belajar Dasar Pemrograman Web',
        'issuer' => 'Dicoding',
        'year' => '2022',
        'image' => 'assets/images/certificate/cert2.jpg',
        'file' => 'assets/documents/certificate/cert2.pdf'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($profile['name']) ?> - Portfolio</title>
    <meta name="description" content="Portofolio <?= htmlspecialchars($profile['name']) ?>, <?= htmlspecialchars($profile['role']) ?>.">
    <meta property="og:title" content="<?= htmlspecialchars($profile['name']) ?> - Portfolio">
    <meta property="og:description" content="Portofolio <?= htmlspecialchars($profile['name']) ?>, <?= htmlspecialchars($profile['role']) ?>.">
    <meta property="og:type" content="website">
    
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="#" class="logo"><?= htmlspecialchars($profile['name']) ?>.</a>
            <div class="nav-links">
                <a href="#hero">Beranda</a>
                <a href="#about">Tentang</a>
                <a href="#skills">Skill</a>
                <a href="#projects">Project</a>
                <a href="#gallery3d">3D Gallery</a>
                <a href="#contact">Kontak</a>
                <button id="theme-toggle" class="theme-toggle" aria-label="Toggle Dark Mode">
                    <svg class="sun-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    <svg class="moon-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                </button>
            </div>
            <button class="hamburger" aria-label="Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="hero" class="hero section">
        <div class="container hero-container">
            <div class="hero-content fade-up">
                <p class="greeting">Halo, saya</p>
                <h1 class="name"><?= htmlspecialchars($profile['name']) ?></h1>
                <h2 class="role"><?= htmlspecialchars($profile['role']) ?></h2>
                <p class="desc"><?= htmlspecialchars($profile['description']) ?></p>
                <div class="hero-buttons">
                    <a href="<?= htmlspecialchars($profile['cv']) ?>" class="btn btn-primary" download>Download CV</a>
                    <a href="#projects" class="btn btn-secondary">Lihat Project</a>
                </div>
            </div>
            <div class="hero-image fade-left">
                <div class="image-wrapper">
                    <img src="<?= htmlspecialchars($profile['photo']) ?>" alt="Foto Profil <?= htmlspecialchars($profile['name']) ?>" loading="lazy">
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container">
            <div class="section-title fade-up">
                <h2>Tentang Saya</h2>
                <div class="line"></div>
            </div>
            <div class="about-content fade-up">
                <p><?= nl2br(htmlspecialchars($profile['description'])) ?></p>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills section bg-light">
        <div class="container">
            <div class="section-title fade-up">
                <h2>Keahlian</h2>
                <div class="line"></div>
            </div>
            <div class="skills-grid">
                <?php foreach($skills as $skill): ?>
                <div class="skill-card fade-up">
                    <div class="skill-icon">
                        <img src="<?= htmlspecialchars($skill['icon']) ?>" alt="<?= htmlspecialchars($skill['name']) ?>" loading="lazy" onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'50\' height=\'50\'><rect width=\'50\' height=\'50\' fill=\'%23ccc\'/><text x=\'25\' y=\'25\' dominant-baseline=\'middle\' text-anchor=\'middle\' fill=\'%23333\'>Icon</text></svg>'">
                    </div>
                    <h3><?= htmlspecialchars($skill['name']) ?></h3>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="experience section">
        <div class="container">
            <div class="section-title fade-up">
                <h2>Pengalaman</h2>
                <div class="line"></div>
            </div>
            <div class="timeline">
                <?php foreach($experiences as $exp): ?>
                <div class="timeline-item fade-up">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <span class="timeline-year"><?= htmlspecialchars($exp['year']) ?></span>
                        <h3><?= htmlspecialchars($exp['title']) ?></h3>
                        <h4><?= htmlspecialchars($exp['company']) ?></h4>
                        <p><?= htmlspecialchars($exp['description']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects section bg-light">
        <div class="container">
            <div class="section-title fade-up">
                <h2>Project Saya</h2>
                <div class="line"></div>
            </div>
            
            <div class="project-filter fade-up">
                <button class="filter-btn active" data-filter="all">Semua</button>
                <button class="filter-btn" data-filter="website">Website</button>
                <button class="filter-btn" data-filter="mobile">Mobile App</button>
                <button class="filter-btn" data-filter="design3d">3D Design</button>
            </div>

            <div class="project-grid">
                <?php foreach($projects as $project): ?>
                <div class="project-card fade-up project-item" data-category="<?= htmlspecialchars($project['category']) ?>">
                    <div class="project-img">
                        <img src="<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['title']) ?>" loading="lazy" onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'400\' height=\'300\'><rect width=\'400\' height=\'300\' fill=\'%23ddd\'/><text x=\'200\' y=\'150\' dominant-baseline=\'middle\' text-anchor=\'middle\' fill=\'%23555\'>Thumbnail Project</text></svg>'">
                    </div>
                    <div class="project-info">
                        <span class="project-year"><?= htmlspecialchars($project['year']) ?></span>
                        <h3><?= htmlspecialchars($project['title']) ?></h3>
                        <p><?= htmlspecialchars($project['description']) ?></p>
                        <div class="project-tech">
                            <?php foreach($project['tech'] as $t): ?>
                                <span><?= htmlspecialchars($t) ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="project-links">
                            <?php if($project['category'] === 'website'): ?>
                                <?php if($project['demo_url'] !== '#'): ?>
                                    <a href="<?= htmlspecialchars($project['demo_url']) ?>" target="_blank" class="btn btn-sm btn-primary">Kunjungi</a>
                                <?php endif; ?>
                                <?php if($project['github_url'] !== '#'): ?>
                                    <a href="<?= htmlspecialchars($project['github_url']) ?>" target="_blank" class="btn btn-sm btn-outline">GitHub</a>
                                <?php endif; ?>
                            <?php elseif($project['category'] === 'mobile'): ?>
                                <?php if($project['demo_url'] !== '#'): ?>
                                    <a href="<?= htmlspecialchars($project['demo_url']) ?>" target="_blank" class="btn btn-sm btn-primary">Unduh App</a>
                                <?php endif; ?>
                                <?php if($project['github_url'] !== '#'): ?>
                                    <a href="<?= htmlspecialchars($project['github_url']) ?>" target="_blank" class="btn btn-sm btn-outline">GitHub</a>
                                <?php endif; ?>
                            <?php elseif($project['category'] === 'design3d'): ?>
                                <?php if($project['demo_url'] !== '#'): ?>
                                    <a href="<?= htmlspecialchars($project['demo_url']) ?>" target="_blank" class="btn btn-sm btn-primary">Preview 3D</a>
                                <?php endif; ?>
                                <?php if($project['github_url'] !== '#'): ?>
                                    <a href="<?= htmlspecialchars($project['github_url']) ?>" target="_blank" class="btn btn-sm btn-outline">Portofolio</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 3D Gallery Section -->
    <section id="gallery3d" class="gallery3d section">
        <div class="container">
            <div class="section-title fade-up">
                <h2>Galeri 3D</h2>
                <div class="line"></div>
            </div>
            <div class="gallery-grid">
                <?php foreach($gallery3d as $g3d): ?>
                <div class="gallery-item fade-up" onclick="openModal('<?= htmlspecialchars($g3d['image']) ?>', '<?= htmlspecialchars($g3d['title']) ?>')">
                    <img src="<?= htmlspecialchars($g3d['image']) ?>" alt="<?= htmlspecialchars($g3d['title']) ?>" loading="lazy" onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'300\' height=\'300\'><rect width=\'300\' height=\'300\' fill=\'%23ddd\'/><text x=\'150\' y=\'150\' dominant-baseline=\'middle\' text-anchor=\'middle\' fill=\'%23555\'>3D Render</text></svg>'">
                    <div class="gallery-overlay">
                        <span><?= htmlspecialchars($g3d['title']) ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Certificates Section -->
    <section id="certificates" class="certificates section bg-light">
        <div class="container">
            <div class="section-title fade-up">
                <h2>Sertifikat</h2>
                <div class="line"></div>
            </div>
            <div class="certificate-grid">
                <?php foreach($certificates as $cert): ?>
                <div class="certificate-card fade-up">
                    <div class="cert-img">
                        <img src="<?= htmlspecialchars($cert['image']) ?>" alt="<?= htmlspecialchars($cert['title']) ?>" loading="lazy" onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' width=\'400\' height=\'280\'><rect width=\'400\' height=\'280\' fill=\'%23ddd\'/><text x=\'200\' y=\'140\' dominant-baseline=\'middle\' text-anchor=\'middle\' fill=\'%23555\'>Sertifikat</text></svg>'">
                    </div>
                    <div class="cert-info">
                        <h3><?= htmlspecialchars($cert['title']) ?></h3>
                        <p><?= htmlspecialchars($cert['issuer']) ?> - <?= htmlspecialchars($cert['year']) ?></p>
                        <a href="<?= htmlspecialchars($cert['file']) ?>" target="_blank" class="btn btn-sm btn-primary">Lihat Sertifikat</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container">
            <div class="section-title fade-up">
                <h2>Hubungi Saya</h2>
                <div class="line"></div>
            </div>
            <div class="contact-content fade-up">
                <div class="contact-info">
                    <div class="contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <a href="mailto:<?= htmlspecialchars($profile['email']) ?>"><?= htmlspecialchars($profile['email']) ?></a>
                    </div>
                    <div class="contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <a href="https://wa.me/<?= htmlspecialchars(str_replace('+', '', $profile['whatsapp'])) ?>" target="_blank">WhatsApp</a>
                    </div>
                    <div class="contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                        <a href="<?= htmlspecialchars($profile['github']) ?>" target="_blank">GitHub</a>
                    </div>
                    <div class="contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        <a href="<?= htmlspecialchars($profile['linkedin']) ?>" target="_blank">LinkedIn</a>
                    </div>
                    <div class="contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        <a href="<?= htmlspecialchars($profile['instagram']) ?>" target="_blank">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($profile['name']) ?>. All rights reserved.</p>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" aria-label="Kembali ke atas">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
    </button>

    <!-- Image Modal -->
    <div id="image-modal" class="modal">
        <span class="close-modal">&times;</span>
        <img class="modal-content" id="modal-img">
        <div id="modal-caption"></div>
    </div>

    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>
