<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
    header("location:index.php");
    exit;


 
    
}

?>
<?php
include './header.php';
include './dbconnect.php';
$username= $_SESSION['username'];



// echo $username;
if(isset($_POST['cart'])){
    $title=$_POST['title'];
    $price=$_POST['price'];
    $img=$_POST['img'];
    $id=$_POST['id'];
   
    // echo $title,$price,$img,$id;



    $sql="INSERT INTO `cart` (`pid`, `title`, `price`, `img`, `username`, `dt`) VALUES ('$id', '$title', '$price', '$img', '$username', current_timestamp());";
    $result=mysqli_query($conn,$sql);

}
?>

<div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <?php
         
         
         
         $total=0;
              $sql="SELECT * FROM `cart` WHERE  username='$username'";
              $result=mysqli_query($conn, $sql);
              while ($row=mysqli_fetch_assoc($result)) {
                  $title=strtoupper($row['title']);
                  $pid=$row['pid'];
                  $title=$row['title'];
                  $img=$row['img'];
                  $price=$row['price'];
                  $sno=$row['sno'];


                  $total = $total+$price;
                  
      
                  echo' <tr>
                <td>

                    <div class="cart-info">
                        <img src='.$img.'>
                        <div>

                            <p>'.$title.'</p>
                            <small>price:$'.$price.'</small>
                            <br>
                            <a href="remove.php?id='.$sno.'">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                   <p>1 Kg<p>
                </td>
                <td>$'.$price.'</td>
            </tr>';
            // echo $total;
              }
              
          
            ?>

          

        </table>

        <div class="total-price">
            <table>
                <?php
                $final=$total+28;
              
                
               

               echo' <tr>
                    <td>Subtotal</td>
                    <td>$'.$total.'</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$28.00</td>
                </tr>
                <tr>
                
                    <td>Total</td>
                    <td>'.$final.'</td>
                </tr>';?>
            </table>
            <a href=" " class="btn ">Buy Now &#8594;</a>
        </div>
    </div>
    <?php
include './footer.php';
?>