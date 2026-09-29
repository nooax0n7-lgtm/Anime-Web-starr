<?php
require_once "config/database.php";

$stmt = $pdo->query("SELECT * FROM anime ORDER BY rating DESC");
$animeList = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AnimeHub | عالم الأنمي</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

    <div class="container">

        <a class="brand" href="index.php">
            Anime<span>Hub</span>
        </a>

        <button class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">
                        الرئيسية
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="anime-list.php">
                        الأنمي
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        التصنيفات
                    </a>
                </li>

            </ul>

            <a href="login.php"
               class="btn btn-outline-light">
                تسجيل الدخول
            </a>

        </div>

    </div>

</nav>


<!-- HERO -->

<section class="hero">

    <div class="hero-bg"></div>

    <div class="container hero-content">

        <span class="badge-glow">
            ✦ عالم الأنمي بين يديك
        </span>

        <h1>
            AnimeHub
        </h1>

        <p>
            اكتشف عالماً مليئاً بالمغامرات،
            الشخصيات الأسطورية والقصص التي لا تُنسى.
        </p>

        <div class="d-flex gap-3">

            <a href="anime-list.php"
               class="btn btn-glow">
                ▶ استكشف الأنمي
            </a>

            <a href="#anime"
               class="btn btn-outline-light">
                مشاهدة الأنميات
            </a>

        </div>

    </div>

</section>


<!-- ANIME -->

<section id="anime" class="container pb-5">

    <h2 class="section-title">
        🔥 الأعلى تقييماً
    </h2>

    <div class="row g-4">

        <?php foreach ($animeList as $anime): ?>

            <div class="col-6 col-md-4 col-lg-3 reveal">

                <div class="card-anime">

                    <div class="anime-placeholder">

                        <span>
                            <?= htmlspecialchars($anime['title']) ?>
                        </span>

                    </div>

                    <div class="card-body">

                        <h5>
                            <?= htmlspecialchars($anime['title']) ?>
                        </h5>

                        <div class="rating">
                            ★ <?= htmlspecialchars($anime['rating']) ?>
                        </div>

                        <small class="muted">
                            <?= htmlspecialchars($anime['release_year']) ?>
                            ·
                            <?= htmlspecialchars($anime['status']) ?>
                        </small>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</section>


<footer class="text-center py-4 muted">

    AnimeHub © 2026

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>
