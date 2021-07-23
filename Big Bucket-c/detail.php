<?php

include './header.php';
$id = $_GET['id'];
include './dbconnect.php';
?>


<div class="small-container single-product">
        
<form action="cart.php" method="post">
<div class="row">


        <?php
$sql="SELECT * FROM `shop` where `pid`=$id";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $title=$row['title'];
    $price=$row['price'];
    $img=$row['location'];
    $detail=$row['detail']; 
    
   
    



           echo' <div class="col-2">
           
                <img src="'.$img.'" width="100%">
            </div>
            <div class="col-2">
                
                <h1>'.$title.'</h1>
                <h4 style="color: black;">$50.00</h4>
                <label>Quantity in Kg</label>
                <input type="number" name="qty" value="1">
                
                <input type="hidden" name="id" value='.$id.'>
                <input type="hidden" name="title" value='.$title.'>
                <input type="hidden" name="price" value='.$price.'>
                <input type="hidden" name="img" value='.$img.'>
                <button href="detail.php?id='.$id.'" type="submit" name="cart"  class="btn">Add to cart</button>

                <h3>Short Description<i class="fa fa-indent"></i></h3>
                <br>
                <p>'.$detail.'</p>
            </div>
        </div>
    </div>';
}
    ?>
        </div>
        </form>

    <?php
include './footer.php';
?>