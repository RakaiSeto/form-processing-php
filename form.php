<html>
<head></head>
<body>

    <?php
    $servername = "localhost";
    $username = "rakai";
    $password = "password";
    $db = "tugas";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);
    // Check connection
    if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    $name=$_POST['nama'];
    $email=$_POST['email'];
    $message=$_POST['pesan'];
    $sql = "INSERT INTO form_data (nama, email, message)
    VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>

    <br>Welcome <?php echo $name; ?><br>
    Your email address is: <?php echo $email; ?>

</body>
</html>