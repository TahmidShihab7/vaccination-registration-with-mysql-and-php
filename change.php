<?php include("connector.php");
$id = $_GET['id'];
 $query = "SELECT * FROM REGISTRATION_DATABASE where id= '$id'"; 
 $data = mysqli_query($connection,$query);
 $total = mysqli_num_rows($data);
( $result = mysqli_fetch_assoc($data));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>UPDATE INFORMATION</title>
</head>
<body>
    <div class="container">
        <form autocomplete="off" action="#" method="POST">
        <div class="title">
            UPDATE INFORMATION 
        </div>
        <div class="form">
            <div class="input_field">
                <label for="">First Name</label>
                <input type="text" class="input" name="fname" value="<?php echo $result['fname']?>">
            </div>
                        <div class="input_field">
                <label for="">Last Name</label>
                <input type="text" class="input" name="lname" value="<?php echo $result['lname']?>">
            </div>
                        <div class="input_field">
                <label for="">Password</label>
                <input type="password" class="input" name="password" value="<?php echo $result['password']?>">
            </div>
        </div>
                    <div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password" class="input" name="conpassword" value="<?php echo $result['conpassword']?>">
            </div>
                        <div class="input_field">
                <label for="">Gender</label>
                <select  id="selection" class="input" name="gender">
                    <option value="Not Selected">Select</option>
                    <option value="Male"
                      <?php
                      if($result['gender']=='Male')
                      {
                          echo "selected";
                      }
                      ?>
                    >Male</option>
                    <option value="Female"
                                          <?php
                      if($result['gender']=='Female')
                      {
                          echo "selected";
                      }
                      ?>
                    >Female</option>
                </select>
            </div>
                <div class="input_field">
                <label for="">Email</label>
                <input type="text" class="input" name="email" value="<?php echo $result['email']?>">
            </div>
            <div class="input_field">
                <label for="">Phone</label>
                <input type="text" class="input" name="phone" value="<?php echo $result['phone']?>">
            </div>
              <div class="input_field">
                <label for="">Vaccine Type</label>
                <select  id="selection" class="input" name="vaccine">
                    <option value="Not Selected">Select</option>

                    <option value="Type: Hepatitis A  ||  Amount: 100 Taka"
                                                              <?php
                      if($result['vaccine']=='Type: Hepatitis A  ||  Amount: 100 Taka')
                      {
                          echo "selected";
                      }
                      ?>
                    >Vaccine for Adults</option>
                    <option value="Type: Polio  ||  Amount: 35 Taka"
                                            <?php
                      if($result['vaccine']=='Type: Polio  ||  Amount: 35 Taka')
                      {
                          echo "selected";
                      }
                      ?>
                    >Vaccine for Children</option>
                </select>
            </div>
            <div class="input_field">
                <label for="">Address</label>
                <textarea name="address" id="" class="input"cols="20" rows="3">
                   <?php echo $result['address']; ?>
                </textarea>
            </div>
                        <div class="input_field ">
                <label for="" class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    <span class="condition">Agree to terms and conditions</span>
                </label>
               
            </div> 
                        <div class="input_field">
                    <input type="submit" value="SUBMIT" class="btn" name="update">
            </div>
            </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['update']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $vaccine = $_POST['vaccine'];
    $address = $_POST['address'];

    if($fname !="" && $lname !="" && $password !="" && $conpassword !="" && $gender !="" && $email !="" && $phone !="" && $vaccine !="" && $address !="")
    {
    // $query = "INSERT INTO REGISTRATION_DATABASE VALUES ('$fname','$lname','$password','$conpassword','$gender','$email','$phone','$vaccine','$address')";
    $query ="UPDATE REGISTRATION_DATABASE set fname='$fname',lname='$lname',password='$password',conpassword='$conpassword',gender='$gender',email='$email',phone='$phone',vaccine='$vaccine',address='$address' WHERE id='$id'";
    $data = mysqli_query($connection,$query);
    if($data)
    {
         echo "<script>alert('Record Updated')</script>";
                 ?>
        <meta http-equiv="refresh" content="0;url=http://localhost/dbms/display.php" />
        <?php
    }
    else
    {
        echo "Failed to update";

    }
}
else 
{
    echo "<script>alert('Tahmid Vhai says : Please fill up the form properly.');</script>";
}
}
?> 