<?php

/**
 * Page Manager
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
    <title>จัดการสมาชิก | AppzStory</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon.ico">
    <!-- stylesheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include_once('../includes/sidebar.php') ?>
        <div class="content-wrapper pt-3">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class=" card-header ">
                            <div class="h1"><i class="fas fa-file-alt"></i>รายงานติดตามรถ</div>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="trucknumber" class="col-form-label">ทะเบียนรถ</label>
                                </div>
                                <div class="col-auto">
                                    <input type="password" id="trucknumber" class="form-control">
                                </div>
                                <div class="col-auto">
                                    <label for="startdate" class="col-form-label">วันเริ่มต้น</label>
                                </div>
                                <div class="col-auto">
                                    <input type="password" id="startdate" class="form-control">
                                </div>
                                <div class="col-auto">
                                    <label for="enddate" class="col-form-label">วันสิ้นสุด</label>
                                </div>
                                <div class="col-auto">
                                    <input type="password" id="enddate" class="form-control">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary">ตกลง</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead style="text-align: center;" class="table-dask">
                                    <tr>
                                        <th>วันเดือนปี </th>
                                        <th>เวลาที่ใช้งานทั้งหมด</th>
                                        <th>สรุประยะทางการวิ่ง</th>
                                        <th>เวลาที่จอดติดเครื่อง</th>
                                        <th>จำนวนครั้งที่จอดเกิน(10นาที)</th>
                                        <th>จอดติดเครื่องนานที่สุด</th>
                                        <th>ความเร็วสูงสุดที่ใช้</th>
                                        <th>เวลาที่ขับเร็วสูงสุด</th>
                                        <th>จำนวนครั้งวิ่งเกินความเร็ว</th>
                                        <th>เครื่องยนต์</th>
                                        <th>ปริมาณการใช้น้ำมัน/ลิตร</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <tr>
                                        <td colspan="11" style="background-color: rgb(245, 245, 245); font-size: larger; text-align: left;"><b>&nbsp;65-0413</b></td>
                                    </tr>
                                    <tr>
                                        <td>01/10/2021</td>
                                        <td style="text-align: right;">&nbsp;00:24</td>
                                        <td style="text-align: right;">0.0 กม.</td>
                                        <td style="text-align: right;">&nbsp;26:59</td>
                                        <td>1</td>
                                        <td style="text-align: right;">&nbsp;26:35</td>
                                        <td>61</td>
                                        <td style="text-align: right;">&nbsp;01/10/2021 00:13:07</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>0.0</td>
                                    </tr>
                                    <tr>
                                        <td>02/10/2021</td>
                                        <td style="text-align: right;">&nbsp;00:00</td>
                                        <td style="text-align: right;">0.0 กม.</td>
                                        <td style="text-align: right;">&nbsp;00:00</td>
                                        <td>0</td>
                                        <td style="text-align: right;">&nbsp;00:00</td>
                                        <td>0</td>
                                        <td style="text-align: right;">&nbsp;</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0.0</td>
                                    </tr>
                                    <tr>
                                        <td>03/10/2021</td>
                                        <td style="text-align: right;">&nbsp;00:00</td>
                                        <td style="text-align: right;">0.0 กม.</td>
                                        <td style="text-align: right;">&nbsp;00:00</td>
                                        <td>0</td>
                                        <td style="text-align: right;">&nbsp;00:00</td>
                                        <td>0</td>
                                        <td style="text-align: right;">&nbsp;</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0.0</td>
                                    </tr>
                                    <tr>
                                        <td>04/10/2021</td>
                                        <td style="text-align: right;">&nbsp;12:22:24</td>
                                        <td style="text-align: right;">683.8 กม.</td>
                                        <td style="text-align: right;">&nbsp;01:49:52</td>
                                        <td>1</td>
                                        <td style="text-align: right;">&nbsp;27:56</td>
                                        <td>84</td>
                                        <td style="text-align: right;">&nbsp;04/10/2021 21:34:51</td>
                                        <td>0</td>
                                        <td>16</td>
                                        <td>0.0</td>
                                    </tr>
                                    <tr>
                                        <td>05/10/2021</td>
                                        <td style="text-align: right;">&nbsp;13:02:30</td>
                                        <td style="text-align: right;">296.0 กม.</td>
                                        <td style="text-align: right;">&nbsp;48:48</td>
                                        <td>0</td>
                                        <td style="text-align: right;">&nbsp;07:03</td>
                                        <td>89</td>
                                        <td style="text-align: right;">&nbsp;05/10/2021 18:27:53</td>
                                        <td>0</td>
                                        <td>25</td>
                                        <td>0.0</td>
                                    </tr>
                                    <tr>
                                        <td>06/10/2021</td>
                                        <td style="text-align: right;">&nbsp;51:04</td>
                                        <td style="text-align: right;">436.6 กม.</td>
                                        <td style="text-align: right;">&nbsp;01:20:13</td>
                                        <td>1</td>
                                        <td style="text-align: right;">&nbsp;14:03</td>
                                        <td>81</td>
                                        <td style="text-align: right;">&nbsp;06/10/2021 00:41:21</td>
                                        <td>0</td>
                                        <td>17</td>
                                        <td>0.0</td>
                                    </tr>
                                    <tr>
                                        <td>07/10/2021</td>
                                        <td style="text-align: right;">&nbsp;09:01:23</td>
                                        <td style="text-align: right;">641.7 กม.</td>
                                        <td style="text-align: right;">&nbsp;31:11</td>
                                        <td>0</td>
                                        <td style="text-align: right;">&nbsp;05:52</td>
                                        <td>109</td>
                                        <td style="text-align: right;">&nbsp;07/10/2021 07:02:35</td>
                                        <td>0</td>
                                        <td>14</td>
                                        <td>0.0</td>
                                    </tr>
                                    <tr>
                                        <td>08/10/2021</td>
                                        <td style="text-align: right;">&nbsp;03:16:51</td>
                                        <td style="text-align: right;">228.3 กม.</td>
                                        <td style="text-align: right;">&nbsp;21:09</td>
                                        <td>0</td>
                                        <td style="text-align: right;">&nbsp;09:22</td>
                                        <td>97</td>
                                        <td style="text-align: right;">&nbsp;08/10/2021 00:48:44</td>
                                        <td>0</td>
                                        <td>4</td>
                                        <td>0.0</td>
                                    </tr>
                                    <tr>
                                        <td><b>รวม</b></td>
                                        <td><b>1(วัน) 14:34:36</b></td>
                                        <td><b>2286.4 กม.</b></td>
                                        <td><b>05:18:12</b></td>
                                        <td><b>3</b></td>
                                        <td><b>01:30:51</b></td>
                                        <td><b></b></td>
                                        <td><b></b></td>
                                        <td><b>0</b></td>
                                        <td><b>78</b></td>
                                        <td><b></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-danger mr-3">รายงานแบบ PDF</button>
                            <button type="button" class="btn btn-success">รายงานแบบ Excel</button>
                        </div>
                    </div>

                    <!-- scripts -->
                    <script src="../../plugins/jquery/jquery.min.js"></script>
                    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
                    <script src="../../assets/js/adminlte.min.js"></script>

                    <!-- datatables -->
                    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
                    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
                    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

</body>

</html>