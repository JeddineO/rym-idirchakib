<?php
$dsn = "mysql:host=localhost;dbname=rym";
$bdd = new PDO($dsn, "root", "");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$attend = $_POST['attend'];
$meal = $_POST['meal'];
$comment = $_POST['comment'];
$guest1 = isset($_POST['guest1']) ? $_POST['guest1'] : null;
$guest2 = isset($_POST['guest2']) ? $_POST['guest2'] : null;
$guest3 = isset($_POST['guest3']) ? $_POST['guest3'] : null;
$guest4 = isset($_POST['guest4']) ? $_POST['guest4'] : null;
$guest5 = isset($_POST['guest5']) ? $_POST['guest5'] : null;


$result = $bdd->query("INSERT INTO guests (firstName, lastName, email, phone, attending, meal, comments,guest1,guest2,guest3,guest4,guest5) VALUES ('$fname', '$lname', '$email', '$phone', '$attend', '$meal', '$comment', '$guest1', '$guest2', '$guest3', '$guest4', '$guest5')");

echo "<img src='images/check.png'>Resvation saved  </div>";
echo "
<script>
setTimeout(function () {
   
    window.location.href = 'https://jeddineo.github.io/rym-idirchakib/';

}, (100));
</script>
";
