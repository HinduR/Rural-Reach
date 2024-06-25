<?php

include './config.php';


$name="";
$email="";
$password="";
$phone="";
$qualification="";
$language="";
$dob="";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];    
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pword = $_POST['password'];
    $qualification = $_POST['qualification'];
    $language = $_POST['language'];
    $dob = $_POST['dob'];
}

$sql="insert into `users` (name,email,phone,password,qualification,language,dob) values('$name','$email','$phone','$pword','$qualification','$language','$dob')";

$result=mysqli_query($conn,$sql);

?>

<html>
    
<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    h1 {
      color: #333333;
      text-align: center;
      margin-top: 30px;
    }

    h2 {
      color: #666666;
      text-align: center;
    }

    table {
      margin: 0 auto;
      border-collapse: collapse;
      width: 80%;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #dddddd;
    }

    th {
      background-color: #f2f2f2;
    }
    .overlay-button {
    position: absolute;
    bottom: 10px; /* Adjust this value to control the distance from the bottom */
    left: 50%;
    transform: translateX(-50%);
    padding: 10px 20px;
    background-color: white;
    color: black;
    border: none;
    cursor: pointer;
    border-radius: 4px;
    font-size: 16px;
}

.overlay-button:hover {
    background-color: #45a049;
}
  </style>
    <h1> Hi <?php echo $name;   ?> </h1>
    <h2>Here is your Profile</h2>
    <table>
    <tr>
        <th>Email</th>
        <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <th>Phone</th>
        <td><?php echo $phone; ?></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><?php echo $password; ?></td>
    </tr>
    <tr>
        <th>Qualification</th>
        <td><?php echo $qualification; ?></td>
    </tr>
    <tr>
        <th>Language</th>
        <td><?php echo $language; ?></td>
    </tr>
    <tr>
        <th>Date of Birth</th>
        <td><?php echo $dob; ?></td>
    </tr>
</table>
<div class="overlay-button">
    <button onclick="redirectToLoginPage()" class="overlay-button">Continue</button>
</div>

<script src="script.js" defer></script>
<style>
    .button {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s; 
    border: none; 
    cursor:pointer;
    font-size: 20x;
    position: absolute;
    left: 200px;

}
</style>

</html>

<!-- php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$names = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$qualification = $_POST['qualification'];
$language = $_POST['language'];
$dob = $_POST['dob'];


$sql = "INSERT INTO users (name, email, phone, password, qualification, language, dob)
VALUES ('$names', '$email', '$phone', '$password', '$qualification', '$language', '$dob')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); -->
