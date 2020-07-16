

<?php
/*mysqli_connect("localhost","root","") or die (mysqli_error());
mysqli_select_db("sign_up") or die (mysqli_error());*/

$mysqli = new mysqli("localhost", "root", "", "sign_up");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$mysqli->select_db("sign_up");

if(isset($_POST['Sign-Up']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
if($name=="")
{
echo "<script>alert('Please enter the name ')</script>";
}
if(($pass1=="")||($pass2==""))
{
echo "<script>alert('Please enter the password ')</script>";
}
if($pass1!=$pass2)
{
echo "<script>alert('Entered password is not same ')</script>";
}
if($username=="")
{
echo "<script>alert('Please enter the username ')</script>";
}
if($email=="")
{
echo "<script>alert('Please enter the email ')</script>";
}
if($phone=="")
{
echo "<script>alert('Please enter the phone no. ')</script>";
}


$query ="insert into users (username,password,email,name,phone) values ('$username','$pass1','$email','$name','$phone')";
if($mysqli->query($query)){
echo "<script>alert('You Have Registered Successfully!!!')</script>";
	
$location="/fwdfrontendpartofinternship/index.html";
header("Location:"."http://".$_SERVER['HTTP_HOST'].$location);
}
}




?>


