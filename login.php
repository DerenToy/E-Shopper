<?php
$page= "Login";
include ("inc/head.php");

?>
	<section id="form"><!--form-->
		<div class="logSignIn container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>LOGIN!</h2>
						<form action="checkLogin.php" method="post">
							<input type="email" name="email" placeholder="Email Address" />
							<input type="password" name="password"placeholder="Password" />
						
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>SIGN UP!</h2>
						<form action="addCustomer.php" method="post">
							<input type="text" id="name" name="name" placeholder="Name"/>
							<input type="text" id="lastname" name="lastname" placeholder="Last Name"/>
							<input type="text" id="email" name="email" placeholder="Email Address"/>
							<input type="tel" id="phone" name="phone" placeholder="Phone Number"/>
							<input type="password" id="password" name="password" placeholder="Password"/>
							<input type="password" id="verifyPassword" name="verifyPassword" placeholder="Verify Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	<?php

include ("inc/footer.php");
?>
	
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>