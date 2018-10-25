<?php
require('constants.php');
require('config/db.php');
$msg = '';
if(isset($_REQUEST['id']) !== null){
    $id = $_REQUEST['id'];
    $post = Query_With_Id($id,'SELECT * FROM postcontent WHERE Post_id=');
}
//'UPDATE postcontent SET Post_title = $title, Author = $author , Post_body = $body WHERE Post_id =';
if(isset($_POST['submit'])){
   if(!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['content'])){
    $title = filter_var($_POST['title'],FILTER_SANITIZE_STRING);
    $author =  filter_var($_POST['author'],FILTER_SANITIZE_STRING);
    $content = filter_var($_POST['content'],FILTER_SANITIZE_STRING);
    $id = $_REQUEST['id'];
    $query = "UPDATE postcontent SET Post_title = '$title', Author = '$author' , Post_body = '$content' WHERE Post_id = " ;
    QueryUpdate($id,$query);
    
    $post = Query_With_Id($id,'SELECT * FROM postcontent WHERE Post_id=');
    $msg = "Edit Successfuly";
    $msgclass = "alert-success";
   } else {
       $msg = "Pls Enter Valid Data";
       $msgclass = "alert-danger";
   }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <title>Edit Post </title>
</head>
<body>
<?php require('inc/header.php'); ?>
<div class="container">
<h1>Edit Post </h1>
<?php if($msg !== ''): ?>
<p class="alert <?php echo $msgclass; ?> "><?php echo $msg; ?></p>
<?php endif; ?>
<form method="POST" action="edit.php?id=<?php echo $post['Post_id']; ?>">
<div>
    <label style="font-size:25px" for="Title">Title</label> <br>
    <input type="text" name="title" id="Title" class="form-control" value="<?php echo $post['Post_title'];?>">
</div>
<div>
    <label style="font-size:25px" for="Author">Author</label> <br>
    <input type="text" name="author" id="Author" class="form-control" value="<?php echo $post['Author'];?>">
</div>
<div>
    <label style="font-size:25px" for="Content">Content</label> <br>
    <textarea type="text" name="content" id="Content" class="form-control"> <?php echo $post['Post_body'];?> </textarea>
</div>
<br>
<input type="submit" value="Submit" name="submit" class="btn btn-primary">
</form>
</div>
<?php require('inc/footer.php') ?>
</body>
</html>