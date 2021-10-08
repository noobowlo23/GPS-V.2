<?php

/**
 * Dashboard Page
 * 
 * @link https://appzstory.dev
 * @author Yothin Sapsamran (Jame AppzStory Studio)
 */
require_once('../authen.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าหลัก | AppzStory</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon.ico">
    <!-- stylesheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include_once('../includes/sidebar.php') ?>
        <?php include_once('../../assets/cdn.html') ?>
        <div class="content-wrapper pt-3">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <!-- <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info shadow">
                                <div class="inner text-center">
                                    <h1 class="py-3">&nbsp;Dashboard&nbsp;</h1>
                                </div>
                                <a href="../manager/" class="small-box-footer py-3"> คลิกจัดการระบบ <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-primary shadow">
                                <div class="inner text-center">
                                    <h1 class="py-3">รายชื่อลูกค้า</h1>
                                </div>
                                <a href="../members/" class="small-box-footer py-3"> คลิกจัดการระบบ <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success shadow">
                                <div class="inner text-center">
                                    <h1 class="py-3">รายการสินค้า</h1>
                                </div>
                                <a href="../products/" class="small-box-footer py-3"> คลิกจัดการระบบ <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger shadow">
                                <div class="inner text-center">
                                    <h1 class="py-3">รายการสั่งซื้อ</h1>
                                </div>
                                <a href="../orders/" class="small-box-footer py-3"> คลิกจัดการระบบ <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div> -->
                    <div class="card shadow bg-light">
                        <div class=" card-header ">
                            <div class="h1"><i class="fas fa-tachometer-alt"></i> แดชบอร์ด</div>
                        </div>
                        <div class="card-body">
                            เนื้อหา
                        </div>
                        <!-- <div class="card-footer ">
                            ฟุตเตอร์
                        </div> -->
                    </div>

                </div>
            </div>
        </div>
        <?php include_once('../includes/footer.php') ?>
    </div>


    <!-- SCRIPTS -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/adminlte.min.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>
    <script src="../../plugins/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>
    <script src="../../assets/js/pages/dashboard.js"></script>
</body>

</html>