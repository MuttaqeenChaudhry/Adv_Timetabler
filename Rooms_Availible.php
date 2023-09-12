<?php
   $con = mysqli_connect("localhost","root","","timetabler_db");
   if(!$con)
   { 
   die("could not connect".mysql_error());
   }
   $var=mysqli_query($con,"select R.room_id,R.Room,R.Availibility from rooms R");
   if(mysqli_num_rows($var)>0)
   {
   echo "<table border size=10>";
   echo "<tr>
   <th>Room</th>
   <th>Availibility</th>
   </tr>";
    while($arr=mysqli_fetch_row($var))
    { 
        echo "<tr>
       
       <td>$arr[1]</td>
       <td>$arr[2]</td>
       </tr>";
    }
    echo "</table>";
       mysqli_free_result($var);
   }
   elseif(mysqli_num_rows($var)==0)
   echo '<p style="color:#f2f2f2; font-size: 24px;">No Requests From FoL :(</p>';
   else
   mysqli_close($con);
            
   ?>