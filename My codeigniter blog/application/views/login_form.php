<div class="login_form">
  <h1>Login Form</h1>
  <?php
    echo form_open('login/validate_credentials');
    echo form_input('username','Name');
    echo form_password('password','Password');
    echo form_submit('submit','Login');
    echo anchor('login/signup','Create Account');
    echo form_close();
   ?>
</div>
