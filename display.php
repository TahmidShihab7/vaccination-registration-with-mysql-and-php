<html>
  <head>
    <title>INFORMATION</title>
    <style>
      body
      {
        background:rgb(118, 177, 154);
      }
      table{
        background:whitesmoke ;
        outline:none;
      }
      h2{
        background:black;
        color:whitesmoke;
      }
      .update{
        background-color:#797bde ;
        color:whitesmoke;
        border-radius: 3px;
        outline:none;
        font-weight:bold;
        cursor: pointer;
      }
    </style>
  </head>
<body>
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
   <h2 align="center">REGISTRATION INFORMATION</h2> 
   <table border="2" align="center" cellspacing="5" width="90%">
       <tr>
       <th width="3%">ID</th>
       <th width="7%">First Name</th>
       <th width="7%">Last Name</th>
       <th width="5%">Gender</th>
       <th width="15%">Email</th>
       <th width="7%">Phone</th>
       <th width="20%">Vaccine Type and Fees</th>
       <th width="13%">Address</th>
       <th width="13%">Operations</th>
       </tr>
   
   <?php
    
   while( $result = mysqli_fetch_assoc($data))
   {
      echo "   
      <tr>
       <td>".$result['id']."</td>
       <td>".$result['fname']."</td>
       <td>".$result['lname']."</td>
       <td>".$result['gender']."</td>
       <td>".$result['email']."</td>
       <td>".$result['phone']."</td>
       <td>".$result['vaccine']."</td>
       <td>".$result['address']."</td>
       <td><a href='change.php?id=$result[id]'><input type='submit' value='Update' class='update'</a></td>
    
       </tr>
       ";
   }
 }
 else{
         echo "There has no stored records."; 
 }
?>
</table>
</body>
</html>
 <!-- echo $result['fname']." ".$result['lname']." ".$result['gender']." ".$result['email']." ".$result['phone']." ".$result['address']."<br>"; -->
