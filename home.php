<!doctype html>
<html>
    <head>
        <title>
            Timetabler
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

* {
  font-family : 'Poppins', sans-serif;
  text-decoration: none;
}

@keyframes menulinks_button1_animation {
  0% {margin-left: 0px;}
  20% {margin-left: 20px;}
  40% {margin-left: 60px;}
  60%{margin-left: 62px;}
  80%{margin-left: 30px;}
  100%{margin-left: 0px;}
  
}

@keyframes menulinks_button2_animation {
  0% {margin-left: 0px;}
  20% {margin-left: 20px;}
  40% {margin-left: 60px;}
  60%{margin-left: 64px;}
  80%{margin-left: 30px;}
  100%{margin-left: 0px;}
  
}

@keyframes menulinks_button3_animation {
  0% {margin-left: 0px;}
  20% {margin-left: 20px;}
  40% {margin-left: 60px;}
  60%{margin-left: 66px;}
  80%{margin-left: 30px;}
  100%{margin-left: 0px;}
  
}

@keyframes menulinks_button4_animation {
  0% {margin-left: 0px;}
  20% {margin-left: 20px;}
  40% {margin-left: 60px;}
  60%{margin-left: 68px;}
  80%{margin-left: 30px;}
  100%{margin-left: 0px;}
  
}

@keyframes menulinks_button5_animation {
  0% {margin-left: 0px;}
  20% {margin-left: 20px;}
  40% {margin-left: 60px;}
  60%{margin-left: 70px;}
  80%{margin-left: 30px;}
  100%{margin-left: 0px;}
  
}

@keyframes menulinks_button6_animation {
  0% {margin-left: 0px;}
  20% {margin-left: 20px;}
  40% {margin-left: 60px;}
  60%{margin-left: 72px;}
  80%{margin-left: 30px;}
  100%{margin-left: 0px;}
  
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
  background-color: none;
  /*background-image: url("bimg1.jpg");*/
  background-size: cover;
}

.hero{
    height: 81vh;
    background-image: linear-gradient(rgba(12,3,51,0.3),rgba(12,3,51,0.3));
    position: relative;
    display: flex;
    align-items: flex-start;
    justify-content: center;
}

.topnav {
  position: fixed;
  top : 0;
  z-index: 2;
  overflow: hidden;
  background-color: white;
  background-size: auto auto;
  height: 70px;
  width: 100%;
  border-width: 0px 0px 3px 0px;
  border-style: solid;
  border-color: #f4f6f9 ;
}

.menu-icon {
    position: absolute;
    padding: 8px 16px;
    margin-left: 0px;
    margin-top: 9px;
    text-align: center;
    text-decoration: none;
    border-top-right-radius: 495px;
    border-bottom-right-radius: 0px;
    background : #8e44ad;
    transition: all 1s cubic-bezier(.25,.8,.25,1);
    
}

.menu-icon:hover {
    background-color: #D43790; 
    cursor: pointer;
  
}

.navbartitle{
    position: absolute;
    margin-top: 14px;
    margin-left: 703px;
    background: transparent;
    color: #3c4858 !important;
    text-decoration: none;
    font-size: 32px;
    cursor: default;
    
}

.topnav-right {
    position : absolute;
    margin-top: 18px;
    margin-left: 1400px;
}

.admin-link {
    text-decoration: none;
    text-align: center;
    padding: 10px 16px;
    color: #fff;
    font-size: 24px;
    background : #8e44ad;
    border-radius : 12px;
    transition: all 1s cubic-bezier(.25,.8,.25,1);
   
}

.admin-link:hover {
    background-color: #D43790;  
}

.menu-box {
    position: absolute;
    z-index: 2;
    top : 0%;
    left: 0%;
    width: 300px;
    height: 540px;
    border-width: 0px 2px 2px 0px;
    border-style: solid;
    border-bottom-right-radius: 5px;
    border-color: #3c4858;
    background-color: white;
    background-size: cover;
    padding: 5px 5px;
    transition: left 0.7s;
}
#span0{
    position: absolute;
    margin-left: 103px;
    margin-top: 130px;
}

#span1{
    position: absolute;
    left : 0px;
    top: 0px;
    text-decoration: none;
    cursor: default;
    color: #3c4858;
    background: transparent;
    padding : 10px 40px;
    border-width: 0px 3px 3px 0px;
    border-style: solid;
    border-color: #3c4858;
}

#span2{
    position: absolute;
    top: 0px;
    left: 263px;
    padding: 5px 5px;
    border-width: 0px 0px 3px 3px;
    border-bottom-left-radius: 3px;
    border-style: solid;
    border-color: #3c4858;
    cursor: pointer;
}


.menu-links {
    position: absolute;
    margin-top: 85px;
}

.menu-links button {
    margin: 15px;
    display: block;
    text-align: center;
    padding: 16px 32px;
    background-color : #2c9fdd; 
    color: #f2f2f2;   
    text-decoration: none; 
    font-size: 12px;
    margin-left: 0px;
    cursor: pointer;
    border-color: transparent;
    border-style: solid;
    border-radius: 5px;
    -webkit-transition-duration: 0.2s , Safari 0.4;
    transition: all 1s cubic-bezier(.25,.8,.25,1);
}

.menu-links button:hover{
    border-color: #3c4858;
    background-color: #055C9D;
}

.menu-links button:hover::after{
    display : inline-block;
}

.menu-links button::after{
    content: '(GO)->';
    color: #f2f2f2;
    width: fit-content;
    height: 10px;
    display: none;
    margin-left: 10px;
    margin-bottom: 0px;
}

.content{

    position: absolute;
    margin-top: 220px;
    width: 1200px;
    height: 200px;
}

.nav-links {
    position: absolute;

}

.nav-links button {
    margin: 20px;
    width: 350px;
    background-color : #2c9fdd; 
    color: #fff;
    padding: 10px 12px;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
    margin-left: 15px;
    -webkit-transition-duration: 0.2s , Safari 0.4;
    cursor: pointer;
    transition: all 1s cubic-bezier(.25,.8,.25,1);
    border-radius: 8px;
    border-width: 1px 1px 1px 1px;
    border-style: solid;
    border-color: transparent;
}

.nav-links button:hover{
    border-color: #fff;
    background-color: #055C9D; 
}

.back-video{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;

}

.live_table_container{
    position: absolute;
    background-color: #f4f6f9;
    width: 1519px;
    height: 640px;
}

.top-left-sec{
    position: absolute;
    background: white;
    width: 280px;
    height: 80px;
    border-bottom-right-radius: 150px;
    border-width: 0px 1px 1px 0px;
    border-color: #3c4858;
    border-style: solid;
}

.bottom-right-sec{
    position: absolute;
    z-index: 0;
    width: 500px;
    height: 450px;
    background-image : url("ap2.jpg");
    background-size: cover;
    background-position: center;
    margin-top: 190px;
    right: 0;
    border-style: solid;
    border-color: #3c4858;
    border-width : 1px 0px 0px 1px;
    border-top-left-radius: 585px; 
}

.lamp_img{
    margin: 15px 3px 20px;
    border-radius: 15px;
    height: 50px;
    width: 50px;
    background: transparent;
}


table{
    position: absolute;
    margin-top: 55px;
    border-collapse: collapse; 
    background: #fafafa;
    width:100%;
    height: 280px;
}

td, th {
    border: 3px solid #332b47;
    text-align: left;
    padding: 8px;
}

th{
  background-image: url("1967.jpg");
}

.drpdown{
    position: absolute;
    font-weight: bold;
    margin-top: 120px;
    color: white;
}

.drpdown label{
    color: #3c4858 !important;
}

.drpdown input{
    color: #fff;
    background : #8e44ad;
    border-radius : 12px;
    border: none;
    transition: all 1s cubic-bezier(.25,.8,.25,1);

}

.drpdown input:hover{
    background-color: #D43790;    
}

.live-view{
    position: absolute;
    margin-top: 150px;
    width: 1200px;
    height: 450px;
}

.footer{
    position: absolute;
    margin-top: 640px;
    background-image: url("444.jpg");
    background-size: cover;
    border-width: 3px 0px 0px 0px;
    border-style: solid;
    border-color: #f2f2f2;
    width: 1519px;
    height: 110px;
}

.footer hr{
    height:2px;background-color:#f2f2f2;border:none;
}

.footer p{
    color: #f2f2f2;
}

</style>
</head>

<body onload="closemenu()">

<div class="hero">
    <video autoplay loop muted plays-inline class="back-video">
        <source src="video2.mp4" type="video/mp4">
    </video>
    <div class="topnav">
        <img class="menu-icon" src="menuicon.png" height="40px" width="35px" onclick="openmenu();playanimations();">
        <h1  class="navbartitle" href="home.html">HOME</h1>
            <div class="topnav-right">
              <a class="admin-link" href="login(Admin).php">ADMIN</a>
            </div>
    </div>
    <div class="content">
    <div class="nav-links">

            <form>
                 <button id="button7" type="submit" formaction="login(FE).php">Faculty of Eng and CS (FE&CS)</button>
                 <button id="button8" type="submit" formaction="login(FAH).php">Faculty of Arts and Humanities (FAH)</button>
                 <button id="button9" type="submit" formaction="login(FMS).php">Faculty of Management Sciences (FMS)</button> 
                 <button id="button10" type="submit" formaction="login(FSS).php">Faculty of Social Sciences (FSS)</button> 
                 <button id="button11" type="submit" formaction="login(FoL).php">Faculty of Languages (FoL)</button> 
            </form>  
        </div>          
    </div> 
    <div class="menu-box" id="menu">
           <span id="span0"><img src="ap1.png" height="340px" width="285px"/></span>
           <span id="span1">MENU</span>
           <span id="span2"><img src="cancel.png" height="40px" width="35px" onclick="closemenu()"></span>

        <div class="menu-links">

          <form>
           <button id="button1" type="submit" formaction="login(Admin).php">Admin</button>
           <button id="button2" type="submit" formaction="teachers.php">Teachers</button>
           <button id="button3" type="submit" formaction="students.php">Notifications</button> 
           <button id="button4" type="submit" formaction="sales.php">Students</button> 
           <button id="button5" type="submit" formaction="sales.php">Courses Info</button> 
           <button id="button6" type="submit" formaction="notifications.php">Rooms Info</button> 
          </form>  

        </div> 

     </div>

</div>
  <div class="live_table_container">
    <div class="top-left-sec"><img class="lamp_img" src="idea.gif"><span style="position: absolute; margin-top: 23px;color: #3c4858 !important; font-size: 22px;">View Timetable</span></div>
    <span class="bottom-right-sec"></span>
      <div class="drpdown">
        <form method="post" action="">
       <label for="departments">Choose Department:</label>
       <select name="department_type" id="cars">
        <option value="fe&cs">FE&CS</option>
        <option value="fah">FAH</option>
        <option value="fms">FMS</option>
        <option value="fss">FSS</option>
        <option value="fol">FoL</option>
       </select>
       <select name="semester" id="cars">
        <option value="se_1">SEM-SE-1</option>
        <option value="it_1">SEM-IT-1</option>
        <option value="se_2">SEM-SE-2</option>
        <option value="it_2">SEM-IT-2</option>
        <option value="se_4">SEM-SE-4</option>
        <option value="it_4">SEM-IT-4</option>
        <option value="se_6">SEM-SE-6</option>
        <option value="it_6">SEM-IT-6</option>
        <option value="se_8">SEM-SE-8</option>
        <option value="it_8">SEM-IT-8</option>
       </select>
       <input type="submit" name="submit_req" value="View"/>
       <form>
       </div>

    <div class="live-view"> 
     <?php
    if(isset($_POST['submit_req']))
    {
    $semester = $_POST['semester'];
    $department_type = $_POST['department_type'];
 
       if($department_type == 'fe&cs' && $semester == 'se_2')
       {
         include 'livetable_fe_2.php';
 
       }

       elseif($department_type == 'fe&cs' && $semester == 'se_4')
       {
         include 'livetable_fe_4.php';
 
       }

       elseif($department_type == 'fe&cs' && $semester == 'se_6')
       {
         include 'livetable_fe_6.php';
 
       }

       elseif($department_type == 'fe&cs' && $semester == 'se_8')
       {
         include 'livetable_fe_8.php';
 
       }

       elseif($department_type == 'fah')
       {
 
          include 'livetable_fah.php';
 
       }
       elseif($department_type == 'fms')
       {
 
          include 'livetable_fms.php';
 
       }
       elseif($department_type == 'fss')
       {
 
          include 'livetable_fss.php';;
 
       }
       elseif($department_type == 'fol')
       {
 
          include 'livetable_fol.php';;
 
       }
      
    }
    else
    {
       echo 'Provide Department!';
    }
      
    ?>
    </div>
</div>
<div class="footer">
    <hr><hr><hr><hr><hr>
    <p>All Rights Reserved IsPP-33909(Ch Muttaqeen), 2023</p>
</div>
   


 
<script>

var menu = document.getElementById("menu");
var ob1 = document.getElementById("button1");
var ob2 = document.getElementById("button2");
var ob3 = document.getElementById("button3");
var ob4 = document.getElementById("button4");
var ob5 = document.getElementById("button5");
var ob6 = document.getElementById("button6");

function closemenu(){
    menu.style.left = "-610px";
}

function openmenu(){
    menu.style.left = "0%"; 
}

function playanimations(){
    ob1.style.animationName = "menulinks_button1_animation";
    ob1.style.animationIterationCount = "1";
    ob1.style.animationDuration = "0.5s";
    ob2.style.animationName = "menulinks_button2_animation";
    ob2.style.animationIterationCount = "1";
    ob2.style.animationDuration = "0.5s";
    ob2.style.animationDelay = "0.2s";
    ob3.style.animationName = "menulinks_button3_animation";
    ob3.style.animationIterationCount = "1";
    ob3.style.animationDuration = "0.5s";
    ob3.style.animationDelay = "0.3s";
    ob4.style.animationName = "menulinks_button4_animation";
    ob4.style.animationIterationCount = "1";
    ob4.style.animationDuration = "0.5s";
    ob4.style.animationDelay = "0.4s";
    ob5.style.animationName = "menulinks_button5_animation";
    ob5.style.animationIterationCount = "1";
    ob5.style.animationDuration = "0.5s";
    ob5.style.animationDelay = "0.5s";
    ob6.style.animationName = "menulinks_button6_animation";
    ob6.style.animationIterationCount = "1";
    ob6.style.animationDuration = "0.5s";
    ob6.style.animationDelay = "0.6s";
}

function closemenu2(){
    menu2.style.top = "-610px";
}

function openmenu2(){
    menu2.style.top = "9.7%";
}

</script>

<!--
<div class="menu-container">
       <div class="menu-box" id="menu">

          <div class="close-links">
             <a href="#">MENU</a>
             <img src="crossicon1.png" height="40px" width="35px" onclick="closemenu()">
          </div>

          <div class="menu-links">

            <form>
             <button id="button1" type="submit" formaction="admin.php">Admin</button>
             <button id="button2" type="submit" formaction="teachers.php">Teachers</button>
             <button id="button5" type="submit" formaction="notifications.php">Notifications</button> 
             <button id="button3" type="submit" formaction="students.php">Students</button> 
             <button id="button4" type="submit" formaction="sales.php">Courses Data</button> 
             <button id="button4" type="submit" formaction="sales.php">Departments Data</button> 
            </form>  

          </div> 

       </div>
</div>
-->


<!--


<div id="parentscreen">  
            <div id="childscreen">      
                    <form>
                       <button class="buttongrp button1"  type="submit" formaction="admin.php">Admin</button>
                       <button class="buttongrp button2"  type="submit" formaction="teachers.php">Teachers</button>
                       <button class="buttongrp button5"  type="submit" formaction="notifications.php">Notifications</button> 
                       <button class="buttongrp button3"  type="submit" formaction="students.php">Students</button> 
                       <button class="buttongrp button4"  type="submit" formaction="sales.php">Courses Data</button> 
                      <button class="buttongrp button4"  type="submit" formaction="sales.php">Departments Data</button> 
                    </form> 
            </div>
</div>
-->
      
</body>
</html>