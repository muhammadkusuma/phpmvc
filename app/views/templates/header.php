<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-md">
            <a class="navbar-brand d-flex d-sm-flex d-xl-flex justify-content-start align-items-center align-items-sm-center align-items-xl-center" href="#">

                <p class="ms-2 mt-2">PHP MVC</p>
            </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="<?= BASEURL?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASEURL?>mahasiswa">Mahasiswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= BASEURL?>about">About</a></li>
                    
                </ul>
        
            </div>
        </div>
    </nav>