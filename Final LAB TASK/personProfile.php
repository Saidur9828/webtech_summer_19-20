
<!DOCTYPE html>
<html>
<head>
	<title>Person Profile</title>
</head>
<body>
	<form method = "post" action = "">

		<center>
<h2>Person profile</h2>

	<table border="2">
		<tr>
			 <td>Name:</td>
			 <td>
			      <input id="name" type="text" name="name" onkeyup="nameValid()">
			
			 </td>		
		</tr>
				<tr>
			 <td>E-mail: </td>
			 <td><input id="email" type = "text" name = "email" onkeyup="emailValid()">

			 </td>
		</tr>
				<tr>
			 <td>Gender:</td>
			 <td>
				<input id="male" type="radio" name="gender" value="male" onkeyup="genderValid()">Male 
				<input id="female" type="radio" name="gender" value="female" onkeyup="genderValid()" >Female 
				<input id="other" type="radio" name="gender" value="other" onkeyup="genderValid()">Other 

			 </td>
		</tr>
		<tr>
			<td>DOB:</td>
			<td>	<div>  day  &nbsp;  month  &nbsp;&nbsp;&nbsp;  year</div>
				<input id="day" type="number" size="1" name="date" value="" style="width: 3em" onkeyup="DOB()">/ 
				<input id="month" type="number" size="1" name="date" value="" style="width: 3em" onkeyup="DOB()">/
				<input id="year" type="number" size="3" name="date" value="" style="width: 4em" onkeyup="DOB()"> 

           </td>
           		<tr>
			<td>BG:</td>
			<td>
				<select name="bloodGroup">
					  <option  value="N/A">N/A</option>
					  <option  value="A+" >A+</option>
					  <option  value="A-">A-</option>
					  <option  value="B+">B+</option>
					  <option  value="B-">B-</option>
					  <option  value="O+">O+</option>
					  <option  value="O-">O-</option>
				</select>
			</td>
		</tr>
		</tr>
				<tr>
			<td>Degree:</td>
			<td>
				<input id="SSC" type="checkbox" name="Degree" value="SSC">SSC
				<input id="HSC" type="checkbox" name="Degree"value="HSC">HSC
      			<input id="Bsc" type="checkbox" name="Degree" value="Bsc">Bsc
       		    <input id="Msc" type="checkbox" name="Degree" value="Msc">Msc
			</td>


            <tr>
                      <td>photo</td>
                      <td>:</td>
                      <td><input type="file" name="imageFile" id="fileToUpload"></td>
            </tr>
	</table>
	         <?php echo $Errormsg;?>
		</center>

	</form>





<script>
    function NameValidation() {
        var name = document.getElementById("name").value;
        if (name == "") {
            alert("Name can not be empty");
        }
    }

 


    function EmailValidation() {
        var email = document.getElementById("email").value;
        if (email == "") {
            alert("Email can not be empty");
        }
    }

 

    function DobValidation() {
        var dob = document.getElementById("dob").value;
        if (dob == "") {
            alert("Date of Birth can not be empty");
        }
    }

 

    function GenderValidation() {
        var male = document.getElementById("male");
        var female = document.getElementById("female");
        var other = document.getElementById("other");

 

        if (male.checked == false && female.checked == false && other.checked == false) {
            alert("Gender feild is empty");
        }
    }

 


    function BloodValidation() {
        var bloods = document.getElementById("bloods");
        var selected = bloods.options[bloods.selectedIndex].value;

 

        if (selected == 0) {
            alert("Select Your blood group");
        }
    }

 

    function DegreeValidation() {
        var SSC = document.getElementById("SSC");
        var HSC = document.getElementById("HSC");
        var Bsc = document.getElementById("Bsc");
        var Msc = document.getElementById("Msc");

 


        if (SSC.checked == false && HSC.checked == false && Bsc.checked == false && Msc.checked== false) {
            alert("Select Your  Degree");
        }
    }
    function validation() {
        NameValidation();
        EmailValidation();
        GenderValidation();
        DobValidation();
        BloodValidation();

 

    }

 

</script>

	</body>
</html>