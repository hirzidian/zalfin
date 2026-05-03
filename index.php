<?php
$file = "counter.txt";

if (!file_exists($file)) {
    file_put_contents($file, "0");
}

$count = (int) file_get_contents($file);
$count++;
file_put_contents($file, $count);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PB MAROON | Komunitas Bulu Tangkis Indonesia</title>

    <!-- CSS Utama -->
    <link rel="stylesheet" href="style.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Rajdhani:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <!-- Tombol WhatsApp Mengambang -->
    <a href="https://wa.me/628123456789" class="wa-float" target="_blank" aria-label="Hubungi WhatsApp PB Maroon">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- Header dan Navigasi -->
    <header class="site-header">
        <input type="checkbox" id="menu-check">

        <nav class="nav-container">
            <div class="logo">
                <h1>PB <span>MAROON</span></h1>
            </div>

            <label for="menu-check" class="menu-toggle" aria-label="Buka menu navigasi">
                <i class="fa-solid fa-bars"></i>
            </label>

            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>

                <li class="nav-item">
                    <a href="#tentang">Profil <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#sejarah">Sejarah</a></li>
                        <li><a href="#visi">Visi & Misi</a></li>
                        <li><a href="#struktur">Struktur</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#program">Program <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="#pelatihan">Pelatihan</a></li>
                        <li><a href="#beasiswa">Beasiswa</a></li>
                    </ul>
                </li>

                <li><a href="#atlet">Atlet</a></li>
                <li><a href="#galeri">Galeri</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <video id="heroVideo" autoplay loop muted playsinline class="hero-video" poster="https://images.unsplash.com/photo-1626224583764-f87db24ac4ea?auto=format&fit=crop&q=80&w=1200">
            <source src="asset/bg.mp4" type="video/mp4">
            <source src="https://assets.mixkit.co/videos/preview/mixkit-man-playing-badminton-in-a-court-2022-large.mp4" type="video/mp4">
        </video>

        <div class="hero-overlay"></div>

        <!-- Tombol Mute/Unmute -->
        <div class="mute-container">
            <button class="mute-btn" id="muteButton" aria-label="Mute atau unmute video">
                <i class="fa-solid fa-volume-xmark" id="muteIcon"></i>
            </button>
        </div>

        <div class="hero-content">
            <h2>Selamat Datang di PB MAROON</h2>
            <p>Mencetak juara dunia melalui dedikasi dan disiplin tinggi.</p>

            <div class="visitor-box">
                <i class="fa-solid fa-users-viewfinder"></i>
                <span>Pengunjung: <?php echo str_pad($count, 6, "0", STR_PAD_LEFT); ?></span>
            </div>
        </div>
    </section>

    <!-- Tentang -->
    <section class="container" id="tentang">
        <div class="home-description">
            <h2 class="section-title">Komunitas Bulu Tangkis Modern</h2>

            <div class="desc-grid">
                <div class="desc-text">
                    <p>
                        PB MAROON adalah wadah profesional bagi pecinta dan atlet bulu tangkis di Indonesia.
                        Kami hadir untuk memberikan fasilitas pelatihan terbaik, informasi turnamen terkini,
                        dan pembinaan atlet muda berbakat.
                    </p>

                    <p>
                        Website ini dirancang sebagai pusat informasi komunitas, mulai dari sejarah,
                        prestasi atlet, hingga jadwal pelatihan intensif untuk semua kalangan.
                    </p>
                </div>

                <div class="desc-stats">
                    <div class="stat-card">
                        <h3>100+</h3>
                        <p>Atlet Aktif</p>
                    </div>

                    <div class="stat-card">
                        <h3>25+</h3>
                        <p>Pelatih Lisensi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Berita -->
    <section class="container bg-light" id="galeri">
        <h2 class="section-title">Berita & Prestasi Terbaru</h2>

        <div class="css-slider">
            <input type="radio" name="gallery-slider" id="g1" checked>
            <input type="radio" name="gallery-slider" id="g2">
            <input type="radio" name="gallery-slider" id="g3">

            <div class="g-slides">
                <article class="g-slide">
                    <div class="g-card">
                        <img src="https://images.unsplash.com/photo-1521537634581-0dced2fee2ef?auto=format&fit=crop&q=80&w=800" alt="Atlet juara bulu tangkis">
                        <div class="g-info">
                            <h3>Kevin Sanjaya: Juara Dunia 2024</h3>
                            <p>Keberhasilan Kevin mengukuhkan posisi Indonesia di kancah internasional.</p>
                        </div>
                    </div>
                </article>

                <article class="g-slide">
                    <div class="g-card">
                        <img src="https://images.unsplash.com/photo-1599586120429-48281b6f0ece?auto=format&fit=crop&q=80&w=800" alt="Berita ranking BWF">
                        <div class="g-info">
                            <h3>Ranking BWF Terbaru</h3>
                            <p>Update klasemen atlet Indonesia di peringkat 10 besar dunia bulan ini.</p>
                        </div>
                    </div>
                </article>

                <article class="g-slide">
                    <div class="g-card">
                        <img src="https://images.unsplash.com/photo-1626224583764-f87db24ac4ea?auto=format&fit=crop&q=80&w=800" alt="Latihan bulu tangkis">
                        <div class="g-info">
                            <h3>Open Recruitment Atlet Muda</h3>
                            <p>Daftarkan diri Anda untuk menjadi bagian dari generasi emas PB MAROON.</p>
                        </div>
                    </div>
                </article>
            </div>

            <div class="g-nav">
                <label for="g1"></label>
                <label for="g2"></label>
                <label for="g3"></label>
            </div>
        </div>
    </section>

    <!-- Video Trailer -->
    <section class="container" id="video-trailer">
        <h2 class="section-title">Trailer Final Kejuaraan Dunia</h2>

        <div class="css-slider video-slider">
            <input type="radio" name="video-slider" id="v1" checked>
            <input type="radio" name="video-slider" id="v2">
            <input type="radio" name="video-slider" id="v3">

            <div class="v-slides">
                <div class="v-slide">
                    <iframe src="asset/1.mp4" title="Video 1" allowfullscreen></iframe>
                </div>

                <div class="v-slide">
                    <iframe src="asset/2.mp4" title="Video 2" allowfullscreen></iframe>
                </div>

                <div class="v-slide">
                    <iframe src="asset/3.mp4" title="Video 3" allowfullscreen></iframe>
                </div>
            </div>

            <div class="v-nav">
                <label for="v1">Video 1</label>
                <label for="v2">Video 2</label>
                <label for="v3">Video 3</label>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-grid">
            <div class="footer-col">
                <h3>PB MAROON</h3>
                <p>Membangun masa depan bulu tangkis Indonesia dengan sportivitas dan profesionalisme.</p>

                <div class="social-icons">
                    <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://youtube.com" target="_blank" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://tiktok.com" target="_blank" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h3>Referensi Terkait</h3>
                <ul class="footer-links">
                    <li><a href="https://badmintonindonesia.org" target="_blank">PBSI Nasional</a></li>
                    <li><a href="https://bwfbadminton.com" target="_blank">BWF World Federation</a></li>
                    <li><a href="https://pbdjarum.org" target="_blank">PB Djarum Foundation</a></li>
                    <li><a href="https://flypower.id" target="_blank">Flypower Indonesia</a></li>
                    <li><a href="https://yonex.com" target="_blank">Yonex Badminton</a></li>
                    <li><a href="https://victorsport.com" target="_blank">Victor Sport</a></li>
                </ul>
            </div>

            <div class="footer-col" id="kontak">
                <h3>Kontak Kami</h3>
                <ul class="footer-links contact-list">
                    <li><i class="fa-solid fa-location-dot"></i> Jl. Olahraga Kemenangan No. 88, Jakarta Pusat</li>
                    <li><i class="fa-solid fa-phone-volume"></i> +62 21 888 9999</li>
                    <li><i class="fa-solid fa-envelope-open-text"></i> admin@pbmaroon.id</li>
                    <li><i class="fa-solid fa-clock"></i> Senin - Sabtu: 08.00 - 20.00</li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            &copy; 2024 PB MAROON INDONESIA. Developed for Academic Project | SI Semester 2
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>