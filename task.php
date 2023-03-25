<!-- <?php
phpinfo();
?> -->
<!-- <?php
     const pageName = "task1";
     echo constant("pageName");
     print("<br>");

?> -->
<!-- <?php
print("Server Name=");
print_r($_SERVER['SERVER_NAME']);
print("<br>");
print("server Port =");
print_r($_SERVER['SERVER_PORT']);
print("<br>");
print("server address =");
print_r($_SERVER['SERVER_ADDR']);
print("<br>");
print("path Name =");
print_r($_SERVER['SCRIPT_FILENAME']);
print("<br>");
print("file Name =");
print_r($_SERVER['SCRIPT_NAME']);
print("<br>");

?> -->
<?php
$age = 10;

switch ($age) {
  case ($age<5):
    echo "Stay at home";
    break;
  case ($age===5):
    echo "Go to Kindergarden";
    break;
  case ($age>5 && $age<13):
    echo "Go to grade $age";
    break;
  default:
    echo "enter write age";
}
?>
