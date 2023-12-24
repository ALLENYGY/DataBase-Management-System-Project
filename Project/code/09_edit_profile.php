<?php
include "03_connectDB.php";

session_start();
$user = $_SESSION["user"];
$utype = $_SESSION["usertype"];
$uID = $_SESSION["uID"];

echo $utype;

$newPhone = isset($_POST["newPhone"]) ? $_POST["newPhone"] : "";
$newMail = isset($_POST["newMail"]) ? $_POST["newMail"] : "";
$newGender = isset($_POST["newGender"]) ? $_POST["newGender"] : "";
$oldpwd = isset($_POST["oldpwd"]) ? $_POST["oldpwd"] : "";
$editpwd = isset($_POST["editpwd"]) ? $_POST["editpwd"] : "";


if ($utype == 'customer') $sql = "SELECT * FROM customer WHERE uname='$user'";
if ($utype == 'cadmin') $sql = "SELECT * FROM cadmin WHERE uname='$user'";
if ($utype == 'admin') $sql = "SELECT * FROM admin WHERE uname='$user'";

// echo $sql;

$result = mysqli_query($conn, $sql);
if ($result) {
  $row = mysqli_fetch_assoc($result);
  $storedPassword = $row['upassword'];
  if ($oldpwd === $storedPassword) {
    if ($utype == 'customer')
      $updateQuery = "UPDATE customer SET ";
    if ($utype == 'cadmin')
      $updateQuery = "UPDATE cadmin SET ";
    if ($utype == 'admin')
      $updateQuery = "UPDATE admin SET ";
    $check = 0;
    if (!empty($newGender)) {
      $updateQuery .= " ugender='$newGender', ";
      $check = 1;
    }
    if (!empty($editpwd)) {
      $updateQuery .= " upassword='$editpwd', ";
      $check = 1;
    }
    $updateQuery = rtrim($updateQuery, ', ');
    if ($check == 1) {
      $updateQuery .= " WHERE uID='$uID'";
      echo $updateQuery;
      $updateResult = mysqli_query($conn, $updateQuery);

      // if ($updateResult) {
      //   echo "User information updated successfully!";
      //   if ($utype == "customer") {
      //     $url = "06_customer.php";
      //   }
      //   if ($utype == "cadmin")
      //     $url = "07_cadmin.php";
      //   if ($utype == "admin") {
      //     $url = "08_admin.php";
      //   }
      // } else {
        // echo "Error updating user information: " . mysqli_error($conn);
      // }
    }

    if ($utype == 'customer')
      $updateQuery = "UPDATE customer_email SET ";
    if ($utype == 'cadmin')
      $updateQuery = "UPDATE cadmin_email SET ";
    if ($utype == 'admin')
      $updateQuery = "UPDATE admin_email SET ";
    $check = 0;
    if (!empty($newMail)) {
      $updateQuery .= " umail='$newMail' ";
      $check = 1;
    }
    if ($check == 1) {
      $updateQuery .= " WHERE uID='$uID'";
      echo $updateQuery;
      $updateResult = mysqli_query($conn, $updateQuery);
      
    }

    if ($utype == 'customer')
      $updateQuery = "UPDATE customer_phone SET ";
    if ($utype == 'cadmin')
      $updateQuery = "UPDATE cadmin_phone SET ";
    if ($utype == 'admin')
      $updateQuery = "UPDATE admin_phone SET ";
    $check = 0;
    if (!empty($newPhone)) {
      $updateQuery .= " uphone='$newPhone' ";
      $check = 1;
    }
    if ($check == 1) {
      $updateQuery .= " WHERE uID='$uID'";
      echo $updateQuery;
      $updateResult = mysqli_query($conn, $updateQuery);
    }

    if ($updateResult) {
      echo "User information updated successfully!";
      if ($utype == "customer") {
        $url = "06_customer.php";
      }
      if ($utype == "cadmin")
        $url = "07_cadmin.php";
      if ($utype == "admin") {
        $url = "08_admin.php";
      }
    }
  } else {
    echo "Old password doesn't match!";
  }
}
// }
header('Location:' . $url);
