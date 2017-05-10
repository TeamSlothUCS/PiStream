function testvalidate(inputtxt)  
{   
    var field = document.form1.name;     
	var efield = document.form1.email;  
    var letters = /^[A-Za-z]+$/;  
	var letters_symbols = /^[a-zA-Z '-]+$/;
    var valid_email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var message = "";
    var err_flag = 0;
 
    if (field.value.length == 0)  
    {   
        field.style.background = 'Red';   
        message = message + ("Please enter a name. \n \n"); 
		err_flag = 1;
         //return false;   
    }  
  
    else if (field.value.length < 2 || field.value.length > 20)  
    {   
        field.style.background = 'Red';   
        field.value="";
        message = message + ("Enter a name from 2 to 20 letters. \n \n");
		err_flag = 1;
        //return false;   
    }

    else if (field.value.match(letters))  
    {  
        message = message + ("Your name has been accepted. \n \n");  
        //return true;  
    } 
 
    else  
    {  
        field.style.background = 'Red'; 
        message = message + ("You have not entered a name in the correct format. Ensure that only letters are used. Numbers, spaces and other symbols are not permitted. \n \n");  
        err_flag = 1;
		//return false;  
    }  
	
	if (efield.value.match(valid_email))  
    {  
        message = message + ("Your email has been accepted. \n \n");  
        //return true;  
    } 
	
	else if (efield.value.length == 0)  
	{   
		efield.style.background = 'Red';   
		 message = message + "Please enter an email address. \n \n";
		 err_flag = 1;
		 //return false;   
	}  
	
	else if (efield.value.length < 5 || efield.value.length > 50)  
	{   
		efield.style.background = 'Red';   
		efield.value="";
		message = message + "Enter an email address from 5 to 50 characters. \n \n"; 
		err_flag = 1;
		//return false;   
	}
	
	else
	{  
		efield.style.background = 'Red'; 
		message = message + "You have not entered data in the correct email format. E.g. use of @ and dot symbols. \n \n";  
		err_flag = 1;
		//return false;  
	}  
	
	
	alert(message);
	if (err_flag == 1)
		return false;
	else
		return true;
 
} 
