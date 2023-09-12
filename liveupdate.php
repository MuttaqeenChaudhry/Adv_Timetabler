<?php

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
$Day=$_POST['Day'];
$Time=$_POST['Time'];
$Semester=$_POST['Semester'];
$Course=$_POST['Course'];


if($Day=='course1')
{
    $Query2="UPDATE livetable_fe_8 SET course1='$Course' WHERE Time='$Time'";
    $Execute2 = mysqli_query($conn,$Query2);
    if($Execute2==True)
{ 
    
        echo '<div style="position:absolute; right:0%; bottom:0%">
    <h1 style="color:#f2f2f2;font-size:24px">Data Updation Successfull</h1>
       </div>';
    }
    elseif($Execute2==FALSE)
    {
        echo '<div style="position:absolute; right:0%; bottom:0%">
        <h1 style="color:#f2f2f2;font-size:30px;margin:auto;"> Updation Failed</h1>
           </div>';
    }  
}

elseif($Day=='course2')
{
    $Query2="UPDATE livetable_fe_8 SET course2='$Course' WHERE Time='$Time'";
    $Execute2 = mysqli_query($conn,$Query2);
    if($Execute2==True)
{ 
    
        echo '<div style="position:absolute; right:0%; bottom:0%">
    <h1 style="color:#f2f2f2;font-size:24px">Data Updation Successfull</h1>
       </div>';
    }
    elseif($Execute2==FALSE)
    {
        echo '<div style="position:absolute; right:0%; bottom:0%">
        <h1 style="color:#f2f2f2;font-size:30px;margin:auto;"> Updation Failed</h1>
           </div>';
    }  
}

elseif($Day=='course3')
{
    $Query2="UPDATE livetable_fe_8 SET course3='$Course' WHERE Time='$Time'";
    $Execute2 = mysqli_query($conn,$Query2);
    if($Execute2==True)
{ 
    
        echo '<div style="position:absolute; right:0%; bottom:0%">
    <h1 style="color:#f2f2f2;font-size:24px">Data Updation Successfull</h1>
       </div>';
    }
    elseif($Execute2==FALSE)
    {
        echo '<div style="position:absolute; right:0%; bottom:0%">
        <h1 style="color:#f2f2f2;font-size:30px;margin:auto;"> Updation Failed</h1>
           </div>';
    }  
}

elseif($Day=='course4')
{
    $Query2="UPDATE livetable_fe_8 SET course4='$Course' WHERE Time='$Time'";
    $Execute2 = mysqli_query($conn,$Query2);
    if($Execute2==True)
{ 
    
        echo '<div style="position:absolute; right:0%; bottom:0%">
    <h1 style="color:#f2f2f2;font-size:24px">Data Updation Successfull</h1>
       </div>';
    }
    elseif($Execute2==FALSE)
    {
        echo '<div style="position:absolute; right:0%; bottom:0%">
        <h1 style="color:#f2f2f2;font-size:30px;margin:auto;"> Updation Failed</h1>
           </div>';
    }  
}

elseif($Day=='course5')
{
    $Query2="UPDATE livetable_fe_8 SET course5='$Course' WHERE Time='$Time'";
    $Execute2 = mysqli_query($conn,$Query2);
    if($Execute2==True)
{ 
    
        echo '<div style="position:absolute; right:0%; bottom:0%">
    <h1 style="color:#f2f2f2;font-size:24px">Data Updation Successfull</h1>
       </div>';
    }
    elseif($Execute2==FALSE)
    {
        echo '<div style="position:absolute; right:0%; bottom:0%">
        <h1 style="color:#f2f2f2;font-size:30px;margin:auto;"> Updation Failed</h1>
           </div>';
    }  
}

   


else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();
?> 