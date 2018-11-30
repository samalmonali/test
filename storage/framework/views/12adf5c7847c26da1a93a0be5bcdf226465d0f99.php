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
    <title>Login</title>

</head>
<body>
<center>
<h1 style="color: black">Login..!!!</h1>
<p>********************************************************************************</p>

<?php
if(isset($data)){?>
<p style="color:green"><?php echo e($data); ?></p>
<?php }
?>
<h2 style="color: #c7254e"><?php echo e(Session::has('errorMsg') ? Session::get("errorMsg") : ''); ?></h2>
<div>
    <p style="color:darkred">Required Fields *</p>
    <form method="post" action="/login" id="1">
        <?php echo e(csrf_field()); ?>

        Email:<input type="text" name="email" placeholder="Enter your email" value="<?php echo old('email'); ?>" ><span class="error" style="color:darkred"><?php echo e($errors->first('email')); ?></span><br><br>
        Password:<input type="password" name="password" placeholder="Enter your password" ><span class="error" style="color:darkred"><?php echo e($errors->first('password')); ?></span><br><br>
        <button class="btn  btn-xs btn-success">Login</button><br>
    </form>&nbsp;<br>
    <a class="btn btn-xs btn-info" href="/reg">Registration</a>

</div>
</center>
<script>
//    $(document).ready(function(){
    window.histroy.pushState(null,"",window.location.href);
    window.onpopstate=function(){
    window.histroy.pushState(null,"",window.location.href);
    };
//    });
</script>
</body>

</html>