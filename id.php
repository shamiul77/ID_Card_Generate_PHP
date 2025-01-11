<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST ['email'];
    $id = $_POST ['id'];
    $department = $_POST ['department'];
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Card</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
    }
    .card {
      width: 350px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      background-color: #ffffff;
      text-align: center;
      padding: 20px;
    }
    .card-header {
      background-color: #4CAF50;
      color: white;
      padding: 10px 0;
      font-size: 20px;
      font-weight: bold;
    }
    .card-body {
      padding: 15px;
    }
    .card-body p {
      margin: 10px 0;
      font-size: 16px;
      color: #555;
    }
    .card-body p span {
      font-weight: bold;
      color: #000;
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="card-header">Student Card</div>
    <div class="card-body">
      <p><strong>Name:</strong> <?php if(isset($name)){echo $name;}?></p>
      <p><strong>Email:</strong> <?php if(isset($email)){echo $email;}?></p>
      <p><strong>ID:</strong> <?php if(isset($id)){echo $id;}?></p>
      <p><strong>Department:</strong> <?php if(isset($department)){echo $department;}?></p>
    </div>
  </div>
</body>
</html>
