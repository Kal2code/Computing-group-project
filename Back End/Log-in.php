<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('images/chanuka-nimsara-vJTKWsDIkQA-unsplash.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            max-width: 1000px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
        }
        .form-group{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin: 0 auto;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: purple;
            font-size: 14px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 25px;
            border: 1px solid #ccc;
            margin-right: 0;
            margin-bottom: 10px;
            outline: none;
            transition: border-color 0.3s ease;
            font-size: 16px;
        }

        .form-group input:focus {
            border-color: purple;
        }

        .btn {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 20px;
            background-color: plum;
            color: #fff;
            cursor: pointer;
        }

        .btn:hover {
            background-color: purple;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav style="display: flex; align-items: flex-start;">
            <img src="logo.png" alt="" style="width: 150px; margin: 10px;">
            <div style="position: fixed; top: 40px; right: 20px; display: flex; justify-content: flex-end;">  
                <a href="home.html" style="color: black; text-decoration: none; margin-right: 20px;">
                    <button style="background-color: #848484; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-weight: 600; transition: background-color 0.3s ease; cursor: pointer; background-color: transparent;"
                    onmouseover="this.style.backgroundColor='#8a4226'" onmouseout="this.style.backgroundColor='#9a492c'">
                    HOME</button>
                </a>
                <a href="plan a trip.php" style="color: black; text-decoration: none; margin-right: 20px;">
                    <button style="background-color: #848484; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-weight: 600; transition: background-color 0.3s ease; cursor: pointer; background-color: transparent;"
                    onmouseover="this.style.backgroundColor='#8a4226'" onmouseout="this.style.backgroundColor='#9a492c'">
                    PLAN A TRIP</button>
                </a>
                <a href="driver.php" style="color: black; text-decoration: none; margin-right: 20px;">
                    <button style="background-color:  #848484; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-weight: 600; transition: background-color 0.3s ease; cursor: pointer; background-color: transparent;"
                    onmouseover="this.style.backgroundColor='#8a4226'" onmouseout="this.style.backgroundColor='#9a492c'">
                    REGISTRATION</button>
                </a>
                <a href="Log-in.php" style="display: flex; justify-content: center; align-items: center; position: relative; margin-right: 20px;">
                    <button style="background-color:  #096011; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-weight: 600; transition: background-color 0.3s ease; cursor: pointer; width: 100%;"
                    onmouseover="this.style.backgroundColor='#8a4226'" onmouseout="this.style.backgroundColor='#9a492c'">SIGN UP</button>
                </a>
                <a href="safari.html" style="color: black; text-decoration: none; margin-right: 20px;">
                    <button style="background-color: #848484; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-weight: 600; transition: background-color 0.3s ease; cursor: pointer; background-color: transparent;"
                    onmouseover="this.style.backgroundColor='#8a4226'" onmouseout="this.style.backgroundColor='#9a492c'">
                    ABOUT US</button>
                </a>
            </div>
    <div class="container">
        <form action="/login" method="POST">
            <div id="login-form">
                <h2>Login</h2>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input style="margin-bottom: 10px; width: 300px;" type="text" name="username" id="username" placeholder="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input style="margin-bottom: 10px; width: 300px;" type="password" name="password" id="password" placeholder="password">
                </div>
                <button style="margin-right: 10px;" class="btn" type="submit">Login</button>
                <p>Don't have an account? <a href="#" onclick="showSignupForm()">Sign Up</a></p>
            </div>
        </form>
        <form action="" method="POST">
            <div id="signup-form" style="display: none;">
                <h2>Sign Up</h2>
                <div class="form-group">
                    <label for="newUsername">Username</label>
                    <input style="margin-bottom: 10px; width: 300px;" type="text" name="newUsername" id="newUsername" placeholder="username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input style="margin-bottom: 10px; width: 300px;" type="email" name="email" id="email" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="newPassword">Password</label>
                    <input style="margin-bottom: 10px; width: 300px;" type="password" name="newPassword" id="newPassword" placeholder="password">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input style="margin-bottom: 10px; width: 300px;" type="password" name="confirmPassword" id="confirmPassword" placeholder="confirm-password">
                </div>
                <button style="margin-right: 10px;" class="btn" type="submit">Sign Up</button>
                <p>Already have an account? <a href="#" onclick="showLoginForm()">Login</a></p>
            </div>
        </form>
    </div>


    <script>
        function showSignupForm() {
            document.getElementById('login-form').style.display = 'none';
            document.getElementById('signup-form').style.display = 'block';
        }

        function showLoginForm() {
            document.getElementById('signup-form').style.display = 'none';
            document.getElementById('login-form').style.display = 'block';
        }

        function login() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (username === "" || password === "") {
                alert("Please fill in all fields");
                return;
            }

            // Your login logic here
            console.log('Username:', username);
            console.log('Password:', password);
        }

        function signup() {
            var newUsername = document.getElementById('newUsername').value;
            var email = document.getElementById('email').value;
            var newPassword = document.getElementById('newPassword').value;
            var confirmPassword = document.getElementById('confirmPassword').value;

            if (newUsername === "" || email === "" || newPassword === "" || confirmPassword === "") {
                alert("Please fill in all fields");
                return;
            }

            if (newPassword !== confirmPassword) {
                alert("Passwords do not match");
                return;
            }

            // Your signup logic here
            console.log('Username:', newUsername);
            console.log('Email:', email);
            console.log('Password:', newPassword);
            console.log('Confirm Password:', confirmPassword);
        }
    </script>
</body>

<?php
 $conn = mysqli_connect("localhost", "root", "", "safari_sync");
 $Uname = $_POST['username'];
 $Pass = $_POST['password'];
 $sql = "SELECT * FROM login WHERE username = '$Uname' AND password = '$Pass'";
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
     header("Location: safari.html");
 } else {
     
     $sql = "INSERT INTO login (username, password) VALUES ('$Uname', '$Pass')";
     if (mysqli_query($conn, $sql)) {
         header("Location: safari.html");
     } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
 }
 mysqli_close($conn);
 
 $Tname = $_POST['newUsername'];
 $Email = $_POST['email'];
 $Password = $_POST['newPassword'];
 $Confirm = $_POST['confirmPassword'];
 
 $sql = "INSERT INTO register (username, email, password, confirm_password) VALUES ('$Tname', '$Email', '$Password', '$Confirm')";
 
 $result = mysqli_query($conn, $sql);
 
 if ($result) {
    echo "Registration successful!<br>";
 } else {
    echo "Registration failed.<br>";
    echo mysqli_error($conn);
 }

?>

</html>
