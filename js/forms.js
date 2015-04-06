//Originally from http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL
//Modified for Belle
//Used for hashing

//Hash password and submit form
function formhash(form, password)
{
	//Create a new element input, this will be our hashed password field
	var p = document.createElement("input");
	
	//Add the new element to our form
	form.appendChild(p);
	p.name = "p";
	p.type = "hidden";
	p.value = hex_sha512(password.value);
	
	//Make sure the plaintext password doesn't get sent.
	password.value = "";
	
	//Submit the form.
	form.submit();
}

function regformhash(form, uid, email, password, conf)
{
	//Check each field has a value
	if (uid.value == '' ||
		email.value == '' ||
		password.value == '' ||
		conf.value == '')
	{
		alert('You must provide all the requested details.  Please try again.');
		return false;
	}
	
	//Check the username
	
	re = /^\w+$/;
	if(!re.test(form.handle.value))
	{
		alert("Handle must contain only letters, numbers and underscores.  Please try again.");
		form.handle.focus();
		return false;
	}
	
	//Check that the password is sufficiently long (min 7 chars)
	//The check is duplicated below, but this included to give more specific guidance to the user
	if (password.value.length < 7)
	{
		alert('Passwords must be at least 7 characters long.  Please try again.');
		form.password.focus();
		return false;
	}
	
	//Password must contain at least one number, one lowercase and one uppercase letters
	var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
	if (!re.test(password.value))
	{
		alert ('Passwords must contain at least one number, one lowercase and one uppercase.  Please try again');
		return false;
	}
	
	//Check password and confirmation are the same
	if (password.value != conf.value)
	{
		alert ('Your password and confirmation do not match.  Please try again');
		form.password.focus();
		return false;
	}
	
	//Create a new element input, this will be our hashed password field.
	var p = document.createElement("input");
	
	//Add the new element to our form.
	form.appendChild(p);
	p.name = "p";
	p.type = "hidden";
	p.value = hex_sha512(password.value);
	
	//Make sure the plaintext password doesn't get sent.
	password.value = "";
	conf.value = "";
	
	//Finally submit the form.
	form.submit();
	return true;
}
	
	