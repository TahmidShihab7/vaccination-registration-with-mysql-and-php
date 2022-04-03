<?php
 include("connector.php");
 error_reporting(0);
 $query = "SELECT * FROM REGISTRATION_DATABASE"; 
 $data = mysqli_query($connection,$query);
 $total = mysqli_num_rows($data);



//  echo $total;
 if($total != 0)
 {
   ?>  
   <table border="5" >
       <tr>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Gender</th>
       <th>Email</th>
       <th>Phone</th>
       <th>Address</th>
       </tr>
   
   <?php
    
   while( $result = mysqli_fetch_assoc($data))
   {
      echo "   
      <tr>
       <td>".$result['fname']."</td>
       <td>".$result['lname']."</td>
       <td>".$result['gender']."</td>
       <td>".$result['email']."</td>
       <td>".$result['phone']."</td>
       <td>".$result['address']."</td>
       </tr>
       ";
   }
 }
 else{
         echo "The has no stored records."; 
 }
?>
</table>
 <!-- echo $result['fname']." ".$result['lname']." ".$result['gender']." ".$result['email']." ".$result['phone']." ".$result['address']."<br>"; -->
