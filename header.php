	<style>
		.col-md-4 {
			width: 25%;
		}

		.col-md-42 {
			width: 50%;
		}
	</style>
	<header class="container">
		<div class="row" style="display: flex; margin-left: -12px;">
			<div class="col-md-4" style="margin-bottom:25px">
				<div id="logo" style="margin: -30px 0 15px;
    width: 113px;
    height: 47px;">
					<!-- <h5>NHÀ SÁCH ONLINE</h5> -->
					<img src="images/hub.png" alt="" style="    max-width: 100%;
    height: 110px;">
				</div>
			</div>
			<div class="col-md-42">
				<form class="form-search" style="width: 600px;" method="GET" action="timkiem.php">
					<input type="text" style="width: 90%;
			height: 56px;
			height: 40px;
			border-radius: 5px 0 0 5px;
			border-color: red;" class="input-medium search-query" name="txttimkiem" placeholder=" Tìm kiếm sản phẩm ..." required>
					<button type="submit" name="tk" class="btn" style="	background: #222;
			color: #fff;
			padding: 12px 20px;
			font-size: 20px;
			width: 58px;
			height: 40px;
			margin-left: -5px;
			margin-top: -2px;
			border-radius: 0px 7px 7px 0px;
			background-color: red;"><span class="glyphicon glyphicon-search" style="top: -4px;"></span></button>
				</form>
			</div>
			<div class="col-md-4">
				<div id="cart"><a class="btn btn-1" style="    color: #fff;
			font-size: 18px;
			padding: 10px 15px;
			width: 86px;
			height: 45px;
			background-color: steelblue;" href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> (<?php
																													$ok = 1;
																													if (isset($_SESSION['cart'])) {
																														foreach ($_SESSION['cart'] as $key => $value) {
																															if (isset($key)) {
																																$ok = 2;
																															}
																														}
																													}

																													if ($ok == 2) {
																														echo count($_SESSION['cart']);
																													} else {
																														echo   "0";
																													}


																													?>)</a></div>
			</div>
		</div>
	</header>