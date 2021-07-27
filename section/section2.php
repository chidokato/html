<section class="section2 bgf1f1f1">
	<div class="home-title">
		<span class="separator_wrapper">THIẾT KẾ NỘI THẤT PHONG CÁCH HIỆN ĐẠI section2</span>
		<div class="line"></div>
	</div>
	<div class="tab">
	  	<button class="tablinks active" onclick="openCity(event, 'London')">Dự án thiết kế</button>
	  	<button class="tablinks" onclick="openCity(event, 'Paris')">Dự án thi công</button>
	  	<button class="tablinks" onclick="openCity(event, 'Tokyo')">Đồ bán lẻ</button>
	</div>

	<div id="London" class="tabcontent" style="display: block;">
		<div class="uk-container uk-container-center">
 			<ul class="uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-4 list-product" data-uk-grid-match="{target:'.title'}">
			    <?php include('product/product.php') ?>
			    <?php include('product/product.php') ?>
			    <?php include('product/product.php') ?>
			    <?php include('product/product.php') ?>
			    <?php include('product/product.php') ?>
			    <?php include('product/product.php') ?>
			    <?php include('product/product.php') ?>
			    <?php include('product/product.php') ?>
			</ul>
 		</div>
	</div>

	<div id="Paris" class="tabcontent">
	  	<div class="uk-container uk-container-center">
 			<ul class="uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-4 list-product" data-uk-grid-match="{target:'.title'}">
			    <?php include('product/product.php') ?>
	 			<?php include('product/product.php') ?>
	 			<?php include('product/product.php') ?>
	 			<?php include('product/product.php') ?>
	 			<?php include('product/product.php') ?>
	 			<?php include('product/product.php') ?>
	 			<?php include('product/product.php') ?>
	 			<?php include('product/product.php') ?>
			</ul>
 		</div>
	</div>

	<div id="Tokyo" class="tabcontent">
	  	<div class="uk-container uk-container-center">
 			<ul class="uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-4 uk-grid-width-large-1-4 list-product" data-uk-grid-match="{target:'.title'}">
			    <?php include('product/product.php') ?>
	 			<?php include('product/product.php') ?>
	 			<?php include('product/product.php') ?>
	 			<?php include('product/product.php') ?>
	 			<?php include('product/product.php') ?>
	 			<?php include('product/product.php') ?>
	 			<?php include('product/product.php') ?>
	 			<?php include('product/product.php') ?>
			</ul>
 		</div>
	</div>
</section><!-- .commitment-section -->