<?php
 session_start();
 if(isset($_SESSION['user']))
 {

 }
 else{
  echo"<script>location.href='login.html'</script>";
 }
?>
<!doctype html>
<html>
<head>
  <title>FAH</title>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

* {
  font-family : 'Poppins', sans-serif;
  text-decoration: none;
}

body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background-image : url("3322.jpg");
  background-size: cover;
}

.topnav {
  position: absolute;
  overflow: hidden; 
  background-size: auto auto;
  background-color : white;
  border-width: 0px 0px 2px 0px;
  border-style : solid;
  border-color: #f4f6f9 ;
  height: 70px;
  width: 100%;
  
}

.menu-icon {
    position: absolute;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    padding: 14px 16px;
    margin-left: 0px;
    background: transparent;
}

.topnav h3{
  position: absolute;
  margin-left: 60px;
  margin-top: 20px;
  font-size: 25px;
  
}

.topnav span{
   background: #8e44ad;
   color:#fff;
   border-radius: 5px;
   padding:0 15px;
   text-transform: uppercase;
}

.navbartitle{
    position: absolute;
    margin-left: 513px;
    margin-top: 10px;
    background: transparent;
    color: #3c4858 !important;
    padding: 0px 16px;
    text-decoration: none;
    font-size: 32px !important;
    cursor: default;
    
}

.topnav-right {
    position : absolute;
    margin-top: 18px;
    margin-left: 1410px;
}

.logout-link {
    text-decoration: none;
    text-align: center;
    padding: 10px 16px;
    color: #fff;
    font-size: 24px;
    background : #8e44ad;
    border-radius : 12px;
    transition: all 1s cubic-bezier(.25,.8,.25,1);
   
}

.logout-link:hover {
    background-color: #D43790;  
}

.form-container{
  position: absolute;
  margin-top: 150px;
  margin-left: 20px;
  padding-top: 10px;
  background-color : #fff;
  border-radius: 10px;
  border: 1px solid  #2c9fdd;
}

fieldset {
	padding: 16px;
  width:360px;
  border: none; 
  
}

fieldset b{
  position: absolute;
  color: grey;
  padding-top: 3px;
  font-size : 13px !important;
}

fieldset input{
  margin-top: 5px;
  width:350px;
  height:30px;
  border-radius:3px;
  border: 1px solid grey;
}

fieldset input:focus{
  outline: none !important;
  border-color: #2c9fdd;
}

fieldset select{
  margin-top: 5px;
  width:356px;
  height:30px;
  border: 1px solid grey;
  border-radius:3px;
  background:transparent;
}

fieldset select:focus{
  outline: none !important;
  border-color: #2c9fdd;;
}

.req_button{
  position: absolute;
  margin-left: 105px;
  border: none;
  width: 155px;
  color:#fff;
  height:30px;
  border-radius:3px;
  cursor:pointer;
  background-color:#2c9fdd;
  transition: all 1s cubic-bezier(.25,.8,.25,1);
}

.req_button:hover{
  background-color: #055C9D;
}

.lamp_img{
    margin-top: 630px;
    margin-right: 10px;
    box-shadow: 2px 2px 20px black;
    border-radius: 15px;
    border: solid;
    height: 50px;
    width: 50px;
    background: transparent;
}

 </style>
</head>
<body>
<div class="topnav">
        <img class="menu-icon" src="ic_teacher.png" height="40px" width="35px">
        <h3><span><?php echo $_SESSION['user'] ?></span></h3>
        <h1 class="navbartitle" href="home.html">Faculty of Arts & Humanities</h1>
            <div class="topnav-right">
              <a class="logout-link" href="home.php">Logout</a>
            </div>
      </div>
      <div class="form-container">  
  <form method="post" id ="formid">  
  <fieldset>
   <b>Input ID</b><br>
  <input type="text" name="teacher_id" placeholder=" Enter Teacher ID" required>
  <br>
  <b>Day</b>
  <br>
  <select name="Day">
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursday</option>
  <option value="Friday">Friday</option>
  </select>
  <br>
  <b>Time</b>
  <br>
  <select name="Time">
  <option value="08:30 - 09:45">08:30 - 09:45</option>
  <option value="08:55 - 11:10">08:55 - 11:10</option>
  <option value="11:20 - 12:35">11:20 - 12:35</option>
  <option value="12:45 - 02:00">12:45 - 02:00</option>
  </select>
  <br>
  <b>Slot</b>
  <br>
  <select name="Slots">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="3">4</option>
  </select>
  <br><br>
  <input type="submit" class="req_button" value="Request" name="submit">&ensp;
  </fieldset> 
</form> 
</div>
<img class="lamp_img" src="idea.gif"><span style="position: absolute;margin-left:0px;margin-top: 645px; color: white;font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: bold;">Notification Bar</span>
</body>
</html>


<?php
if(isset($_POST["submit"]))
{
 // define variables and set to empty values
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "timetabler_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
  $teacher_id = $_POST["teacher_id"];
  $Day = $_POST["Day"];
  $Time= $_POST["Time"];
  $Slots = $_POST["Slots"];

$sql = "INSERT INTO faculty_fah(teacher_id,Day,Time,Slots) VALUES('$teacher_id','$Day','$Time', '$Slots')";
if ($conn->query($sql) == TRUE) {
  echo'<div style="position:absolute; margin-top:5px; margin-left:0px;">
  <h1 style="color:#f2f2f2;font-size:20px; font-family: Poppins, sans-serif; margin:auto;">Dear! '
  .$teacher_id. ' , Your Request has been recieved and you will be notified upon Approval. </h1>
     </div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>
