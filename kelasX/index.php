<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTD - Kelas X | ABU-EDUBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="website-mengajar/css/style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/dist/css/all.min.css">
</head>
<body class="home-page">

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold title-gradient d-flex align-items-center" href="website-mengajar/index.php">
            <img src="website-mengajar/img/logo_smti.png" alt="Logo" width="40" height="40" class="me-2">
            ABU-EDUBOARD
        </a>
        <div class="ms-auto">
            <a href="website-mengajar/index.php" class="btn btn-outline-light btn-sm rounded-pill px-3">
                <i class="fas fa-home me-1"></i> Utama
            </a>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="row mb-5">
        <div class="col-md-12">
            <h6 class="text-accent-blue text-uppercase fw-bold ls-2">Mata Pelajaran Kelas X</h6>
            <h1 class="display-5 fw-bold text-white">Dasar Teknik Digital (DTD)</h1>
            <p class="text-secondary">Kelola administrasi mengajar, materi, dan evaluasi siswa dalam satu tempat.</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="card glass-card p-4 text-center h-100">
                <div class="icon-box-new mx-auto mb-3" style="background: linear-gradient(135deg, #10b981, #059669);">
                    <i class="fas fa-book"></i>
                </div>
                <h5 class="text-white fw-bold">Jurnal</h5>
                <a href="jurnal.php" class="btn btn-sm btn-outline-light mt-2 rounded-pill">Buka Jurnal</a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card glass-card p-4 text-center h-100">
                <div class="icon-box-new mx-auto mb-3">
                    <i class="fas fa-file-powerpoint"></i>
                </div>
                <h5 class="text-white fw-bold">Materi</h5>
                <a href="materi.php" class="btn btn-sm btn-outline-light mt-2 rounded-pill">Lihat Modul</a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card glass-card p-4 text-center h-100">
                <div class="icon-box-new mx-auto mb-3" style="background: linear-gradient(135deg, #facc15, #eab308);">
                    <i class="fas fa-tools"></i>
                </div>
                <h5 class="text-white fw-bold">Jobsheet</h5>
                <a href="jobsheet.php" class="btn btn-sm btn-outline-light mt-2 rounded-pill">Unduh PDF</a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card glass-card p-4 text-center h-100">
                <div class="icon-box-new mx-auto mb-3" style="background: linear-gradient(135deg, #f43f5e, #e11d48);">
                    <i class="fas fa-edit"></i>
                </div>
                <h5 class="text-white fw-bold">UAS / Nilai</h5>
                <a href="uas.php" class="btn btn-sm btn-outline-light mt-2 rounded-pill">Input Nilai</a>
            </div>
        </div>
    </div>
</div>

<footer class="py-4 mt-5 text-center text-muted small border-top border-secondary border-opacity-25">
    &copy; Abu Sufyan 2026 - Administrasi Mengajar DTD
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>