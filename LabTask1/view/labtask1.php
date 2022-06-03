<html>
    <head>
        <title>
            My Web Technology labtask1
        </title>
    </head>
<body>
    <h1> Registration</h1>
<form action="../control/Ragistration.php" method="GET">
    <table>
    <tr>
    <td>First Name:</td>
    <td><input type="text" name="FirstName"></td>
    </tr>
    <tr>
    <td>Last Name:</td>
    <td><input type="text" name="LastName"> </td>
    </tr>
    <tr>
    <td>Age:</td>
    <td><input type="age" name="Age"> </td>
    </tr>
    
	<td>Designation: </td>
	<td>
    <input type="radio" name="Designation" value="JuniorProgrammer"> Junior Programmer 
	<input type="radio" name="Designation" value="SeniorProgrammer"> Senior Programmer 
    <input type="radio" name="Designation" value="ProjectLead"> Project Lead 
    </td>
    </tr>
    <tr>
    <td>Preferred langueage</td>
    <td>
    <input type="checkbox" name="Java" value="Java"> Java
	<input type="checkbox" name="PHP" value="PHP"> PHP 
    <input type="checkbox" name="C++" value="C++"> C++ 
    </td>
    </tr>
    <tr>
    <td>Enter your Email:</td>
    <td><input type="text" name="Email"> </td>
    </tr>
    <tr>
	<td>Enter Password: </td>
	<td><input type="Password"  name="Password"> </td>
    </tr>
    <tr>
    <tr>
	<td>Please Choose a file</td>
    <td>
	<input type="file" ></td>
    </tr>
    <tr>
    <td>
	<input type="submit" value="Submit" name="Submission">
	<input type="reset" value="Reset" name="Submission">
    </td>
    </tr>
</table>
</form>
</body>
</html>
