<header id="contact-form-header">
<div class="grid">
<div id="contain-form" class="col-1-2">
	<h2>Let's Get in Touch!</h2>



<?php

$errors = '';
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

?>


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

		<li>
			<label>Subject</label>
			<select name="field4" class="field-select">
			    <option value="Advertise">Your Hired!</option>
			    <option value="Partnership">Want to Work Together?</option>
			    <option value="General Question">Lets just take it slow and chat for a bit.</option>
			</select>
		</li>

		<li>
			<label>Your Message 
			<span class="required">*</span>
			</label>
			<textarea name="message" id="field5" class="field-long field-textarea"><?php if(isset($_POST['message'])) {echo $_POST['message'];}?></textarea>
		</li>

		<li>
			<input type="submit" value="Submit" />
		</li>
	</ul>
</form>
</div>
<!-- CREATE THE GOOGLE MAP API -->
<div id="map-canvas" class="col-1-2"></div>
</div>
</header>
<script type="text/javascript" src='JavaScript/validateForm.js'></script>