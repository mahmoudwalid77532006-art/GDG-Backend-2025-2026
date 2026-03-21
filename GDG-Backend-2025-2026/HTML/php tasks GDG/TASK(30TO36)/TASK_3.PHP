
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>

<?php
$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $user = $_POST["user"];

  echo "The Request Method Is Post And Username Is $user";
  echo "<br>";

  if (in_array($user, $admins)) {
    echo "This Username $user Is Admin";
  }
}
?>
