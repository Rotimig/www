<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <?php
  // Variables
  $characterName = "James";
  $charaterAge = 55;
    echo "This is $characterName <br>" ;
    echo "He is $charaterAge years old <br>";
  $characterName = "Wale";
    echo "he like being $characterName <br>";
    echo "He does not like being $charaterAge <br>";

// Data types - Strings, ints, floats, booleans.

$phrase = "To be or not to be";
$age = 30;
$gpa = 32.4445;
$isMale = false;

// strings
echo "Hello";


$phrase = "Giraffe Academy";
echo strtolower("$phrase");
echo strtoupper("$phrase");
echo strlen("$phrase");
echo  $phrase[4];
echo  "Mikes"[4];

echo str_replace("Giraffe", "Panda", $phrase);
echo str_replace("ffe", "Panda", $phrase);
echo substr($phrase, 8, 4);

// Numbers

echo -40.6540;

echo 5 + 9;

echo 10 % 5;

echo 4 + 6 * 20;


$num =  10;

$num++;
$num--;

$num +=25;

echo $num;

// Maths operations

echo abs(-200);

echo pow(2, 5);

echo max(2, 10);

echo min(2, 10);

echo round(3.2);

echo round(3.7);

echo ceil(3.3);

echo floor(3.9);


     ?>




 <form action="site.php" method="get">
      Name: <input type="text" name="username">
      <br><br>
      Age: <input type="number" name="age">
      <input type="submit">
      </form>
      <br><br>
    Your name is  <?php
   echo $_GET["username"];
    ?>
    <br><br>
    Your age is  <?php
   echo $_GET["age"];?>

   <br><br>

   <br><br>
   <br><br>

      <form action="site.php" method="get">
        <input type="number" name="num1">
        <br><br>
        <input type="number" name="num2">
        <input type="submit">
      </form>
       Answer: <?php
        echo $_GET["num1"] + $_GET["num2"]; ?>


<?php// Doing a Mad Lib Game ?>

<form action="site.php" method="color">
  color: <input type="text" name="color">
  <br><br>
  plural noun:  <input type="text" name="pluralNoun">
  <br><br>
  celebrity: <input type="text" name="celebrity">
  <br><br>
  <input type="submit">
</form>

<?php
$color = $_GET["color"];
$pluralNoun = $_GET["pluralNoun"];
$celebrity = $_GET["celebrity"];

echo "Roses are $color <br>";
echo "$pluralNoun are blue <br>";
echo "I love $celebrity"; ?>

<?php// URL Parameter in PHP.?>


<form action="site.php" method="get">
  Name: <input type="text" name="name">
  <input type="submit">
</form>


<?php
echo $_GET["name"];
 ?>

</body>


</html>
