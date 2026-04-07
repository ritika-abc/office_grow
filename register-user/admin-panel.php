<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
.box_shape{
    height: 70px;
    width: 70px;
    background-color: #fea103;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 3px solid white;
}
.totle_1{
    background: rgb(255,198,101);
background: radial-gradient(circle, rgba(255,198,101,1) 0%, rgba(254,161,3,1) 100%);
    border: 1px solid  #fea103;
}
.totle_2{
    border: 1px solid  #45a849;
    background: rgb(69,168,73);
background: radial-gradient(circle, rgba(69,168,73,1) 0%, rgba(73,238,80,1) 100%);
}
.totle_3{
    border: 1px solid #02b6d3;
    background: rgb(131,238,255);
background: radial-gradient(circle, rgba(131,238,255,1) 0%, rgba(2,182,211,1) 100%);
}
    </style>
</head>

<body class="bg-light">

    <section>
        <div class=" ">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> Dashboard</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <!--  -->

        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <div class="col-lg-3">

                    <div class="h-100 border bg-white">
                        <ul class="w-100  px-3 navbar-nav">
                            <li class="nav-item"><a href="" class="nav-link">My Profile</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Product Table</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Add Products</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Buyleads</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Refund Buylead</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Access Buyleads</a></li>
                        </ul>

                    </div>
                </div>
                <!-- sidebar  end here-->
                <div class="col-lg-9">
                    <!-- contact form -->
                    <div class="h-100 border px-3 bg-white py-4">
                        <h5>My Dashboard</h5>
                        <!-- Accessed Buyleads || Product || Buyleads -->
                        <div class="main_totle_box">
                            <div class="row">
                                <div class="col-lg-4 mt-5">
                                    <div class=" shadow-lg p-3 h-100  position-relative totle_1">
                                        <div class="">
                                            <p class="p-0 m-0">Accessed Buyleads</p>
                                            <h5>675</h5>
                                          
                                        </div>
                                        <div class="box_shape position-absolute top-0   translate-middle" style="left: 85%;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-5">
                                    <div class="totle_2 shadow-lg p-3 h-100  position-relative">
                                        <div class="">
                                            <p class="p-0 m-0">Total Product</p>
                                            <h5>675</h5>
                                         
                                        </div>
                                        <div class="box_shape  position-absolute top-0   translate-middle"  style="left: 85%;background:#45a849"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-5">
                                    <div class="totle_3 shadow-lg p-3 h-100  position-relative">
                                        <div class="">
                                            <p class="p-0 m-0">Total Buyleads</p>
                                            <h5   >675</h5>
                                          
                                         
                                        </div>
                                        <div class="box_shape position-absolute top-0   translate-middle" style="left: 85%;background:#02b6d3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>