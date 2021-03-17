<?php 
  session_start();
  include 'class/database.php';
include 'class/sanpham.php';
include 'libs/funcs.php';
$spdt = new sanpham();
$mang = $spdt->_list();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Cửa Hàng</title>
    <!-- <link rel="stylesheet" href="css/Homestyle.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Indexstyle.css">
    <link rel="stylesheet" href="css/view.css">
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <!--Danh mục sản phẩm-->
            <header class="fixed-top">
                <!-- <ul class="nav  nav-justified">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success " href="#">Multi Vitamin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success " href="#">Astaxathin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success " href="#">Omega-3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success " href="#">Whey Protein</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success " href="#">Hỗ Trợ Tập Luyện</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  disabled btn btn-outline-success" href="#">Sắp ra mắt</a>
                    </li>
                </ul> -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light main_nav">
                    <a class="navbar-brand" href="#">Trang Chủ</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Danh Mục Sản Phẩm
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Multi Vitamin</a>
                                    <a class="dropdown-item" href="#">Astaxathin</a>
                                    <a class="dropdown-item" href="#">Whey Protein</a>
                                    <a class="dropdown-item" href="#">Omega-3</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="id=">Hỗ Trợ Tập Luyện</a>
                                    <a class="dropdown-item  disabled" href="#" tabindex="-1" aria-disabled="true">Sắp
                                        ra
                                        mắt</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Liên Hệ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <!-- <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form> -->
                    </div>
                </nav>

            </header>
        </div>
        <!--Sản phẩm 1 -->
    
        <hr>
        <h1 class="text-center item-row " >Multi Vitamin</h1>
        <hr>
        <?php
        foreach($mang as $sp)
        {
            if(($sp->ma)>1)
            {

        ?>
        <section class="row justify-content-center bg-light ">
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Multi.png')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center"><?=$sp->ten?></h5>
                        <p class="card-text text-center text-danger"><?=number_format($sp->gia)?>đ</p>
                        <div class="text-center">
                        <a href="index.php?view=chitietsp&ma=<?=$sp->ma?>" class="btn btn-outline-success">Xem</a>
                        <a href="#" class="btn btn-sm btn-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Multi1.jpeg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">One A Day Women </h5>
                        <p class="card-text text-center text-danger">540.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Multi2.png')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Multivitamin Applied</h5>
                        <p class="card-text text-center text-danger">350.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Multi3.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">MultiVitamin Biotech</h5>
                        <p class="card-text text-center text-danger">450.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Multi4.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Complete Multivitamin</h5>
                        <p class="card-text text-center text-danger">650.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Multi5.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center"> MuscleTech Platinum</h5>
                        <p class="card-text text-center text-danger">475.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Multi6.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Daily Multivitamin</h5>
                        <p class="card-text text-center text-danger">310.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Multi7.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Mutant MultiVitamin</h5>
                        <p class="card-text text-center text-danger text-danger">500.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Multi8.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">MyproteinMultiVitamin</h5>
                        <p class="card-text text-center text-danger">600.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Multi9.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">MultiVitamin Blend</h5>
                        <p class="card-text text-center text-danger">460.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Multi10.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Mirinda Kem</h5>
                        <p class="card-text text-center text-danger">10.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Multi11.webp')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Mirinda Kem</h5>
                        <p class="card-text text-center text-danger">10.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        <?php }else
        {
            // end(0);
        }
                    }
                    ?>
        <!--Sản Phẩm 2 -->
        <hr>
        <h1 class="text-center item-row">Astaxathin</h1>
        <hr>
        <section class="row justify-content-center bg-light">
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Astaxathin1.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Nasa Behava</h5>
                        <p class="card-text text-center text-danger">480.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Astaxathin2.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Now Astaxathin</h5>
                        <p class="card-text text-center text-danger">400.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/astaxathin3.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Ostrovit Astaxanthin</h5>
                        <p class="card-text text-center text-danger">390.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Astaxathin4.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Triple Strength</h5>
                        <p class="card-text text-center text-danger">450.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Astaxathin5.webp')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            True Astaxanthin</h5>
                        <p class="card-text text-center text-danger">450.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Astaxathin6.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Organic Astaxanthin</h5>
                        <p class="card-text text-center text-danger">650.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Astaxathin7.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Vistra Astaxathin</h5>
                        <p class="card-text text-center text-danger">410.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/astaxathin8.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Nutricost Astaxathin</h5>
                        <p class="card-text text-center text-danger">510.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Sản phẩm 3 -->
        <hr>
        <h1 class="text-center item-row">Whey Protein</h1>
        <hr>
        <section class="row justify-content-center bg-light">
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/whey.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Bulk Powder</h5>
                        <p class="card-text text-center text-danger">1.500.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/whey1.png')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Rule 1</h5>
                        <p class="card-text text-center text-danger">1.800.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/whey2.png')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Iso Surge</h5>
                        <p class="card-text text-center text-danger">1.700.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/whey3.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">BioTech Whey</h5>
                        <p class="card-text text-center text-danger">1.900.000đ</p>
                        <div class="text-center">
                            <a href="#" class=" btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/whey4.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Dymatize Iso</h5>
                        <p class="card-text text-center text-danger">1.750.000đ</p>
                        <div class="text-center">
                            <a href="#" class=" btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/whey5.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Iso-Pro VX</h5>
                        <p class="card-text text-center text-danger">1.950.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Whey6.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">BPI Iso</h5>
                        <p class="card-text text-center text-danger">1.850.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/whey7.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Myprotein</h5>
                        <p class="card-text text-center text-danger">1.500.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Whey8.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Mirinda Kem</h5>
                        <p class="card-text text-center">10.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/whey9.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Mirinda Kem</h5>
                        <p class="card-text text-center">10.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/whey10.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Mirinda Kem</h5>
                        <p class="card-text text-center">10.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/whey11.png')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Mirinda Kem</h5>
                        <p class="card-text text-center">10.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        <!--Sản Phẩm 4-->
        <hr>
        <h1 class="text-center item-row " id="SP4">Hỗ Trợ Tập Luyện</h1>
        <hr>
        <section class="row justify-content-center bg-light">
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Gym11.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Đai Lưng</h5>
                        <p class="card-text text-center text-danger">340.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Gym2.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Bao Khuỷu Tay</h5>
                        <p class="card-text text-center text-danger">170.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Gym3.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center"> Bao Tay</h5>
                        <p class="card-text text-center text-danger">75.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Gym4.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Bình Lắc(L)</h5>
                        <p class="card-text text-center text-danger">250.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Gym5.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Bình Lắc(S)</h5>
                        <p class="card-text text-center text-danger">130.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Gym6.webp')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Bao Khớp Gối</h5>
                        <p class="card-text text-center text-danger">220.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Gym7.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Bình Nước 2.2L</h5>
                        <p class="card-text text-center text-danger">180.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="item-image" style="background-image:url('img/Gym8.jpg')"></div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Bảo Vệ Chân</h5>
                        <p class="card-text text-center text-danger">290.000đ</p>
                        <div class="text-center">
                            <a href="#" class="btn btn-outline-success">Mua Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

</head>
<body>
<div class="footer"> <a class="btn-top" href="javascript:void(0);" title="Top" style="display: inline;"></a> </div>
        <div class="row justify-content-center">
            <footer>
                <div class="footer container row justify-content-center ">
                    <div class="col-md-3 col-sm-6">
                        <b>Đồ Án Thiết Kế Web</b>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <ul>
                            <li class="list-ft">Về Chúng Tôi</li>
                            <li>Nguyễn Hoàng Thiên Khải </li>
                            <li>Trần Công Danh</li>
                            <li>Phạm Vĩnh Lộc</li>

                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <ul>
                            <li class="list-ft">Liên Hệ </li>
                            <li>Trụ Sở: 236B Lê văn Sỹ , Q.Tân Bình , TP.HCM</li>
                            <li>Hotline : 0-898-0699</li>
                            <li>Email: abc@gmail.com</li>
                        </ul>
                    </div>

                </div>
                <div class="footer container row justify-content-center">
                    <p>@ All Copyright Reserved </p>
                </div>
            </footer>
        </div>
    </div>

    <script src="js/jquery.slim.min.js"></script>
    <script src="js/boots.trap.min.js"></script>
    <script src="view.js"></script>
</body>

</html>
<?php ob_end_flush(); ?>