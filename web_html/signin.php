<?php include "header.php"; ?>

<section class="signin">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="signin-bx">
					<h2>First, let's Create your<br>
						account.</h2>
					<form>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<div class="sgn-inr">
											<label>First Name</label>
											<input type="text" placeholder="First Name" name="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="sgn-inr">
											<label>Last Name</label>
											<input type="text" placeholder="Last Name" name="">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="sgn-inr">
									<label>Email</label>
									<input type="text" placeholder="Enter Email" name="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="sgn-inr">
									<label>Password</label>
									<i class="fa fa-eye" onclick="passwordShow()"></i>								
									<i class="fa fa-eye-slash" onclick="passwordShow()" style="display:none;"></i>								
									<input type="password" id="password" placeholder="Enter Your Password" name="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="sgn-inr">
									<label>Phone Number</label>
									<input type="text" placeholder="Enter Valid Phone Number" name="">
								</div>
							</div>
							<div class="col-md-12">
								<div class="sgn-inr">
									<button>Sign Up</button>
								</div>
							</div>
							<div class="col-md-12">
								<div class="sgn-inr">
									<p>By continuing wiht you are indicating that you have read and agree to the <a href="terms-and-conditions.php" target="_blank">Terms Of Services</a> & <a href="privacy-policy.php" target="_blank">Privacy Policy.</a></p>
								</div>
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</section>

<script>
function passwordShow(){
  	//alert("The paragraph was clicked.");  	
	if ($("#password").attr("type") === "password") {
		$("#password").attr("type","text");
		$('.fa-eye').hide();
		$('.fa-eye-slash').show();
	} else {
		$("#password").attr("type","password");
		$('.fa-eye').show();
		$('.fa-eye-slash').hide();
	}
}
</script>

<?php include "footer.php"; ?>