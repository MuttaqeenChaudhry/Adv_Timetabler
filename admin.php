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
        <title>Admin </title>
<style>


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

* {
  font-family : 'Poppins', sans-serif;
  text-decoration: none;
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
  background: #484848;
  background-size : cover;
  background-image: url("3322.jpg");
  }

.hero{
    height: 150vh;
    
    position: relative;
    display: flex;
    align-items: flex-start;
    
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
    padding: 14px 6px;
    left: 44%;
    background: transparent;
}

.navbartitle{
    
    position: absolute;
    margin-left: 653px;
    margin-top: 10px;
    background: transparent;
    color: #3c4858 !important;
    padding: 0px 16px;
    text-decoration: none;
    font-size: 32px !important;
    cursor: default;
    
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
    padding: 20px 20px;
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
    border-bottom-left-radius: 5px;
    border-color: #f2f2f2;
    top : 6.5%;
    right: 0%;
    width: 130px;
    height: 100px;;
    background-color: white;
    padding: 5px 5px;
    transition: top 1s;
}

.logoutmenu li{ 
    width: 85px;
    margin-top: 15px;
    margin-left: 35px;
    text-decoration: none;
    color: #3c4858;
    font-size: 20px;
    list-style-type: none;
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

table{
    border-collapse: collapse; 
    background: #fafafa;
    margin-top:0px ;
    width:100%;
}

td, th {
    border: 3px solid #332b47;
    text-align: left;
    padding: 8px;
}

th{
  background-image: url("1967.jpg");
}

input[type=text] {
    width: auto;
    height: auto;
    padding: 10px 20px;
    margin: 28px 0px;
    background: white;
    border: none;
    border-radius: 15px;
    color: solid black;

  }

.custom_bns{
  position: absolute;
  margin-top: 100px;
  margin-left: 0px;
    
}

#custom_btn_1{
  height: 50px;
  width: 150px;
  cursor: pointer;
  border: none;
  background-color:#2c9fdd;
  color: #fff;
  border-radius: 15px;
  font-size: 17px;
  transition: all 1s cubic-bezier(.25,.8,.25,1);

}

#custom_btn_1:hover{
    background-color: #055C9D;
}

#custom_btn_2{
  color: #fff;
  margin-left:20px; 
  height: 50px;
  width: 150px;
  cursor:pointer;
  background-color:#2c9fdd;
  border: none;
  border-radius: 15px;
  transition: all 1s cubic-bezier(.25,.8,.25,1);
  font-size:17px;
}

#custom_btn_2:hover{
    background-color: #055C9D;
}

#custom_btn_3{
    color: #f2f2f2;
    width: 85px; 
    height: 44px; 
    cursor: pointer;
    font-size:17px;
    border: none;
    border-radius: 15px;
    background-color:#2c9fdd;
    transition: all 1s cubic-bezier(.25,.8,.25,1);
}

#custom_btn_3:hover{
    background-color: #055C9D; 
}

.lastblock{
  position:absolute;
  margin-top: 120px;; 
  margin-left: 850px;

}



.back-video{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;

}

.requests_container{
    position: absolute;
    margin-top: 220px;
    width: 1350px;
    height: 515px;
    display: flex;
    align-items: flex-start;
}

.requests_container span{
    position: absolute;
    background-color: #055C9D;
    height: 234px;
    width: 710px;
    border: 1px solid #f2f2f2; 
}

.requests_container span h3{
    position: relative;
    margin-left: 50px;
    color: #f2f2f2;
}

.fe_cs_requests{
    overflow-y: scroll;
}

.fah_requests{
    overflow-y: scroll;
    margin-left: 715px;
}


.fms_requests{
    overflow-y: scroll;
    margin-top: 260px;
    margin-left: 0px; 

}

.fss_requests{
    overflow-y: scroll;
    margin-top: 260px;
    margin-left: 715px; 
}

.fol_requests{
    overflow-y: scroll;
    margin-top: 535px;
    margin-left: 0px;  
}

.Rooms_availble{
    overflow-y: scroll;
    margin-left: 715px;
    margin-top: 535px;
}

    </style>
    </head>

<body>
<div class="hero">
    

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
              <img src="home_btn.png" height="25px" width="25px">
              <img src="logout_btn.png" height="25px" width="25px">
            </div>
            <a style="text-decoration: none;" href="home.php"><li>HOME</li></a>
            <a style="text-decoration: none;" href="logout.php"><li>LOGOUT</li></a>
      </div>

      <div class="custom_bns">   
            <form action="" method="post">
            <b>Day</b>    
            <select name="Day" >
            <option value="course1">Monday</option>
            <option value="course2">Tuesday</option>
            <option value="course3">Wednesday</option>
            <option value="course4">Thursday</option>
            <option value="course5">Friday</option>
            </select>
            <b>Time</b>
            <select name="Time">
            <option value="08:30 - 09:45">08:30 - 09:45</option>
            <option value="09:55 - 11:10">09:55 - 11:10</option>
            <option value="11:20 - 12:35">11:20 - 12:35</option>
            <option value="12:45 - 02:00">12:45 - 02:00</option>
            </select>
            <b>Semester</b>
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
            <br>
            <b>Course</b>
            <input type="text" list="subjectz" name="Course" id="browser">
            <datalist id="subjectz">
            <option value="OOP">
            <option value="OOP(Lab)">
            <option value="Communication Skills">
            <option value="Calculus and Analytical">
            <option value="Discrete Structure">
            <option value="Software Engineering">
            <option value="Pakistan Studies">
            <option value="Operating System">
            <option value="Operating System(Lab)">
            <option value="Database">
            <option value="Database(Lab)">
            <option value="Probability & Statistics">
            <option value="Business Process Engineering">
            <option value="SDA">
            <option value="SDA(Lab)">
            <option value="Cloud Computing">
            <option value="Computer Networks">
            <option value="Computer Networks(Lab)">
            <option value="Project Management">
            <option value="SDA">
            <option value="Software Construction">
            <option value="Software Construction Lab">
            <option value="DIP">
            <option value="DIP(Lab)">
            <option value="Web Engineering">
            <option value="Web Engineering(Lab)">
            <option value="Natural Language Processing">
            <option value="Information Security">
            <option value="Machine Learning">
            <option value="Professional Ethics">
            <option value="Entrepreneurship & Leadership">
            </datalist>
             <button id="custom_btn_2" type="submit" name="update_req">Update TT</button>
            </form>
      </div>
      <?php
       if(isset($_POST['update_req']))
       include 'liveupdate.php';
      ?>

      <div class="lastblock">
         <form action="" method="post">
         <input  id="dbutton" type="text" name="id_field" placeholder="Enter ID" required>
         <button  id="custom_btn_3" type="submit" name="del_req" value="Delete">Delete</button>
         </form>

      </div>
      <?php
       if(isset($_POST['del_req']))
       include 'deleterequest.php';
      ?>

<div class="requests_container">
<span class="fe_cs_requests">
    <h3>Requests from FE & CS</h3> 
    <?php include 'Requests(FE&CS).php';?>     
</span>

<span class="fah_requests">
    <h3>Requests from FAH</h3>  
    <?php include 'Requests(FAH).php';?> 
</span>

<span class="fms_requests">
      <h3>Requests from FMS</h3> 
      <?php include 'Requests(FMS).php';?> 
</span>

<span class="fss_requests">
      <h3>Requests from FSS</h3> 
      <?php include 'Requests(FSS).php';?>  
</span>

<span class="fol_requests">
      <h3>Requests from FoL</h3>  
      <?php include 'Requests(FoL).php';?> 
</span>
<span class="Rooms_availble">
      <h3>Rooms Info</h3>  
      <?php include 'Rooms_Availible.php';?> 
</span>
</div>

</div>

<script>

var menu = document.getElementById("menu");

function closemenu(){
    menu.style.left = "-610px";
}

function openmenu(){
    menu.style.left = "0%";
}

function closemenu2(){
    menu2.style.top = "-610px";
}

function openmenu2(){
    menu2.style.top = "6.5%";
}

</script>

</body>
</html>
