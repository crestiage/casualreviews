<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- <title>@php{{//$data["config"]["siteTitle"]}} @endphp</title> -->
        <title></title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">

        <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="resources/css/style.css"/>

        <script src="resources/js/jquery-3.4.1.min.js"></script>
        <script src="resources/js/bootstrap.min.js"></script>

        <script src="resources/js/font-awesome.js" crossorigin="anonymous"></script>

    </head>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="resources/img/site/logo.png" height="55px" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
        </div>
        <span class="navbar-text">
            <a href="#">Log in</a> / <a href="#">Sign up</a>
        </span>
    </nav>

    <body>
        <div class="container-lg">    
            <div class="row" style="margin-top: 20px;">
                <div class="col-3">
                    <div class="row margin-bot-10">
                        <div class="col">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search Tags" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="row margin-bot-10">
                        <div class="col">
                            <h5>Popular Tags</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Technology</li>
                                <li class="list-group-item">Gaming</li>
                                <li class="list-group-item">Food</li>
                                <li class="list-group-item">Kingston</li>
                                <li class="list-group-item">Grammar</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-7">
                    <!-- Content -->
                    @yield("content")
                </div>
                <div class="col-2">
                    <div class="row margin-bot-10">
                        <div class="col bg-casual-reviews" style="height: 700px;">
                            ADS
                        </div>
                    </div>
                    <div class="row margin-bot-10">
                        <div class="col">
                            <a href="#">
                                <img src="resources/img/site/paypal-donate-button.png" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </body>
</html>