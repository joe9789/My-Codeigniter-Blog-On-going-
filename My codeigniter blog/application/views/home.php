 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>My view</title>
   </head>
   <body>
     <p>My Blog</p>
     <?php foreach($rows as $r):?>
     <h1><?php echo $r->title; ?></h1>
     <div><?php echo $r->contents; ?></div>
   <?php endforeach; ?>
   </body>
 </html>
