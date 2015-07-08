<header id="contact-form-header" class="grid">
<div id="contain-form" class="col-1-2">
	<h2>Contact Information</h2>

<!-- CREATE THE VALIDATION OF THE FORM -->	
<?php #email.php
//Check Form Submission
if(isset($_POST["submitted"])){
	//Minimal Form Validation
	if(!empty($_POST["first_name"]) && !empty($_POST["last_name"]) && !empty($_POST["email"]) && !empty($_POST["message"]) ){
	//Create the body
	$to = "rsosa1287@gmail.com";
	$subject = "RSOSADESIGN Contact Form Submission";
	$body = "Name: {$_POST['first_name']} {$_POST['last_name']}\n\nComments:{$_POST['message']}";
	$body = wordwrap($body, 70);

	//Send the email:
	mail($to, $subject, $body, "From: {$_POST['email']}");

	//Print a message:
	echo "<p class=\"success\"><em>Thank you for contacting me. I will get back to you as soon as possible.</em></p>";

	//Clear$_POST(so that the form;s not sticky):

	$_POST = array();
	
	}else{
		echo "<p class=\"warning\">Please fill out the form COMPLETLY.</p>";
	}
}//END main isset()IF
//CREATE FORM BELOW
?>


<?php

/*$errors = '';
	if(isset($_POST['submit']) ){
		//do something

		//Minimal name validation
		if(!empty($_POST['first_name']) && !empty($_POST['last_name'])){
			echo '<ul>Thank\'s '. $_POST['first_name']. '</ul>';
			$errors = 'SUCCESS'; 
		}else{
			echo '<ul>Please enter your full name</ul>';
			
		}


		//Minimal email validation
		if(!empty($_POST['email'])){
			
		}else{
			echo "<ul>Please enter your email address</ul>";
		}
	}else{
		//do nothing

	}

*/?>


<form name="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<ul class="form-style-1">
	    <li>
	    	<label>Full Name 
	    	<span class="required">*</span>
	    	</label>
			<input type="text" name="first_name" class="field-divided" placeholder="First" value="<?php if(isset($_POST['first_name'])){echo $_POST['first_name'];}?>" />
			<span class="error"></span>
			<input type="text" name="last_name" class="field-divided" placeholder="Last" value="<?php if(isset($_POST['last_name'])){echo $_POST['last_name'];}?>"/>

	  	</li>

	    <li>
		    <label>Email 
			<span class="required">*</span>
		    </label>
		    <input type="email" name="email" class="field-long" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" />
	    </li>
<!--
		<li>
			<label>Subject</label>
			<select name="field4" class="field-select">
			    <option value="Advertise">Your Hired!</option>
			    <option value="Partnership">Want to Work Together?</option>
			    <option value="General Question">Lets just take it slow and chat for a bit.</option>
			</select>
		</li>
-->
		<li>
			<label>Your Message 
			<span class="required">*</span>
			</label>
			<textarea name="message" id="field5" class="field-long field-textarea"><?php if(isset($_POST['message'])) {echo $_POST['message'];}?></textarea>
		</li>

		<li>
			<input type="submit" name="submit" value="Submit" />
			<input type="hidden" name="submitted" value="true"/>
		</li>
	</ul>
</form>
</div>
<!-- CREATE THE GOOGLE MAP API -->
<div id="map-canvas" class="col-1-2"></div>
</header>
<script type="text/javascript" src='JavaScript/validateForm.js'></script>