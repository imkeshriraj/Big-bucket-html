<?php

include './header.php';

?>
    <?php
    include("./dbconnect.php");
 
    if(isset($_POST['upload'])){
       $maxsize = 99942880; // 5MB
 
       $name = $_FILES['file']['name']; // storing file name
       $title=$_POST["title"];
       $categorey=$_POST["cate"];
       $detail=$_POST["detail"];
       $price=$_POST["price"];
       $target_dir = "productImg/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("jpg","jfif","png");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 5MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              // Insert record
              $query = "INSERT INTO `shop` (`title`,`category`, `price`, `detail`, `filename`, `location`, `dt`) 
              VALUES ('$title', '$categorey','$price', '$detail', '$name', '$target_file', current_timestamp())";

              mysqli_query($conn,$query);
              echo'

<script>  swal("!", "Product has been added!", "success"); </script>';
            }
          }

       }else{
        echo'

    <script>  swal("!", "Error!", "error"); </script>';
       }
 
     } 
     ?>



    
    <div class="account-page">
        <div class="container contact">
            <div class="row">

                <div class="col-3">
                    <h1>Upload Product</h1>
                    <form method="post" action="admin.php" enctype='multipart/form-data'>
                        <label>Enter Title Of Product</label>
                        <input type="text" name="title" placeholder="Enter Product Name">


                        <label>Enter Price</label>
                        <input type="number" name="price" placeholder="Enter Price">
                        <label for="exampleFormControlSelect2">Categorey</label>
                        <br>
                        <select name="cate" >
                         <option>Fruits</option>
                         <option>Vegetable</option>
                         <option>Grocery</option>
                         <option>others</option>
                       
                        </select>
                        <br>


                        <label>Detail</label><br>
                        <textarea name="detail" style="height: 70px;"></textarea>

                        <input class="text-warning" type='file' name='file' />
                         <input type='submit' class="btn" value='Upload' name='upload'>
                    </form>
                </div>
                <div class="col-1">
                    <img src="./img/186023-removebg-preview.png">
                </div>
            </div>
        </div>
    </div>
    <?php
include './footer.php';
?>






   