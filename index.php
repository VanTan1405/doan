<?php
include "login.php"
?>
<?php
include "head.php"
?>
<?php
include "top.php"
?>
<?php
include "header.php"
?>
<?php
include "navigation.php"
?>
<?php
include "sider.php"
?>
<!-- Start of Async Drift Code -->
<script>
	"use strict";

	! function() {
		var t = window.driftt = window.drift = window.driftt || [];
		if (!t.init) {
			if (t.invoked) return void(window.console && console.error && console.error("Drift snippet included twice."));
			t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
				t.factory = function(e) {
					return function() {
						var n = Array.prototype.slice.call(arguments);
						return n.unshift(e), t.push(n), t;
					};
				}, t.methods.forEach(function(e) {
					t[e] = t.factory(e);
				}), t.load = function(t) {
					var e = 3e5,
						n = Math.ceil(new Date() / e) * e,
						o = document.createElement("script");
					o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
					var i = document.getElementsByTagName("script")[0];
					i.parentNode.insertBefore(o, i);
				};
		}
	}();
	drift.SNIPPET_VERSION = '0.3.1';
	drift.load('ey2vg9cw6tp5');
</script>
<!-- End of Async Drift Code -->
<style>
	.container1 {
		display: flex;
		width: 80%;
		height: 100%;
		margin: auto;
		justify-content: space-around;
		position: relative;
	}

	.container1 .cards {
		display: flex;
		align-items: center;
		width: 250px;
		height: 350px;
		background-color: #185399;
		margin: auto;
		position: relative;
		cursor: pointer;
		box-shadow: 0 0 10px #185399;
	}

	.cards .card h2 {
		text-align: center;
		color: white;
	}

	.cards .card p {
		text-align: center;
		font-size: 14px;
		color: white;
		padding: 20px;
		box-sizing: border-box;
	}

	.cards .number {
		position: absolute;
		bottom: 0;
		width: 250px;
		height: 100%;
		background-color: white;
		transition: .5s all;
		text-align: center;
	}

	.cards .number h1 {
		line-height: 350px;
		background-image: url(https://imgur.com/ergqH1F.png);
		background-size: cover;
		background-position: -60px center;
		color: white;
		font-size: 80px;
	}

	.cards:hover .number h1 {
		transition: .3s all;
		opacity: 0;
	}

	.cards:hover .number {
		transition: .4s all;
		height: 0;
		width: 0;
	}

	.anh {
		width: 100px;
		height: 100px;
	}

	.add-to-cart {
		background-color: #3a5c83;
		height: 35px;
		width: 40px;
		text-align: center;
		display: inline-block;
		margin-right: 10px;
	}

	.image {
		/* height: 200px;
    width: 200px; */
		overflow: hidden;
	}

	.image img {
		-webkit-transition: all 0.2s ease-in-out;
		-moz-transition: all 0.2s ease-in-out;
		-o-transition: all 0.2s ease-in-out;
		-ms-transition: all 0.2s ease-in-out;
		transition: all 0.2s ease-in-out;
	}

	.image img:hover {
		transform: scale(1.5);
	}
</style>

<h3 style="align-items: center; text-align: center; font-weight: bold; color: #1c1c1c">Sản phẩm bán chạys</h3>
<br><br>
<div class="container1" style="height: 82%;">
	<div class="cards">
		<div class="card">
			<img src="images/TCDN.jpg" alt="" style="width: 100%;height: 355px;">
			<div class="number">
				<h1>1</h1>
			</div>
		</div>
	</div>

	<div class="cards">
		<div class="card">
			<img src="images/KDNH.jpg" alt="" style="width: 100%;height: 355px;">
			<div class="number">
				<h1>2</h1>
			</div>
		</div>
	</div>

	<div class="cards">
		<div class="card">
			<img src="images/LSD.jpg" alt="" style="width: 100%;height: 355px;">
			<div class="number">
				<h1>3</h1>
			</div>
		</div>
	</div>
</div>
<br><br>

<div class="row">
	<div class="col-lg-12">
		<div class="heading">
			<h2 style=" background: #f2f2f2;
						padding: 0;
						height: 38px;
						margin-bottom: 18px;">
				<a href="" style="    
				position: relative;
				font-size: 18px;
				line-height: 38px;
				font-weight: 700;
				color: #fff;
				background: #0c6;
				padding: 9px 20px 9px 15px;
				text-transform: capitalize;
				margin: 0;">Sách đang khuyến mãi</a>
			</h2>
		</div>
		<span class="b-main__category-arrow" style="display: inline-block;
				width: 0;
				height: 0;
				margin-left: 2px;
				vertical-align: middle;
				border-top: 21px solid transparent;
				border-left: 12px solid #0c6;
				border-right: 0 solid transparent;
				border-bottom: 20px solid transparent;
				position: absolute;
				top: 20px;
				right: 922.5px;"></span>
		<div class="products">
			<?php
			require 'inc/truyvan.php';
			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {

			?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="product">
							<div class="image"><a href="product.php?id=<?php echo $row["ID"] ?>"><img src="images/<?php echo $row["HinhAnh"] ?>" style="width:300px;height:300px; " /></a></div>
							<div class="caption">
								<div class="name">
									<h3><a href="product.php?id=<?php echo $row["ID"] ?>"><?php echo $row["Ten"] ?></a></h3>
								</div>
								<?php
								if ($row["KhuyenMai"] == true) {
								?>
									<div class="price" style="color: red;"><?php echo $row["giakhuyenmai"] ?>,000₫<span style="font-size: 14px;"><?php echo $row["Gia"] ?>,000₫</span></div>
								<?php
								}
								?>
								<div class="g-plusone" data-size="medium" data-annotation="none" data-href="/product.php?id=<?php echo $row["ID"] ?>"></div>
							</div>
						</div>

					</div>
			<?php
				}
			}
			?>
		</div>


	</div>

</div>

<?php
include "sanphamoinhat.php"
?>


</div>

</div>
</div>
</div>
<?php
include "footer.php"
?>
</body>

</html>