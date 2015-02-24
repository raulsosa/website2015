//Form Validations
// CREATE FORM VALIDATION REVIEWS 	
function validateForm(){
	var firstName = document.contactForm.field1;
	var lastName = document.contactForm.field2;
	var email =	document.contactForm.field3;
	var message = document.contactForm.field5;
	if(firstName.value == ''){
		alert('First Name Please...');
		firstName.focus();
		firstName.style.background = 'rgba(220,66,37,0.4)';
		return false;
	}if(lastName.value == ''){
		alert('Last Name Please...');
		lastName.focus();
		lastName.style.background = 'rgba(220,66,37,0.4)';
		return false;
	}if(email.value == ''){
		alert('Email Please...')
		email.focus()
		email.style.background = 'rgba(220,66,37,0.4)';
		return false;
	}else{
		//Check data format
		var ret = validateEmail();
		if(ret == false){
			return false;
		}
	}

	if(message.value == ''){
		alert('Please Say Something');
		message.focus();
		message.style.background = 'rgba(220,66,37,0.4)';
		return false;
	}else{
		alert('Thanks ' + firstName.value + ' your good to go');
		return true;
	}
}

function validateEmail(){
	var emailID = document.contactForm.field3.value;
	atpos = emailID.indexOf('@');
	dotpos = emailID.lastIndexOf('.');
	if(atpos < 1 || (dotpos - atpos < 2)){
		alert('Seems like your email Id is off. Please try again');
		document.contactForm.field3.focus();
		document.contactForm.field3.style.background = 'rgba(220,66,37,0.4)';
		return false;
	}
	return(true);
}