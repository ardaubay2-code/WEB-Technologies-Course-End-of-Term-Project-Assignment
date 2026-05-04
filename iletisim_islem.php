<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Gelen Mesajlar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light mt-5">
    <div class="container">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h3 class="mb-0">Form Başarıyla İletildi</h3>
            </div>
            <div class="card-body">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo "<table class='table table-bordered'>";
                    echo "<tr><th>Ad:</th><td>" . htmlspecialchars($_POST['ad']) . "</td></tr>";
                    echo "<tr><th>Soyad:</th><td>" . htmlspecialchars($_POST['soyad']) . "</td></tr>";
                    echo "<tr><th>E-Posta:</th><td>" . htmlspecialchars($_POST['email']) . "</td></tr>";
                    echo "<tr><th>Telefon:</th><td>" . htmlspecialchars($_POST['telefon']) . "</td></tr>";
                    echo "<tr><th>Cinsiyet:</th><td>" . htmlspecialchars($_POST['cinsiyet']) . "</td></tr>";
                    echo "<tr><th>Konu:</th><td>" . htmlspecialchars($_POST['konu']) . "</td></tr>";
                    echo "<tr><th>Mesaj:</th><td>" . nl2br(htmlspecialchars($_POST['mesaj'])) . "</td></tr>";
                    echo "</table>";
                } else {
                    echo "<p class='text-danger'>Bu sayfaya doğrudan erişim izni yok.</p>";
                }
                ?>
                <a href="iletisim.html" class="btn btn-primary mt-3">Geri Dön</a>
            </div>
        </div>
    </div>
</body>
</html>