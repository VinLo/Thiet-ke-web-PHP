<?php
include 'widgets/head.php'; 
if(!get('ma'))
chuyentrang('index.php?view=tongquan');
include 'class/sanpham.php';
$sp = new sanpham();
$item = $sp->_item(get('ma'));
$spcanxem = $sp->_item(get('ma'));
if(!$spcanxem)
    chuyentrang('index.php?view=dssp');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Cửa Hàng</title>
    <!-- <link rel="stylesheet" href="css/Homestyle.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Indexstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
</head>
<body>
	<br></br>
	<br></br>
	<br></br>
    <div class="container">
        <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate fadeInUp ftco-animated">
    				<a href="<?=$spcanxem->hinh?>" class="image-popup prod-img-bg"><img src="<?=$spcanxem->hinh?>" class="img-fluid" alt="<?=$spcanxem->hinh?>"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate fadeInUp ftco-animated">
    				<h3><?=$spcanxem->ten?></h3>
    				<p class="price"><span><?=number_format($spcanxem->gia) ?>đ</span></p>
    				<p><?=$spcanxem->mota?></p>
    				<!-- <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their. -->
						</p>
						<div class="row mt-4">
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
	                   <i class="fa fa-minus"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="fa fa-plus"></i>
	                 </button>
	             	</span>
	          	</div>
	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;">Available</p>
	          	</div>
          	</div>
          	<p><a href="informationCustummer.html" class="btn btn-primary py-3 px-5">Buy now</a></p>
			  <!-- <a href="pages/404.php" class="btn btn-primary py-3 px-5 mr-2">Add to Cart</a>		 -->
		</div>
    		</div>
    	</div>
	</section>
    </div>
</body>