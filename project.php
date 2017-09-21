<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Online shopping</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<!--    <script src="jquery-3.2.1.min.js"></script> -->

</head>
<body>
  <!-- Top nav bar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <a href="index.php" class="navbar-brand">Online Shopping</a>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>
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
  <!-- Header -->
  <div id="headerWrapper">
    <div id="back-flower"></div>
    <div id="logotext"></div>
    <div id="for-flower"></div>
  </div>

	<div class="container-fluid">
=======
<?php
  require_once "core/init.php";
  include 'includes/head.php';
  include 'includes/navigation.php';
  include 'includes/headerfull.php';
  include 'includes/leftbar.php';
  ?>
>>>>>>> 373a76644ec3c5f8a7be2afaa4d276de6e9cc5d1


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
    <?php
      include 'includes/detailsmodel.php';
      include 'includes/rightbar.php';
      include 'includes/footer.php';
     ?>
