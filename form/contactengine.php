<?php
 

$file_name = basename($_FILES['fileToUpload']['name']);
$file_tmp =$_FILES['fileToUpload']['tmp_name'];
//get the file extension of the file
$file_type = substr($file_name,strrpos($file_name, '.') + 1);
 
$title = Trim(stripslashes($_POST['title']));
$FName = Trim(stripslashes($_POST['FName']));
$MName = Trim(stripslashes($_POST['MName'])); 
$LName = Trim(stripslashes($_POST['LName']));
$FatherName = Trim(stripslashes($_POST['FatherName']));
$MotherName = Trim(stripslashes($_POST['MotherName']));
$dobday = Trim(stripslashes($_POST['dobday']));
$dobmon = Trim(stripslashes($_POST['dobmon']));
$dobyear = Trim(stripslashes($_POST['dobyear']));
$Email = Trim(stripslashes($_POST['Email']));
$t = time();

if ($MName=="") {
  $mName=aaaa;
}
else {
  $mName=$MName;
}



$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "\t";
$en = "\r\n";

fwrite($myfile, $en);
fwrite($myfile, $t);
fwrite($myfile, $txt);
fwrite($myfile, $title);
fwrite($myfile, $txt);
fwrite($myfile, $FName);
fwrite($myfile, $txt);
fwrite($myfile, $mName);
fwrite($myfile, $txt);
fwrite($myfile, $FatherName);
fwrite($myfile, $txt);
fwrite($myfile, $MotherName);
fwrite($myfile, $txt);
fwrite($myfile, $dobday);
fwrite($myfile, $txt);
fwrite($myfile, $dobmon);
fwrite($myfile, $txt);
fwrite($myfile, $dobyear);
fwrite($myfile, $txt);
fwrite($myfile, $Email);
fclose($myfile);


//Image Upload
$fine = $t.".".$file_type;
move_uploaded_file($file_tmp,"images/".$fine);

// redirect to success page 
print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
?>