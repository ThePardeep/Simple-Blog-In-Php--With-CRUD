<?php 

function AllDataQuery(){

$conn = mysqli_connect("localhost","root","","posts");
 if(!$conn)
 {
     die("Connection Error");
 }

 $query = 'SELECT * FROM postcontent';

 $result = mysqli_query($conn,$query);

 $result = mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_close($conn);
return $result;
}

function Query_With_Id($id,$query)
{
    $conn = mysqli_connect("localhost","root","","posts");
    $id = mysqli_real_escape_string( $conn,$id);
    if(!$conn)
    {
        die("SERVER ERROR".mysqli_error());
    }
    $query .= $id;
    $result = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $result;
}

function QueryUpdate($id,$query)
{
    $conn = mysqli_connect("localhost","root","","posts");
    $id = mysqli_real_escape_string( $conn,$id);
    if(!$conn)
    {
        die("SERVER ERROR".mysqli_error());
    }
    
    $query .= "$id";
    $result = mysqli_query($conn,$query);
    mysqli_close($conn);
}

function AddPost($query){
    $conn = mysqli_connect("localhost","root","","posts");
    if(!$conn)
    {
        die("SERVER ERROR".mysqli_error());
    }
    mysqli_query($conn,$query);
    mysqli_close($conn);
}

function DeletePost($id){

    $conn = mysqli_connect("localhost","root","","posts");
    $id = mysqli_real_escape_string( $conn,$id);
    if(!$conn)
    {
        die("SERVER ERROR".mysqli_error());
    }
    $query = "DELETE FROM postcontent WHERE Post_id = ";
    $query .= "$id";
    mysqli_query($conn,$query);
    mysqli_close($conn);

}

?>