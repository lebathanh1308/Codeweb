<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<?php
				$getlastesDell = $product->getlastesDell();
				if($getlastesDell) {
					while($resultdell = $getlastesDell->fetch_assoc()) {
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="preview.html"> <img src="admin/uploads/<?php echo $resultdell['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>DELL</h2>
						<p><?php echo $resultdell['productName'] ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $resultdell['productId'] ?>">Thêm giỏ hàng</a></span></div>
				   </div>
			   </div>	
			   <?php
				}
			}
			   ?>		
			   <?php
				$getlastesSS = $product->getlastesSamsung();
				if($getlastesSS) {
					while($resultss = $getlastesSS->fetch_assoc()) {
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="preview.html"><img src="admin/uploads/<?php echo $resultss['image'] ?>" alt="" / ></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Samsung</h2>
						  <p><?php echo $resultss['productName'] ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $resultss['productId'] ?>">Thêm giỏ hàng</a></span></div>
					</div>
				</div>
				<?php
				}
			}
			?>
			</div>
			<div class="section group">
			<?php
				$getlastesAp = $product->getlastesApple();
				if($getlastesAp) {
					while($resultap = $getlastesAp->fetch_assoc()) {
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="preview.html"> <img src="admin/uploads/<?php echo $resultap['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Apple</h2>
						<p><?php echo $resultap['productName'] ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $resultap['productId'] ?>">Thêm giỏ hàng</a></span></div>
				   </div>
				   </div>			
				   <?php
				}
			}
			?>
				<?php
				$getlastesHw = $product->getlastesHuawei();
				if($getlastesHw) {
					while($resulthw = $getlastesHw->fetch_assoc()) {
				?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="preview.html"><img src="admin/uploads/<?php echo $resulthw['image'] ?>" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Huawei</h2>
						  <p><?php echo $resulthw['productName'] ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $resulthw['productId'] ?>">Thêm giỏ hàng</a></span></div>
					</div>
				</div>
				<?php
				}
			}
			?>
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="images/1.jpg" alt=""/></li>
						<li><img src="images/2.jpg" alt=""/></li>
						<li><img src="images/3.jpg" alt=""/></li>
						<li><img src="images/4.jpg" alt=""/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	<div class="clear"></div>
</div>