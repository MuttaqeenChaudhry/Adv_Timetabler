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

$table_id=$_POST["id_field"];

$Query2="select count(*) from faculty_fe  where teacher_id='$table_id'";
$Query3="select count(*) from faculty_fah where teacher_id='$table_id'";
$Query4="select count(*) from faculty_fms where teacher_id='$table_id'";
$Query5="select count(*) from faculty_fss where teacher_id='$table_id'";
$Query6="select count(*) from faculty_fol where teacher_id='$table_id'";

$Execute2 = mysqli_query($conn,$Query2);
$Execute3 = mysqli_query($conn,$Query3);
$Execute4 = mysqli_query($conn,$Query4);
$Execute5 = mysqli_query($conn,$Query5);
$Execute6 = mysqli_query($conn,$Query6);

$count2 = mysqli_fetch_row($Execute2);
$count3 = mysqli_fetch_row($Execute3);
$count4 = mysqli_fetch_row($Execute4);
$count5 = mysqli_fetch_row($Execute5);
$count6 = mysqli_fetch_row($Execute6);


if($count2[0]>=1)
{ 
    
    $sql =
    "DELETE FROM faculty_fe WHERE teacher_id='$table_id'";
    if ($conn->query($sql) == TRUE) {
        echo '<div style="position:absolute; right:0%; bottom:0%">
    <h1 style="color:#f2f2f2;font-size:24px">Data Deletion Successfull</h1>
       </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

elseif($count3[0]==1)
{ 
    
    $sql =
    "DELETE FROM faculty_fah WHERE teacher_id='$table_id'";

    if ($conn->query($sql) == TRUE) {
        echo '<div style="position:absolute; right:0%; bottom:0%">
    <h1 style="color:#f2f2f2;font-size:30px;sans-serif;margin:auto;">Data Deletion Successfull</h1>
       </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

elseif($count4[0]==1)
{ 
    
    $sql =
    "DELETE FROM faculty_fms WHERE teacher_id='$table_id'";

    if ($conn->query($sql) == TRUE) {
        echo '<div style="position:absolute; right:0%; bottom:0%">
    <h1 style="color:#f2f2f2;font-size:30px;margin:auto;">Data Deletion Successfull</h1>
       </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

elseif($count5[0]==1)
{ 
    
    $sql =
    "DELETE FROM faculty_fss WHERE teacher_id='$table_id'";

    if ($conn->query($sql) == TRUE) {
        echo '<div style="position:absolute; right:0%; bottom:0%">
    <h1 style="color:#f2f2f2;font-size:30px;margin:auto;">Data Deletion Successfull</h1>
       </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

elseif($count6[0]==1)
{ 
    
    $sql =
    "DELETE FROM faculty_fol WHERE teacher_id='$table_id'";

    if ($conn->query($sql) == TRUE) {
        echo '<div style="position:absolute; right:0%; bottom:0%">
    <h1 style="color:#f2f2f2;font-size:30px;margin:auto;">Data Deletion Successfull</h1>
       </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


else
{
    echo '<div style="position:absolute; right:0%; bottom:0%">
    <h1 style="color:#f2f2f2;font-size:30px;margin:auto;"> Data not found</h1>
       </div>';
}
$conn->close();
?> 