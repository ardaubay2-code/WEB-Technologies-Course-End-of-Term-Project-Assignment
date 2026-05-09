<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap | Arda Ubay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top custom-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html">ARDA UBAY</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Ana Sayfa</a></li>
                    <li class="nav-item"><a class="nav-link" href="ozgecmis.html">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehrim.html">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="takimimiz.html">Takımımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link btn-login active" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-custom py-5">
        <div class="row justify-content-center mt-4">
            <div class="col-md-5">
                <div class="card shadow-lg border-0">
                    <div class="card-header text-center text-white py-3 login-header"></div>
                        <h4 class="mb-0">Öğrenci Girişi</h4>
                    </div>
                    <div class="card-body p-4">
                        
                        <?php
                        // Hata mesajlarını yakalama
                        if(isset($_GET['durum'])) {
                            if($_GET['durum'] == "bos") {
                                echo '<div class="alert alert-warning">Lütfen tüm alanları doldurun.</div>';
                            } elseif($_GET['durum'] == "hata") {
                                echo '<div class="alert alert-danger">Kullanıcı adı veya şifre hatalı!</div>';
                            }
                        }
                        ?>

                        <form action="login_islem.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">E-Posta Adresi</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="@sakarya.edu.tr" required>
                            </div>
                            <div class="mb-4">
                                <label for="sifre" class="form-label fw-bold">Şifre (Öğrenci No)</label>
                                <input type="password" class="form-control" id="sifre" name="sifre" placeholder="Öğrenci numaranız" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Giriş Yap</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>