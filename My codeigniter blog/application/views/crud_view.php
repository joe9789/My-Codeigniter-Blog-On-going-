<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crud Page</title>
  </head>
  <body>
    <h2>Create</h2>
    <p><?php echo form_open('site/create'); ?></p>
      <p>
          <label for="title">Title: </label>
          <input type="text" name="title" id="title" value="">
      </p>
      <p>
          <label for="content">Content: </label>
          <textarea name="content" rows="8" cols="80"></textarea>
      </p>
      <p>
        <input type="submit" name="submit" value="Submit">
      </p>
    <p><?php echo form_close(); ?></p>
    <hr>
    <h2>Read</h2>
    <?php if(isset($records)): foreach($records as $row): ?>
      <h3><?php echo anchor("site/delete/$row->id",$row->title); ?></h3>
      <p><?php echo $row->contents; ?></p>
    <?php endforeach; ?>
  <?php else: ?>
    <h3>Records Not Found</h3>
  <?php endif; ?>

  <h2>Delete</h2>
  <p>To delete a record simply click on it and the records will automatically deleted</p>
  <hr>
  <h2>Update</h2>
  
  </body>
</html>
