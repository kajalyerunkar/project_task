<?php 

	require_once "header.php";
?>
<div class="container">
	<h2 class="text-center">CART</h2>
	<?php 
		
		//print_r($_COOKIE);
		if(isset($_COOKIE['cookie_product_id'])):
			$pro=$_COOKIE['cookie_product_id'];
			//echo $pro;
			$result=$obj->show_cart_product($pro);
			//pre($result);

			if(is_array($result)):
				foreach ($result as $val):
	?>
			<div class="container col-md-6">
				<a href="product_details.html"><img src="../assets/uploads/<?php echo $val['pro_path'];?>" alt=""></a>
				<div class="caption cntr">
					<p><?php echo $val['pro_name'];?></p>
					<h2><del> <?php echo $val['pro_discount'];?></del>
					<?php echo $val['pro_price'];?></div>
					<h4><a class="shopBtn delete-to-cart" href="cart.php" for="<?php echo $val['pro_id']?>"> delete </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			</div>
			  </div>
			</li>
			<?php 
				endforeach;
			endif;
			?></div>
			<?php
				endif;
			?>
		</div>

<?php 
	require_once "footer.php";

?>