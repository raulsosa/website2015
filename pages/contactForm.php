<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="close" class="close">X</a>
		<h3>Let's Get in Touch!</h3>
		<form name="contactForm" onsubmit="return(validateForm())">
			<ul class="form-style-1">
			    <li><label>Full Name <span class="required">*</span></label><input type="text" name="field1" class="field-divided" placeholder="First" />&nbsp;<input type="text" name="field2" class="field-divided" placeholder="Last" /></li>
			    <li>
			        <label>Email <span class="required">*</span></label>
			        <input type="email" name="field3" class="field-long" />
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
			        <label>Your Message <span class="required">*</span></label>
			        <textarea name="field5" id="field5" class="field-long field-textarea"></textarea>
			    </li>
			    <li>
			        <input type="submit" value="Submit" />
			    </li>
			</ul>
		</form>
	</div>
</div>