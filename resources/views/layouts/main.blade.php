<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <title>TPQ Al-Hikmah</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="home">TPQ Al-Hikmah</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <form class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about">About</a>
                            </li>
                        </ul>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container mt-4">
                @yield('container')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

        <!-- Footer -->
        <footer class="page-footer font-small blue pt-4">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">
        
            <!-- Grid row -->
            <div class="row">
        
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
        
                <!-- Content -->
                <h5 class="text-uppercase">Footer Content</h5>
                <p>Here you can use rows and columns to organize your footer content.</p>
        
                </div>
                <!-- Grid column -->
        
                <hr class="clearfix w-100 d-md-none pb-3">
        
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
        
                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>
        
                <ul class="list-unstyled">
                    <li>
                    <a href="#!">Link 1</a>
                    </li>
                    <li>
                    <a href="#!">Link 2</a>
                    </li>
                    <li>
                    <a href="#!">Link 3</a>
                    </li>
                    <li>
                    <a href="#!">Link 4</a>
                    </li>
                </ul>
        
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
        
                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>
        
                <ul class="list-unstyled">
                    <li>
                    <a href="#!">Link 1</a>
                    </li>
                    <li>
                    <a href="#!">Link 2</a>
                    </li>
                    <li>
                    <a href="#!">Link 3</a>
                    </li>
                    <li>
                    <a href="#!">Link 4</a>
                    </li>
                </ul>
        
                </div>
                <!-- Grid column -->
        
            </div>
            <!-- Grid row -->
        
            </div>
            <!-- Footer Links -->
        
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="home"> TPQ Al-Hikmah</a>
            </div>
            <!-- Copyright -->
        
        </footer>
        <!-- Footer -->

    </body>
</html>