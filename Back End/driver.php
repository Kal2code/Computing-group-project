<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Safari Sync/Driver Registration</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body style="background-image: url('background.jpg'); background-size: cover; font-family: 'Poppins', sans-serif;">

        <div style="position: relative; display: flex; justify-content: center; align-items: center; height: 20px; background-color: rgba(255, 255, 255, 0.1); border: 1px solid rgba(0, 0, 0, 0); padding: 20px;">
            <img class="logo1" src="logo.png" style="position: absolute; left: 0; height: 55px; width: 65px;">
            <div style="display: flex; justify-content: flex-end; position: absolute; right: 0;">
                <a href="home.html" style="color: black; text-decoration: none; margin-right: 20px;">
                    <button style="background-color: #848484; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-weight: 600; transition: background-color 0.3s ease; cursor: pointer;"
                    onmouseover="this.style.backgroundColor='#8a4226'" onmouseout="this.style.backgroundColor='#9a492c'">HOME</button>
                </a>
                <a href="plan a trip.php" style="color: black; text-decoration: none; margin-right: 20px;">
                    <button style="background-color: #848484; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-weight: 600; transition: background-color 0.3s ease; cursor: pointer;"
                    onmouseover="this.style.backgroundColor='#8a4226'" onmouseout="this.style.backgroundColor='#9a492c'">PLAN A TRIP</button>
                </a>
                <a href="driver.php" style="color: black; text-decoration: none; margin-right: 20px;">
                    <button style="background-color:  #848484; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-weight: 600; transition: background-color 0.3s ease; cursor: pointer;"
                    onmouseover="this.style.backgroundColor='#8a4226'" onmouseout="this.style.backgroundColor='#9a492c'">REGISTRATION</button>
                </a>
                <a href="Log-in.php" style="display: flex; justify-content: center; align-items: center; position: relative; margin-right: 20px;">
				<button style="background-color:  #096011; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-weight: 600; transition: background-color 0.3s ease; cursor: pointer; width: 100%;"
				onmouseover="this.style.backgroundColor='#8a4226'" onmouseout="this.style.backgroundColor='#9a492c'">SIGN UP</button>
                </a>
                <a href="safari.html" style="color: black; text-decoration: none; margin-right: 20px;">
                    <button style="background-color: #848484; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-weight: 600; transition: background-color 0.3s ease; cursor: pointer;"
                    onmouseover="this.style.backgroundColor='#8a4226'" onmouseout="this.style.backgroundColor='#9a492c'">ABOUT US</button>
                </a>
            </div>
        </div>

      <div style="text-align: center; display: inline-block; background-color: rgba(0, 0, 0, 0.2); border: 1px solid rgba(0, 0, 0, 0); padding: 20px; margin-top: 50px;">
        <form class="form" style="text-align: left;" action="" method="post" enctype="multipart/form-data">

          <div style="display: flex; flex-direction: column; align-items: center; padding: 20px; background-color: rgba(153, 67, 10, 0.193); border: 1px solid rgba(0, 0, 0, 0); border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <form class="form" style="width: 100%; max-width: 600px; text-align: left;" action="#" method="post" enctype="multipart/form-data">

              <div style="text-align: left; display: flex; flex-direction: column; align-items: flex-start; color: white;">
                <label style="width: 100%;" for="name">Name:</label>
                <input style="width: 100%;" type="text" id="name" name="name" required>
              </div>

              <div style="text-align: left; display: flex; flex-direction: column; align-items: flex-start; color: white;">
                <label style="width: 100%;" for="nic">NIC:</label>
                <input style="width: 100%;" type="text" id="nic" name="nic" required>
              </div>

              <div style="text-align: left; display: flex; flex-direction: column; align-items: flex-start; color: white;">
                <label style="width: 100%;" for="age">Age:</label>
                <input style="width: 100%;" type="number" id="age" name="age" min="1" max="120" required>
              </div>

              <div style="text-align: left; display: flex; flex-direction: column; align-items: flex-start; color: white;">
                <label style="width: 100%;" for="contact">Contact Number:</label>
                <input style="width: 100%;" type="int" id="contact" name="contact" max="10" required>
              </div>

              <div style="text-align: left; display: flex; flex-direction: column; align-items: flex-start; color: white;">
                <label style="width: 100%;" for="vehicle">Vehicle number:</label>
                <input style="width: 100%;" type="text" id="vehicle" name="vehicle" required>
              </div>

              <div style="text-align: left; display: flex; flex-direction: column; align-items: flex-start; color: white;">
                <label style="width: 100%;" for="license">Approved driving license:</label>
                <input style="width: 100%;" type="text" id="license" name="license" required>
              </div>

              <div style="text-align: left; display: flex; flex-direction: column; align-items: flex-start; color: white;">
                <label style="width: 100%;" for="profile">Profile photo:</label>
                <input style="width: 100%;" type="file" id="profile" name="profile" accept="image/*" required>
              </div>

              <div style="text-align: left; display: flex; flex-direction: column; align-items: flex-start; color: white;">
                <label style="width: 100%;" for="wildlife">Wildlife department approval:</label>
                <input style="width: 100%;" type="file" id="wildlife" name="wildlife" required>
              </div>
              <div style="text-align: center;">
                <button style="padding: 10px 20px; margin-top: 10px; font-size: 16px; background-color: #201a03; color: white; border: none; border-radius: 4px;" type="submit" name="submitBtn" onclick="event.preventDefault();
                var form = document.getElementsByTagName('form')[0];
                var formData = new FormData(form);
                fetch('Driver Registration.php', {
                  method: 'POST',
                  body: formData
                })
                .then(response => {
                  if(response.ok) {
                    window.location.href = 'driver.php';
                  } else {
                    alert('Registration failed, please try again');
                  }
                })
                .catch(error => console.log(error));">Submit</button>
              </div>
          </div>
      

    </body>
</html>
</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "safari_sync");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $nic = $_POST["nic"];
    $age = $_POST["age"];
    $contact = $_POST["contact"];
    $vehicle = $_POST["vehicle"];
    $license = $_POST["license"];

    $file_name = $_FILES["profile"]["name"];
    $wildlife_name = $_FILES["wildlife"]["name"];

    $folder = "../driver_images/";

    if (move_uploaded_file($_FILES["profile"]["tmp_name"], $folder . $file_name) && move_uploaded_file($_FILES["wildlife"]["tmp_name"], $folder . $wildlife_name)) {
        $sql = "INSERT INTO Driver_Registration (Name, NIC, Age, Contact_No, Vehicle_Number, Driving_License, Profile_Photo, Approval) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssisssss", $name, $nic, $age, $contact, $vehicle, $license, $file_name, $wildlife_name);
        mysqli_stmt_execute($stmt);
        echo "Registration successful";
    } else {
        echo "Error uploading files";
    }
}
?>


