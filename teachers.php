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
        <title>Teachers </title>
        <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-size : cover;
  background-image: url("bkimg.jpg");
  
}
.topnav {
  overflow: hidden;
  background-color:rgba(44, 130, 201, 1);
  height: 70px;
  border: 1px solid red;
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
    outline:#4d4dff solid 5px;
    background: #FAFAFA;
    width: 100%;
    margin:5px ;
    
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
th{
  background-color:rgba(44, 130, 201, 1);
}


.custombutton{
  margin:25px;
  
}
input[type=text] {
    width: 15%;
    padding: 12px 20px;
    margin:8px ;
    border: 2px solid red;
    background:transparent;
}
input[type=submit] {
    width: 75px;
    height: 44px;
    cursor: pointer;
    border-radius: 15px;
    border: 3px solid #3333ff;
    background-color: rgba(44, 130, 201, 1);
    color: #f2f2f2;
    font-size: 17px;
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
              <a class="logingout" href="logout.php">Logout</a>
            </div>
          </div>

        <div class="custombutton">    
<form>
<button  style="height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid #3333ff;background-color:rgba(44, 130, 201, 1);color:#f2f2f2;font-size:17px;" formaction="teachersadd.php">Add Staff</button>
<button     style="margin-left:20px; height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid #3333ff;background-color:rgba(44, 130, 201, 1);color:#f2f2f2;font-size:17px;" formaction="teachersupdate.php">Update Teachers</button>
</form> 
</div>

<?php
   
$con = mysqli_connect("localhost","root","","timetabler_db");
if(!$con)
{ 
die("could not connect".mysql_error());
}
$var=mysqli_query($con,"select T.table_id,T.table_category,A.type,A.noise, T.date_assigned from timetable_add T,birds A where T.table_id=A.pet_id ");
echo "<table border size=10>";
echo "<tr>
<th>Teacher_ID</th>
<th>Name</th>
<th>Data3</th>
<th>Data4</th>
<th>Data5</th>
</tr>";
if(mysqli_num_rows($var)>0){
    while($arr=mysqli_fetch_row($var))
    { echo "<tr>
    <td>$arr[0]</td>
    <td>$arr[1]</td>
    <td>$arr[2]</td>
    <td>$arr[3]</td>
    <td>$arr[4]</td>
    </tr>";}
    echo "</table>";
    mysqli_free_result($var);
}

mysqli_close($con);
        
?>

<div class="lastblock" style="margin-top:25px; border:none;">
<form action="deleteteachers.php" method="post">
    
    <input type="text" name="t1" placeholder="Enter the id to delete" required>
    <input type="submit" value="delete">
</form> 
</div>
</body>
</html>