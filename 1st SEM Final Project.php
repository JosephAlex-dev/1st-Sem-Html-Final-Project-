<html>
<head>
    <title>Insert Car Information</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            color: #333;
            font-size: 16px;
            background-image: url('https://www.financialexpress.com/wp-content/uploads/2024/08/Shailesh-Chandra-Tata-Curvv.jpg?w=1024');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            width: 300px;
        }
        h1 {
            font-size: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-size: 16px;
        }
        input[type="text"], input[type="number"] {
            font-size: 16px;
            background-color: transparent;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            padding: 8px;
        }
        input[type="submit"] {
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <h1>Insert Car Information</h1>
        <label for="name">Name:</label><input type="text" id="name" name="name" required>
        <label for="age">Age:</label><input type="number" id="age" name="age" required>
        <label for="phone_number">Phone Number:</label><input type="text" id="phone_number" name="phone_number" required>
        <label for="car">Car:</label><input type="text" id="car" name="car" required>
        <label for="fuel_type">Fuel Type:</label><input type="text" id="fuel_type" name="fuel_type" required>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $phone_number = $_POST['phone_number'];
        $car = $_POST['car'];
        $fuel_type = $_POST['fuel_type'];
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tata_motors";
        $con = mysqli_connect($host, $username, $password, $dbname);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "INSERT INTO car_info (name, age, phone_number, car, fuel_type) VALUES ('$name', '$age', '$phone_number', '$car', '$fuel_type')";
        $rs = mysqli_query($con, $sql);
        if ($rs) {
            echo "<p>SAVED!</p>";
        } else {
            echo "<p>Error: " . mysqli_error($con) . "</p>";
        }
        mysqli_close($con);
    }
    ?>
</body>
</html>