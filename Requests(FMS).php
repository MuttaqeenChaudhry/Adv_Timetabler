<?php
   $con = mysqli_connect("localhost","root","","timetabler_db");
   if(!$con)
   { 
   die("could not connect".mysql_error());
   }
   $var=mysqli_query($con,"select F.teacher_id,F.Day,F.Time,F.Slots from faculty_fms F");
   if(mysqli_num_rows($var)>0)
   {
   echo "<table border size=10>";
   echo "<tr>
   <th>Teacher_ID</th>
   <th>Day</th>
   <th>Time</th>
   <th>Slots</th>
   </tr>";
    while($arr=mysqli_fetch_row($var))
    { 
        echo "<tr>
       <td>$arr[0]</td>
       <td>$arr[1]</td>
       <td>$arr[2]</td>
       <td>$arr[3]</td>
       </tr>";
    }
    echo "</table>";
       mysqli_free_result($var);
   }
   elseif(mysqli_num_rows($var)==0)
   echo '<p style="color:#f2f2f2; font-size: 24px;">No Requests From FMS :(</p>';
   else
   mysqli_close($con);
            
   ?>