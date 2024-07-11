<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']?></title>
    <link rel="stylesheet" href="http://localhost/praktekmvc1/public/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom border-black">
    <div class="container-fluid ms-4 mt-2">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav d-flex justify-content-between">
                <div class="d-flex">
                    <a class="nav-link" href="<?= URLUTAMA; ?>">Home</a>
                    <a class="nav-link" href="<?= URLUTAMA; ?>/buku">Buku</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Contact Us</a>
                </div>
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>

