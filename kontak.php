<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami | ABU-EDUBOARD</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/dist/css/all.min.css">
</head>
<body class="contact-page">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold title-gradient d-flex align-items-center" href="index.php">
            <img src="img/logo_smti.png" alt="Logo SMTI" width="40" height="40" class="me-2">
            ABU-EDUBOARD
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link text-white" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="profil.php">Profil Pengajar</a></li>
                <li class="nav-item"><a class="nav-link active" href="kontak.php">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-7">
            <h6 class="text-accent-blue text-uppercase fw-bold mb-3 ls-2">Hubungi Saya</h6>
            <h2 class="display-5 fw-bold text-white mb-3">Mari Terhubung & Berdiskusi</h2>
            <p class="text-secondary">Punya pertanyaan atau ingin berkolaborasi? Saya selalu terbuka untuk diskusi mengenai teknologi otomasi dan pendidikan.</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-4 d-flex flex-column">
            <div class="d-flex flex-column gap-3 h-100">
                <div class="mb-2">
                    <h5 class="text-white fw-bold mb-1">Informasi Kontak</h5>
                    <p class="text-secondary small">dan Media Sosial</p>
                    <hr class="border-secondary opacity-25 mt-2">
                </div>
                
                <a href="mailto:sufyanabu01@gmail.com" class="contact-card-v2">
                    <div class="icon-logo-container">
                        <img src="img/logo_gmail.png" alt="Gmail" class="logo-png">
                    </div>
                    <div>
                        <span class="d-block text-accent-blue fw-bold small">EMAIL</span>
                        <span class="text-white">sufyanabu01@gmail.com</span>
                    </div>
                </a>

                <a href="https://instagram.com/sastra.pemesinan" target="_blank" class="contact-card-v2">
                    <div class="icon-logo-container">
                        <img src="img/logo_instagram.png" alt="Instagram" class="logo-png">
                    </div>
                    <div>
                        <span class="d-block text-accent-blue fw-bold small">INSTAGRAM</span>
                        <span class="text-white">@sastra.pemesinan</span>
                    </div>
                </a>

                <a href="http://googleusercontent.com/maps.google.com/4" target="_blank" class="contact-card-v2">
                    <div class="icon-logo-container">
                        <img src="img/logo_maps.png" alt="Google Maps" class="logo-png">
                    </div>
                    <div>
                        <span class="d-block text-accent-blue fw-bold small">LOKASI KERJA</span>
                        <span class="text-white">SMK SMTI Pontianak</span>
                    </div>
                </a>

                <div class="wa-premium-card p-4 rounded-4 mt-auto">
                    <h6 class="text-white fw-bold mb-3">Respon Cepat (WhatsApp)</h6>
                    <a href="https://wa.me/6281215035317" target="_blank" class="btn btn-wa-neon w-100 py-3">
                        <img src="img/logo_wa.png" alt="WA" width="40" class="me-2"> Chat Sekarang
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-8">
            <div class="glass-card p-4 p-md-5 border-0 h-100">
                <h3 class="text-white fw-bold mb-4">Kirim Pesan</h3>
                <form action="#" method="POST">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="text-secondary small mb-2">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control-modern" placeholder="Masukkan nama Anda..." required>
                        </div>
                        <div class="col-md-6">
                            <label class="text-secondary small mb-2">Alamat Email</label>
                            <input type="email" name="email" class="form-control-modern" placeholder="email@contoh.com" required>
                        </div>
                        <div class="col-12">
                            <label class="text-secondary small mb-2">Pesan Anda</label>
                            <textarea name="pesan" class="form-control-modern" rows="5" placeholder="Tuliskan pesan atau pertanyaan Anda di sini..." required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-glow-premium w-100 py-3 text-uppercase fw-bold mt-2">
                                Kirim Pesan <i class="fas fa-paper-plane ms-2"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="py-4 mt-5 text-center">
    <p class="text-muted small">© Abu Sufyan 2026 - SMK SMTI Pontianak</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    });
</script>
</body>
</html>