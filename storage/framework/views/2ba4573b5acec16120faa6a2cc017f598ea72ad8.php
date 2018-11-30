<!doctype html>
<html>
<head>
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    <link rel="icon" href="/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
    <style type="text/css">
        body {
            background-image: url("/images/3402.jpg");
        }

    </style>
    <title>Dshboard</title>

</head>
<body>
<center>

<h1 style="color: black">Dashboard..!!!</h1>
<div>
    <form method="post" action="/search" id="1">
        <?php echo e(csrf_field()); ?>

        Enter name to search friends:<input type="text" name="name" placeholder="Enter your name" value="<?php echo old('name'); ?>" >
        <button class="btn btn-success">Search Friends</button><br>
        <h4 style="color: darkred"><?php echo e(Session::has('emsg') ? Session::get("emsg") : ''); ?></h4>
        <h4 style="color: darkred"><?php echo e(Session::has('msg') ? Session::get("msg") : ''); ?></h4>
        <h4 style="color: green"><?php echo e(Session::has('smsg') ? Session::get("smsg") : ''); ?></h4>

    </form>
    <a class="btn btn-xs btn-info"  href="/friendList">Friend List </a><br><br>

    <a  class="btn btn-xs btn-primary"  href="/requestData">Request List </a><br><br>

    <a class="btn btn-xs btn-warning"   href="/pendingData">Pending Friend List </a><br><br>

    <div><a class="btn btn-xs btn-danger"  href="/logout">Logout</a></div>
</div>
</center>
</body>
</html>