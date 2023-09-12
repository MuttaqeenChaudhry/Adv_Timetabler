<?php
if(isset($_POST['t23']))
{
    $con = mysqli_connect("localhost","root","","timetabler_db");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query3 = " SELECT * FROM fms_teachers WHERE teacher_id = '$username' && Password = '$password' ";
    $result3 = mysqli_query($con,$query3);

    if(mysqli_num_rows($result3) > 0)
    {
           session_start();
           $row = mysqli_fetch_array($result3);
           $_SESSION['user']= $row['teacher_id'];
           if(!$con)
           { 
            die("could not connect database".mysql_error());
           }
           else
           {
            echo"<script>location.href='Faculty(FMS).php'</script>";
          }
    }

    else
    {

        $error[] = 'Incorrect Credentials, Try Again!';
    }
}

?>


<html>
<head>
<title>
	Login
</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <style>


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

* {
  font-family : 'Poppins', sans-serif;
  text-decoration: none;
}  

@keyframes login_page_container_animation {
  0% {top: 0%;}
  25% {top: 18%;}
  50% {top: 0%;}
  100% {top: 0%;}
  
}

@keyframes hr_animation{
  0% {top: 0%;}
  25% {top: 6%;}
  50% {top: 8%;}
  100% {top: 5%;}

}

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
  background-image: url("3322.jpg");
  background-size: cover;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; 
  /*background-color:rgba(43, 3, 3, 0.945);*/
  
}

.hero{
    height: 100vh;
    background-image: linear-gradient(rgba(12,3,51,1),rgba(12,3,51,0.3));
    position: relative;
    
}  

.topnav {
  position: absolute;
  overflow: hidden;
  height: 70px;
  width: 100%;
  border-width: 0px 0px 3px 0px;
  border-style: solid;
  border-color: #f4f6f9 ;
  background-color: white;
}

.navbartitle{

    position: absolute;
    margin-top: 14px;
    margin-left: 535px;
    background: transparent;
    color: #3c4858 !important;
    text-decoration: none;
    font-size: 32px;
    cursor: default;
    
}

.topnav-bel{
  position: absolute;
  margin-top: 90px;
  margin-left: 5px;
}

.topnav-bel button{
  border-radius: 5px;
  border: 1px solid transparent;
  padding : 14px 20px;
  transition: all 1s cubic-bezier(.25,.8,.25,1);
  background : #2c9fdd;
  color: #fff;
}

.topnav-bel button:hover{
  border-color: #fff;
  background-color: #055C9D; 
}

.topnav-bel a{
  text-decoration: none;
}

.login-page {
  position: absolute;
  width: 650px;
  height: 600px;
  margin-top : 73px;
  margin-left : 455px;
  background-image: url("backok.jpg");
  background-size: cover;
  border-bottom-right-radius: 900px; 
  border-bottom-left-radius: 900px;
  border-width: 0px 1px 1px 1px;
  border-style: solid;
  border-color: transparent;
  text-align: center;
  transition: all 1s cubic-bezier(.25,.8,.25,1);
  
  
}

.login-page:hover{
  outline: none !important;
  border-color: white;
}

.form {
  position: absolute;
  max-width: 360px;
  margin-left: 179px;
  margin-top: 50px;
  animation-name: login_page_container_animation;
  animation-duration: 1.5s;
  animation-iteration-count: 1;
  
}

.form input {
  font-size: 14px;
  width: 100%;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  border-radius: 15px;
  border: 1px solid white;
}

.form input:focus{
  outline : none !important;
  border-color: #2c9fdd;
}

.form button {
  text-transform: capitalize;
  background : #2c9fdd;
  
  width: 75px;
  padding: 15px;
  margin: 10px;
  color: #f2f2f2;
  font-size: 14px; 
  border-radius : 5px;
  border-width: 1px 1px 1px 1px;
  border-style: solid;
  border-color: transparent;
  -webkit-transition: all 0.3 ease;
  cursor: pointer;
  transition: all 1s cubic-bezier(.25,.8,.25,1);
  
}

.form button:hover {
    border-color: #fff;
    background-color: #055C9D; 
}

.error-msg{
   margin:10px 0;
   display: block;
   background: #8e44ad;
   color:#fff;
   border-radius: 5px;
   font-size: 12px;
   padding:10px;
}


</style>
</head>
<body>
<div class="hero">
    <div class="topnav">
      <img style="padding:14px 16px" src="clockpicture.jpg" height="40px" width="35px">
      <a class="navbartitle">Only For Faculty(FMS)</a>
    </div>
    <span class="topnav-bel"><a href="home.php"><button>Back</button></a></span>
 <div class="login-page">
   <div class="form">
     <form class="login-form" action="" method="POST">
      <h1 style = "color: #f2f2f2;">Login</h1>
      <p style="color: #f2f2f2">Username<input type="text" name="username" placeholder="username" required/></p>
      <p style="color: #f2f2f2">Password<input type="password"  name="password" placeholder="password" required/></p>
      <button type="submit"  name="t23" >Go</button><br>
      <?php
      if(isset($error)){
         foreach($error as $error)
         {
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
     </form>
     
   </div>
  </div>
</div>
</body>	
</html>