<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safari Sync/Plan a Trip</title>
    <style>
        body{
            background-color: rgb(255, 182, 99);
            background-image:url("foreest.jpg");
            background-size: cover;
        }



            .site-header {
            background-color: #ffffff4b;
            color: #fff;
            padding: 1rem 0;
        }
        .site-header .container {
            display:flex;
            justify-content: space-between;
            align-items: center;
            height: 20px;
        }
        .site-title {
            margin:0;
        }
        .logo1 {
            width:50px;
            padding-top:10px;
        }
        .main-nav {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .main-nav li {
            display: inline;
            margin-right: 1rem;
        }
        .main-nav a {
            color: #fff;
            text-decoration: none;
        }
    



        .container1{
            border-color: black;
            border-width:10px;
            margin:60px 50px;
            color:rgb(255, 255, 255);
        }
        .formbox{
            background-color: rgba(88, 88, 88, 0.8);
            width:450px;
            padding:0px 40px;
            padding-bottom:30px;;
            border-radius:10px;
            border:1px solid black; 
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            box-shadow: 4px 4px 8px rgba(0,0,0,0.9);
            margin-top:15px;
            margin-left:20px;

        }
        .form-title{
            font-weight:bold;
            font-size:30px;
            display:block;
            margin-bottom:10px;
        }
        .box1{
            background-color:white;
            width:100%;
            height:25px;
            border-radius:5px;
            padding-bottom:10px;
            border:2px solid #000000;
        }
        .questions{
            font-weight:bold;
            font-size:18px;
            display:block;
            margin-top:15px;
            margin-bottom:7px;
        }
        #time{
            padding-bottom:8px;
        }
        #park{
            padding-bottom:8px;
        }
        .confirm{
            padding:10px 20px;
            border-radius:5px;
            margin-top:40px;
            font-size:larger;
            color:white;
            background-color:rgb(23, 164, 63);
            box-shadow:2px 2px 8px rgba(0,0,0,0.3);
            cursor:pointer;
            width:100%;
        }
        

      



    </style>
</head>
<body >

    <header class="site-header">
        <div class="container">
          <h1 class="site-title">
            <a href="index.html">
              <img class="logo1" src="logoo.jpg">
            </a>
          </h1>
          <nav class="main-nav">
            <ul>
              <li><a href="home.html">HOME</a></li>
              <li><a href="plan a trip.php">PLAN A TRIP</a></li>
              <li><a href="driver.php">REGISTRATION</a></li>
              <li><a href="Log-in.php">SIGN UP</a></li>
              <li><a href="Safari.html">ABOUT US</a></li>
            </ul>
          </nav>
        </div>
    </header>




    <div class="container1">
		
		<form class="formbox"  action="" method="post" onsubmit="return validateForm()">
			<h2 class="form-title">Plan Your Trip</h2>
			<label class="questions" for="park">Choose a park:</label>
			<select class="box1" id="park" name="park" required>
				<option value="">Select a park</option>
				<option value="park1">Park 1</option>
				<option value="park2">Park 2</option>
				<option value="park3">Park 3</option>
			</select><br>
			<label class="questions" for="date">Choose a date:</label>
			<input class="box1" type="date" id="date" name="date" required oninvalid="this.setCustomValidity('Please select a date')" oninput="this.setCustomValidity('')"><br>
			<label class="questions" for="seats">Number of seats:</label>
			<input class="box1" type="number" id="seats" name="seats" min="1" max="10" required oninvalid="this.setCustomValidity('Please enter a number between 1 and 10')" oninput="this.setCustomValidity('')"><br>
			<label class="questions" for="time" id="time">Choose a time:</label>
			<select class="box1" id="time" name="time" required>
				<option value="">Select a time</option>
				<option value="time1">Morning   (06.00 - 10.00)</option>
				<option value="time2">Afternoon (10.00 - 14.00)</option>
				<option value="time3">Evening   (14.00 - 18.00)</option>
			</select><br>
			<input class="confirm" type="submit" value="Confirm">
		</form>
		<script>
			function validateForm() {
				var park = document.getElementById("park").value;
				var date = document.getElementById("date").value;
				var seats = document.getElementById("seats").value;
				var time = document.getElementById("time").value;
				if (park == "" || date == "" || seats == "" || time == "") {
					alert("Please fill in all fields");
					return false;
				}
				return true;
			}
		</script>

	</div>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "safari_sync");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $park = $_POST['park'];
        $date = $_POST['date'];
        $seats = $_POST['seats'];
        $time = $_POST['time'];

        $sql = "INSERT INTO plan (park, date, seats, time) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssi", $park, $date, $seats, $time);
        if (mysqli_stmt_execute($stmt)) {
            echo "Trip planning successful.";
        } else {
            echo "Trip planning failed. Error: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    }
    ?>
    
</body>
</html>