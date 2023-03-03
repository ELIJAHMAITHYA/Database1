






<?php
//Connect to the database
$host='localhost:3306';
$user="root";
$password="";
$db_name='testingdatabase';
$conn =mysqli_connect($host, $user, $password, $db_name);
if(!$conn){
    die("connectionfailed".mysqli_connect_error());
}
//get data from the form
$name=$_POST['name'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$country=$_POST['country'];
//inset data to database
$sql= "INSERT INTO testing(name,email, dob, country) VALUES('$name','$email','$dob','country')";

//the notification once one submits their data
if(mysqli_query($conn,$sql)){
    echo 'Your information received succesfully';
}
else{
    echo 'Error'.$sql."<br>".mysqli_error($conn);
}
/*$to = $email;
$subject = "Confirmation Message";
$message = "Thank you for signing up, $name!";
$headers = "From: webmaster@example.com" . "\r\n" .
           "Reply-To: webmaster@example.com" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);

// Close database connection
// mysqli_close($conn);*/
 ?>
