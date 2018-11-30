<html>
<head>

    <style>

        .pagination > li {
            display: inline;
        }
        .pagination li a{
            padding: 1%;
            background: lightgray;
        }
        .pagination li.active span{
            padding: 1%;
            background: lightgreen;
        }
    </style>
</head>

<body>
<center>
<?php echo e(csrf_field()); ?>

<h1 style="color: #685d20"><b> Friends List</b><br>   </h1>
<p> <a href="/dashboard"><button>GoBack</button></a>
</p>
<hr/>
<h2 style="color: Green"><?php echo e(Session::has('errorMsg') ? Session::get("errorMsg") : ''); ?></h2>
<table  border = "1" cellpadding = "5" cellspacing = "5">
    <thead>
    <tr class="bg-green">
        <th width="10">ID.no</th>
        <th width="10">Name</th>
        <th width="10">Email</th>
        <th width="10">View Profile</th>
    </tr>
    </thead>
    <?php $i=1;
//dd($userData);
    ?>
    <?php $__currentLoopData = $userData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr id="<?php echo e($value->id); ?>">
            <td><?php echo e($value->id); ?></td>
            <td><?php echo e($value->name); ?></td>
            <td><?php echo e($value->email); ?></td>
            <td><a href="/profile/<?php echo e($value->id); ?>">View</a></td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($userData->links()); ?>




</center>
</body>
</html>