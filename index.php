<?php
if(isset($_POST['t23']))
{
    $con = mysqli_connect("localhost","root","","timetabler_db");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query1 = " SELECT * FROM fe_teachers WHERE teacher_id = '$username' && Password = '$password' ";
    $query2 = " SELECT * FROM fah_teachers WHERE teacher_id = '$username' && Password = '$password' ";
    $query3 = " SELECT * FROM fms_teachers WHERE teacher_id = '$username' && Password = '$password' ";
    $query4 = " SELECT * FROM fss_teachers WHERE teacher_id = '$username' && Password = '$password' ";
    $query5 = " SELECT * FROM fol_teachers WHERE teacher_id = '$username' && Password = '$password' ";
    $result1 = mysqli_query($con,$query1);
    $result2 = mysqli_query($con,$query2);
    $result3 = mysqli_query($con,$query3);
    $result4 = mysqli_query($con,$query4);
    $result5 = mysqli_query($con,$query5);

    if(mysqli_num_rows($result1) > 0)
    {
           session_start();
           $row = mysqli_fetch_array($result1);
           $_SESSION['user']= $row['teacher_id'];
           if(!$con)
           { 
            die("could not connect database".mysql_error());
           }
           else
           {
            echo"<script>location.href='Faculty(FE&CS).php'</script>";
          }
    }

    else if( $username == "iamfah" && $password == "123")
    {
        session_start();
        $_SESSION['user']="iamfah";
        $con = mysqli_connect("localhost","root","","timetabler_db");
        if(!$con)
        { 
        die("could not connect database".mysql_error());
        }
  
        else
        {
        echo"<script>location.href='Faculty(FAH).php'</script>";
        }   
    }

    else if( $username == "iamfms" && $password == "123")
    {
        session_start();
        $_SESSION['user']="iamfms";
        $con = mysqli_connect("localhost","root","","timetabler_db");
        if(!$con)
        { 
        die("could not connect database".mysql_error());
        }
        else
        {
        echo"<script>location.href='Faculty(FMS).php'</script>";
        }
    }

    else if( $username == "iamfss" && $password == "123")
    {
        session_start();
        $_SESSION['user']="iamfss";
        $con = mysqli_connect("localhost","root","","timetabler_db");
        if(!$con)
        { 
        die("could not connect database".mysql_error());
        }
        else
        {
        echo"<script>location.href='Faculty(FSS).php'</script>";
        }
    }

    else if( $username == "iamfol" && $password == "123")
    {
        session_start();
        $_SESSION['user']="iamfol";
        $con = mysqli_connect("localhost","root","","timetabler_db");
        if(!$con)
        { 
        die("could not connect database".mysql_error());
        } 
        else
        {
        echo"<script>location.href='Faculty(FoL).php'</script>";
        }
    }

    else
    {

        $error[] = 'Incorrect Credentials, Try Again!';
    }
}

?>


  display: flex;
    align-items: flex-start;
    justify-content: center;
    #f4f6f9(yellowing)