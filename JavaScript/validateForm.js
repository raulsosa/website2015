//Form Validations
// CREATE FORM VALIDATION REVIEWS 
/*function checkForm(){
	var myForm = document.contactForm;
	if(contactForm.field1.value == '' || contactForm.field2.value == '' || contactForm.field3.value == '' || contactForm.field5.value == ''){
		alert('Please Complete all the form');

		if(contactForm.field1.value == '' || contactForm.field2.value == ''){
			contactForm.field1.style.background = 'rgba(220,66,37,0.4)';
			contactForm.field2.style.background = 'rgba(220,66,37,0.4)';
			contactForm.field1.focus();
		}
		
	}
	else{
		contactForm.field3.focus();
	}

}

function validateForm(){
	var firstName = document.forms[0]['field1'];
	var lastName =	document.forms[0]['field2'];
	var fullName = firstName.value + lastName.value;
	alert(fullName);

	if(fullName === null || fullName === ''){
		document.form[0]['field1'].style.background = 'rgba(220,66,37,0.4)'
		alert('First Name must be Fillied out!');
		return false;
	}else{
		document.forms[0]['field3'].focus();
	}
}	
*/
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
	}if(message.value == ''){
		alert('Please Say Something');
		message.focus();
		message.style.background = 'rgba(220,66,37,0.4)';
		return false;
	}else{
		alert('Thanks ' + firstName.value + ' your good to go');
		return true;
	}
}