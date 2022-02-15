<?php
$title = "review";
include_once "layouts/header.php";
include_once "layouts/nav.php";
?>


<form method="POST" action="result.php">
    <p>Are you satisfied with the level of cleanliness?:</p>
      <input type="radio" id="excellent" name="excellent" value="excellent">
      <label for="excellent">excellent</label><br>
      <input type="radio" id="v.good" name="v.good" value="v.good">
      <label for="v.good">v.good</label><br>
      <input type="radio" id="good" name="good" value="good">
      <label for="good">good</label>
    <input type="radio" id="bad" name="bad" value="bad">
      <label for="bad">bad</label>


    <br>
    <p>Are you satisfied with the level of cleanliness?:</p>
      <input type="radio" id="excellent" name="excellent" value="excellent">
      <label for="excellent">excellent</label><br>
      <input type="radio" id="v.good" name="v.good" value="v.good">
      <label for="v.good">v.good</label><br>
      <input type="radio" id="good" name="good" value="good">
      <label for="good">good</label>
    <input type="radio" id="bad" name="bad" value="bad">
      <label for="bad">bad</label>
    <br>
    <p>Are you satisfied with the service prices?:</p>
      <input type="radio" id="excellent" name="excellent" value="excellent">
      <label for="excellent">excellent</label><br>
      <input type="radio" id="v.good" name="v.good" value="v.good">
      <label for="v.good">v.good</label><br>
      <input type="radio" id="good" name="good" value="good">
      <label for="good">good</label>
    <input type="radio" id="bad" name="bad" value="bad">
      <label for="bad">bad</label>
    <br>
    <p>Are you satisfied with the nursing service?</p>
      <input type="radio" id="excellent" name="excellent" value="excellent">
      <label for="excellent">excellent</label><br>
      <input type="radio" id="v.good" name="v.good" value="v.good">
      <label for="v.good">v.good</label><br>
      <input type="radio" id="good" name="good" value="good">
      <label for="good">good</label>
    <input type="radio" id="bad" name="bad" value="bad">
      <label for="bad">bad</label>
    <br>
    <p>Are you satisfied with the level of the doctor?</p>
      <input type="radio" id="excellent" name="excellent" value="excellent">
      <label for="excellent">excellent</label><br>
      <input type="radio" id="v.good" name="v.good" value="v.good">
      <label for="v.good">v.good</label><br>
      <input type="radio" id="good" name="good" value="good">
      <label for="good">good</label>
    <input type="radio" id="bad" name="bad" value="bad">
      <label for="bad">bad</label>
    <br>
    <p>Are you satisfied with the calmness in the hospital?</p>
      <input type="radio" id="excellent" name="excellent" value="excellent">
      <label for="excellent">excellent</label><br>
      <input type="radio" id="v.good" name="v.good" value="v.good">
      <label for="v.good">v.good</label><br>
      <input type="radio" id="good" name="degree" value="good">
      <label for="good">good</label>
    <input type="radio" id="bad" name="bad" value="bad">
      <label for="bad">bad</label>
    <br>
    <input type="submit" value="Submit">
</form>
<?php
$ex = $_POST['excellent'];
$vg = $_POST['v.good'];
$g = $_POST['good'];
$b = $_POST['bad'];
$per = 0;
if (isset($_POST['submit'])) {
$per = ($ex + $vg + $g + $b ) / 250 *100;
echo "Percentage obtained by user is $per </br>";

if ($per >= 100) {
$per = 1;
} else if ($per >= 75) {
$per = 2;
} else if ($per >= 50) {
$per = 3;
} else if ($per >= 25) {
$per = 4;


}

switch ($per) {
case 1:
echo "Grade : excellent";
break;

case 2:
echo "Grade : v.good";
break;

case 3:
echo "Grade : good";
break;

case 4:
echo "Grade : bad";
break;
default:
echo "Grade : we will call you later";
break;

}
}

?>






<?php
include_once "layouts/footer.php";
include_once "layouts/script.php";
?>