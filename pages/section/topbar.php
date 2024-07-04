    <!-- Topbar Start -->
    <div class="topbar container-fluid">
        <div class="topbar row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="topbar row align-items-center py-3 px-xl-5" style="background-color: #fff;">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <button  class="btn border" id="click-basket-cart">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span id="count-cart" class="badge">
                        <?php 
                            if (isset($_SESSION['cart'])) { 
                                echo count($_SESSION['cart']);
                            }else{ echo "0";} 
                        ?>
                    </span>
                </button>
                <div id="cart-detail" class="cart-detail" style="">
                    <?php if (isset($_SESSION['cart'])) { ?>
                    <table class="table" id="table-cart">
                        <thead id="thead-cart">
                            <tr>
                            <th scope="col">ลำดับ</th>
                            <th class="text-center" scope="col" colspan="2">รายละเอียด</th>
                            <th class="text-center" scope="col">ราคา</th>
                            <th class="text-center" scope="col">จำนวน</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-cart">
                            <?php
                                $order_num=1;   
                                foreach ($_SESSION['cart'] as $item) {
                                    $string_img="";
                                    if($item['id']==1){
                                        $string_img= "product-1.jpg";
                                    }else if($item['id']==2){
                                        $string_img= "product-2.jpg";
                                    }else if($item['id']==3){
                                        $string_img= "product-3.jpg";
                                    }else if($item['id']==4){
                                        $string_img= "product-4.jpg";
                                    }else if($item['id']==5){
                                        $string_img= "product-5.jpg";
                                    }else if($item['id']==6){
                                        $string_img= "product-6.jpg";
                                    }else if($item['id']==7){
                                        $string_img= "product-7.jpg";
                                    }else if($item['id']==8){
                                        $string_img= "product-8.jpg";
                                    }else{
                                        $string_img= "product-1.jpg";
                                    }
                            ?>
                            <tr>
                                <th class="align-middle" scope="row"><?= $order_num?></th>
                                <td class="align-middle"><img class="img-fluid img-cart" src="../../vendor/template-main/img/<?= $string_img?>" alt=""></td>
                                <td class="align-middle"><?= $item['name']?></td>
                                <td class="align-middle text-center"><?= $item['price']?></td>
                                <td class="align-middle">
                                    <div class="input-group quantity mr-3" style="width: 130px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary btn-minus">
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control bg-secondary text-center" value="1">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <?php 
                                $order_num++;
                                }
                            ?>
                           
                        </tbody>
                    </table>
                    <button onClick="goToCart()" class="btn btn-block btn-primary my-3 py-3">To Cart</button>
                    <?php } ?>
                </div>
            </div>
          
        </div>
        <div>
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                    <?php $url=$_SERVER['REQUEST_URI'];?>
                        <a href="../../index.php" class="nav-item nav-link <?php if($url=="/eshopper/index.php")echo "active";else echo ""?>">Home </a>
                        <a href="../../pages/shop/shop.php" class="nav-item nav-link <?php if($url=="/eshopper/pages/shop/shop.php")echo "active";else echo ""?>">Shop</a>
                        <a href="../../pages/shop-cart/shop-cart.php" class="nav-item nav-link <?php if($url=="/eshopper/pages/shop-cart/shop-cart.php")echo "active";else echo ""?>">Cart</a>
                        <a href="../../pages/shop-checkout/shop-checkout.php" class="nav-item nav-link <?php if($url=="/eshopper/pages/shop-checkout/shop-checkout.php")echo "active";else echo ""?>">Checkout</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                            </div>
                        </div> -->
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        
                        <?php if(isset($_SESSION["user_name"])) {
                        
                        ?>
                            <p class="nav-item nav-link"><?= $_SESSION["user_name"]?></p>
                            <a href="#" class="nav-item nav-link" onClick="logOut()">Logout</a>
                            
                        <?php 
                        }else{
                        ?>
                            <a href="../../pages/login/login.php" class="nav-item nav-link">Login</a>
                            <a href="" class="nav-item nav-link">Register</a>   
                        <?php 
                        }
                        ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Topbar End -->