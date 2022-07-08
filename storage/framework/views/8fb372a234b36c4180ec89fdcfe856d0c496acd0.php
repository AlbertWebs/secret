<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Sign Up</h3>
    </div>
    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="sign-in-wrapper">
            <a href="<?php echo e(url('/')); ?>/clientarea/facebook" class="social_bt facebook">Login with Facebook</a>
            
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <label class="container_check">Remember me
                      <input type="checkbox" name="remember">
                      <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
        </form>
            <div class="text-center">
                Don’t have an account? <a href="<?php echo e(url('/register')); ?>">Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <form method="POST" action="<?php echo e(route('password.email')); ?>" class="form-signin">
                        <?php echo e(csrf_field()); ?>

                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Send Password Reset Link" class="btn_1"></div>
                
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->

<?php if(Auth::user()): ?>
<!-- Sign In Popup -->
<div id="sign-in-dialogs" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Welcome <?php echo e(Auth::user()->name); ?></h3>
    </div>
    <form method="POST" action="<?php echo e(route('save')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="sign-in-wrapper">
            <a href="<?php echo e(url('/')); ?>/adventures-and-experiences" class="social_bt btn_1">Book Adventures & Experiences</a>
            <a href="<?php echo e(url('/')); ?>/africa-destinations" class="social_bt btn_1">Book Amaizing Tours</a>
            <a href="<?php echo e(url('/')); ?>/plan-my-safaris" class="social_bt btn_1">Plan My Safari</a>
            <a href="<?php echo e(url('/')); ?>/clientarea/logout" class="social_bt btn_1"><i class="ti-power-off"></i> Logout</a>
            <div class="divider"><span>Or</span></div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo e(Auth::user()->email); ?>" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" value="<?php echo e(Auth::user()->name); ?>" name="name" id="email">
                <i class="ti-user"></i>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" value="<?php echo e(Auth::user()->mobile); ?>" name="mobile" id="email">
                <i class="ti-mobile"></i>
            </div>
            
            <div class="text-center"><input type="submit" value="Update My Info" class="btn_1 full-width"></div>
        </form>
           
           
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->
<?php endif; ?><?php /**PATH /home/designekta/secret/resources/views/front/sign-up.blade.php ENDPATH**/ ?>