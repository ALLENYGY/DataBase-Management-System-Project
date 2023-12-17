<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrator</title>
  <link rel="stylesheet" href="index.css">
</head>



<?php
include "03_connectDB.php";
session_start();
$user = $_SESSION["user"];
$usertype = $_SESSION["usertype"];

$url = '01_login.php';
if ($usertype != 'admin') header('Location:' . $url);

//Get user information
$sql_user = "SELECT * FROM admin WHERE uname='$user'";
$result = mysqli_query($conn, $sql_user);
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $name = $row["uname"];
  $phone = $row["uphone"];
  $mail = $row["umail"];
  $gender = $row["ugender"];
  $userID = $row["uID"];
  // $csID=$row["csID"];
}
?>

<body>
  <main>
    <nav class="main-menu">
      <h1>Courier Administrator</h1>
      <img class="logo" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/4cfdcb5a-0137-4457-8be1-6e7bd1f29ebb" alt="" />
      <ul>
        <li class="nav-item active" id="homeNavItem">
          <b></b>
          <b></b>
          <a href="08_admin.php">
            <i class="fa fa-house nav-icon"></i>
            <span class="nav-text">Home</span>
          </a>
        </li>

        <li class="nav-item" id="profileNavItem">
          <b></b>
          <b></b>
          <a href="#">
            <i class="fa fa-user nav-icon"></i>
            <span class="nav-text">Profile</span>
          </a>
        </li>

        <li class="nav-item" id="searchNavItem">
          <b></b>
          <b></b>
          <a href="#">
            <i class="fa fa-search nav-icon"></i>
            <span class="nav-text">Search</span>
          </a>
        </li>

        <li class="nav-item" id="historyNavItem">
          <b></b>
          <b></b>
          <a href="#">
            <i class="fa fa-history nav-icon"></i>
            <span class="nav-text">History</span>
          </a>
        </li>

        <li class="nav-item">
          <b></b>
          <b></b>
          <a href="01_login.php">
            <i class="fa fa-sign-out nav-icon"></i>
            <span class="nav-text">Log out</span>
          </a>
        </li>

      </ul>
    </nav>

    <section class="content">
      <div class="left-content">
        <div class="activities">
          <h1>Activities</h1>
          <div class="activity-container">

            <div class="image-container">
              <img src="/Project/image/map/Beijing.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Chongqing.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Fujian.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Gansu.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>


            <div class="image-container">
              <img src="/Project/image/map/Guangdong.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Guangxi.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Guizhou.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Hainan.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Hebei.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Heilongjiang.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            
            <div class="image-container">
              <img src="/Project/image/map/Henan.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Hongkong.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>


            <div class="image-container">
              <img src="/Project/image/map/Hubei.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Hunan.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Jiangsu.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Jiangxi.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Jilin.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Liaoning.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Macao.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>

            <div class="image-container">
              <img src="/Project/image/map/Neimenggu.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Ningxia.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Qinghai.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Shandong.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Shanghai.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Shanxi.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Shanxi_1.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Taiwan.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Tianjin.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Xinjiang.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Xizang.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Yunnan.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Zhejiang.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Anhui.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            <div class="image-container">
              <img src="/Project/image/map/Sichuan.jpg" alt="station" />
              <div class="overlay">
                <h3>Courier</h3>
              </div>
            </div>
            
          </div>
        </div>
      </div>


      <div class="right-content">
        <div class="user-info">
          <div class="icon-container">
            <i class="fa fa-bell nav-icon"></i>
            <i class="fa fa-message nav-icon"></i>
          </div>
          <h4>AllenYGY</h4>
          <img src="https://cdn.jsdelivr.net/gh/ALLENYGY/ImageSpace@master/IMAGE/test.jpg" alt="user" />
        </div>

        <div class="friends-activity">
          <h1>Friends' Package</h1>
          <div class="card-container">
            <div class="card">
              <div class="card-user-info">
                <img src="https://cdn.jsdelivr.net/gh/ALLENYGY/ImageSpace@master/IMAGE/DJY.png" alt="SJY" />
                <h2>SJY</h2>
              </div>
              <img class="card-img" src="/Project/image/pick.jpg" alt="pickup" />
              <p>I just recive a new package today.<br> Please help me pick up the package.</p>
            </div>

            <div class="card card-two">
              <div class="card-user-info">
                <img src="https://cdn.jsdelivr.net/gh/ALLENYGY/ImageSpace@master/IMAGE/DSX.png" alt="DSX" />
                <h2>DSX</h2>

              </div>
              <img class="card-img" src="/Project/image/pick.jpg" alt="pickup" />
              <p>I just recive a new package today.<br> Please help me pick up the package.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="script.js"></script>
</body>

</html>