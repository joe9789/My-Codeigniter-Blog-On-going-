<h1>Create Account</h1>

<fieldset>
  <legend>Personal Information</legend>
  <?php
    echo form_open('login/create_member');
    echo form_input('firstname',set_value('firstname','First Name'));
    echo form_input('lastname',set_value('lastname','Last Name'));
    echo form_input('email',set_value('email','Email Id'));
   ?>
</fieldset>
<br><br>
<fieldset>
  <legend>Login Info</legend>
  <?php
      echo form_input('username',set_value('username','User Name'));
      echo form_password('password',set_value('password','Password'));
      echo form_password('password2',set_value('password2','Password'));
      echo form_submit('submit','Create Account');
   ?>

   <?php echo validation_errors("<p class='errors'>"); ?>
</fieldset>
