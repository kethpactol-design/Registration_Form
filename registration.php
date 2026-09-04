<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(120deg, #ffd166, #ef476f, #06d6a0);
            margin: 0;
            padding: 40px;
        }

        .form {
            width: 500px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #d98b32;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 9px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 60px;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            background: black;
            color: white;
            border: none;
        }

        .result {
            border: 1px solid #ccc;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="form">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $birthday = $_POST["birthday"];
    $number = $_POST["number"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo "<h1>REGISTRATION SUCCESSFUL</h1>";

    echo "<div class='result'>";

    echo "Name: " . $name . "<br><br>";
    echo "Email: " . $email . "<br><br>";
    echo "Gender: " . $gender . "<br><br>";
    echo "Date of Birth: " . $birthday . "<br><br>";
    echo "Number: " . $number . "<br><br>";
    echo "Address: " . $address . "<br><br>";
    echo "Password: " . $password;

    echo "</div>";

} else {
?>

<h1>REGISTRATION FORM</h1>

<form method="POST">

    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Date of Birth:</label>
    <input type="date" name="birthday" required>

    <label>Number:</label>
    <input type="number" name="number" required>

    <label>Address:</label>
    <textarea name="address" required></textarea>

    <label>Gender:</label>
    <select name="gender" required>
        <option value="">Select Gender</option>
        <option>Male</option>
        <option>Female</option>
    </select>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Submit</button>

</form>

<?php
}
?>

</div>

</body>
</html>