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
<title>ATT Update </title>
<style>


@media (min-aspect-ratio: 16/9){
    .back-video{
        width: 100%;
        height: auto;
    }
}

@media (max-aspect-ratio: 16/9){
    .back-video{
        width: auto;
        height: 100%;
    }
}

@font-face {
    font-family: 'hacked';
    src: url('hacked-kerx-webfont.woff2') format('woff2'),
         url('hacked-kerx-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'anakcute';
    src: url('anakcute-513pv-webfont.woff2') format('woff2'),
         url('anakcute-513pv-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'twitch';
    src: url('rotwimchregular-wyr3n-webfont.woff2') format('woff2'),
         url('rotwimchregular-wyr3n-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'ape';
    src: url('apemount-wypm9-webfont.woff2') format('woff2'),
         url('apemount-wypm9-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}    

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("bkimg.jpg");
  background-size: cover;
  }

  .hero{
    height: 100vh;
    background-image: linear-gradient(rgba(12,3,51,0.3),rgba(12,3,51,0.3));
    position: relative;
    display: flex;
    align-items: flex-start;
    justify-content: center;
} 

.topnav {
  position: absolute;
  overflow: hidden;
  background-image: url("2676.jpg");
  height: 70px;
  width: 100%;
  border-width: 0px 0px 3px 0px;
  border-style: solid;
}

.menu-icon {
    position: absolute;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    padding: 14px 16px;
    left: 45%;
    border-width: 0px 0px 0px 3px;
    border-style: solid;
    background: transparent;
}

.navbartitle{
    position: absolute;
    left: 50%;
    font-family: 'hacked';
    border-width: 0px 3px 0px 0px;
    border-style: solid;
    border-color: black;
    border-radius: 5px;
    background: transparent;
    color: black;
    padding: 18px 16px;
    text-decoration: none;
    font-size: 35px;
    
}

.navbartitle:hover {
    background-color:rgba(31, 58, 147, 1);
    font-weight: 700;
    color: white;
}

.logout-container {
    cursor: default;
    float: right;
    display: inline;
    border-width: 0px 0px 0px 3px;
    border-radius: 5px;
    border-style: solid;
   
}

#logout-icon1 {
    cursor: pointer;   
    text-decoration: none;
    padding: 14px 0px 14px 16px;
    background: transparent;
}

#logout-icon2 {
    text-decoration: none;
    padding: 14px 16px 14px 0px;
    background: transparent;
}

.logoutmenu {
    position: absolute;
    align-items: center;
    border-width: 0px 0px 2px 2px;
    border-style: solid;
    border-radius: 5px;
    top : 9.7%;
    right: 0%;
    width: fit-content;
    height: fit-content;
    background-image: url("2676.jpg");
    background-size: 200px 480px;
    padding: 5px 5px;
    transition: top 1s;
}

.logoutmenu li{ 
    text-decoration: none;
    color: black;
    font-size: 20px;
    padding: 32px 0px 10px 40px;
    font-family: 'ape';
    cursor: pointer;
}

.logoutmenu li:hover{ 
    font-weight: 700;
}

.logout-close-links{
    position: absolute;
    height: 180px;
    width: 40px;
}

.logout-close-links img{
    padding-top: 20px;
    cursor: default;
    text-align: center;
}

#back-button{
  box-shadow: 2px 2px black;
  font-family:'ape';
  margin-left:20px; 
  height: 50px;
  width: 150px;
  cursor:pointer;
  border-radius:15px;
  background-image: url("2676.jpg");
  font-size:17px;
}

#back-button:hover{
  font-weight: 700;
}


fieldset { 
	background-image: url("1967.jpg");
	padding: 10px;
  margin-top: 150px;
  max-width: 593px;
	box-shadow: 2px 2px 20px black;
	border-radius: 10px;
}

fieldset input{
  width:100%;
  height:30px;  
  box-shadow: 2px 2px black;
  font-family:'ape';
  border-radius: 20px;
}

.back-video{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;

}

#updbtn{
  background-image: url("2676.jpg");
  width:100%;
  height:30px;
  box-shadow: 2px 2px black;
  font-family:'ape'; 
  border-radius:3px; 
  cursor:pointer;
}

#updbtn:hover{
  font-weight: 700;
}

</style>

</head>
<body>

<div class="hero">
    <video autoplay loop muted plays-inline class="back-video">
        <source src="smokey.mp4" type="video/mp4">
    </video>

      <div class="topnav">
           <img style="padding:14px 16px" src="clockpicture.jpg" height="40px" width="35px">
           <img class="menu-icon" src="ic_admin.png" height="40px" width="35px"><a  class="navbartitle" href="home.html">Admin</a>
           <div class="logout-container">
           <!-- <a class="logout" href="logout.php">Logout</a>-->
           <img id="logout-icon1" src="down-arrow.png" height="20px" width="20px" onclick="openmenu2()" ondblclick="closemenu2()">
           <a><img id="logout-icon2" src="usericon.png" height="40px" width="35px"></a>
           </div>
      </div>

      <div class="logoutmenu" id="menu2"> 
            <div class="logout-close-links">
              <img src="home_btn.png" height="40px" width="35px">
              <img src="logout_btn.png" height="40px" width="35px">
            </div>
        <a style="text-decoration:none" href="home.html"><li>HOME</li></a>
        <a style="text-decoration:none" href="login.html"><li>LOGOUT</li></a>
      </div>

    <form>
    <span style="position:absolute; top:20%; left:0%;"><button id="back-button" type="submit" formaction="admin.php">Back</button></span>
    </form>
 
    <form method="post" action="timetableupdate.php">  
    <fieldset>
    <input type="text" name="table_id" placeholder=" Enter Table ID" required  >
    <br><br>
    <input type="text" name="table_category" placeholder="Enter Table Category" required  >
    <br><br>
  
    <input type="text" name="breed"  placeholder="Enter Data3(Varchar)" required >
    <br><br>
    <input type="number" step=any name="weight"  placeholder="Enter Data4(Int)" style="width:280px;height:30px;
    border-radius:20px;" min="1" required >
 <input type="number" step=any name="height"  placeholder="Enter Data5(Int)" style="width:300px;height:30px;
   border-radius:20px;" min="15" required >
  <br><br>
  <input type="number" name="age"  placeholder="Enter Data6(Int)" style="width:280px;height:30px;
    border-radius:20px;"  min="1"required >
 
  <input type="text" name="fur"  placeholder="Enter Data7(Varchar)" style="width:300px;height:30px;
    border-radius:20px;"  required >
  <br><br>
  <input type="date" name="date_assigned"  placeholder="Enter Data8(Int)" style="width:100%;height:30px;
    border-radius:20px;" min="0"  required >
  <br><br>
  <input id="updbtn" type="submit" name="submit" value="Update">&ensp; 
  </fieldset>
  </form>
</div>  

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
  $table_id = $_POST["table_id"];
  $table_category = $_POST["table_category"];
  $breed= $_POST["breed"];
  $weight = $_POST["weight"];
  $height = $_POST["height"];
  $age = $_POST["age"];
  $fur= $_POST["fur"];
  $date_assigned = $_POST["date_assigned"];

  $Query2="select count(*) from timetable_add where table_id='$table_id'";
  $Execute = mysqli_query($conn,$Query2);
  $count = mysqli_fetch_row($Execute);

  if($count[0]==1)
  {
    $sql = "UPDATE timetable_add SET table_category='$table_category' ,date_assigned='$date_assigned' WHERE table_id='$table_id';
    UPDATE animals SET breed='$breed',weight='$weight',height='$height',age='$age',fur='$fur' WHERE table_id='$table_id'";
    if ($conn->multi_query($sql) == TRUE) {
      echo'<div style="position:absolute; left:40%; bottom:0%">
      <h1 style="color:#f2f2f2; font-size:30px; font-family: ape, sans-serif ; margin:auto;">'
      .$table_id. ' Updated Successfully</h1>
         </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  else{
    echo '<div style="position:absolute; left:40%; bottom:0%">
    <h1 style="color:#f2f2f2;font-size:30px; font-family: ape, sans-serif;margin:auto;">Given table_id not found</h1>
       </div>';
}


$conn->close();
}

?>