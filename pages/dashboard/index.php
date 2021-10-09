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
    <title>KDR GPS</title>
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/logo.png">
    <!-- stylesheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include_once('../includes/sidebar.php') ?>
        <?php include_once('../../assets/cdn.html') ?>
        <div class="content pt-3">
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
                        <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-primary">
                        สรุปเหตุการณ์ปัจจุบัน
                    </h2>

                    <ul class="list-group list-group-horizontal-sm">
                        <li class="list-group-item list-group-item-success">ออนไลน์ 0 คัน</li>
                        <li class="list-group-item list-group-item-danger">ไม่ออนไลน์เกิน 7 วัน 0 คัน</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">สถานะการใช้รถ (คัน)</h5>
                        <p class="card-text">
						<canvas id="myChart" width="100" height="100"></canvas>
                    <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                        labels: ['จอดดับเครื่อง','จอดติดเครื่อง','รถวิ่ง'],
                        datasets: [{
                          label: '# of Votes',
                            data: [10,8,4],
                            backgroundColor: [
                              'red','yellow','lawngreen'
                            ],
                            hoverOffset: 4
                          }]
                        },
                      });
                    </script>
                        </p>
                    </div>
                    <!-- <div class="card-footer">
                        Card footer ddd
                    </div> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">10 อันดับความเร็วเกิน</h5>
                        <p class="card-text">
						<canvas id="myChart2" width="100" height="100"></canvas>
    
    
 
    <script>
        var ctx = document.getElementById("myChart2");
        var myChart2 = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['ทะเบียน1','ทะเบียน2','ทะเบียน3','ทะเบียน4','ทะเบียน5','ทะเบียน6','ทะเบียน7','ทะเบียน8','ทะเบียน9','ทะเบียน10'],
                datasets: [{
                    label: '# of Votes',
                    data: [10,8,4,3,1,0,0,0,0,0],
                    backgroundColor: [
                        'red','red','red'
                    ]
                    
                }]
            },
            options: {
                scales: {
					xAxes: { 
						beginAtZero:true,
							grid: {
            display:false
        }
                    },
                    yAxes: {                      
                            beginAtZero:true,
							grid: {
            display:false
        }
                    }
                }
            }
        });
        </script>    
    
                        </p>
                    </div>
                    <!-- <div class="card-footer">
                        Card footer
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">สถานะการใช้ความเร็ว (คัน)</h5>
                        <p class="card-text">
						<canvas id="myChart3" width="100" height="100"></canvas>
                    <script>
                        var ctx = document.getElementById('myChart3').getContext('2d');
                        var myChart3 = new Chart(ctx, {
                        type: 'pie',
                        data: {
                        labels: ['ใช้ความเร็วเกิน','ใช้ความเร็วปกติ','รถจอด'],
                        datasets: [{
                          label: '# of Votes',
                            data: [2,5,10],
                            backgroundColor: [
								'red','lawngreen','gray'
                            ],
                            hoverOffset: 4
                          }]
                        },
                      });
                    </script>
                        </p>
                    </div>
                    <!-- <div class="card-footer">
                        Card footer
                    </div> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center"> 10 อันดับรถจอดนาน</h5>
                        <p class="card-text">
						<canvas id="myChart4" width="100" height="100"></canvas>
                    <script>
                        var ctx = document.getElementById('myChart4').getContext('2d');
                        var myChart4 = new Chart(ctx, {
                        type: 'bar',
                        data: {
                        labels: ['ทะเบียน1','ทะเบียน2','ทะเบียน3','ทะเบียน4','ทะเบียน5','ทะเบียน6','ทะเบียน7','ทะเบียน8','ทะเบียน9','ทะเบียน10'],
                        datasets: [{
                          label: '# of Votes',
                            data: [10, 8, 4, 0, 1, 14, 52],
                            backgroundColor: [
                            
                              'yellow'
                            ]
                          }]
                        },
						options: {
                scales: {
					xAxes: { 
							grid: {
            display:false
        }
                    },
                    yAxes: {                      
                            beginAtZero:true,
							grid: {
            display:false
        }
                    }
                }
            }
                      });
                    </script>
                        </p>
                    </div>
                    <!-- <div class="card-footer">
                        Card footer
                    </div> -->
                </div>
            </div>
        </div>
		<div class="row p-3">
            <div class="col-md-12">
                <h2>ข้อมูลรถทั้งหมด 0 คัน</h2>

                <table class="table table-hover ">
                    <thead>
                        <th>ลำดับ</th>
                        <th>ชื่อรถ</th>
                        <th>วันที่ล่าสุด</th>
                        <th>สถานะล่าสุด</th>
                        <th>สถานที่ล่าสุด</th>
                        <th>จำนวนวันที่ค้าง</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>หมายเหตุ</th>
                    </thead>
                    <tbody>
                        <tr role="row" class="odd">
                            <td class="sorting_1">1</td>
                            <td>2ฒศ-7715</td>
                            <td>28-08-2021 12:03:54</td>
                            <td>ไม่อัพเดต</td>
                            <td>ลานจอดKDR LAS</td>
                            <td>0 วัน 2 ชม. 17 นาที 6 วินาที</td>
                            <td>13.653792</td>
                            <td>100.648635</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">2</td>
                            <td>2ฒศ-7716</td>
                            <td>18-08-2021 23:49:09</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.บางแก้ว - อ.บางพลี - จ.สมุทรปราการ</td>
                            <td>9 วัน 14 ชม. 31 นาที 51 วินาที</td>
                            <td>13.652742</td>
                            <td>100.648133</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">3</td>
                            <td>2ฒศ-7717</td>
                            <td>18-03-2021 06:38:32</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.อู่ทอง - อ.อู่ทอง - จ.สุพรรณบุรี</td>
                            <td>163 วัน 7 ชม. 42 นาที 28 วินาที</td>
                            <td>14.359870</td>
                            <td>99.883228</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">4</td>
                            <td>2ฒศ-7718</td>
                            <td>09-03-2021 15:56:14</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.เขาคันทรง - อ.ศรีราชา - จ.ชลบุรี</td>
                            <td>171 วัน 22 ชม. 24 นาที 46 วินาที</td>
                            <td>13.094397</td>
                            <td>101.114472</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">5</td>
                            <td>2ฒศ-8392</td>
                            <td>23-08-2021 20:18:45</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.บางแก้ว - อ.บางพลี - จ.สมุทรปราการ</td>
                            <td>4 วัน 18 ชม. 2 นาที 15 วินาที</td>
                            <td>13.656062</td>
                            <td>100.664962</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">6</td>
                            <td>2ฒศ-8393</td>
                            <td>28-08-2021 13:32:08</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>แขวงสามวาตะวันตก - เขตคลองสามวา - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.893352</td>
                            <td>100.721540</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">7</td>
                            <td>2ฒศ-8395</td>
                            <td>28-08-2021 13:34:28</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.บางพลีใหญ่ - อ.บางพลี - จ.สมุทรปราการ</td>
                            <td>-</td>
                            <td>13.606658</td>
                            <td>100.695568</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">8</td>
                            <td>2ฒศ-9066</td>
                            <td>28-08-2021 12:34:52</td>
                            <td>ไม่อัพเดต</td>
                            <td>แขวงคลองจั่น - เขตบางกะปิ - กรุงเทพมหานคร</td>
                            <td>0 วัน 1 ชม. 46 นาที 8 วินาที</td>
                            <td>13.795468</td>
                            <td>100.630478</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">9</td>
                            <td>2ฒส-100</td>
                            <td>22-08-2021 18:28:06</td>
                            <td>ไม่อัพเดต</td>
                            <td>แขวงบางเชือกหนัง - เขตตลิ่งชัน - กรุงเทพมหานคร</td>
                            <td>5 วัน 19 ชม. 52 นาที 54 วินาที</td>
                            <td>13.742045</td>
                            <td>100.446408</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">10</td>
                            <td>2ฒส-102</td>
                            <td>28-08-2021 13:04:35</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.ในเมือง - อ.พิมาย - จ.นครราชสีมา</td>
                            <td>0 วัน 1 ชม. 16 นาที 25 วินาที</td>
                            <td>15.201193</td>
                            <td>102.498245</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">11</td>
                            <td>2ฒส-104</td>
                            <td>28-08-2021 13:31:43</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.ศรีสงคราม - อ.ศรีสงคราม - จ.นครพนม</td>
                            <td>-</td>
                            <td>17.625488</td>
                            <td>104.259697</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">12</td>
                            <td>2ฒส-106</td>
                            <td>28-08-2021 14:20:58</td>
                            <td>จอดไม่ดับเครื่อง</td>
                            <td>ต.หนองปรือ - อ.บางละมุง - จ.ชลบุรี</td>
                            <td>-</td>
                            <td>12.936938</td>
                            <td>100.928685</td>
                            <td>จอดรถไม่ดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">13</td>
                            <td>2ฒส-108</td>
                            <td>10-01-2021 14:07:51</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.ธาตุพนม - อ.ธาตุพนม - จ.นครพนม</td>
                            <td>230 วัน 0 ชม. 13 นาที 9 วินาที</td>
                            <td>16.936400</td>
                            <td>104.708735</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">14</td>
                            <td>2ฒส-109</td>
                            <td>28-08-2021 14:09:15</td>
                            <td>ดับเครื่อง</td>
                            <td>ต.เทพนคร - อ.เมืองกำแพงเพชร - จ.กำแพงเพชร</td>
                            <td>-</td>
                            <td>16.475248</td>
                            <td>99.560863</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">15</td>
                            <td>2ฒส-110</td>
                            <td>28-08-2021 13:50:25</td>
                            <td>ดับเครื่อง</td>
                            <td>ลานจอดKDR LAS</td>
                            <td>-</td>
                            <td>13.653982</td>
                            <td>100.648658</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">16</td>
                            <td>2ฒส-112</td>
                            <td>28-08-2021 14:08:26</td>
                            <td>ดับเครื่อง</td>
                            <td>ต.ช่องแคบ - อ.พบพระ - จ.ตาก</td>
                            <td>-</td>
                            <td>16.510818</td>
                            <td>98.703642</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">17</td>
                            <td>2ฒส-113</td>
                            <td>28-08-2021 13:11:56</td>
                            <td>ไม่อัพเดต</td>
                            <td>แขวงฉิมพลี - เขตตลิ่งชัน - กรุงเทพมหานคร</td>
                            <td>0 วัน 1 ชม. 9 นาที 4 วินาที</td>
                            <td>13.793592</td>
                            <td>100.418900</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">18</td>
                            <td>2ฒส-114</td>
                            <td>28-03-2020 17:27:31</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.บางเดชะ - อ.เมืองปราจีนบุรี - จ.ปราจีนบุรี</td>
                            <td>517 วัน 20 ชม. 53 นาที 29 วินาที</td>
                            <td>14.010302</td>
                            <td>101.336528</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">19</td>
                            <td>2ฒส-120</td>
                            <td>28-08-2021 13:05:53</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.แม่สอด - อ.แม่สอด - จ.ตาก</td>
                            <td>0 วัน 1 ชม. 15 นาที 7 วินาที</td>
                            <td>16.709325</td>
                            <td>98.555428</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">20</td>
                            <td>2ฒส-121</td>
                            <td>28-08-2021 14:11:00</td>
                            <td>ดับเครื่อง</td>
                            <td>แขวงจอมพล - เขตจตุจักร - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.802590</td>
                            <td>100.572457</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">21</td>
                            <td>2ฒส-122</td>
                            <td>28-08-2021 13:39:45</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.ปากแคว - อ.เมืองสุโขทัย - จ.สุโขทัย</td>
                            <td>-</td>
                            <td>17.020147</td>
                            <td>99.829388</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">22</td>
                            <td>2ฒส-131</td>
                            <td>28-08-2021 13:11:49</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.คลองสาม - อ.คลองหลวง - จ.ปทุมธานี</td>
                            <td>0 วัน 1 ชม. 9 นาที 11 วินาที</td>
                            <td>14.023575</td>
                            <td>100.665038</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">23</td>
                            <td>2ฒส-132</td>
                            <td>28-08-2021 13:58:01</td>
                            <td>ดับเครื่อง</td>
                            <td>ต.บางกระสั้น - อ.บางปะอิน - จ.พระนครศรีอยุธยา</td>
                            <td>-</td>
                            <td>14.182037</td>
                            <td>100.572843</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">24</td>
                            <td>2ฒห-8428</td>
                            <td>24-08-2021 14:07:57</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.บ้านลาน - อ.บ้านไผ่ - จ.ขอนแก่น</td>
                            <td>4 วัน 0 ชม. 13 นาที 3 วินาที</td>
                            <td>15.993128</td>
                            <td>102.884445</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">25</td>
                            <td>2ฒห-8431</td>
                            <td>28-08-2021 14:20:34</td>
                            <td>จอดไม่ดับเครื่อง</td>
                            <td>ต.คลองสอง - อ.คลองหลวง - จ.ปทุมธานี</td>
                            <td>-</td>
                            <td>14.099793</td>
                            <td>100.641907</td>
                            <td>จอดรถไม่ดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">26</td>
                            <td>2ฒห-8432</td>
                            <td>28-08-2021 14:20:55</td>
                            <td>จอดไม่ดับเครื่อง</td>
                            <td>ต.มหาชัย - อ.เมืองสมุทรสาคร - จ.สมุทรสาคร</td>
                            <td>-</td>
                            <td>13.551060</td>
                            <td>100.276382</td>
                            <td>จอดรถไม่ดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">27</td>
                            <td>2ฒห-8433</td>
                            <td>28-08-2021 14:20:56</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.ไกรนอก - อ.กงไกรลาศ - จ.สุโขทัย</td>
                            <td>-</td>
                            <td>16.971118</td>
                            <td>100.020285</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">28</td>
                            <td>2ฒห-8434</td>
                            <td>17-08-2021 23:16:45</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.ลำไทร - อ.วังน้อย - จ.พระนครศรีอยุธยา</td>
                            <td>10 วัน 15 ชม. 4 นาที 15 วินาที</td>
                            <td>14.201127</td>
                            <td>100.649428</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">29</td>
                            <td>2ฒฬ-3060</td>
                            <td>28-08-2021 14:08:19</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>คลองจั่น</td>
                            <td>-</td>
                            <td>13.801632</td>
                            <td>100.629532</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">30</td>
                            <td>2ฒฬ-3061</td>
                            <td>28-08-2021 08:27:00</td>
                            <td>ไม่อัพเดต</td>
                            <td>KDR service gas station</td>
                            <td>0 วัน 5 ชม. 54 นาที 0 วินาที</td>
                            <td>13.653675</td>
                            <td>100.648712</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">31</td>
                            <td>2ฒฬ-3064</td>
                            <td>28-08-2021 13:24:35</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.บางครุ - อ.พระประแดง - จ.สมุทรปราการ</td>
                            <td>-</td>
                            <td>13.631638</td>
                            <td>100.519790</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">32</td>
                            <td>2ฒฬ-3065</td>
                            <td>28-08-2021 13:33:34</td>
                            <td>ดับเครื่อง</td>
                            <td>แขวงบางแค - เขตบางแค - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.694290</td>
                            <td>100.412192</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">33</td>
                            <td>2ฒฬ-3066</td>
                            <td>28-08-2021 14:20:50</td>
                            <td>วิ่งปกติ</td>
                            <td>แขวงสายไหม - เขตสายไหม - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.927703</td>
                            <td>100.627333</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">34</td>
                            <td>2ฒอ-248</td>
                            <td>28-08-2021 14:16:39</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.คลองหนึ่ง - อ.คลองหลวง - จ.ปทุมธานี</td>
                            <td>-</td>
                            <td>14.122953</td>
                            <td>100.620955</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">35</td>
                            <td>2ฒอ-250</td>
                            <td>28-08-2021 14:02:59</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>แขวงบางนา - เขตบางนา - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.676707</td>
                            <td>100.634392</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">36</td>
                            <td>2ฒอ-253</td>
                            <td>28-08-2021 14:20:36</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.สลกบาตร - อ.ขาณุวรลักษบุรี - จ.กำแพงเพชร</td>
                            <td>-</td>
                            <td>15.990902</td>
                            <td>99.813575</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">37</td>
                            <td>2ฒอ-254</td>
                            <td>28-08-2021 14:20:34</td>
                            <td>จอดไม่ดับเครื่อง</td>
                            <td>Dc บางใหญ่</td>
                            <td>-</td>
                            <td>13.844262</td>
                            <td>100.404502</td>
                            <td>จอดรถไม่ดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">38</td>
                            <td>2ฒอ-260กทม</td>
                            <td>28-08-2021 13:45:38</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.บางเสร่ - อ.สัตหีบ - จ.ชลบุรี</td>
                            <td>-</td>
                            <td>12.737780</td>
                            <td>100.900527</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">39</td>
                            <td>2ฒอ-261กทม</td>
                            <td>28-08-2021 12:59:56</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.หมอนทอง - อ.บางน้ำเปรี้ยว - จ.ฉะเชิงเทรา</td>
                            <td>0 วัน 1 ชม. 21 นาที 4 วินาที</td>
                            <td>13.875358</td>
                            <td>101.043883</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">40</td>
                            <td>2ฒอ-262 (4wj isuzu)</td>
                            <td>28-08-2021 14:20:06</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.วัฒนานคร - อ.วัฒนานคร - จ.สระแก้ว</td>
                            <td>-</td>
                            <td>13.738763</td>
                            <td>102.345465</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">41</td>
                            <td>2ฒอ-265</td>
                            <td>28-08-2021 13:43:16</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.วังสมบูรณ์ - อ.วังสมบูรณ์ - จ.สระแก้ว</td>
                            <td>-</td>
                            <td>13.396598</td>
                            <td>102.197852</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">42</td>
                            <td>2ฒอ-5478 (4w7cbm)</td>
                            <td>25-08-2021 01:54:12</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.ลำไทร - อ.วังน้อย - จ.พระนครศรีอยุธยา</td>
                            <td>3 วัน 12 ชม. 26 นาที 48 วินาที</td>
                            <td>14.199768</td>
                            <td>100.650725</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">43</td>
                            <td>2ฒอ-5479</td>
                            <td>28-08-2021 14:18:24</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>KDR service gas station</td>
                            <td>-</td>
                            <td>13.653790</td>
                            <td>100.648697</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">44</td>
                            <td>2ฒอ-5480</td>
                            <td>28-08-2021 13:43:56</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>KDR service gas station</td>
                            <td>-</td>
                            <td>13.653458</td>
                            <td>100.648857</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">45</td>
                            <td>2ฒอ-5491 (4w7cbm)</td>
                            <td>28-08-2021 13:39:34</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.มหาชัย - อ.เมืองสมุทรสาคร - จ.สมุทรสาคร</td>
                            <td>-</td>
                            <td>13.551637</td>
                            <td>100.276260</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">46</td>
                            <td>2ฒอ-5492</td>
                            <td>28-08-2021 14:14:02</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ลานจอดKDR LAS</td>
                            <td>-</td>
                            <td>13.653868</td>
                            <td>100.648757</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">47</td>
                            <td>2ฒอ-5493 (7cbm)</td>
                            <td>28-08-2021 13:23:16</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.ห้วยโป่ง - อ.เมืองระยอง - จ.ระยอง</td>
                            <td>-</td>
                            <td>12.741967</td>
                            <td>101.151320</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">48</td>
                            <td>2ฒอ-9644</td>
                            <td>28-08-2021 14:20:57</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.บางหญ้าแพรก - อ.พระประแดง - จ.สมุทรปราการ</td>
                            <td>-</td>
                            <td>13.651873</td>
                            <td>100.548438</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">49</td>
                            <td>2ฒอ-9648</td>
                            <td>28-08-2021 13:49:19</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>แขวงตลาดบางเขน - เขตหลักสี่ - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.889102</td>
                            <td>100.588325</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">50</td>
                            <td>2ฒอ-9649</td>
                            <td>28-08-2021 13:32:39</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.อู่ทอง - อ.อู่ทอง - จ.สุพรรณบุรี</td>
                            <td>-</td>
                            <td>14.387248</td>
                            <td>99.893607</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">51</td>
                            <td>2ฒอ-9650</td>
                            <td>28-08-2021 14:13:47</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.หนองบัวน้อย - อ.สีคิ้ว - จ.นครราชสีมา</td>
                            <td>-</td>
                            <td>15.007955</td>
                            <td>101.704872</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">52</td>
                            <td>2ฒอ-9651</td>
                            <td>28-08-2021 13:54:58</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.บางริ้น - อ.เมืองระนอง - จ.ระนอง</td>
                            <td>-</td>
                            <td>9.938665</td>
                            <td>98.633223</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">53</td>
                            <td>2ฒอ-9652</td>
                            <td>28-08-2021 14:12:05</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.พานทอง - อ.พานทอง - จ.ชลบุรี</td>
                            <td>-</td>
                            <td>13.459300</td>
                            <td>101.088133</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">54</td>
                            <td>2ฒอ-9653</td>
                            <td>28-08-2021 13:30:58</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>แขวงสนามบิน - เขตดอนเมือง - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.936155</td>
                            <td>100.617690</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">55</td>
                            <td>2ฒอ-9660</td>
                            <td>28-08-2021 14:04:21</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.โพนทอง - อ.สีดา - จ.นครราชสีมา</td>
                            <td>-</td>
                            <td>15.539018</td>
                            <td>102.546722</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">56</td>
                            <td>2ฒอ-9661</td>
                            <td>28-08-2021 13:25:56</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.หนองหาร - อ.สันทราย - จ.เชียงใหม่</td>
                            <td>-</td>
                            <td>18.940698</td>
                            <td>98.987747</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">57</td>
                            <td>3ฒข-3538</td>
                            <td>28-08-2021 14:00:08</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.คลองสาม - อ.คลองหลวง - จ.ปทุมธานี</td>
                            <td>-</td>
                            <td>14.053965</td>
                            <td>100.662750</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">58</td>
                            <td>3ฒข-3540</td>
                            <td>28-08-2021 13:39:05</td>
                            <td>ดับเครื่อง</td>
                            <td>แขวงหนองบอน - เขตประเวศ - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.680075</td>
                            <td>100.657600</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">59</td>
                            <td>3ฒข-3543</td>
                            <td>28-08-2021 14:09:08</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>แขวงบางนา - เขตบางนา - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.676565</td>
                            <td>100.634200</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">60</td>
                            <td>3ฒข-3546</td>
                            <td>02-01-2021 00:05:24</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.จรเข้ร้อง - อ.ไชโย - จ.อ่างทอง</td>
                            <td>238 วัน 14 ชม. 15 นาที 36 วินาที</td>
                            <td>14.663873</td>
                            <td>100.470878</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">61</td>
                            <td>3ฒข-3547</td>
                            <td>28-08-2021 14:19:25</td>
                            <td>วิ่งปกติ</td>
                            <td>แขวงคลองเตย - เขตคลองเตย - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.709280</td>
                            <td>100.583488</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">62</td>
                            <td>3ฒข-3548</td>
                            <td>28-08-2021 14:01:57</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.บางปูใหม่ - อ.เมืองสมุทรปราการ - จ.สมุทรปราการ</td>
                            <td>-</td>
                            <td>13.509790</td>
                            <td>100.682463</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">63</td>
                            <td>3ฒข-3549</td>
                            <td>28-08-2021 14:20:23</td>
                            <td>จอดไม่ดับเครื่อง</td>
                            <td>ต.บางหญ้าแพรก - อ.พระประแดง - จ.สมุทรปราการ</td>
                            <td>-</td>
                            <td>13.652015</td>
                            <td>100.541022</td>
                            <td>จอดรถไม่ดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">64</td>
                            <td>3ฒข-3550</td>
                            <td>28-08-2021 14:20:04</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.บางโฉลง - อ.บางพลี - จ.สมุทรปราการ</td>
                            <td>-</td>
                            <td>13.604670</td>
                            <td>100.768958</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">65</td>
                            <td>3ฒข-3551</td>
                            <td>28-08-2021 13:40:00</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ลานจอดKDR LAS</td>
                            <td>-</td>
                            <td>13.653757</td>
                            <td>100.648887</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">66</td>
                            <td>3ฒข-3556</td>
                            <td>28-08-2021 14:20:57</td>
                            <td>วิ่งปกติ</td>
                            <td>แขวงบางโคล่ - เขตบางคอแหลม - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.698742</td>
                            <td>100.528373</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">67</td>
                            <td>3ฒข-3559</td>
                            <td>28-08-2021 14:01:57</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ทุ่งครุ</td>
                            <td>-</td>
                            <td>13.636653</td>
                            <td>100.486548</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">68</td>
                            <td>3ฒข-3561</td>
                            <td>28-08-2021 14:01:50</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>แขวงบางนา - เขตบางนา - กรุงเทพมหานคร</td>
                            <td>-</td>
                            <td>13.676560</td>
                            <td>100.634445</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">69</td>
                            <td>3ฒข-3562</td>
                            <td>23-07-2021 21:16:37</td>
                            <td>ไม่อัพเดต</td>
                            <td>แขวงหลักสอง - เขตบางแค - กรุงเทพมหานคร</td>
                            <td>35 วัน 17 ชม. 4 นาที 23 วินาที</td>
                            <td>13.680067</td>
                            <td>100.406768</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">70</td>
                            <td>3ฒข-3568</td>
                            <td>28-08-2021 14:18:10</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.แพรกษาใหม่ - อ.เมืองสมุทรปราการ - จ.สมุทรปราการ</td>
                            <td>-</td>
                            <td>13.545632</td>
                            <td>100.680945</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">71</td>
                            <td>65-5434</td>
                            <td>28-08-2021 14:20:13</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.อ่าวน้อย - อ.เมืองประจวบคีรีขันธ์ - จ.ประจวบคีรีขันธ์</td>
                            <td>-</td>
                            <td>11.849363</td>
                            <td>99.782363</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">72</td>
                            <td>65-5438</td>
                            <td>28-08-2021 13:29:45</td>
                            <td>ดับเครื่อง</td>
                            <td>ต.เวียงพางคำ - อ.แม่สาย - จ.เชียงราย</td>
                            <td>-</td>
                            <td>20.403832</td>
                            <td>99.883853</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">73</td>
                            <td>65-5441</td>
                            <td>28-08-2021 14:20:20</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.แม่ทะ - อ.แม่ทะ - จ.ลำปาง</td>
                            <td>-</td>
                            <td>18.163807</td>
                            <td>99.590710</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">74</td>
                            <td>65-5445</td>
                            <td>28-08-2021 14:12:19</td>
                            <td>ดับเครื่อง</td>
                            <td>ต.สารภี - อ.สารภี - จ.เชียงใหม่</td>
                            <td>-</td>
                            <td>18.673730</td>
                            <td>99.053213</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">75</td>
                            <td>65-5447</td>
                            <td>28-08-2021 14:18:58</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.เขาไชยราช - อ.ปะทิว - จ.ชุมพร</td>
                            <td>-</td>
                            <td>10.938845</td>
                            <td>99.294495</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">76</td>
                            <td>65-5450</td>
                            <td>28-08-2021 13:16:24</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.พันดอน - อ.กุมภวาปี - จ.อุดรธานี</td>
                            <td>0 วัน 1 ชม. 4 นาที 36 วินาที</td>
                            <td>17.118550</td>
                            <td>102.941838</td>
                            <td>ไม่อัพเดต (มากกว่า 60 นาที)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">77</td>
                            <td>65-5451</td>
                            <td>28-08-2021 14:19:52</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.นาแส่ง - อ.เกาะคา - จ.ลำปาง</td>
                            <td>-</td>
                            <td>18.108500</td>
                            <td>99.396783</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">78</td>
                            <td>65-5452</td>
                            <td>28-08-2021 13:31:41</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.หนองหงส์ - อ.ทุ่งสง - จ.นครศรีธรรมราช</td>
                            <td>-</td>
                            <td>8.187648</td>
                            <td>99.609897</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">79</td>
                            <td>65-5453</td>
                            <td>28-08-2021 14:20:31</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.บ่อนอก - อ.เมืองประจวบคีรีขันธ์ - จ.ประจวบคีรีขันธ์</td>
                            <td>-</td>
                            <td>11.936760</td>
                            <td>99.818985</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">80</td>
                            <td>65-5454</td>
                            <td>28-08-2021 14:20:27</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.ศิลาลอย - อ.สามร้อยยอด - จ.ประจวบคีรีขันธ์</td>
                            <td>-</td>
                            <td>12.309983</td>
                            <td>99.876963</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">81</td>
                            <td>65-8021 (6w 5.5)</td>
                            <td>05-05-2021 19:08:53</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.คุ้งลาน - อ.บางปะอิน - จ.พระนครศรีอยุธยา</td>
                            <td>114 วัน 19 ชม. 12 นาที 7 วินาที</td>
                            <td>14.298473</td>
                            <td>100.627067</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">82</td>
                            <td>65-8022 (6w5.5)</td>
                            <td>21-08-2021 17:15:26</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.นาขา - อ.หลังสวน - จ.ชุมพร</td>
                            <td>6 วัน 21 ชม. 5 นาที 34 วินาที</td>
                            <td>10.012153</td>
                            <td>99.066367</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">83</td>
                            <td>65-8023 6w5.5</td>
                            <td>28-08-2021 13:40:26</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ลานจอดKDR LAS</td>
                            <td>-</td>
                            <td>13.654007</td>
                            <td>100.648697</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">84</td>
                            <td>65-8024 กทม.</td>
                            <td>28-08-2021 14:20:44</td>
                            <td>วิ่งปกติ</td>
                            <td>ต.หนองสาหร่าย - อ.ปากช่อง - จ.นครราชสีมา</td>
                            <td>-</td>
                            <td>14.806640</td>
                            <td>101.539657</td>
                            <td>เคลื่อนที่</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">85</td>
                            <td>65-8025 6w5.5</td>
                            <td>28-08-2021 13:37:54</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.หนองแหน - อ.พนมสารคาม - จ.ฉะเชิงเทรา</td>
                            <td>-</td>
                            <td>13.681393</td>
                            <td>101.335205</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">86</td>
                            <td>65-8027</td>
                            <td>28-08-2021 13:36:02</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ลานจอดKDR LAS</td>
                            <td>-</td>
                            <td>13.654185</td>
                            <td>100.648688</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">87</td>
                            <td>65-8029 (6w5.5)</td>
                            <td>28-08-2021 13:38:31</td>
                            <td>จอดนานเกินชั่วโมง</td>
                            <td>ต.ปลายโพงพาง - อ.อัมพวา - จ.สมุทรสงคราม</td>
                            <td>-</td>
                            <td>13.389782</td>
                            <td>99.940147</td>
                            <td>จอดรถดับเครื่อง</td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="sorting_1">88</td>
                            <td>CZ-04839</td>
                            <td>08-07-2021 01:57:16</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.ลำไทร - อ.วังน้อย - จ.พระนครศรีอยุธยา</td>
                            <td>51 วัน 12 ชม. 23 นาที 44 วินาที</td>
                            <td>14.204648</td>
                            <td>100.662300</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="sorting_1">89</td>
                            <td>CZ-05280</td>
                            <td>30-08-2020 04:07:31</td>
                            <td>ไม่อัพเดต</td>
                            <td>ต.เชียงรากน้อย - อ.บางปะอิน - จ.พระนครศรีอยุธยา</td>
                            <td>363 วัน 10 ชม. 13 นาที 29 วินาที</td>
                            <td>14.172108</td>
                            <td>100.605330</td>
                            <td>ไม่อัพเดต (มากกว่า 1 วัน)</td>
                        </tr>
                    </tbody>
                </table>
                <nav>
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
                        </div>
                        <!-- <div class="card-footer ">
                            ฟุตเตอร์
                        </div> -->
                    </div>

                </div>
            </div>
        </div>
        <!-- <?php include_once('../includes/footer.php') ?> -->
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