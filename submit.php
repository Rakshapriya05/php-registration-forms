<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Registration Submitted Successfully</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $dob = $_POST['dob'] ?? '';
        $gender = $_POST['gender'] ?? '';
        $department = $_POST['department'] ?? '';
        $course = $_POST['course'] ?? '';
        $skills = $_POST['skills'] ?? '';
        $address = $_POST['address'] ?? '';

        // Handle image upload
        $photoPath = '';
        if (!empty($_FILES["photo"]["name"])) {
            $targetDir = "uploads/";
            if (!file_exists($targetDir)) mkdir($targetDir);
            $photoPath = $targetDir . basename($_FILES["photo"]["name"]);
            move_uploaded_file($_FILES["photo"]["tmp_name"], $photoPath);
        }

        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Phone:</strong> $phone</p>";
        echo "<p><strong>Date of Birth:</strong> $dob</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Department:</strong> $department</p>";
        echo "<p><strong>Course:</strong> $course</p>";
        echo "<p><strong>Skills:</strong> $skills</p>";
        echo "<p><strong>Address:</strong> $address</p>";

        if ($photoPath)
            echo "<p><strong>Photo:</strong><br><img src='$photoPath' alt='Profile' width='120' height='120' style='border-radius:50%; margin-top:10px;'></p>";
    }
    ?>
    <button onclick="window.location.href='index.html'">Back</button>
</div>
</body>
</html>
