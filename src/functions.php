<?php

/*<!--=======================================-->*/
// Cette fonction permet de vérifier les paramètres
function verifParams()
{
  if (isset($_POST) && sizeof($_POST) > 0) {
    foreach ($_POST as $key => $value) {
      //suppression des caractères en début de chaines
      $data = trim($value);
      //suppression des slashes
      $data = stripslashes($data);
      //suppression des balises ou tags php et ou html 
      $data = strip_tags($data);
      //Conversion des caractères au bon format
      $data = htmlspecialchars($data);
      $_POST[$key] = $data;
    }
    //print_r($_POST);exit();
  }
}

/*<!--=======================================-->*/
// Cette fonction permet l'affichage de la page d'accueil
function displayAccueil()
{
  //$result = '<h1> Bienvenu sur la page d\'Accueil</h1>';
  echo '<br><br><br><br><br>';
  $result = ' <body class="animsition">

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
			
				<div class="item-slick1" style="background-image: url(src/images/carousel/slide-01.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Woman Collection 2020
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									NEW SEASON
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="' . BASE_URL . SP . "produit" . '" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(src/images/carousel/slide-02.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									New-Style
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Jackets & Coats
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="' . BASE_URL . SP . "produit" . '" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(src/images/carousel/slide-04.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="' . BASE_URL . SP . "produit" .
					'" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Banner -->
	<div class="sec-banner bg0 p-t-95 p-b-55">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="src/images/carousel/banner-17.jpg" alt="IMG-BANNER">

						<a href="' . BASE_URL . SP . "produit" .
							'" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Hijab
								</span>

								<span class="block1-info stext-102 trans-04">
									New Style
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="src/images/carousel/banner-16.jpg" alt="IMG-BANNER">

						<a href="' . BASE_URL . SP . "produit" .
							'" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									African Style
								</span>

								<span class="block1-info stext-102 trans-04">
									New Trend
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="src/images/carousel/banner-071.jpg" alt="IMG-BANNER">

						<a href="' . BASE_URL . SP . "produit" .
							'" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Watches
								</span>

								<span class="block1-info stext-102 trans-04">
									Summer 2020
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="src/images/carousel/Hairball women luxury shoulder handbags.jpg" alt="IMG-BANNER">

						<a href="' . BASE_URL . SP . "produit" .
							'" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Bags
								</span>

								<span class="block1-info stext-102 trans-04">
									Summer 2020
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="src/images/carousel/foulards212.jpg" alt="IMG-BANNER">

						<a href="' . BASE_URL . SP . "produit" .
	'" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Accessories
								</span>

								<span class="block1-info stext-102 trans-04">
									Summer 2020
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Product -->
	<section class="bg0 p-t-23 p-b-130">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
						Women
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
						Men
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
						Bag
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
						Shoes
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
						Watches
					</button>
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Default
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Popularity
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Average rating
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Newness
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: Low to High
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: High to Low
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										All
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$0.00 - $50.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$50.00 - $100.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$100.00 - $150.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$150.00 - $200.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$200.00+
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>

							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Black
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Blue
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Grey
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Green
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Red
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										White
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Fashion
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Denim
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row isotope-grid">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0 label-new" data-label="New">
							<img src="src/images/carousel/product-01.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Esprit Ruffle Shirt
								</a>

								<span class="stext-105 cl3">
									$16.64
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-02.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Herschel supply
								</a>

								<span class="stext-105 cl3">
									$35.31
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-03.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Sleeveless Mikado Fit & Flare Dress
								</a>

								<span class="stext-105 cl3">
									$25.50
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-04.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Classic Trench Coat
								</a>

								<span class="stext-105 cl3">
									$75.00
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-051.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Robes Manches 3_4 Fourreau Sexy_Fête
								</a>

								<span class="stext-105 cl3">
									$34.75
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-061.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Alexander Mcqueen Spring 2020 
								</a>

								<span class="stext-105 cl3">
									$93.20
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-071.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									STYLEBOP 
								</a>

								<span class="stext-105 cl3">
									$52.66
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-081.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Bracelet Laurier - Or Rose
								</a>

								<span class="stext-105 cl3">
									$18.96
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item shoes">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-091.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Heart Forever Love Charm Bracelet
								</a>

								<span class="stext-105 cl3">
									$75.00
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-101.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									2019 Relogio Watch Women Quartz
								</a>

								<span class="stext-105 cl3">
									$25.85
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-102.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Escarpins-Candy-NLY-Nelly-Eté-2019 
								</a>

								<span class="stext-105 cl3">
									$63.16
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-103.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									PUMA chaussure Course JARO
								</a>

								<span class="stext-105 cl3">
									$63.15
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-104.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									FashionLeopard Silk Scarf DIY Women Head Neck 
								</a>

								<span class="stext-105 cl3">
									$54.79
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-105.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									African kente head wraps
								</a>

								<span class="stext-105 cl3">
									$86.85
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-106.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Dubai Style Women Open Front Kaftan Abaya Muslim Dress
								</a>

								<span class="stext-105 cl3">
									$29.64
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="src/images/carousel/product-107.jpg" alt="IMG-PRODUCT">

							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Ankara Styles - African Wear 
								</a>

								<span class="stext-105 cl3">
									$29.64
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="src/images/carousel/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="src/images/carousel/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Pagination -->
			<div class="flex-c-m flex-w w-full p-t-38">
				<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
					1
				</a>

				<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">
					2
				</a>
			</div>
		</div>
	</section>';

  return $result;
}

/*<!--=======================================-->*/
// Cette fonction permet l'affichage de la page d'inscription
function displayInscription()
{
  //$result = '<h1> Bienvenu sur la page d\'Inscription</h1>';
  echo '<br><br><br>';
  $result = '<div class="bg-white shadow-sm rounded p-6">
	<form class="" action="actionInscription" method="post">
			<br>
		  <!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="src/images/carousel/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="src/images/carousel/item-cart-02.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="src/images/carousel/item-cart-03.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="#" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="#" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url(\'src/images/carousel/bg-01.jpg\');">
		<h2 class="ltext-105 cl0 txt-center">
			Inscription
		</h2>
  </section><br><br>' .

  '<!-- Input -->
      <div class="mb-3">
        <div class="input-group input-group form">
          <input type="text" name="pseudo" class="form-control form-control is-valid" value="Saps" required="" placeholder="Entrer votre Pseudo" aria-label="Entrer votre Pseudo">
		</div>
		<div class="valid-feedback">
        	Looks good!
      	</div>
      </div>
      <!-- End Input -->

	  <!-- Input -->
      <div class=" mb-3">
        <div class="input-group input-group form">
          <input type="email" class="form-control form-control is-valid" name="email" value="bayesabarane@gmail.com" required="" placeholder="Entrez votre adresse email" aria-label="Entrez votre adresse email">
		</div>
		<div class="valid-feedback">
        	Looks good!
      	</div>
      </div>
      <!-- End Input -->

      <!-- Input -->
      <div class="mb-3">
        <div class="input-group input-group form">
          <input type="password" class="form-control form-control is-valid" name="password" value="xxxxxxxx" required="" placeholder="Entrez votre mot de passe" aria-label="Entrez votre mot de passe">
		</div>
		<div class="valid-feedback">
        	Looks good!
      	</div>
	  </div>
	  <br>

      <!-- End Input -->

	  
	  <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							S\'inscrire
						</button>
    </form>
  </div>';
  return $result;
}

/*
function displayActionInscription(){
  global $model;
  //print_r($_POST); exit();
  $sexe = $_POST["sexe"];
  $pseudo = $_POST["pseudo"]; 
  $prenom = $_POST["firstname"];
  $nom = $_POST["lastname"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $data = $model->createCustomers($sexe,$pseudo,$prenom,$nom,$email,$password);
  if($data){//inscription réussie
    $data_customer = $model->authentifier($email,$password);
    if($data_customer){
      $_SESSION["customer"] = $data_customer;
      return '<p class="btn btn-success btn-block">Inscription réussie '.$pseudo.', Vous êtes bien connecté</p>'.displayProduit();
    }
  }else{ // inscription échouée
    return '<p class=" btn btn-danger btn-block">inscription échouée</p>'.displayProduit();
  }

}*/

function displayActionInscription()
{
  global $model;
  //print_r($_POST); exit();
  $pseudo = $_POST["pseudo"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $data = $model->createCustomers($pseudo, $email, $password);
  if ($data) { //inscription réussie
    $data_customer = $model->authentifier($email, $password);
    if ($data_customer) {
      $_SESSION["customer"] = $data_customer;
      return '<p class="btn btn-success btn-lg btn-block">Inscription réussie ' . $pseudo . ', Vous êtes bien connecté</p>' . displayProduit();
    }
  } else { // inscription échouée
    return '<p class=" btn btn-danger btn-lg btn-block">inscription échouée</p>' . displayProduit();
  }
}

/*<!--=======================================-->*/
// Cette fonction décrit l'action Connexion
function displayActionConnexion(){
  global $model;
  //print_r($_POST); exit();
  $email = $_POST["email"];
  $password = $_POST["password"];
  $data_customer = $model->authentifier($email,$password);
  echo '<br><br><br>';
  if($data_customer){
    $_SESSION["customer"] = $data_customer;
    return
    '<div class="alert alert-success" role="alert">
		Authentification réussie, Vous êtes bien connecté
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>' . displayProduit();
  }else{ // inscription échouée
    echo '<br><br><br>';
    return
    '<div class="alert alert-danger" role="alert">
		Authentification échouée
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>' . displayProduit();
  }

}

/*<!--=======================================-->*/
// Cette fonction décrit l'action Déconnexion
function displayDeconnexion(){
  unset($_SESSION["customer"]);
  return
  '<div class="alert alert-success" role="alert">
	Déconnexion réussie
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>' . displayProduit();
}

/*<!--=======================================-->*/
// Cette fonction permet l'affichage de la page Contact
function displayContact()
{
  //$result = '<h1> Bienvenu sur la page de contact</h1>';
  echo '<br><br><br>';
  $result = '	
  <br>
  <br>
  <!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="src/images/carousel/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="src/images/carousel/item-cart-02.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="src/images/carousel/item-cart-03.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="#" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="#" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url(\'src/images/carousel/bg-01.jpg\');">
		<h2 class="ltext-105 cl0 txt-center">
			Contact
		</h2>
  </section>	
   
  <!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form>
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Envoyé nous un message
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="src/images/carousel/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="How Can We Help?"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Submit
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Address
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								JStore Dakar Centre 2th floor, Malika Plage, Dakar, DK 12100 SN
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Lets Talk
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								+221 77 757 87 25
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Sale Support
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								bayesabarane@gmail.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
  </section>
  
  <!-- Map -->
	<div class="map">
		<div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
	</div>

  ';

  return $result;
}

/*<!--=======================================-->*/
// Cette fonction permet l'affichage de la page Produit
function displayProduit(){
    global $model;global $model;
    $dataProduct = $model->getProduct();
    
    //$result = '<h1> Bienvenu sur la page Produits</h1>';
    $result = '<br><br>';
    foreach ($dataProduct as $key => $value) {
        $result .= '<div class="card" style="width: 18rem; display:inline-block; margin-bottom:1%; margin-right:1%">
        <img src="'.BASE_URL.SP."images".SP."produit".SP.$value["image"].'" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">'.$value["name"].'</h5>
          <a href="'.BASE_URL.SP."details".SP.$value["id"].'" class="btn btn-info">Détails</a>
          <a href="'.BASE_URL.SP."panier".SP.$value["id"].'" class="btn btn-success">Acheter</a>
        </div>
      </div>';
    }

    return $result;
}

/*<!--=======================================-->*/
// Cette fonction permet l'affichage des Categories de produit
function displayCategory(){
    global $model;
    global $url;
    global $category;
    if(isset($url[1]) && is_numeric($url[1]) && $url[1]>0 && $url[1]<= sizeof($category)){
      $result = '<h1> Produit de la catégorie '.$category[$url[1]-1]["name"].'</h1>';
        $dataProduct = $model->getProduct(null,$url[1]);

        foreach ($dataProduct as $key => $value) {
          $result .= '<div class="card" style="width: 18rem; display:inline-block;">
          <img src="'.BASE_URL.SP."images".SP."produit".SP.$value["image"].'" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">'.$value["name"].'</h5>
            <a href="'.BASE_URL.SP."details".SP.$value["id"].'" class="btn btn-info">Détails</a>
            <a href="'.BASE_URL.SP."panier".SP.$value["id"].'" class="btn btn-success">Acheter</a>
          </div>
        </div>';
      }
    }else{
      $result = '<h1> URL incorrecte !</h1>';
    }
    

  return $result;
}

// Cette fonction décrit l'affichage des détails des produits
function displayDetails(){
  global $model;
  global $url;
  global $category;
  $result = '<h1> Bienvenu sur la page de détails produits</h1>';
  $dataProduct = $model->getProduct(null,null,$url[1]);
  //print_r($dataProduct);exit();
  $result .= '
    <div class="row details">
      <div class="col-md-5 col-12">
      <img src="'.BASE_URL.SP."images".SP."produit".SP.$dataProduct[0]["image"].'" class="card-img-top" alt="...">

      </div>
      <div class="col-md-7 col-12">
        <h2>'.$dataProduct[0]["name"].'</h2>
        <p>'.$dataProduct[0]["description"].'</p>
        <p> Categorie : '.$category[$dataProduct[0]["category"]-1]["name"].'</p>
        <a href="'.BASE_URL.SP."panier".SP.$dataProduct[0]["id"].'" class="btn btn-block btn-success">Ajouter au panier </a>
        <a href="'.BASE_URL.SP."produit".'" class="btn btn-block btn-info">Retour Page Produits </a>

      </div>

    </div>
  ';


  return $result;
}

/*<!--=======================================-->*/
// Cette fonction permet l'affichage du panier
function displayPanier(){
  global $model;
  global $url;
  if(isset($url[1])){
    $idProduit = $url[1];
    $dataProduct = $model->getProduct(null,null,$url[1]);
    $_SESSION["panier"][] = $dataProduct[0];
  }
  //print_r(sizeof($_SESSION["panier"]));exit();
  if(!isset($_SESSION["panier"]) || sizeof($_SESSION["panier"])==0 ){
    return '<h1>Votre panier est vide !</h1>'.displayProduit();
  }
  $result = '<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Prix</th>
      <th scope="col">Quantité</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

 ';
 $total_price = 0;
  //print_r($_SESSION);exit();
  foreach ($_SESSION["panier"] as $key => $value) {
    $total_price +=  $value["price"];
    $result .= '<tr>
    <th scope="row">'.$value["id"].'</th>
    <td>'.$value["name"].'</td>
    <td>'.$value["description"].'</td>
    <td><img src="'.BASE_URL.SP."images".SP."produit".SP.$value["image"].'" alt="..."/></td>
    <td>'.$value["price"].'€</td>
    <td>1</td>
    <td><a href="'.BASE_URL.SP."supprimer".SP.$key.'" class="btn btn-info">Supprimer</a></td>
  </tr>';
  }
  $total_tva = $total_price*TVA/100;
  $total_ttc = $total_tva + $total_price;
  $result .= '<tr><td></td><td></td><td></td><td>Prix total (HT)</td><td>'.number_format($total_price,2).'€</td><td></td></tr>
  <tr><td></td><td></td><td></td><td>Tva ('.TVA.'%)</td><td>'.number_format($total_tva,2).'€</td><td></td></tr>
  <tr><td></td><td></td><td></td><td>Total (TTC)</td><td>'.number_format($total_ttc,2).'€</td><td></td></tr>';

  $result .= '</tbody>
              </table>';
  $result .= '<a href="' . BASE_URL . SP . "validationCommande" . '" class="btn btn-success btn-block">Valider votre commande</a>';
    
  return $result;
  
}

/*<!--=======================================-->*/
// Cette fonction décrit l'action Suppresion du produit
function displaySupprimer(){
  global $url;
  
  //print_r($_SESSION["panier"]);
  if(isset($url[1]) && is_numeric($url[1])){
    $param = $url[1];
    unset($_SESSION["panier"][$param]);
    header("Location: ".BASE_URL.SP."panier");
  }
}

/*<!--=======================================-->*/
// Cette fonction permet l'affichage du profil du client
function displayProfil()
{
	if (isset($_SESSION['customer']["sexe"])) {
		if ($_SESSION['customer']["sexe"] == 1) {
			$_SESSION['customer']["sexe"] = "Masculin";
		} else {
			$_SESSION['customer']["sexe"] = "Féminin";
		}
	}
	$result = '<br><br><br>
	<ul class="list-group">
	<li class="list-group-item active bg-info">Bienvenue sur votre Profil ' . $_SESSION['customer']["pseudo"] . '</li>
	<li class="list-group-item"> Sexe : ' . $_SESSION['customer']["sexe"] . '</li>
	<li class="list-group-item"> Pseudo : ' . $_SESSION['customer']["pseudo"] . '</li>
	<li class="list-group-item"> Nom : ' . $_SESSION['customer']["firstname"] . '</li>
	<li class="list-group-item"> Prénom : ' . $_SESSION['customer']["lastname"] . '</li>
	<li class="list-group-item"> Email : ' . $_SESSION['customer']["email"] . '</li>
	<li class="list-group-item"> Description : ' . $_SESSION['customer']["description"] . '</li>
	<li class="list-group-item"> Adresse Livraison : ' . $_SESSION['customer']["adresse_livraison"] . '</li>
	<li class="list-group-item"> Adresse Facturation : ' . $_SESSION['customer']["adresse_facturation"] . '</li>
	</ul>
	<br>
	<div class="mt-2">
	<a href="' . BASE_URL . SP . "updateProfil" . '" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">Mettre à jour mes données</a>
	</div>
	
	';

	return $result;
}

/*<!--=======================================-->*/
// Cette fonction décrit l'action Mise à jour du profil
function displayUpdateProfil()
{
	$result = '
  <form action="updateAction" method="post">
      <div class="form-row">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Sexe</label>
        </div>
        <select name="sexe" class="custom-select" id="inputGroupSelect01">
          <option selected>Choose...</option>
          <option value="1">Masculin</option>
          <option value="2">Féminin</option>
        </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputEmail4">Prénom </label>
      <input type="text" name="firstname" value="' . $_SESSION['customer']["firstname"] . '" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Nom </label>
      <input type="text" name="lastname" value="' . $_SESSION['customer']["lastname"] . '" class="form-control" id="inputPassword4">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Email </label>
      <input type="text" name="email" value="' . $_SESSION['customer']["email"] . '" class="form-control" id="inputPassword4">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Téléphone </label>
      <input type="text" name="tel" value="' . $_SESSION['customer']["tel"] . '" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Description</label>
    <input type="text" name="description" value="' . $_SESSION['customer']["description"] . '" class="form-control" id="inputAddress" placeholder="Merci de taper une courte descricption de vous !">
  </div>
  <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputPassword4">Adresse de Facturation </label>
        <input type="text" value="' . $_SESSION['customer']["adresse_facturation"] . '" name="adresse_facturation" class="form-control" id="inputPassword4">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Adresse de Livraison </label>
        <input type="text" name="adresse_livraison" value="' . $_SESSION['customer']["adresse_livraison"] . '" class="form-control" id="inputPassword4">
      </div>
  
  <button type="submit" class="btn btn-secondary">Mettre à jour</button>
	</form>
	';

	return $result;
}

/*<!--=======================================-->*/
// Cette fonction décrit le comportement de l'action mise à jour
function displayUpdateAction()
{
	global $model;
    $_POST["id"] = $_SESSION["customer"]["id"];
	//print_r($_POST); exit();
    $r = $model->updateInfosCustomer($_POST);
	if ($r) {
        $_SESSION["customer"] = $model->getCustomer($_SESSION["customer"]["id"]);
        $result = 'mise à jour réussie';
    }else{
        $result = 'mise à jour échouée';
    }
    return $result;
}

/*<!--=======================================-->*/
// Cette fonction décrit l'action Validation de la commande
function displayValidationCommande()
{
	global $model;
	if (isset($_SESSION["customer"])) { // l'utilisateur est connecté
		$dataCustomer = $_SESSION["customer"];
		//print_r($_SESSION["panier"]);exit();
		foreach ($_SESSION["panier"] as $key => $value) {
			$r = $model->createOrders($dataCustomer["id"], $value["id"], 1, $value["price"]);
			if (!$r) {
				return '<div class="alert alert-danger" role="alert ">
					Validation de Commande échouée
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
				. displayPanier();
			}
		}
		unset($_SESSION["panier"]);
		$result =
		'<div class="alert alert-success" role="alert ">
					Validation de Commande Réussie. Vous pouvez passer réucupérer en magasin dans 30min
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>' . displayProduit();
	} else { // l'utilisateur n'est pas connecté
		$result = '<div class="alert alert-warning" role="alert">
					Connectez-vous pour pouvoir valider votre commande
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>';
		$result .= displayAccueil();
	}
	return $result;
}


?>