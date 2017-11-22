<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Newletter</title>
    <style media="screen">
      label{
        display: block;
      }
    </style>
  </head>
  <body>
    <p>Newletter page loaded</p>
    <div class="news-letter">
      <?php echo form_open('email/send'); ?>
      <?php
          $name_data=array(
            'name'=>'name',
            'id'=>'name',
            'value'=>set_value('name')
          );
    ?>
    <p><label for="name">Name:- <?php echo form_input($name_data); ?></label></p>
    <p>
      <label for="email">Email Address:- </label>
      <input type="text" name="email" value="<?php echo set_value('email'); ?>">
    </p>
    <p>
      <?php echo form_submit('submit','Submit'); ?>
    </p>
      <?php echo form_close(); ?>
      <?php echo validation_errors(); ?>
    </div><!--End of new letter div -->
  </body>
</html>
