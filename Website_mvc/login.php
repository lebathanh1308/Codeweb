<?php
include 'inc/header.php';
// include 'inc/slider.php';
?>
<?php
	$login_check = Session::get('customer_login');
	if($login_check) {
		header('Location:order.php');
	}
?>
<?php
    $pd = new product();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $insertCustomers = $cs->insert_customers($_POST);
    }
?>
<?php
    $pd = new product();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        $loginCustomers = $cs->login_customers($_POST);
    }
?>

<link rel="stylesheet" href="./css/style.css">
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Khách hàng hiện tại</h3>
        	<p>Đăng nhập bằng mẫu dưới đây.</p>
			<?php
			if(isset($loginCustomers)) {
				echo $loginCustomers;
			}
			?>
        	<form action="" method="POST">
                	<input type="text" name="email" class="field" placeholder="Enter email....">
                    <input type="password" name="password" class="field" placeholder="Enter password....">
					<p class="note">Nếu bạn quên mật khẩu, chỉ cần nhập email của bạn và nhấp vào <a href="#">Đây</a></p>
                    <div class="buttons"><div><input type="submit" name="login" class="grey" value="Đăng nhập" style="font-size: 19px;background:#fff"></div></div>
			</form>
        </div>
		<?php
		?>
    	<div class="register_account">
    		<h3>Đăng ký tài khoản mới</h3>
			<?php
			if(isset($insertCustomers)) {
				echo $insertCustomers;
			}
			?>
    		<form action="" method="POST">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name="name" placeholder="Nhập tên....">
							</div>
							
							<div>
							   <input type="text" name="city" placeholder="Nhập thành phố....">
							</div>
							
							<div>
								<input type="text" name="zipcode" placeholder="Nhập Zipcode....">
							</div>
							<div>
								<input type="text" name="email" placeholder="Nhập Email....">
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="address" placeholder="Nhập địa chỉ....">
						</div>
		    		<div>
						<select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Chọn một quốc gia</option>         
							<option value="hcm">Thành phố Hồ Chí Minh</option>
							<option value="quangtri">Quảng Trị</option>
							<option value="bienhoa">Biên Hòa</option>
							<option value="hanoi">Hà Nội</option>
							<option value="danang">Đà Nẵng</option>
							<option value="hue">Huế</option>
		         </select>
				 </div>		        
	
		           <div>
		          <input type="text" name="phone" placeholder="Nhập số điện thoại....">
		          </div>
				  
				  <div>
					<input type="text" name="password" placeholder="Nhập mật khẩu....">
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><input type="submit" name="submit" class="grey" value="Đăng kí tài khoản" style="font-size: 19px;background:#fff"></div></div>
		    <p class="terms">Bằng cách nhấp vào 'Tạo tài khoản', bạn đồng ý với <a href="#">Điều kiện &amp; Conditions</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php
 include 'inc/footer.php';
?>


