<?php
 session_start();
 if(isset($_SESSION['user']))
 {

 }
 else{
  echo"<script>location.href='login.html'</script>";
 }
?>
<html>
    <head>
        <title>Nos </title>
        <style>
            body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("bkimg.jpg");
  background-size: cover;
}
.topnav {
  overflow: hidden;
  background-color: #8d2663;
  height: 70px;
  border: 3px solid #b40a70;
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    outline:#b40a70 solid 5px;
    width: 100%;
    margin:5px ;
    background: #FAFAFA;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
th{
    background-color:#8d2663 ;
}


.custombutton{
  margin:25px;
  
}input[type=text] {
    width: 15%;
    padding: 12px 20px;
    margin:8px ;
    border: 2px solid red;
    background:transparent;
    color:#000000;     
}
input[type=number] {
    width: 15%;
    padding: 12px 20px;
    margin:8px ;
    border: 2px solid red;
    background:transparent;
    color:#000000;        
}
.logingout{
    border-radius: 5px;
    border: 3px solid #18010f;
    background: transparent;
    margin: 0px 8px;
}

.logingout:hover {
    background-color:rgba(31, 58, 147, 1);
    color: white;
}


</style>    
</head>
<body>
<div class="topnav">
            <a class="active" href="home.html"><img src="phoneicon.png" height="40px" width="35px"></a>
            <a href="phone.php">Phone Numbers</a>
            <div class="topnav-right">
              <a class="logingout" href="logout.php">Logout</a>
            </div>
          </div> 
          <div class="custombutton">

<form>
<button  style=" height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid  #b40a70;background-color: #8d2663;color:#f2f2f2;font-size:15px;" formaction="notifications.php">Back</button>
<button   style=" height: 50px;margin-left:20px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid  #b40a70;background-color: #8d2663;color:#f2f2f2;font-size:15px;"formaction="phoneadd.php">Add New Number</button>
</form>
</div>
    <?php
   
$con = mysqli_connect("localhost","root","","Petshop_management");
if(!$con)
{ 
die("could not connect".mysql_error());
}
$var=mysqli_query($con,"select * from phone ");
echo "<table>";
echo "<tr>
<th>cs_ID</th>
<th>cs_phone</th>
</tr>";
if(mysqli_num_rows($var)>0){
    while($arr=mysqli_fetch_row($var))
    { echo "<tr>
    <td>$arr[0]</td>
    <td>$arr[1]</td>
    </tr>";}
    echo "</table>";
    mysqli_free_result($var);
}

mysqli_close($con);
    
    
?>
<form action="deletephone.php" method="post">
<input  type="text" name="t1" placeholder="Enter the id to delete" required>
<input   type="number" name="t2" placeholder="Enter the number" required>
    <input  style="width:75px;height:44px;cursor:pointer;border-radius:15px;
border: 3px solid  #b40a70;background-color: #8d2663;color:#f2f2f2;font-size:15px;"type="submit" value="Delete">

</form> 

</body>
</html>