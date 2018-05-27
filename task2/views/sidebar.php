<div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		
		<?php 
			//echo "hello";
			$result=$obj->show_category();
			//pre($result);
			if(is_array($result)):
				foreach ($result as $val):
		?>
		<li><a href="product.php?id=<?php echo $val['ca_id'];?>"><span class="icon-chevron-right"></span>
		<?php 
			echo $val['ca_name'];
		?>
		</a></li>
		<?php 

			endforeach;
		endif;
		?>

		<li style="border:0"> &nbsp;</li>
		<!-- <li> <a class="totalInCart" href="cart.html"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;">$448.42</span></strong></a></li> -->
	</ul>
</div>