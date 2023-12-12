<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="/public/css/bootstrap.css" rel="stylesheet">
        <link href="/public/css/main.css" rel="stylesheet">
        <link href="/public/css/errors.css" rel="stylesheet">
        <script src="/public/js/jquery.js"></script>
        <script src="/public/js/form.js"></script>
        <script src="/public/js/popper.js"></script>
        <script src="/public/js/bootstrap.js"></script>
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Магазин Ігор</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/products/show">Товари</a>
                        </li>
                        <?php if (isset($_SESSION['account']['id'])): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/account/profile">Профіль</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/account/logout">Вихід</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/account/register">Реєстрація</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/account/login">Вхід</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <?php echo $content; ?>
    </body>
</html>