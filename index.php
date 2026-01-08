<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Admin | Dark Edition</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="home-page">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold title-gradient d-flex align-items-center" href="index.php">
            <img src="img/logo_smti.png" alt="Logo SMTI" width="40" height="40" class="d-inline-block align-top me-2">
            ABU-EDUBOARD
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="profil.php">Profil Pengajar</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="kontak.php">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="row mb-5 justify-content-center text-center">
        <div class="col-md-8">
            <h1 class="display-4 title-gradient mb-3 text-uppercase">Administrasi Mengajar</h1>
            <p class="text-secondary">Sistem manajemen kelas digital terpadu untuk efisiensi mengajar.</p>
        </div>
    </div>

    <div class="row g-4 justify-content-center">
        <div class="col-md-5">
            <div class="card glass-card h-100 p-4 border-0">
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <div>
                        <h2 class="fw-bold mb-1 text-white">Kelas X</h2>
                        <p class="text-secondary small m-0 text-uppercase">Teknik Elektronika Dasar</p>
                    </div>
                    <span class="badge rounded-pill badge-neon">3 Mapel</span>
                </div>
                <div class="mb-4">
                    <span class="badge badge-neon me-1">KEAP</span>
                    <span class="badge badge-neon me-1">MELI</span>
                    <span class="badge badge-neon">DTD</span>
                </div>
                <div class="mt-auto">
                    <a href="kelasX/index.php" class="btn btn-glow w-100 text-uppercase">Buka Dashboard</a>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card glass-card h-100 p-4 border-0">
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <div>
                        <h2 class="fw-bold mb-1 text-white">Kelas XI</h2>
                        <p class="text-secondary small m-0 text-uppercase">Sistem Kendali Elektronika</p>
                    </div>
                    <span class="badge rounded-pill badge-neon" style="color: #8b5cf6; border-color: #8b5cf6;">1 Mapel</span>
                </div>
                <div class="mb-4">
                    <span class="badge badge-neon" style="color: #8b5cf6; border-color: #8b5cf6;">SKEL</span>
                </div>
                <div class="mt-auto">
                    <a href="kelasXI/index.php" class="btn btn-glow w-100 text-uppercase" style="background: linear-gradient(135deg, #8b5cf6, #6d28d9);">Buka Dashboard</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 text-white">
            <div class="card glass-card p-3 text-center border-0" style="background: rgba(255,255,255,0.03)">
                <div class="row">
                    <div class="col-4 border-end border-secondary">
                        <h5 class="mb-0 fw-bold">Jurnal</h5>
                        <small class="text-secondary">Update hari ini</small>
                    </div>
                    <div class="col-4 border-end border-secondary">
                        <h5 class="mb-0 fw-bold">Jobsheet</h5>
                        <small class="text-secondary">4 File Aktif</small>
                    </div>
                    <div class="col-4">
                        <h5 class="mb-0 fw-bold">Jadwal</h5>
                        <small class="text-secondary">Lihat Kalender</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="py-4 mt-5 border-top border-secondary opacity-50">
    <div class="container text-center">
        <p class="text-secondary mb-0">&copy; Abu Sufyan 2026 - SMK SMTI Pontianak</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>