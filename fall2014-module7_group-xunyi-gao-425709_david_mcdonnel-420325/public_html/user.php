<?php 

session_start();

if(isset ($_POST ['formUser']) and isset ($_POST['formUser'])) {
//a file with all the user's names: shawneegao superman airbenders (they're all on the same line separated by a space so explode function can work)

$allUsers = file_get_contents("users.txt");
//explode function splices the string with the delimited being ' ' and places them into an array
$username = explode (' ', $allUsers);

foreach ($username as $person){
//set session variable to equal the correct usernames in the users.txt and compares it with the post variable pulled from the html form
$_SESSION ['username'] = $person;


if ($_SESSION['username'] == $_POST ['formUser']){
//i used my calc.php file as a place holder for new location
header ('Location: calc.php');

}
else {
echo 'bad login, please try again';
break;
}
}
}


?>


<!DOCTYPE html>
<body>
    
<form method = "post" >
<b>Username: </b> <input type = "text" name = "formUser"> <br>
<input type= "submit" value = "Submit" name = "submit">

</form>

</body>
<html>


