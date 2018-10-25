<?php
require('constants.php');
require('config/db.php');
$id = $_REQUEST['id'];
$post = Query_With_Id($id,'SELECT * FROM postcontent WHERE Post_id=');
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
    
<h1><?php echo $post['Post_title']; ?></h1>
<p>Published On :  <?php echo $post['Publised']; ?> | Author : <?php echo $post['Author']; ?></p>
<hr>
<p><?php echo $post['Post_body']; ?></p>
<br>
<a class="btn btn-primary" href=<?php echo ROOT_PATH;  ?>>Back Home</a>
<a class="btn btn-primary" href= " edit.php?id=<?php echo $post['Post_id']; ?>  ">Edit</a>
<a class="btn btn-primary" href= " delete.php?id=<?php echo $post['Post_id']; ?>  ">Delete Post</a>

</div>
    <?php require('inc/footer.php'); ?>
</body>
</html>