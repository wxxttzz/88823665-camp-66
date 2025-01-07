<h1>My View!</h1>
<?php echo $value_id; ?>
<?php echo e($value_id); ?>|<?php echo e($myinput); ?>

<form action="<?php echo e(url('/mycontroller')); ?>"
method="post">
<?php echo csrf_field(); ?>
<input type="text" name = "myinput">
<button type="submit">
    submit
</button>
</form>
<?php for($i=0;$i<10;$i++){?>
   <h1><?php echo e($i); ?></h1>
<?php }?><?php /**PATH C:\xampp\htdocs\88823665-camp-66\mylaravel\resources\views/myview.blade.php ENDPATH**/ ?>