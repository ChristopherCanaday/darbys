<!DOCTYPE html>
<html lang="en">
<head>
  
  <!--  Meta  -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Nav Bar -->
  <ul>
      <li><a class="fadebutton right" href="dachshund.html">Dachshund</a></li>
      <li><a class="fadebutton right" href="shiba.html">Shiba Inu</a></li>
      <li><a class="fadebutton right" href="corgi.html">Corgi</a></li>
      <li><a class="fadebutton right">Siberian Husky</a></li>
      <li><a class="fadebutton right" href="beagle.html">Beagle</a></li>
      <li><a class="fadebutton right" href="index.html">Home</a></li>
      <li><a class="fadebutton left active">Let Us Contact You!</a></li>
    </ul>
    <!-- Title-->
	<title>Contact - Darby's</title>
	
  <!-- Response to Form -->

	<h1>We'll Contact You Soon</h1>
	<div class="body-border">
	  
   <p>   Thank you! We will do our best to get in touch with you soon! 
    </p>
	  
      <?php
$servername = "sql103.gungoos.com";
$username = "gungo_23755661";
$password = "Hello546F";
$dbname = "gungo_23755661_darby";
$first_name = $_POST["first_name"];
$last_name= $_POST["last_name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$dog=$_POST["dog"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO customers (first_name, last_name, dog_choice)
VALUES ('$first_name','$last_name','$dog');";

$sql .= "INSERT INTO contact (customer_id, email, phone_number) 
VALUES (last_insert_id(),'$email','$phone');";

$sql .= "INSERT INTO customer_contact (first_name, last_name, email, phone_number,dog_choice)
VALUES ('$first_name','$last_name','$email','$phone','$dog');";

$sql .= "DROP TABLE adoption_application;";

$sql .= "CREATE TABLE adoption_application AS 
SELECT 
breed_name.breed,
breed_name.name, 
customer_contact.first_name, 
customer_contact.last_name, 
customer_contact.email, 
customer_contact.phone_number, 
customer_contact.dog_choice
FROM breed_name 
JOIN customer_contact
WHERE
breed_name.name = customer_contact.dog_choice; ";

if ($conn->multi_query($sql) === TRUE) {
    echo "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

  </div>
  
	<!--  Styles  -->
  <link rel="stylesheet" href="styles/index.css">
  <style>
		h1 {
		  margin-top: 100px;
		  padding: 15px 15px;
		  text-align: center;
		  font-size: 55px;
		}
    
    html {
      height: 100%;
      background-image: url("pictures/pawprints.jpg");
      background-position: center;
      background-attachment: fixed;
    }

    p{
      font-size: 25px;
      margin: 0 3%;
      padding-bottom: 20px;
    }

.error{
  color: #FF0000;
}

.body-border {
color: rgb(215,212,212);
}
	</style>
</head>
<body>
</body>
</html>		