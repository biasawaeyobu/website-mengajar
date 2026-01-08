<?php
include '../koneksi.php';

$sql = "SELECT * FROM jurnal WHERE kelas='XI TOI' ORDER BY tanggal DESC";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelas XI TOI</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Kelas XI TOI</h1>
        <nav>
            <a href="../index.php">Beranda</a>
        </nav>
    </header>
    <main>
        <h2>Tambah Jurnal</h2>
        <form action="" method="post">
            <label>Mata Pelajaran:</label><br>
            <input type="text" name="mata_pelajaran" required><br><br>

            <label>Tanggal:</label><br>
            <input type="date" name="tanggal" required><br><br>

            <label>Materi:</label><br>
            <textarea name="materi" rows="3" required></textarea><br><br>

            <label>Kegiatan:</label><br>
            <textarea name="kegiatan" rows="3" required></textarea><br><br>

            <label>Evaluasi:</label><br>
            <textarea name="evaluasi" rows="3" required></textarea><br><br>

            <input type="submit" name="submit" value="Simpan Jurnal">
        </form>

        <h2>Daftar Jurnal Kelas XI</h2>
        <table>
            <tr>
                <th>Mata Pelajaran</th>
                <th>Tanggal</th>
                <th>Materi</th>
                <th>Kegiatan</th>
                <th>Evaluasi</th>
            </tr>
            <?php
            if (isset($_POST['submit'])) {
                $mata_pelajaran = $_POST['mata_pelajaran'];
                $tanggal = $_POST['tanggal'];
                $materi = $_POST['materi'];
                $kegiatan = $_POST['kegiatan'];
                $evaluasi = $_POST['evaluasi'];

                $insert = "INSERT INTO jurnal (kelas, mata_pelajaran, tanggal, materi, kegiatan, evaluasi) 
                           VALUES ('XI TOI', '$mata_pelajaran', '$tanggal', '$materi', '$kegiatan', '$evaluasi')";
                mysqli_query($koneksi, $insert);
                header("Location: kelasXI.php");
            }

            while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $row['mata_pelajaran']; ?></td>
                    <td><?= $row['tanggal']; ?></td>
                    <td><?= $row['materi']; ?></td>
                    <td><?= $row['kegiatan']; ?></td>
                    <td><?= $row['evaluasi']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </main>
    <footer>
        <p>&copy; 2026 - Jurnal Mengajar</p>
    </footer>
</body>
</html>
