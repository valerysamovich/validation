// JavaScript Document
<!-- 
  function validateForm()
{
	// variables declarations
	var name = document.form.name.value;
	var comments = document.form.comments.value;
	
	// if-else conditional statement for name
	if(name == "")
	{
		alert("Please fill in the name field!");
		document.form.name.focus();
		return false;
	} 	
	
	// if-else conditional statement for gender
	if(!document.form.gender[0].checked && !document.form.gender[1].checked)
	{
		alert("Plase ckeck your gender!");
		return false;
	}
	
	// if-else conditional statement for interest
	if(!document.form.interest[0].checked && !document.form.interest[1].checked && !document.form.interest[2].checked)
	{
		alert("Please check at least one interest!");
		return false;
	}
	
	// if-else conditional statement for age
	if(document.form.age[document.form.age.selectedIndex].value == "")
    {
    	alert ("Please select your age!");
		return false;
	}
	
	// if-else conditional statement for comments
	if(comments == "")
	{
		alert("Please fill in the comments field!");
		document.form.comments.focus();
		return false;
	}else
	{
		return true;
	}
}
//--> 