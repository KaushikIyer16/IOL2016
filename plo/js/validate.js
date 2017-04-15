 function checkemail1(){
	  
				var str=document.getElementById("f_email").value;
				var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
				if (filter.test(str)){
				}
				
				else{
				alert("Please input a valid email address!")
				
				}
				
				}
                 function onlynumeric(key) 
             {
            var keycode = (key.which) ? key.which : key.keyCode;
            var phn = document.getElementById("contact");

            if ( !(keycode > 31 && (keycode < 48 || keycode > 57)) || keycode == 43) 
            {
//                document.getElementById('dvFirstDiv').innerHTML = "please enter Mobile Number";
//                document.getElementById('dvFirstDiv').style.display = 'block';

                document.getElementById('dvFirstDiv').style.display = 'none';
                return true;
            }
           else {
                               
                 alert('please enter Mobile number only');
                return false;
            }

        }
              function onlynumeric1(key) 
             {
            var keycode = (key.which) ? key.which : key.keyCode;
            var phn = document.getElementById("phoneno");

            if ( !(keycode > 31 && (keycode < 48 || keycode > 57)) || keycode == 43) 
            {
//                document.getElementById('dvFirstDiv').innerHTML = "please enter Mobile Number";
//                document.getElementById('dvFirstDiv').style.display = 'block';

                document.getElementById('dvFirstDiv').style.display = 'none';
                return true;
            }
           else {
                               
                 alert('please enter Mobile number only');
                return false;
            }

        }
            function validate1() {

        if ($("#f_name")[0].value == ""  && $("#f_email")[0].value == "" &&
            $("#f_telephone")[0].value == "" && $("#f_comments")[0].value == "") {
            alert("All fields are mandatory")
            return false;
        }
        else if ($("#f_name")[0].value == "") {
            alert("Please Enter Name")
            return false;
        }
        else if ($("#f_email")[0].value == "") {
            alert("Please Enter Your E-Mail Address")
            return false;
        }
        else if ($("#f_telephone")[0].value == "") {
            alert("Please Enter Contact Nos.")
            return false;
        }
        else if ($("#f_comments")[0].value == "") {
            alert("Please Enter Your Commments")
            return false;
        }

        if ($("#f_email")[0].value != "") {

            var text = document.getElementById("f_email")[0].value;
            var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
            if (filter.test(text)) {
                //                          location.href = 'index.aspx?Add=1';
                return true;
            }
            else {
                alert("Please Enter valid E-Mail Address")
                return false;
            }

        }
    }
     function validate() {

        if ($("#name")[0].value == ""  && $("#email")[0].value == "" &&
            $("#phoneno")[0].value == "" && $("#message")[0].value == "") {
            alert("All fields are mandatory")
            return false;
        }
        else if ($("#name")[0].value == "") {
            alert("Please Enter Name")
            return false;
        }
        else if ($("#email")[0].value == "") {
            alert("Please Enter Your E-Mail Address")
            return false;
        }
        else if ($("#phoneno")[0].value == "") {
            alert("Please Enter Contact Nos.")
            return false;
        }
        else if ($("#message")[0].value == "") {
            alert("Please Enter Your Commments")
            return false;
        }

     function checkemail()
     {
	  			var str=document.getElementById("email").value;
				var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
				if (filter.test(str)){
				}
				
				else{
				alert("Please input a valid email address!")
				
				}
				
				}