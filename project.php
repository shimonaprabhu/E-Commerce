<?php
  include 'includes/head.php';
  include 'includes/navigation.php';
  include 'includes/headerfull.php';
  include 'includes/leftbar.php';
  ?>


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
