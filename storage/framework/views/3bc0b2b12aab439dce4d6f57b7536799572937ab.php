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
<?php echo e(csrf_field()); ?>

<h1 style="color: #685d20"><b> Friends List</b><br>   </h1>
<p> <a href="/dashboard"><button>GoBack</button></a>
</p>
<hr/>
<h2 style="color: Green"><?php echo e(Session::has('errorMsg') ? Session::get("errorMsg") : ''); ?></h2>
<table  border = "1" cellpadding = "5" cellspacing = "5">
    <thead>
    <tr>
        <th>ID.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>View Profile</th>
    </tr>
    </thead>
    <?php $i=1;
//    dd($userData);
    ?>
    <?php $__currentLoopData = $userData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr id="<?php echo e($value->id); ?>">
            <td><?php echo e($value->id); ?></td>
            <td><?php echo e($value->name); ?></td>
            <td><?php echo e($value->email); ?></td>
            <td><a href="/pending/<?php echo e($value->id); ?>">Conform Request</a></td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($userData->links()); ?>













</body>
</html>