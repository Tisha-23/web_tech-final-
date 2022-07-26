<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Admin";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
   die("Connection failed:".$conn->connect_error);
}
else
{
   $q="INSERT INTO Admin(Name,Email,Username,Password,Confirm Password,Gender,DoB) VALUES('".$name."','".$email."','".$username."','".$pass."','".$cPass."','".$gender."','".$dob."')";
   $result=$conn->query($q);
   if($result)
     echo "data inserted";
    else
      echo "data not inserted"; 

    $p="UPDATE Admin(Name,Email,Username) VALUES ('sadia','sadia111@gmail.com','khan')";   
}
?>
<div >
    <center><img src="hstt.jpg" height=230 width=1500 style="opacity:0.8" ></center>
    <br>
   <center> <h1 style="color:rgb(191,0,255)">MSTS Airline</center>
   
</div>
<style>
table, th, td {

}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
</style>
<table class="center">
    <tr>
        <td>
        
        <th></th>
        <th></th>
         <td>

</table>
<form method="post" action='../controller/regCheck.php'>
<table class="center">
<tr>
                          <td><label>Name</label></td>
                          <td><input type="text" name="name" class="form-control"> <br></td>
                        </tr>

                        <tr>
                          <td><label>E-mail</label></td>
                          <td><input type="text" name = "email" class="form-control"> <br></td>
                        </tr>

                        <tr>
                          <td><label>User Name</label></td>
                          <td><input type="text" name = "username" class="form-control"> <br></td>
                        </tr>

                        <tr>
                          <td><label>Password</label></td>
                          <td><input type="password" name = "pass" class="form-control"> <br></td>
                        </tr>

                        <tr>
                          <td><label>Confirm Password</label></td>
                          <td><input type="password" name = "cPass" class="form-control"> <br></td>
                        </tr>

                        <tr>
                          <td><label>Gender</label></td>
                          <td><input type="radio" id="male" name="gender" value="male">
                              <label for="male">Male</label>
                              <input type="radio" id="female" name="gender" value="female">
                              <label for="female">Female</label>
                              <input type="radio" id="other" name="gender" value="other">
                              <label for="other">Other</label><br> </td>
                        </tr>

                        <tr>
                          <td><lable>Date of Birth:</label></td>
                          <td><input type="date" name="dob"> <br><br></td>
                        </tr>
</table>
<center><input type="submit" name="submit"></center><br>
</form>

