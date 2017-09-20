<!DOCTYPE html>
<html>
<head>
	<title>Shop Till You Drop!</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<!--TopNavBar-->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<a href="index.php" class="navbar-brand">Shop Till You Drop!</a>
			<ul class="nav navbar-nav">
				<li class=dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret" ></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Shirts</a></li>
						<li><a href="#">Pants</a></li>
						<li><a href="#">Shoes</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>

	
	<!--Header-->
	<div id="headerWrapper">
		<div id="back-flower"></div>
		<div id="logotext"></div>
		<div id="fore-flower"></div>
	</div>

	<div class="container-fluid">

	<div class="col-md-2">Left Side Bar</div>

	<!--Main-->

	<div class="col-md-8">
		<div class="row">
			<h2 class="text-center">Featured Products</h2>
				
				<div class="col-md-3">
				<h4>Black Jeans</h4>
					<img src="images/products/men4.png" alt="Levis Jeans" class="img-thumb"/>
					<p class="list-price text-danger">List Price<s>$54.99</s></p>
					<p class="price"> Our Price: $19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

 
				<div class="col-md-3">
				<h4>Blue Jeans</h4>
					<img src="images/products/men6.png" alt="Blue Jeans" class="img-thumb"/>
					<p class="list-price text-danger">List Price<s>$54.99</s></p>
					<p class="price"> Our Price: $19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

 
				<div class="col-md-3">
				<h4>Shirt</h4>
					<img src="images/products/men1.png" alt="Shrit" class="img-thumb"/>
					<p class="list-price text-danger">List Price<s>$19.99</s></p>
					<p class="price"> Our Price: $5.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

 
				<div class="col-md-3">
				<h4>Hoodie</h4>
					<img src="images/products/boys1.png" alt="Hoodie" class="img-thumb"/>
					<p class="list-price text-danger">List Price<s>$65.99</s></p>
					<p class="price"> Our Price: $39.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>


				<div class="col-md-3">
				<h4>Shoes</h4>
					<img src="images/products/shoes.jpg" alt="Shoes" class="img-thumb"/>
					<p class="list-price text-danger">List Price<s>$84.99</s></p>
					<p class="price"> Our Price: $59.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>



				<div class="col-md-3">
				<h4>Purse</h4>
					<img src="images/products/women5.png" alt="Purse" class="img-thumb"/>
					<p class="list-price text-danger">List Price<s>$154.99</s></p>
					<p class="price"> Our Price: $99.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>


				<div class="col-md-3">
				<h4>Dress</h4>
					<img src="images/products/women4.png" alt="Dress" class="img-thumb"/>
					<p class="list-price text-danger">List Price<s>$54.99</s></p>
					<p class="price"> Our Price: $19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
				<h4>Top</h4>
					<img src="images/products/women1.png" alt="Top" class="img-thumb"/>
					<p class="list-price text-danger">List Price<s>$34.99</s></p>
					<p class="price"> Our Price: $19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>
			</div>
		</div>
		
		<div class="col-md-2">Right side Bar</div>
	</div>

	<footer class="text-center" id="footer">&copy;Copyright 2016-2017 Shop Till You Drop!</footer>

	<!--Details Modal-->
	<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labeledby="details-1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss-"modal" aria-label="Close">
					<span aria-hideen="true">&times;</span>
				</button>
				<h4 class="modal-title text-center">Levis Jeans</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<div class="center block">
								<img src="images/products/men4.png" alt="Levis Jeans" class="details img-responsive">
							</div>
						</div>
						</div class="col-sm-6">
							<h4> Details</h4>
							<p> Buy these now!</p>
							<hr>
							<p>Price:$34.99</p>
							<p> Brand:Levis</p>
				
							<form action="add_cart.php" method="post">
							<div class="form-group">
								<div class="col-xs-3">
									<label for="quantity">Qty:</label>
									<input type="text" class="form-control" id="quantity" name="quantity">
								</div>
								<p>Available: 3</p>
							</div>
							<div class="form-group">
								<label for="size"></label>
								<select name=size" id="size" class="form-control">
									<option value="28">28</option>
									<option value="30">30</option>
									<option value="32">32</option>
									<option value="34">34</option>
								</select>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		
		<div class="modal-footer">
			<button class="btn btn-default" data-dismiss="modal">Close</button>
			<button class="btn btn-warning" type="submit"><span class="glaphicon glaphicon-shopping-cart"></span>Add to cart</button>
		</div>
	</div>
</div>

<script>
	jQuery(window).scroll(function(){
		var vscroll=jQuery(this).scrollTop();
		//console.log(vscroll);
		jQuery('#logotext').css({
			"transform" : "translate(0px, "+vscroll/2+"px)"
		});
		});

	jQuery(window).scroll(function(){
		var vscroll=jQuery(this).scrollTop();
		jQuery('#back-flower').css({
			"transform" : "translate("+vscroll/5+"px, "-vscroll/12+"px)"
		});
		});

	jQuery(window).scroll(function(){
		var vscroll=jQuery(this).scrollTop();
		jQuery('afore-flower').css({
			"transform" : "translate(0px, "+vscroll/2+"px)"
		});
		});

</script>

</body>
</html>

