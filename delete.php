<?php 
require('constants.php');
require('config/db.php');
$id = $_REQUEST['id'];
DeletePost($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Post</title>
</head>
<body>
<?php require('inc/header.php'); ?>

<br>
<br>
<h1 class="display-1 container dl-post" >Your Post Is Deleted</h1>
<a href="<?php echo ROOT_PATH; ?>" class="btn btn-primary" style="margin-left:40%;">Back To Home</a>
<br>
<br>
<?php require('inc/footer.php'); ?>
</body>
</html>