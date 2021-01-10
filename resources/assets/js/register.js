		function openForm()
		 {document.getElementById("myForm").style.display = "block"}

		function closeForm() 
		{
  			document.getElementById("myForm").style.display = "none"
		}
		function openForm1()
		 {
				document.getElementById("myForm1").style.display = "block"
		}

		function closeForm1() 
		{
  			document.getElementById("myForm1").style.display = "none"
		}
		function myFunction() 
		{
			 
			 document.getElementById("res1").style.display = "block"
		}
		function Validate() 
		{
			var password = document.getElementById("pwd").value;
			var confirmPassword = document.getElementById("cpwd").value;
			if (password != confirmPassword) {
				alert("Passwords do not match.");
				return false;
			}
			return true;
		}


		