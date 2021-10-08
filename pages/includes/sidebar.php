<?php

/**
 * Main Sidebar
 * 
 * @link https://appzstory.dev
 * @author Yothin Sapsamran (Jame AppzStory Studio)
 */
function isActive($data)
{
    $array = explode('/', $_SERVER['REQUEST_URI']);
    $key = array_search("pages", $array);
    $name = $array[$key + 1];
    return $name === $data ? 'active' : '';
}
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars fa-2x"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto ">
        <li class="nav-item d-md-none d-block">
            <a href="../home/">
                <img src="../../assets/images/AdminLogo.png" alt="Admin Logo" width="50px" class="img-circle elevation-3">
                <span class="font-weight-light pl-1 ">KDR GPS</span>
            </a>
        </li>
        <li class="nav-item d-md-block d-none">
            <a class="nav-link">เข้าสู่ระบบครั้งล่าสุด: <?php echo $_SESSION['AD_LOGIN'] ?> </a>
        </li>
    </ul>
</nav>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="../home/" class="brand-link">
        <img src="../../assets/images/logo.png" alt="Admin Logo" class="brand-image img-circle elevation-3">
        <!-- <span class="brand-text font-weight-light">KDR GPS</span> --><br>
    </a>
    <div class="sidebar">
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../assets/images/avatar5.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="../manager/" class="d-block"> <?php echo $_SESSION['AD_FIRSTNAME'] . ' ' . $_SESSION['AD_LASTNAME'] ?> </a>
            </div>
        </div> -->
        <br>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="../home/" class="nav-link <?php echo isActive('home') ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../dashboard/" class="nav-link <?php echo isActive('dashboard') ?>">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="sidenav">
                        <button class="dropdown-btn">Report
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a href="../reportcar/" class="nav-link <?php echo isActive('reportcar') ?>">รายงานติดตามรถ</a>
                            <a href="../reportday/" class="nav-link <?php echo isActive('reportday') ?>">สรุปกิจกรรมประจำวัน (ตามช่วงเวลา)</a>
                        </div>
                    </div>
                </li>
                <li class="nav-header">บัญชีของเรา</li>
                <li class="nav-item">
                    <a href="../logout.php" id="logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>ออกจากระบบ</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<style>
    .sidenav a,
    .dropdown-btn {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        outline: none;
    }

    .sidenav a:hover,
    .dropdown-btn:hover {
        color: #f1f1f1;
    }

    .main {
        margin-left: 200px;
        font-size: 20px;
        padding: 0px 10px;
    }

    .dropdown-container {
        display: none;

    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
</style>

<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>