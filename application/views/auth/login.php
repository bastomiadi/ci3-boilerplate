<div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="navbar">
      <div class="pull-center">
        <div ui-include="'../views/blocks/navbar.brand.html'"></div>
      </div>
    </div>
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
    <?php echo lang('login_heading');?>
      <div class="m-b text-sm">
        <?php echo lang('login_subheading');?>
      </div>
      <div id="infoMessage"><?php echo $message;?></div>
      <form name="form" method="post" action="<?php echo site_url()?>/auth/login">
        <div class="md-form-group float-label">
          <input id="<?= $identity['type'] ?>" type="<?= $identity['type'] ?>" name="<?php echo $identity['name'] ?>" class="md-input" ng-model="user.email" required>
          <label><?php echo lang('login_identity_label', 'identity');?></label>
        </div>
        <div class="md-form-group float-label">
          <input id="<?= $password['id'] ?>" type="<?= $password['type'] ?>" name="<?= $password['name'] ?>" class="md-input" ng-model="user.password" required>
          <label><?php echo lang('login_password_label', 'password');?></label>
        </div>      
        <div class="m-b-md">        
        <?php echo lang('login_remember_label', 'remember');?>
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
        </div>
        <button name="submit" type="submit" class="btn primary btn-block p-x-md"><?= lang('login_submit_btn') ?></button>
      </form>
    </div>

    <div class="p-v-lg text-center">
      <div class="m-b">
        <a ui-sref="access.forgot-password" href="forgot_password" class="text-primary _600">Forgot password?</a>
      </div>
      <div>Do not have an account? <a ui-sref="access.signup" href="signup.html" class="text-primary _600">Sign up</a></div>
    </div>
  </div>