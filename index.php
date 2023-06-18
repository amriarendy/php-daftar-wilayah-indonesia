<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Daftar Wilayah Nusantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-4 mb-5 border-bottom">

                <div class="header fixed-top" id="header">
                    <nav class="navbar navbar-expand-lg bg-light">
                        <div class="container-sm">
                            <a class="navbar-brand" href="https://github.com/amriarendy">
                                <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" alt="logo" rel="icon" width="30px">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Tentang</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Kategori
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Native</a></li>
                                            <li><a class="dropdown-item" href="#">Laravel</a></li>
                                            <li><a class="dropdown-item" href="#">Codeigniter 3</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Tambah Master</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-outline-success mr-3">Login</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <main>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <a href="#" class="btn btn-primary"> Tambah Data</a>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tutorial</th>
                                        <th scope="col">Kategori Tutorial</th>
                                        <th scope="col">Konten Tutorial</th>
                                        <th scope="col-1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            Development By <a href="https://github.com/amriarendy">amriarendy</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">

            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>