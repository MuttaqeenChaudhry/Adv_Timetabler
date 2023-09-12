<?php
   
     $con = mysqli_connect("localhost","root","","timetabler_db");
     if(!$con)
   { 
   die("could not connect".mysql_error());
   }
   $var=mysqli_query($con,"select L.Slots,L.Time,L.Monday,L.Tuesday,L.Wednesday,L.Thursday,L.Friday from livetable_fms L");
   echo "<table border size=10>";
   echo "<tr>
   <th>Slots</th>
   <th>Time</th>
   <th>Monday</th>
   <th>Tuesday</th>
   <th>Wednesday</th>
   <th>Thursday</th>
   <th>Friday</th>
   </tr>";
   if(mysqli_num_rows($var)>0){
       while($arr=mysqli_fetch_row($var))
       { echo "<tr>
       <td>$arr[0]</td>
       <td>$arr[1]</td>
       <td>$arr[2]</td>
       <td>$arr[3]</td>
       <td>$arr[4]</td>
       <td>$arr[5]</td>
       <td>$arr[6]</td>
       </tr>";}
       echo "</table>";
       mysqli_free_result($var);
   }
   
   mysqli_close($con);
       
       
?>