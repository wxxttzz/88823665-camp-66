<h1>My View!</h1>
<?php echo $value_id; ?>
<?php echo e($value_id); ?>|<?php echo e($myinput); ?>

<form action="<?php echo e(url('/mycontroller')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="text" name = "myinput">
    <button type="submit">Submit</button>
</form><?php /**PATH C:\xampp\htdocs\88823665-camp-66\mylaravel\resources\views/myView.blade.php ENDPATH**/ ?>