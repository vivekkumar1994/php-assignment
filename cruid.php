  <?php

require("connection.php");

function image_upload($img){
    $tmp_loc = $img['tmp_name'];
    $new_name = random_int(11111,99999).$img['name'];
    $new_loc = UPLOAD_SRC.$new_name;
   if(!move_uploaded_file($tmp_loc,$new_loc)){
    header("location: index.php?alert=img_upload");
    exit;
   }
   else{
    return $new_name;

   }

}
if(isset($_POST['addproduct'])){
  foreach($_POST as $key => $value){
      $_POST[$key] = mysqli_real_escape_string($con,$value);
  }
 $imgpath =  image_upload($_FILES['image']);
 $query = "INSERT INTO `productss`(`name`, `price`, `image`) 
 VALUES ('$_POST[name]','$_POST[price]','$imgpath')";

if(mysqli_query($con,$query)) {
  header("location: index.php?success=added");
}
else{
  header("location: index.php?alert=add_failed");

}
}

function image_remove($img){
if(!unlink(UPLOAD_SRC.$img)){
  header("location:index.php?alert=img_rem_fail");
  return;
}
else{
    echo "not deleted";
}

}

 


if(isset($_GET['rem'])  && $_GET['rem']>0)
{
    $query= "SELECT * FROM `productss` WHERE`id`='$_GET[rem]'";
    $result = mysqli_query($con,$query);
    $fetch= mysqli_fetch_assoc($result);
    image_remove($fetch['image']);
    $query ="DELETE  FROM `productss` WHERE `id` ='$_GET[rem]'";
    if(mysqli_query($con,$query)){
      header("location:index.php?alert=remove_failed");
    }
    else{
      header("location:index.php?alert=remove_failed");
    }

    
}
 

?> 