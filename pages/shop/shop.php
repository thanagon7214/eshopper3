<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../../vendor/template-main/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

      <!-- Libraries Stylesheet -->
    <link href="../../vendor/template-main/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    
    <!-- Customized bootstrap-4.5.3-dist Stylesheet -->
    <link href="../../vendor/bootstrap-4.5.3-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../vendor/template-main/css/style.css" rel="stylesheet">

    <link href="../../vendor/css/index.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <?php require( '../../pages/section/topbar.php');?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php require( '../../pages/section/sidebar-main.php');?>
    <!-- Navbar End -->
    <?php include("../../pages/data-service/connect_database.php");
    
    ?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="price-all">
                            <label class="custom-control-label" for="price-all">All Price</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">$0 - $100</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2">$100 - $200</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-3">
                            <label class="custom-control-label" for="price-3">$200 - $300</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-4">
                            <label class="custom-control-label" for="price-4">$300 - $400</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="price-5">
                            <label class="custom-control-label" for="price-5">$400 - $500</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!-- Price End -->
                
                <!-- Color Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by color</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="color-all">
                            <label class="custom-control-label" for="price-all">All Color</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-1">
                            <label class="custom-control-label" for="color-1">Black</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-2">
                            <label class="custom-control-label" for="color-2">White</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-3">
                            <label class="custom-control-label" for="color-3">Red</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-4">
                            <label class="custom-control-label" for="color-4">Blue</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="color-5">
                            <label class="custom-control-label" for="color-5">Green</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!-- Color End -->

                <!-- Size Start -->
                <div class="mb-5">
                    <h5 class="font-weight-semi-bold mb-4">Filter by size</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="size-all">
                            <label class="custom-control-label" for="size-all">All Size</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-1">
                            <label class="custom-control-label" for="size-1">XS</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-2">
                            <label class="custom-control-label" for="size-2">S</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-3">
                            <label class="custom-control-label" for="size-3">M</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-4">
                            <label class="custom-control-label" for="size-4">L</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="size-5">
                            <label class="custom-control-label" for="size-5">XL</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search by name">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-transparent text-primary">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>
                            <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                            Sort by
                                        </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <?php

                        // ประเภทสินค้า
                        $check_have_product=false;
                        if (isset($_GET['type_product']) && (!is_null($_GET['type_product'])) && (!empty($_GET['type_product']))) {
                            $check_have_product = true;
                        } else {
                            $check_have_product = false;
                        }

                        // จำนวนสินค้าต่อหน้า
                        $itemsPerPage = 9;

                        // หน้าปัจจุบัน
                        if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                            $currentPage = (int)$_GET['page'];
                        } else {
                            $currentPage = 1;
                        }

                        // คำนวณตำแหน่งเริ่มต้นของสินค้าสำหรับหน้าปัจจุบัน
                        $offset = ($currentPage - 1) * $itemsPerPage;

                        // ดึงข้อมูลสินค้าจากฐานข้อมูล
                        if($check_have_product){
                            
                            // $sql = "SELECT * FROM products where type_product=".$_GET['type_product']." ORDER BY id OFFSET ? ROWS FETCH NEXT ? ROWS ONLY";
                            // $sql = "SELECT * FROM products WHERE type_product = :type_product ORDER BY id LIMIT :offset, :rows";
                            $sql = "SELECT * FROM Products WHERE type_product =".$_GET['type_product']." ORDER BY id LIMIT ".$offset.",". $itemsPerPage;
                        }else{
                            
                            // $sql = "SELECT * FROM products  ORDER BY id OFFSET ? ROWS FETCH NEXT ? ROWS ONLY";
                            // $sql = "SELECT * FROM products ORDER BY id LIMIT :offset, :rows";
                            // $sql = "SELECT * FROM Products ORDER BY id LIMIT $offset, $itemsPerPage";
                            $sql = "SELECT * FROM Products ORDER BY id LIMIT ".$offset.",". $itemsPerPage;
                        }
                        // $sql = "SELECT * FROM Products";
                        // $stmt = $conn->prepare($sql);
                        // echo $sql."<br>";
                        // if($check_have_product){
                        // $stmt->bindParam(':type_product', $_GET['type_product'], PDO::PARAM_INT);
                        // }
                        // $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
                        // $stmt->bindParam(':rows', $itemsPerPage, PDO::PARAM_INT);
                        
                        // $stmt->execute();
                       
                        // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        // รันคำสั่ง SQL
                       
                        $result = mysqli_query($conn, $sql);

                        if (!$result) {
                            die("Error: " . mysqli_error($conn));
                          
                        }

                        // ดึงผลลัพธ์
                        $results = [];
                        while ($row = mysqli_fetch_assoc($result)) {
                            $results[] = $row;
                           
                        }
                       
                        // ปิดการเชื่อมต่อฐานข้อมูล
                        // mysqli_close($conn);
                        
                        $products = array();
                        // while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        
                            // while ($row = $result->fetch_assoc()) {
                            foreach($results  as $row) {
                            ?>
                               <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                                    <div class="card product-item border-0 mb-4">
                                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                            <img style="" class="img-fluid w-100" src="../../vendor/upload/product_image/<?= $row['image']?>" alt="">
                                        </div>
                                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                            <h6 class="text-truncate mb-3"><?= $row['Name']?></h6>
                                            <div class="d-flex justify-content-center">
                                                <h6>$<?= $row['Price']?></h6><h6 class="text-muted ml-2"><del>$<?= $row['Price']?></del></h6>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between bg-light border">
                                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                            <button onclick="addToCart(<?= $row['Id']?>, '<?= $row['Name']?>', <?= $row['Price']?>,'<?= $row['image']?>')" href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        
                        ?>
                    
           
                    <?php
                        if($check_have_product){
                            // $sqlTotal = "SELECT COUNT(*) as total FROM products where type_product =".$_GET['type_product'];
                            // $sqlTotal = "SELECT COUNT(*) as total FROM Products WHERE type_product = :type_product";
                            $sqlTotal = "SELECT COUNT(*) as total FROM Products WHERE type_product =". $_GET['type_product'];
                        }else{
                            $sqlTotal = "SELECT COUNT(*) as total FROM Products";
                           
                        }
                        // $stmtTotal = sqlsrv_query($conn, $sqlTotal);

                        // if ($stmtTotal === false) {
                        //     die(print_r(sqlsrv_errors(), true));
                        // }

                        // $totalItems = sqlsrv_fetch_array($stmtTotal, SQLSRV_FETCH_ASSOC)['total'];
                        // $totalPages = ceil($totalItems / $itemsPerPage);
                        //
                    //  // เตรียมและรันคำสั่ง SQL
                    //     $stmtTotal = $conn->prepare($sqlTotal);

                    //     if ($check_have_product) {
                    //         $stmtTotal->bindParam(':type_product', $_GET['type_product'], PDO::PARAM_INT);
                    //     }

                    //     $stmtTotal->execute();

                    //     // ดึงผลลัพธ์
                    //     $totalItems = $stmtTotal->fetch()['total'];
                    //     $totalPages = ceil($totalItems / $itemsPerPage);
                    // รันคำสั่ง SQL และตรวจสอบผลลัพธ์
                        $resultTotal = $conn->query($sqlTotal);

                        if ($resultTotal === false) {
                            die("Error: " . $conn->error);
                        }

                        $totalItems = $resultTotal->fetch_assoc()['total'];
                        $totalPages = ceil($totalItems / $itemsPerPage);
                        //

                       
                        $range = 2; // จำนวนหน้าที่ต้องการแสดงทั้งซ้ายและขวาของหน้าปัจจุบัน (รวมเป็น 3 หน้า)

                        // คำนวณค่าเริ่มต้นและค่าสุดท้ายของหน้า
                        $start = max(1, $currentPage - $range);
                        $end = min($totalPages, $currentPage + $range);

                        // ปรับค่าเริ่มต้นและค่าสุดท้ายให้อยู่ในขอบเขตที่ถูกต้อง
                        if ($currentPage - $start < $range) {
                            $end = min($totalPages, $end + ($range - ($currentPage - $start)));
                        }
                        if ($end - $currentPage < $range) {
                            $start = max(1, $start - ($range - ($end - $currentPage)));
                        }
                    ?>
                        <div class="col-12 pb-1">
                            <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-3">
                        <?php if ($currentPage > 1): ?>
                            <!-- <a href="?page=<?php echo $currentPage - 1; ?>">&laquo; Previous</a> -->
                            <li class="page-item">
                              
                              <a class="page-link" href="../../pages/shop/shop.php?page=1&type_product=<?php if(isset($_GET['type_product']) )echo $_GET['type_product']; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                        <?php endif; ?>

                        <?php for ($page = $start; $page <= $end; $page++): ?>
                            <?php if ($page == $currentPage): ?>
                                <!-- <strong><?php echo $page; ?></strong> -->
                                <li class="page-item active"><a class="page-link" ><?php echo $page; ?></a></li>
                            <?php else: ?>
                                <!-- <a href="?page=<?php echo $page; ?>"><?php echo $page; ?></a> -->
                                <li class="page-item"><a class="page-link" href="../../pages/shop/shop.php?page=<?php echo $page; ?>&type_product=<?php if(isset($_GET['type_product']) )echo $_GET['type_product']; ?>"><?php echo $page; ?></a></li>
                            <?php endif; ?>
                        <?php endfor; ?>

                        <?php if ($currentPage < $totalPages): ?>
                            <!-- <a href="../../pages/shop/shop.php?page=<?php echo $currentPage + 1; ?>">Next &raquo;</a> -->
                            <li class="page-item">
                              <!-- <a class="page-link" href="#" aria-label="Next"> -->
                                <a class="page-link" href="../../pages/shop/shop.php?page=<?php echo $totalPages; ?>&type_product=<?php if(isset($_GET['type_product']) )echo $_GET['type_product']; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                        <?php endif; 
                        mysqli_close($conn);
                        ?>
                            </ul>
                            </nav>
                        </div>
                  
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    <?php require( '../../pages/section/footcontact.php');?>
    <!-- Footer End -->


      <!-- Back to Top -->
      <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../../vendor/template-main/lib/easing/easing.min.js"></script>
    <script src="../../vendor/template-main/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../../vendor/template-main/mail/jqBootstrapValidation.min.js"></script>
    <script src="../../vendor/template-main/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../../vendor/template-main/js/main.js"></script>
    <script src="../../vendor/js/shop.js">></script>
</body>

</html>