<?php $__env->startSection('content'); ?>

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="post" action="inscription">
        <?php echo e(csrf_field()); ?>

       <div id="connexion-contain">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Formulaire d'inscription</h3>
                <p>S'il vous plait, veuillez saisir vos informations</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" name="login" type="text" placeholder="Identifiant" value="<?php echo e(old('login')); ?>" required="">
                    <?php if($errors->has('login')): ?>
                        <p class="text-danger"><?php echo e($errors->first('login')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="firstname" type="text" placeholder="Prénom" value="<?php echo e(old('firstname')); ?>" required="" >
                    <?php if($errors->has('firstname')): ?>
                        <p class="text-danger"><?php echo e($errors->first('firstname')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="lastname" type="text" placeholder="Nom"  value="<?php echo e(old('lastname')); ?>" required="">
                    <?php if($errors->has('lastname')): ?>
                        <p class="text-danger"><?php echo e($errors->first('lastname')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="email" type='email' placeholder="E-mail" value="<?php echo e(old('email')); ?>" required="">
                    <?php if($errors->has('email')): ?>
                        <p class="text-danger"><?php echo e($errors->first('email')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="mdp" type="password"  placeholder="Mot de passe" required="">
                    <?php if($errors->has('mdp')): ?>
                        <p class="text-danger"><?php echo e($errors->first('mdp')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="mdp_confirmation" type="password" placeholder="Confirmation du mot de passe" required="">
                    <?php if($errors->has('mdp_confirmation')): ?>
                        <p class="text-danger"><?php echo e($errors->first('mdp_confirmation')); ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Enregistrer mon compte</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" required="" type="checkbox"><span class="custom-control-label">Pour créer votre compte, veuillez accepter les <a href="#">conditions générales du site</a></span>
                    </label>
                </div>
                <div class="form-group row pt-0">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                        <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Déjà membre? <a href="connexion" class="text-secondary">Se connecter ici.</a></p>
            </div>
        </div>
       </div>
    </form>
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>