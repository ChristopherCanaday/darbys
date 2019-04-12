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
	
  <!-- Form Area -->

	<h1>Let Us Contact You!</h1>
	<div class="body-border">
	  <form method="post" action="test.php">
	          First Name:
	          <input type="text" placeholder="ex. John" name="first_name" required>
	          <br><br>
	          Last Name:
	          <input type="text" placeholder="ex. Smith" name="last_name" required>
	          <br><br>
	           Email:
	          <input type="mail" placeholder="ex. xyz@fws.com" name="email" required>
	          <br><br>
	          Phone Number:
	          <input type="phone" placeholder="ex. 921-637-1732" name="phone" required>
	          <br><br>
              Select Dog:
              <select name="dog" required>
                <option disabled selected hidden>Please Choose...</option>
                <option disabled>Shiba Inu's:</option>
                <option value="akira">Akira</option>
                <option value="kevin">Kevin</option>
                <option value="akiko">Akiko</option>
                <option value="sora">Sora</option>
                <option disabled>Corgi's:</option>
                <option value="toby">Toby</option>
                <option value="mack">Mack</option>
                <option value="daisy">Daisy</option>
                <option value="darby">Darby</option>
                <option disabled>Dachshund's:</option>
                <option value="buster">Buster</option>
                <option value="joey">Joey</option>
                <option value="lucy">Lucy</option>
                <option value="trudy">Trudy</option>
                <option disabled>Siberian Huskies:</option>
                <option value="snow">Snow</option>
                <option value="edger">Edger</option>
                <option value="willow">Willow</option>
                <option value="dolly">Dolly</option>
                <option disabled>Beagle's</option>
                <option value="austin">Austin</option>
                <option value="frank">Frank</option>
                <option value="twiggy">Twiggy</option>
                <option value="mia">Mia</option>
              </select>
              <br><br>
	          <input type="Submit">
	  </form>
	  
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