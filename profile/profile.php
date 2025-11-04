<?php
// Dummy user data
$name = "John Doe";
$email = "johndoe@gmail.com";
$phone = "+91 9876543210";
$address = "Mumbai, India";
$about = "Hello! I am John Doe, a student and tech enthusiast. I love coding and learning new technologies.";
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>

<h2>User Profile</h2>

<img src="profile.jpg" alt="Profile Picture" width="120" height="120">

<p><strong>Name:</strong> <?php echo $name; ?></p>
<p><strong>Email:</strong> <?php echo $email; ?></p>
<p><strong>Phone:</strong> <?php echo $phone; ?></p>
<p><strong>Address:</strong> <?php echo $address; ?></p>

<h3>About Me</h3>
<p><?php echo $about; ?></p>

<a href="edit_profile.php"><button>Edit Profile</button></a>

</body>
</html>
