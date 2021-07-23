<?php

include './header.php';
include './dbconnect.php';

?>

<div class="offer ">

        <div class="row">
            <div class="video-container">
                <video autoplay muted loop>
                    <source src="./newImg/from farm to doorstep.mp4" type="video/mp4" />
                </video>

            </div>
        </div>

    </div>

    <div class="small-container">

        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option><a href="shop.php">Default Shorting</a></option>
               <a href="vegetable.php"><option>Short by Vegetable</option></a>
                <option><a href="fruit.php">Short by Fruits</a></option>
                <option>Short by Grocery</option>
            </select>
        </div>







        
            
        <div class="row">
<?php
$sql="SELECT * FROM `shop` WHERE category='Fruit'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $title=$row['title'];
    $price=$row['price'];
    $img=$row['location'];
    $id=$row['pid'];


    
// echo var_dump($img);
    
    echo '<div class="col-4">
    <a href="detail.php?id='.$id.'">
    <img src="'.$img.'">
    <h4>'.$title.'</h4>
    <div class="rating">

        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>

        <p style="color: black;">$'.$price.'</p>
    </div></a>
</div>';
}

?>
</div>
 
            

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594</span>
        </div>


    </div>




<?php
include './footer.php';
?>