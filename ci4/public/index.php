<!DOCTYPE html>
<html>
<head>
 <link rel="icon" type="x-icon" href="rick.JPG">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title> Francis x MI211</title>
 
<style>
  .error {color: #FF0000;}
 /* Style the tab */
.tab {
  overflow: hidden;
  border: 5px solid #ccc;
  background-color: darkslateblue;
margin: 10px;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 20px;
 color: white;
font-family: courier;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
color: black;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
color: black;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
 /* end of tabs contents*/
  * {box-sizing: border-box;}

/* objects */
.header {
  overflow: hidden;
  background-color: darkslateblue;
  padding: 15px 10px;
 border: 3px solid white;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
  
body {background-image: url('bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
 margin: 0;
  font-family: courier}

h1 {
color: white;  
font-family: courier;
margin: 10px;

}
p {
  color: white;
  font-family: courier;
  font-size: 110%;
  border: 5px solid white;
  padding: 20px;
  background-color: darkslateblue;
  margin: 10px;
}

img {
height: 100px;
background-color: darkslateblue;
border: 3px solid white;
margin: 1px;
}
  
a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}

</style>
</head>
 
<body>
  
    <div class="header"/*class content*/>
  <a href="#default" class="logo">Francis x MI211</a>
  <div class="header-right">
    <a class="active" href="https://www.facebook.com/francisanjose/" target="_blank">Facebook</a>
    <a href="https://www.twitch.tv/frncssj" target="_blank">Twitch</a>
    <a href="https://steamcommunity.com/profiles/76561198124432997/" target="_blank">Steam</a>
   <a href="https://www.instagram.com/francisanjose/" target="_blank">Instagram</a>
   <a href="https://twitter.com/francisanjose" target="_blank">Twitter</a>
  </div>
</div>
<h1><img src="d.jpg" alt="diego the doggo" style="height:200px"><img src="rick.JPG" alt="icon pic" align = "top"><img src="wg.png" alt="woot logo" align = "top"></h1>

 
<p>Click on the tabs to learn more about me!</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Name')">Name</button>
  <button class="tablinks" onclick="openCity(event, 'Age')">Age</button>
  <button class="tablinks" onclick="openCity(event, 'Course')">Course</button>  
  <button class="tablinks" onclick="openCity(event, 'Why')">Why this course?</button>
  <button class="tablinks" onclick="openCity(event, 'Hobbies')">Hobbies</button>
  <button class="tablinks" onclick="openCity(event, 'Resources')">Resources</button>
  <button class="tablinks" onclick="openCity(event, 'PHP')">PHP</button>
</div>

<div id="Name" class="tabcontent">
  <p><strong>Name: </strong> Francis</p>
</div>

<div id="Age" class="tabcontent">
  <p><strong>Age:</strong> 25</p> 
</div>

<div id="Course" class="tabcontent">
  <p><strong>Course:</strong> BSIT-MI</p>
</div>

<div id="Why" class="tabcontent">
  <p><strong>Why did you choose this course?<br></strong>The things I enjoy are mostly connected to computers that's why I want to pursue a career
related to it. I also believe IT will be the future for careers that's why I'm pursuing this course.</p>
</div>

<div id="Hobbies" class="tabcontent">
  <p><strong>Hobbies: </strong> playing PC Games/Online games, listening to music, playing a bit of guitar, hanging out with great friends, traveling</p> 
</div>

<div id="Resources" class="tabcontent">
  <p><strong>CSS Tutorial: </strong><a href="https://www.w3schools.com/css/default.asp" target="_blank">https://www.w3schools.com/css/default.asp</a>
  <br>
  <strong>HTML Tutorial: </strong><a href="https://www.w3schools.com/html/default.asp" target="_blank">https://www.w3schools.com/html/default.asp</a>
  <br>
   <strong>Responsive Header: </strong><a href="https://www.w3schools.com/howto/howto_css_responsive_header.asp" target="_blank">https://www.w3schools.com/howto/howto_css_responsive_header.asp</a>
<br>
   <strong>How to Create Tabs: </strong><a href="https://www.w3schools.com/howto/howto_js_tabs.asp" target="_blank">https://www.w3schools.com/howto/howto_js_tabs.asp</a>



</p>


</div>
<div id="PHP" class="tabcontent">
  <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <p><span class="error">* required field</span><br><br>
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
</p>  
</form>

<?php

echo "<p>Your Input:<br><br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

?>

 <script>
  /*loop content*/
 /*iterables content*/
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
 
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbsj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$name', '', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
 }
?>
</div>






<p id="demo">Date & time</p>

<script>
const d = new Date();
document.getElementById("demo").innerHTML = d;
</script>
</body>
</html>