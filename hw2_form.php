<fieldset>
<p>Brandon Anup
</fieldset>

<form method="post" action="hw2_process.php" enctype='multipart/form-data'><pre>
<table>
<tr><td>First Name:</td> <td><input type="text" name="firstname" required></td></tr>
<tr><td>Last Name: </td> <td><input type="text" name="lastname" required></td></tr>
<tr><td>Email:</td> <td><input type="text" name="email" required></td></tr>
<tr><td>Gender:</td> <td>Male:<input type="radio" name="gender" value = "Male" required>Female:<input type="radio" name="gender" value = "Female" required></td></tr> 
<tr><td>Education:</td> <td><select name= "education" size="1" required>
<option value="Doctorate Degree">Doctorate Degree</option>
<option value="ABD">ABD</option>
<option value="Master's Degree">Master's Degree</option>
<option value="Bachelor's Degree">Bachelor's Degree</option>
<option value="Associate's Degree">Associate's Degree</option>
<option value="Other">Other</option>
</select></td></tr>
<tr><td>Programming Skills:</td> <td>Java<input type="checkbox" name="program[]" value="Java"> <br>
C/C++<input type="checkbox" name="program[]" value="C/C++"> <br>
Python<input type="checkbox" name="program[]" value="Python"> <br>
PHP<input type="checkbox" name="program[]" value="PHP"> <br>
JavaScript<input type="checkbox" name="program[]" value="Javascript"> <br>
SQL<input type="checkbox" name="program[]" value="SQL"> <br>
Kotlin<input type="checkbox" name="program[]" value="Kotlin"> <br>
</td></tr>
<tr><td>Research Interest:</td> <td><textarea id="researchinterest" name = "researchinterest" rows="5" cols="50"></textarea></td></tr>
<tr><td>Upload Your Photo:</td> <td><input type='file' name='filename' size='10'></td></tr>
<tr><td><input type="submit" value="Submit"></td> <td><input type="reset" value="Reset" /></td></tr>
</table>

</form>