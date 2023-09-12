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
        <title>Staff </title>
        <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("bkimg.jpg");
  background-size: cover;
}
.topnav {
  overflow: hidden;
  background-color:rgba(44, 130, 201, 1);
  height: 70px;
  border: 3px solid #3333ff
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 35px;
  font-weight: bold;
}

.topnav-right {
  float: right;
}
fieldset { 
	background: #FAFAFA;
	padding: 10px;
   margin:auto;
   max-width:450px;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid  rgba(44, 130, 201, 1);
}
.logingout{
    border-radius: 5px;
    border: 3px solid #18010f;
    background: transparent;
    margin: 0px 8px;
}

.logingout:hover {
    background-color:rgb(73, 25, 21);
    color: white;
}



 </style>
</head>
<body>
<div class="topnav">
            <a class="active" href="home.html"><img src="ic_teacher.png" height="40px" width="35px"></a>
            <a href="teachers.php">Teachers</a>
            <div class="topnav-right">
              <a class="logingout"href="logout.php">Logout</a>
            </div>
          </div>

<form>
    <button type="submit" formaction="teachers.php" style="margin:15px;height: 30px;width: 100px;cursor:pointer;border-radius:15px;
border: 3px solid #3333ff;background-color:rgba(44, 130, 201, 1);color:#f2f2f2;font-size:17px;">Back</button>
</form>  
<form method="post" action="teachersadd.php">  
<fieldset>
  <input type="text" name="id" placeholder=" Enter Teacher ID" style="width:100%;height:30px;
   border: 2px solid  rgba(44, 130, 201, 1); border-radius:3px;  background:transparent;"  required>
  <br><br>
   <input type="text" name="category" placeholder=" Enter Name"  style="width:100%;height:30px;
   border: 2px solid  rgba(44, 130, 201, 1); border-radius:3px;  background:transparent;"  required>
  <br><br>
   <input type="text" name="type" placeholder=" Enter Data3(Varchar)"  style="width:100%;height:30px;
   border: 2px solid  rgba(44, 130, 201, 1); border-radius:3px;  background:transparent;"  required>
  <br><br>
  <select name="noise"  style="width:100%;height:30px;
   border: 2px solid  rgba(44, 130, 201, 1); border-radius:3px;  background:transparent;">
  <option value="Dr">Dr</option>
  <option value="Engr">Engr</option>
  <option value="Lecturer">Lecturer</option>
</select>
  <br><br>
  <input type="number" name="cost" placeholder=" Enter Data4(Int)"  style="width:100%;height:30px;
   border: 2px solid  rgba(44, 130, 201, 1); border-radius:3px;  background:transparent;"  min="0" required>
  <br><br>
  <input type="submit" name="submit" value="Save" style="width:100%;height:30px;
   border: 2px solid  rgba(44, 130, 201, 1); border-radius:3px; cursor:pointer;background-color:rgba(44, 130, 201, 1)">&ensp; 
  </fieldset> 
</form> 
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
 // define variables and set to empty values
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Petshop_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
$id = $_POST["id"];
  $category = $_POST["category"];
  $type= $_POST["type"];
  $noise = $_POST["noise"];
  $cost = $_POST["cost"];




$sql = "INSERT INTO pets( pet_id,pet_category,cost)
VALUES ('$id','$category','$cost');
INSERT INTO birds(pet_id,type,noise)
 VALUES('$id','$type','$noise')";
if ($conn->multi_query($sql) == TRUE) {
  echo'<div>
  <h1 style="color:#f2f2f2;font-size:20px; font-family: "Roboto", sans-serif;margin:auto;">New Record for ID='
  .$id. ' Inserted Successfully</h1>
     </div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>
