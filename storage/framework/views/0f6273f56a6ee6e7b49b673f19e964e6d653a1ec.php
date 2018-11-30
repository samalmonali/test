<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
</head>
<body>

<h3 style="color: #0d3625">User Profile</h3>
<p>Name: <?php echo $userData['name'] ?></p>
<p>Email: <?php echo $userData['email'] ?></p>

<a href="/mutual/<?php echo $userData['id'] ?>"> Mutual Friend</a>

</body>
</html>
