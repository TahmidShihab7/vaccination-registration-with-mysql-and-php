<?php include("connector.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>REGISTRATION FORM</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            vaccination registration 
        </div>
        <div class="form">
            <div class="input_field">
                <label for="">First Name</label>
                <input type="text" class="input" name="fname" >
            </div>
                        <div class="input_field">
                <label for="">Last Name</label>
                <input type="text" class="input" name="lname">
            </div>
                        <div class="input_field">
                <label for="">Password</label>
                <input type="password" class="input" name="password">
            </div>
        </div>
                    <div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password" class="input" name="conpassword">
            </div>
                        <div class="input_field">
                <label for="">Gender</label>
                <select  id="selection" class="input" name="gender">
                    <option value="Not Selected">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
                <div class="input_field">
                <label for="">Email</label>
                <input type="text" class="input" name="email">
            </div>
            <div class="input_field">
                <label for="">Phone</label>
                <input type="text" class="input" name="phone">
            </div>
              <div class="input_field">
                <label for="">Vaccine Type</label>
                <select  id="selection" class="input" name="vaccine">
                    <option value="Not Selected">Select</option>
                    <option value="Type: Hepatitis A  ||  Amount: 100 Taka">Vaccine for Adults</option>
                    <option value="Type: Polio  ||  Amount: 35 Taka">Vaccine for Children</option>
                </select>
            </div>
            <div class="input_field">
                <label for="">Address</label>
                <textarea name="address" id="" class="input"cols="20" rows="3"></textarea>
            </div>
                        <div class="input_field ">
                <label for="" class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    <span class="condition">Agree to terms and conditions</span>
                </label>
               
            </div>
                        <div class="input_field">
                    <input type="submit" value="REGISTER" class="btn" name="register">
            </div>
            </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['register']))
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
    $query = "INSERT INTO REGISTRATION_DATABASE VALUES ('$fname','$lname','$password','$conpassword','$gender','$email','$phone','$vaccine','$address')";
    $data = mysqli_query($connection,$query);
    if($data)
    {
        // echo "Data Inserted";
    }
    else
    {
        echo "Failed";
    }
}
else 
{
    echo "<script>alert('Tahmid Vhai says : Please fill up the form properly.');</script>";
}
}
?>