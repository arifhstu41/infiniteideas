

<?php $__env->startSection('content'); ?>
<div class="container-fluid h-100vh ">
    <div class="row background-white justify-content-center">
        <div class="col-md-6 col-sm-12" id="login-responsive"> 
            <div class="row justify-content-center">
                <div class="col-lg-7 mx-auto">
                    <div class="card-body pt-10">
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>                                       
        
                            <h3 class="text-center login-title mb-8"><?php echo e(__('Welcome Back to')); ?> <span class="text-info"><a href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name')); ?></a></span></h3>
        
                            <?php if($message = Session::get('success')): ?>
                                <div class="alert alert-login alert-success"> 
                                    <strong><i class="fa fa-check-circle"></i> <?php echo e($message); ?></strong>
                                </div>
                                <?php endif; ?>
        
                                <?php if($message = Session::get('error')): ?>
                                <div class="alert alert-login alert-danger">
                                    <strong><i class="fa fa-exclamation-triangle"></i> <?php echo e($message); ?></strong>
                                </div>
                            <?php endif; ?>
                            
                            <?php if(config('settings.oauth_login') == 'enabled'): ?>
                                <div class="divider">
                                    <div class="divider-text text-muted">
                                        <small><?php echo e(__('Sign In with Social Media')); ?></small>
                                    </div>
                                </div>
        
                                <div class="social-logins-box text-center">
                                    <?php if(config('services.facebook.enable') == 'on'): ?><a href="<?php echo e(url('/auth/redirect/facebook')); ?>" class="social-login-button" id="login-facebook"><i class="fa-brands fa-facebook mr-2 fs-16"></i><?php echo e(__('Sign In with Facebook')); ?></a><?php endif; ?>
                                    <?php if(config('services.twitter.enable') == 'on'): ?><a href="<?php echo e(url('/auth/redirect/twitter')); ?>" class="social-login-button" id="login-twitter"><i class="fa-brands fa-twitter mr-2 fs-16"></i><?php echo e(__('Sign In with Twitter')); ?></a><?php endif; ?>	
                                    <?php if(config('services.google.enable') == 'on'): ?><a href="<?php echo e(url('/auth/redirect/google')); ?>" class="social-login-button" id="login-google"><i class="fa-brands fa-google mr-2 fs-16"></i><?php echo e(__('Sign In with Google')); ?></a><?php endif; ?>	
                                    <?php if(config('services.linkedin.enable') == 'on'): ?><a href="<?php echo e(url('/auth/redirect/linkedin')); ?>" class="social-login-button" id="login-linkedin"><i class="fa-brands fa-linkedin mr-2 fs-16"></i><?php echo e(__('Sign In with Linkedin')); ?></a><?php endif; ?>	
                                </div>
        
                                <div class="divider">
                                    <div class="divider-text text-muted">
                                        <small><?php echo e(__('or sign in with email')); ?></small>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
        
                            <div class="input-box mb-4">                             
                                <label for="email" class="fs-12 font-weight-bold text-md-right"><?php echo e(__('Email Address')); ?></label>
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" autocomplete="off" placeholder="<?php echo e(__('Email Address')); ?>" required>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <?php echo e($message); ?>

                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                            
                            </div>
        
                            <div class="input-box">                            
                                <label for="password" class="fs-12 font-weight-bold text-md-right"><?php echo e(__('Password')); ?></label>
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" autocomplete="off" placeholder="<?php echo e(__('Password')); ?>" required>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <?php echo e($message); ?>

                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                            
                            </div>
        
                            <div class="form-group mb-3">  
                                <div class="d-flex">                        
                                    <label class="custom-switch">
                                        <input type="checkbox" class="custom-switch-input" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description"><?php echo e(__('Keep me logged in')); ?></span>
                                    </label>   
        
                                    <div class="ml-auto">
                                        <?php if(Route::has('password.request')): ?>
                                            <a class="text-info fs-12" href="<?php echo e(route('password.request')); ?>"><?php echo e(__('Forgot Your Password?')); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
        
                            <input type="hidden" name="recaptcha" id="recaptcha">
        
                            <div class="text-center">
                                <div class="form-group mb-0">                        
                                    <button type="submit" class="btn btn-primary font-weight-bold login-main-button"><?php echo e(__('Sign In')); ?></button>              
                                </div>
            
                                <?php if(config('settings.registration') == 'enabled'): ?>
                                    <p class="fs-10 text-muted pt-3 mb-0"><?php echo e(__('New to ')); ?> <a href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name')); ?>?</a></p>
                                    <a href="<?php echo e(route('register')); ?>"  class="fs-12 font-weight-bold"><?php echo e(__('Sign Up')); ?></a> 
                                <?php endif; ?>
                            </div>
        
                        </form>
                    </div>
                </div>
            </div>               
                 
        </div>

        <div class="col-md-6 col-sm-12 text-center background-special align-middle p-0" id="login-background">
            <div class="login-bg">
                <img src="<?php echo e(URL::asset('img/frontend/backgrounds/login.webp')); ?>" alt="">
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <!-- Tippy css -->
    <script src="<?php echo e(URL::asset('plugins/tippy/popper.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('plugins/tippy/tippy-bundle.umd.min.js')); ?>"></script>
    <script>
        tippy('[data-tippy-content]', {
                animation: 'scale-extreme',
                theme: 'material',
            });
    </script>
  
        <!-- Google reCaptcha JS -->
        <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(config('services.google.recaptcha.site_key')); ?>"></script>
        <script>
        
            grecaptcha.ready(function() {
                grecaptcha.execute('<?php echo e(config('services.google.recaptcha.site_key')); ?>', {action: 'contact'}).then(function(token) {
                    if (token) {
                    document.getElementById('recaptcha').value = token;
                    }
                });
            });
        </script>
   
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/infiniteideas/public_html/app.infiniteideas.ai/resources/views/auth/login.blade.php ENDPATH**/ ?>