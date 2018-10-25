<?php
require('constants.php');
require('config/db.php');
$result = AllDataQuery();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php With MySql</title>
</head>
<body>

<?php require('inc/header.php'); ?>
    
    <div class="container">
    <h1>All Posts </h1>
<?php  
 foreach($result as $post ) : ?> 
<div class="fp_pb">
<h1><?php echo $post['Post_title']; ?></h1>
<p>Published On  <?php echo $post['Publised']; ?> | Author : <?php echo $post['Author']; ?></p>
<hr>
<p><?php echo $post['Post_body']; ?></p>
<a class="btn btn-primary" href="post.php?id=<?php echo $post['Post_id']; ?>">Read More</a>
</div>
<br>
<?php endforeach ; ?>
    </div>
<?php require('inc/footer.php') ?>

</body>
</html>
