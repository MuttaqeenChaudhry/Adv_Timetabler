<?php
   $con = mysqli_connect("localhost","root","","timetabler_db");
   if(!$con)
   { 
   die("could not connect".mysql_error());
   }
   $var=mysqli_query($con,"select F.teacher_id,F.Day,F.Slots_Time,F.Semester,F.Course,F.Rooms from faculty_fe F");
   if(mysqli_num_rows($var)>0)
   {
   echo "<table border size=10>";
   echo "<tr>
   <th>Teacher_ID</th>
   <th>Day</th>
   <th>Slots/Time</th>
   <th>Semester</th>
   <th>Course</th>
   <th>Rooms</th>
   </tr>";
    while($arr=mysqli_fetch_row($var))
    { 
        echo "<tr>
       <td>$arr[0]</td>
       <td>$arr[1]</td>
       <td>$arr[2]</td>
       <td>$arr[3]</td>
       <td>$arr[4]</td>
       <td>$arr[5]</td>
       </tr>";
    }
    echo "</table>";
       mysqli_free_result($var);
   }
   elseif(mysqli_num_rows($var)==0)
   echo '<p style="color:#f2f2f2; font-size: 24px;">No Requests From FE&CS :(</p>';
   else
   mysqli_close($con);
            
   ?>