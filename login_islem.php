<?php
// Sayfa yüklendiğinde POST işlemi var mı diye bakıyoruz
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Formdan gelen verileri alıyoruz
    $email = trim($_POST['email']);
    $sifre = trim($_POST['sifre']);

    // SAÜ Öğrenci Numarası Tanımlaması (Senin numaran)
    $ogrenci_no = "b251210027";
    $dogru_email = $ogrenci_no . "@sakarya.edu.tr";

    // Boş alan kontrolü
    if (empty($email) || empty($sifre)) {
        header("Location: login.php?durum=bos");
        exit;
    }

    // Bilgiler doğru mu?
    if ($email === $dogru_email && $sifre === $ogrenci_no) {
        // Doğruysa Başarı Ekranını Bas
        echo "<!DOCTYPE html><html lang='tr'><head><meta charset='UTF-8'><title>Başarılı Giriş</title>";
        echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'></head>";
        echo "<body class='bg-success text-white d-flex align-items-center justify-content-center' style='height: 100vh;'>";
        echo "<div class='text-center'><h1>Hoşgeldiniz " . htmlspecialchars($ogrenci_no) . "</h1>";
        echo "<a href='index.html' class='btn btn-light mt-3'>Ana Sayfaya Dön</a></div>";
        echo "</body></html>";
    } else {
        // Hatalıysa login.php'ye fırlat
        header("Location: login.php?durum=hata");
        exit;
    }
} else {
    // Direkt linkten girmeye çalışırsa login.php'ye fırlat
    header("Location: login.php");
    exit;
}
?>