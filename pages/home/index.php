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

<body class="hold-transition sidebar-mini" onload="init();">
    <div class="wrapper">
        <?php include_once('../includes/sidebar.php') ?>
        <?php include_once('../../assets/cdn.html') ?>
        <div class="content pt-3">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row  my-auto">
                        <div class="col-md-12">
                            <div class="card shadow bg-light">
                                <div class="row g-0">
                                    <div class="col-md-4 pr-3 ">
                                        <div class="card-body bg-white p-3 h-100 ">
                                            <div class="bd-highlight mb-3">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active bg-success text-light font-weight-bold" data-bs-toggle="tab" href=".home">ณ ปัจจุบัน <span class="badge badge-warning">99</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link bg-warning text-dark font-weight-bold" data-bs-toggle="tab" href=".menu1">ข้อมูลย้อนหลัง</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link bg-danger text-light font-weight-bold" data-bs-toggle="tab" href=".menu2">สรุปสถานะ</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class=" container tab-pane active home" id="app" style="overflow:scroll; height:80vh;"><br>
                                                        <form>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input type="text" class="form-control" id="Search" placeholder="Search" name="Search">
                                                                </div>
                                                                <div class="col">
                                                                    <select class="form-control" id="truckgroupe">
                                                                        <option>All</option>
                                                                        <option>KDR</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div class="card flex-row flex-wrap my-3" v-for="coo in daall">
                                                            <div class="card-header border-0 d-flex align-items-center">
                                                                <div class="info-box-icon">
                                                                    <div>{{ coo.fullName }}</div>
                                                                    <img src="../../assets/images/idles.png">
                                                                    <div> <span id="SP_8966051809426332546">{{ coo.speed }}</span> km./h</div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div> <?php
                                                                        date_default_timezone_set('asia/bangkok');
                                                                        $date = date('d-m-Y H:i ');
                                                                        echo $date;
                                                                        ?></div>
                                                                <div>จอดนานเกินชั่วโมง</div>
                                                                <div>แพรกษา</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=" container tab-pane fade menu1" style="overflow:scroll; height:80vh;"><br>

                                                        <div id="app1" style="border:solid 1px lightgray; border-radius:3px;padding:10px;">
                                                            <label id="lbl_mi_plate">ทะเบียน</label>
                                                            <select id="list-car" class="form-control">
                                                                <option value="8966051809426332546" v-for="coo1 in daall1">{{ coo1.fullName }}</option>
                                                            </select>
                                                            <label id="lab_mi_timeI">ระยะเวลา</label>
                                                            <select name="ddl" id="ddl" class="form-control">
                                                                <option value="1" onclick="disableTxt()">ย้อนหลัง 1 ชั่วโมง</option>
                                                                <option value="3" onclick="disableTxt()">ย้อนหลัง 3 ชั่วโมง</option>
                                                                <option value="6" onclick="disableTxt()">ย้อนหลัง 6 ชั่วโมง</option>
                                                                <option value="12" onclick="disableTxt()">ย้อนหลัง 12 ชั่วโมง</option>
                                                                <option value="91" onclick="disableTxt()">ย้อนหลัง วันนี้</option>
                                                                <option value="92" onclick="disableTxt()">ย้อนหลัง เมื่อวาน</option>
                                                                <option value="93">กำหนดเอง</option>
                                                            </select>
                                                            <div>
                                                                <table style="width: 100%;">
                                                                    <tbody>

                                                                        <div id="box">
                                                                            <label>วันที่ - เวลา เริ่มต้น</label>
                                                                            <input type="date" class="form-control hasDatepicker ">
                                                                            <br>
                                                                            <label>วันที่ - เวลา สิ้นสุด</label>
                                                                            <input type="date" class="form-control hasDatepicker">
                                                                        </div>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div>
                                                                <table style="width: 100%;">
                                                                    <tbody>
                                                                        <tr>

                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div style="margin-top:10px;">
                                                                <table style="width:100%;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><button id="btn_get_history" class="btn btn-success" style="width:100%;">ตกลง</button></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div style="margin-top:10px; display:none; text-align:center;" class="alert alert-danger"></div>
                                                        </div>

                                                    </div>

                                                    <div class=" container tab-pane fade menu2" style="overflow:scroll; height:80vh;"><br>
                                                        <div id="pie" style="font-size: 12px; " class=" p-2 ui-draggable ui-draggable-handle">
                                                            <i id="pie_close" style="font-size:14px; cursor:pointer;" class="fa fa-close"></i>
                                                            <canvas id="myChart" width="400" height="400"></canvas>
                                                            <script>
                                                                var ctx = document.getElementById('myChart').getContext('2d');
                                                                var myChart = new Chart(ctx, {
                                                                    type: 'pie',
                                                                    data: {
                                                                        labels: ['จอดดับเครื่อง', 'จอดไม่ดับเครื่อง', 'วิ่งปกติ', 'ความเร็วเกิน', 'ไฟกล่องดำ', 'ไม่อัพเดท', 'จอดนานเกินชั่วโมง'],
                                                                        datasets: [{
                                                                            label: '# of Votes',
                                                                            data: [10, 8, 4, 0, 1, 14, 52],
                                                                            backgroundColor: [
                                                                                '#969595',
                                                                                '#ffc107',
                                                                                'green',
                                                                                'deeppink',
                                                                                'blue',
                                                                                'red',
                                                                                'pink'
                                                                            ],
                                                                            hoverOffset: 4
                                                                        }]
                                                                    },
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-8 pl-3 ">
                                        <style type="text/css">
                                            #map {
                                                height: 100%;
                                            }

                                            #result {
                                                position: absolute;
                                                top: 0;
                                                bottom: 0;
                                                right: 0;
                                                width: 1px;
                                                height: 80%;
                                                margin: auto;
                                                border: 4px solid #dddddd;
                                                background: #ffffff;
                                                overflow: auto;
                                                z-index: 2;
                                            }
                                        </style>

                                        <script type="text/javascript" src="https://api.longdo.com/map/?key=0e2384cd542e68a77e96b5df4516be86"></script>
                                        <script>
                                            function init() {
                                                // var map = new longdo.Map({
                                                //     placeholder: document.getElementById('map')
                                                // });
                                                map.location({
                                                    lon: 100.627899,
                                                    lat: 13.327583
                                                }, true);
                                                map.zoom(6, true);
                                            }
                                        </script>
<!-- 
                                        <div id="map"></div>
                                        <div id="result"></div> -->

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
                    <script>
                        new Vue({
                            el: '#app',
                            data() {
                                return {
                                    jingdu: [],
                                    weidu: [],
                                    daall: [],

                                }
                            },
                            mounted() {
                                var vm = this;
                                axios.get('http://openapi.18gps.net/GetDateServices.asmx/loginSystem?LoginName=monitor&LoginPassword=123456&LoginType=ENTERPRISE&language=cn&ISMD5=0&timeZone=+08&apply=APP&loginUrl=http://vipapi.18gps.net/')
                                    .then((resp1) => {
                                        urllog = resp1;
                                        logmds = urllog.data.mds;
                                        logid = urllog.data.id;

                                        const pp1 = 'http://api.18gps.net//GetDateServices.asmx/GetDate?method=getDeviceList&mds='
                                        axios.get(pp1 + logmds)
                                            .then((resp2) => {
                                                daal = resp2;
                                                vm.daall = daal.data.rows;

                                            })
                                        const school = 'http://api.18gps.net//GetDateServices.asmx/GetDate?timestamp=1508228270718&method=queryLocalAlarmInfoUtc&school_id=';
                                        const idmds = '&mds=';
                                        const cs = '&max_time=1508103827687&type=custom'
                                        axios.get(school + logid + idmds + logmds + cs)
                                            .then((resp3) => {
                                                dat = resp3;

                                                for (let i = 0; i < dat.data.rows.length; i++) {

                                                    vm.jingdu = dat.data.rows[i].jingdu;
                                                    vm.weidu = dat.data.rows[i].weidu;

                                                    // console.log(jingdu)
                                                    // console.log(weidu)

                                                    var marker = new longdo.Marker({

                                                        lon: vm.jingdu,
                                                        lat: vm.weidu
                                                    });
                                                    map.Overlays.add(marker);
                                                }

                                            })

                                            .catch((err) => {
                                                console.log(err)
                                            })
                                    });
                            }
                        })
                        var map = new longdo.Map({
                            placeholder: document.getElementById('map')
                        });
                    </script>

                    <script>
                        new Vue({
                            el: '#app1',
                            data() {
                                return {
                                    daall1: [],
                                }
                            },
                            mounted() {
                                let vm = this;
                                axios.get('http://openapi.18gps.net/GetDateServices.asmx/loginSystem?LoginName=monitor&LoginPassword=123456&LoginType=ENTERPRISE&language=cn&ISMD5=0&timeZone=+08&apply=APP&loginUrl=http://vipapi.18gps.net/')
                                    .then((resp1) => {
                                        urllog = resp1;
                                        logmds = urllog.data.mds;

                                        const pp1 = 'http://api.18gps.net//GetDateServices.asmx/GetDate?method=getDeviceList&mds='
                                        axios.get(pp1 + logmds)
                                            .then((resp2) => {
                                                daal = resp2;
                                                vm.daall1 = daal.data.rows;
                                            })

                                            .catch((err) => {
                                                console.log(err)
                                            })
                                    });
                            }
                        })
                    </script>

                    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
                    <script>
                        $(document).ready(function() {

                            $("#box").hide();

                            $("#ddl").change(function() {
                                var ddl = $("#ddl").val();
                                if (ddl == 93) {
                                    $("#box").show();
                                } else {
                                    $("#box").hide();
                                }

                            });

                        });
                    </script>
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