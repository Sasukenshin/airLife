<?php $__env->startSection('content'); ?>

<h1>Connexion</h1>

<?php echo Form::open(['url' => 'login']); ?>


<div class="col-md-8 col-md-offset-2">

    <div class="form-group">
        <input class="form-control col-md-11" placeholder="Login" name="login" type="text" required>

    </div>
    <div class="form-group">
        <input class="form-control col-md-11" placeholder="Mot de passe" name="pwd" type="password" required>
    </div>
    <?php if( $erreur != null): ?>
    <p><?php echo e($erreur); ?></p>
    <?php endif; ?>
    <br/>
    <input class="btn btn-lg btn-success btn-block" type="submit" value="Se connecter">
</div>


<?php echo Form::close(); ?>  
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>