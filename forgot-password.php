<?php

use Phppot\Member;

if (!empty($_POST["forgot-btn"])) {
	require_once __DIR__ . '/Model/Member.php';
	$member = new Member();
	$displayMessage = $member->handleForgot();
}
?>
<HTML>

<HEAD>
	<TITLE>Forgot Password</TITLE>
	<link rel="icon" type="image/png" sizes="32x32" href="images/fv/favicon-32x32.png" />

	<link href="assets/css/phppot-style.css" type="text/css" rel="stylesheet" />
	<link href="assets/css/user-registration.css" type="text/css" rel="stylesheet" />
	<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>

<BODY>

	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="signup-align">
				<form name="login" action="" method="post" onsubmit="return loginValidation()">
					<div class="signup-heading">Department Password Recovery</div>
					<?php
					if (!empty($displayMessage["status"])) {
						if ($displayMessage["status"] == "error") {
					?>
							<div class="server-response error-msg"><?php echo $displayMessage["message"]; ?></div>
						<?php
						} else if ($displayMessage["status"] == "success") {
						?>
							<div class="server-response success-msg"><?php echo $displayMessage["message"]; ?></div>
					<?php
						}
					}
					?>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username" id="username">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="forgot-btn" id="forgot-btn" value="Forgot Password">
					</div>
				</form>

				<div>
					<h3 style="margin-top:5%; text-align:center">Instructions</h3>
					<ul style="color:red;">
						<li>*This Portal is used for resetting the password of departments.</li><br>
						<li>*Enter The Username registered to department portal.</li><br>
						<li>*Password Reset link will be send on registered email address.</li><br>
						<li>*If you don't get the reset email link kindly check the email that is entered above.</li><br>
						<li>*If any problem arrise please free to contact Webmasters.</li><br>
					</ul>



				</div>
			</div>
		</div>
	</div>

	<script>
		function loginValidation() {
			var valid = true;
			$("#username").removeClass("error-field");
			var UserName = $("#username").val();
			$("#username-info").html("").hide();

			if (UserName.trim() == "") {
				$("#username-info").html("required.").css("color", "#ee0000").show();
				$("#username").addClass("error-field");
				valid = false;
			}
			if (valid == false) {
				$('.error-field').first().focus();
				valid = false;
			}
			return valid;
		}
	</script>
</BODY>

</HTML>