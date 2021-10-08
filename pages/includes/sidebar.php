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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="../home/">
        <img src="../../assets/images/logo.png" alt="Admin Logo" width="40px" class="img-circle elevation-3">    </a>
        <span class="font-weight-bold pl-1 ">KDR GPS</span>

    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="../home/" class="nav-link <?php echo isActive('home') ?>">
                    <i class="nav-icon fas fa-home-alt"></i>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="../dashboard/" class="nav-link <?php echo isActive('dashboard') ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="../reportcar/" class="nav-link <?php echo isActive('reportcar') ?>">
                    <i class="nav-icon fas fa-file-alt"></i>
                    Report
                </a>
            </li>
        </ul>
        <span class="navbar-text">
            <li class="nav-item d-md-block d-none">
                <a class="nav-link">เข้าสู่ระบบครั้งล่าสุด: <?php echo $_SESSION['AD_LOGIN'] ?> </a>
            </li>
        </span>
    </div>
</nav>


<!-- Main Sidebar Container -->

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