<?php 

echo <<<_END
<fieldset>
<p>Brandon Anup
</fieldset>
_END;

date_default_timezone_set('America/New_York');
echo "Application submitted at: ". date("h:i:sa")." at ".date("m/d/Y");
   
echo "<br><br>";
echo '<h3> Your Application Information </h3>';

$fn = htmlentities($_POST['firstname']);
$ln = htmlentities($_POST['lastname']);
$em = htmlentities($_POST['email']);
$gen = $_POST['gender'];
$edu = $_POST['education'];
$interest = htmlentities($_POST['researchinterest']);

if ($_FILES)
  {
    $name = $_FILES['filename']['name'];

    switch($_FILES['filename']['type'])
    {
      case 'image/jpeg': $ext = 'jpg'; break;
      case 'image/gif':  $ext = 'gif'; break;
      case 'image/png':  $ext = 'png'; break;
      case 'image/tiff': $ext = 'tif'; break;
      default:           $ext = '';    break;
    }
    if ($ext)
    {
      $n = "image.$ext";
      move_uploaded_file($_FILES['filename']['tmp_name'], $n);
      echo "Welcome ".$fn."<br>";
      echo "<img src='$n'><br>";
    }
    else echo "'$name' is not an accepted image file";
  }
	else echo "No image has been uploaded <br>";



echo "First Name: ".$fn."<br>";
echo "Last Name: ".$ln."<br>";
echo "Email: ".$em."<br>";
echo "Gender: ".$gen."<br>";
echo "Education: ".$edu."<br>";
$skills = $_POST['program'];
if(empty($skills)){
	echo("You did not enter any Programming Information <br>");
}

else{
	echo("Programming Skills: "."<br>");
	foreach($skills as $s){
		echo $s."<br>";
	}
}
if(empty($interest)){
	echo("You did not enter research information <br>");
}
else{
	echo "Research Interest: ".$interest."<br>";
}

?>