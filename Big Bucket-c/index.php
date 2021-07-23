<?php

include './header.php';


session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    $loggedin = true;
} else {

    $loggedin = false;
}
?>
<?php
if ($loggedin) {
echo'

<script>  swal("!", "Please Loged In!", "error"); </script>';
    
}
if (!$loggedin) {
    $username = strtoupper($_SESSION['username']);
    echo'

<script>  swal("Welcome!", "You are Loged in", "success"); </script>';
    
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>


    <section id="home">
        <div class="container">
            <div class="row ">
                <div class="col-2 ">

                    <h1>Welcome To Veggie World,<br>Get Fresh Veggie at Your Door Step</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Fugit, pariatur dolor excepturi delectus maxime ab.</p>
                    <a href="shop.php" class="btn ">Go to Shop &#8594;</a>
                </div>
                <div class="col-2 ">
                    <!-- <img src="./img/186023-removebg-preview.png "> -->
                </div>
            </div>
            <div class="nbtn ">
                <ul>
                    <li>
                        <a href="account.php">
                            <i class="fa fa-user " aria-hidden="true "></i>
                            <span>Accounts</span></a>
                    </li>
                    <li>
                        <a href="cart.php">
                            <i class="fa fa-shopping-cart " aria-hidden="true "></i>
                            <span>Go To Cart</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End of Container-->
    </section>
    <!-- End of home Section -->


    <!-- ---- Featured Categories------------ -->

    <div class="categories ">
        <div class="small-container ">
            <div class="row ">
                <div class="col-3 ">
                    <img src="./newImg/categories_img_01.jpg"> </div>
                <div class="col-3 "><img src="./newImg/categories_img_02.jpg"></div>
                <div class="col-3 "><img src="./newImg/categories_img_03.jpg "></div>

            </div>
        </div>
    </div>









    <!-- ---- Featured Products------------ -->
    <div class="small-container ">
        <h2 class="title ">Fruits & Vegetable</h2>
        <div class="row ">
            <div class="col-4 ">

                <img src="./newImg/img-pro-01.jpg">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div class="rating ">

                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star-o "></i>
                    </div>

                    <p style="color: black; ">$50.00</p>
                </div>
            </div>
            <div class="col-4 ">

                <img src="./newImg/img-pro-02.jpg">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div class=" rating ">

                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star-o "></i>
                    </div>

                    <p style="color: black; ">$50.00</p>
                </div>
            </div>
            <div class="col-4 ">

                <img src="./newImg/img-pro-03.jpg ">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div class="rating ">

                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star-half-o "></i>

                        <i class="fa fa-star-o "></i>
                    </div>

                    <p style="color: black; ">$50.00</p>
                </div>
            </div>
            <div class="col-4 ">

                <img src="./newImg/img-pro-04.jpg">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div class=" rating ">

                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>

                        <i class="fa fa-star-o "></i>
                    </div>

                    <p style="color: black; ">$50.00</p>
                </div>
            </div>
        </div>







        <h2 class="title ">Most Liked Products</h2>

        <div class="row ">
            <div class="col-4 ">

                <img src="./newImg/gallery-img-02.jpg ">
                <h4>Lorem ipsum dolor sit ametrr</h4>
                <div class="rating ">

                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star-o "></i>
                    </div>

                    <p style="color: black; ">$50.00</p>
                </div>
            </div>
            <div class="col-4 ">

                <img src="./newImg/gallery-img-02.jpg ">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div class="rating ">

                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star-o "></i>
                    </div>

                    <p style="color: black; ">$50.00</p>
                </div>
            </div>
            <div class="col-4 ">

                <img src="./newImg/gallery-img-03.jpg ">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div class="rating ">

                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star-half-o "></i>

                        <i class="fa fa-star-o "></i>
                    </div>

                    <p style="color: black; ">$50.00</p>
                </div>
            </div>
            <div class="col-4 ">

                <img src="./newImg/gallery-img-04.jpg ">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div class="rating ">

                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>

                        <i class="fa fa-star-o "></i>
                    </div>

                    <p style="color: black; ">$50.00</p>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-4 ">

                <img src="./newImg/gallery-img-05.jpg">
                <h4>Lorem ipsum dolor sit amet</h4>

                <div class="rating ">

                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star-o "></i>
                    </div>

                    <p style="color: black; ">$50.00</p>
                </div>
            </div>
            <div class="col-4 ">

                <img src="./newImg/gallery-img-06.jpg">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div class="rating ">

                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star-half-o "></i>

                        <i class="fa fa-star-o "></i>
                    </div>

                    <p style="color: black; ">$50.00</p>
                </div>
            </div>
            <div class="col-4 ">

                <img src="./newImg/gallery-img-07.jpg ">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div class="rating ">

                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>

                        <i class="fa fa-star-o "></i>
                    </div>

                    <p style="color: black; ">$50.00</p>
                </div>
            </div>

            <div class="col-4 ">

                <img src="./newImg/gallery-img-08.jpg ">
                <h4>Lorem ipsum dolor sit amet</h4>
                <div class="rating ">

                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>

                        <i class="fa fa-star-o "></i>
                    </div>

                    <p style="color: black; ">$50.00</p>
                </div>
            </div>
        </div>

    </div>





    <!-- --offer-- -->
    <div class="offer ">

        <div class="row">
            <div class="video-container">
                <video autoplay muted loop>
                    <source src="./newImg/On Vegies.mp4" type="video/mp4" />
                </video>

            </div>
        </div>

    </div>



    <!-- ----- Testimonial--- -->
    <div class="testimonial ">
        <h2 class="title ">Reviews & Rating</h2>
        <div class="small-container ">
            <div class="row ">
                <div class="col-3 ">
                    <i class="fa fa-quote-left "></i>
                    <p>Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, quae. consectetur adipisicing elit. Sit consectetur nulla veniam natus impedit iusto quaerat consequatur. Error, labore beatae.</p>
                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>

                        <i class="fa fa-star-o "></i>
                    </div>
                    <img src="./img/product/user-1.png ">
                    <h3>Mia Toreto</h3>
                </div>
                <div class="col-3 ">
                    <i class="fa fa-quote-left "></i>
                    <p>Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, quae. consectetur adipisicing elit. Sit consectetur nulla veniam natus impedit iusto quaerat consequatur. Error, labore beatae.</p>
                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>

                        <i class="fa fa-star-o "></i>
                    </div>
                    <img src="./img/product/user-2.png ">
                    <h3>Dominic Toredo</h3>
                </div>
                <div class="col-3 ">
                    <i class="fa fa-quote-left "></i>
                    <p>Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, quae. consectetur adipisicing elit. Sit consectetur nulla veniam natus impedit iusto quaerat consequatur. Error, labore beatae.</p>
                    <div class="rating ">
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>
                        <i class="fa fa-star "></i>

                        <i class="fa fa-star-o "></i>
                    </div>
                    <img src="./img/product/user-3.png ">
                    <h3>letty</h3>
                </div>
            </div>
        </div>
    </div>

    <?php
    include './footer.php';
    ?>

</body>

</html>