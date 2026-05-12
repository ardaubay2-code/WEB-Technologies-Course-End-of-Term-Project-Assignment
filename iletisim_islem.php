<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelen Mesajlar | Arda Ubay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light islem-konteyner">
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-lg">
                    
                    <div class="card-header islem-tablo-baslik text-primary text-center py-3">
                        <h3 class="mb-0">📬 Form Başarıyla İletildi</h3>
                    </div>
                    
                    <div class="card-body p-4">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Tablo başlangıcı
                            echo "<table class='table table-hover table-bordered mt-3'>";
                            echo "<tbody>";
                            echo "<tr><th class='w-25 text-primary'>Ad:</th><td>" . htmlspecialchars($_POST['ad'] ?? '') . "</td></tr>";
                            echo "<tr><th class='text-primary'>Soyad:</th><td>" . htmlspecialchars($_POST['soyad'] ?? '') . "</td></tr>";
                            echo "<tr><th class='text-primary'>E-Posta:</th><td>" . htmlspecialchars($_POST['email'] ?? '') . "</td></tr>";
                            echo "<tr><th class='text-primary'>Telefon:</th><td>" . htmlspecialchars($_POST['telefon'] ?? '') . "</td></tr>";
                            echo "<tr><th class='text-primary'>Cinsiyet:</th><td>" . htmlspecialchars($_POST['cinsiyet'] ?? '') . "</td></tr>";
                            echo "<tr><th class='text-primary'>Konu:</th><td>" . htmlspecialchars($_POST['konu'] ?? '') . "</td></tr>";
                            echo "<tr><th class='text-primary'>Mesaj:</th><td>" . nl2br(htmlspecialchars($_POST['mesaj'] ?? '')) . "</td></tr>";
                            echo "</tbody>";
                            echo "</table>";
                        } else {
                            // Eğer sayfaya direk URL'den girilmeye çalışılırsa
                            echo "<div class='alert alert-danger text-center'>Bu sayfaya doğrudan erişim izni yok. Lütfen formu doldurarak gelin.</div>";
                        }
                        ?>
                        
                        <div class="text-center mt-4">
                            <a href="iletisim.html" class="btn btn-outline-danger px-4 rounded-pill">Ana Sayfaya Dön</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>