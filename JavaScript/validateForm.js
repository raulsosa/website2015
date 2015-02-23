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
*/
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

