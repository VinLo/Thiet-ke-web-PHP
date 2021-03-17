<?php 
include 'widgets/head.php'; 
include 'class/sanpham.php';
$spdt = new sanpham();
$mang = $spdt->_list();
?>
<div class="container">
    <body>
    <!--Sản phẩm 1 -->
    <hr>
    <h1 class="text-center item-row " id="SP1">Multi Vitamin</h1>
    <hr>
   
    <section class=" row justify-content-center bg-light ">
    <?php
    foreach($mang as $sp)
    {
        if(($sp->ma)>0)
        {
        if(($sp->ma)<9)
            {
    ?>
        <div class="col-md-3">
            <div class="card">
                <div class="item-image" style="background-image:url('<?=$sp->hinh?>')"></div>
                <div class="card-body">
                    <h5 class="card-title text-center"><?=$sp->ten?></h5>
                    <p class="card-text text-center text-danger"><?=number_format($sp->gia)?>đ</p>
                    <div class="text-center">
                    <a href="index.php?view=chitietsp&ma=<?=$sp->ma?>" class="btn btn-outline-success button">Mua hàng</a>
                    
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
        <?php }else
        {
            ;
}}else
{
    ;
}
    }
 ?>
    </section>
   
    <!--Sản Phẩm 2 -->
    <hr>
    <h1 class="text-center item-row" id="SP2">Astaxathin</h1>
    <hr>
    
    <section class="row justify-content-center bg-light">
    <?php
    foreach($mang as $sp)
    {
        if( ($sp->ma)>8)
            {
                if(($sp->ma)<17)
            {
    ?>
    <div class="col-md-3">
            <div class="card">
                <div class="item-image" style="background-image:url('<?=$sp->hinh?>')"></div>
                <div class="card-body">
                    <h5 class="card-title text-center"><?=$sp->ten?></h5>
                    <p class="card-text text-center text-danger"><?=number_format($sp->gia)?>đ</p>
                    <div class="text-center">
                    <a href="index.php?view=chitietsp&ma=<?=$sp->ma?>" class="btn btn-outline-success button">Mua hàng</a>
                    
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div class="col-md-3">
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
        </div> -->
        <?php }else
        {
            ;
}}else
{
    ;
}
    }
 ?>
    </section>
    
    <!--Sản phẩm 3 -->
    <hr>
    <h1 class="text-center item-row " id="SP3">Whey Protein</h1>
    <hr>
   
    <section class="row justify-content-center bg-light">
    <?php
    foreach($mang as $sp)
    {
        if(($sp->ma)>16)
            {
                if(($sp->ma)<25)
                {
    ?>
    <div class="col-md-3">
            <div class="card">
                <div class="item-image" style="background-image:url('<?=$sp->hinh?>')"></div>
                <div class="card-body">
                    <h5 class="card-title text-center"><?=$sp->ten?></h5>
                    <p class="card-text text-center text-danger"><?=number_format($sp->gia)?>đ</p>
                    <div class="text-center">
                    <a href="index.php?view=chitietsp&ma=<?=$sp->ma?>" class="btn btn-outline-success button">Mua hàng</a>
                  
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3">
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
        </div> -->
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
        <?php }else
        {
            ;
}}else
{
    ;
}
    }
 ?>
    </section>
    
    <!--Sản Phẩm 4-->
    <hr>
    <h1 class="text-center item-row " id="SP4">Hỗ Trợ Tập Luyện</h1>
    <hr>
    <section class="row justify-content-center bg-light">
    <?php
    foreach($mang as $sp)
    {
        if(($sp->ma)>24)
            {
                if(($sp->ma)<33)
                {
    ?>
    <div class="col-md-3">
            <div class="card">
                <div class="item-image" style="background-image:url('<?=$sp->hinh?>')"></div>
                <div class="card-body">
                    <h5 class="card-title text-center"><?=$sp->ten?></h5>
                    <p class="card-text text-center text-danger"><?=number_format($sp->gia)?>đ</p>
                    <div class="text-center">
                    <a href="index.php?view=chitietsp&ma=<?=$sp->ma?>" class="btn btn-outline-success button">Mua hàng</a>
                   
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-3">
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
        </div> -->
        <?php }else
        {
            ;
}}else
{
    ;
}
    }
 ?>
    </section>

    


</body>