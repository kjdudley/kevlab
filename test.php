<?php

//phpinfo();
echo "You are using PHP version " . phpversion() . "<br>";

echo "a: [" . (20 > 9) . "]<br>";
echo "b: [" . (5 == 6) . "]<br>";
echo "c: [" . (1 == 0) . "]<br>";
echo "d: [" . (1 == 1) . "]<br>";
echo "<br>";

$a = 2; $b = 3;

if ($a > $b)  echo "$a is greater than $b<br>";
if ($a < $b)  echo "$a is less than $b<br>";

$bank_balance = 101;
if ($bank_balance < 100)
{
  $money = 1000;
  $bank_balance += $money;
  echo "Your balance was below 100. It has been topped up. Your new balance is $bank_balance!";
}
else
{
  $savings += 50;
  $bank_balance -= 50;
  echo "Your balance was above 100. 50 has been transferred to savings. Your new balance is $bank_balance!";
}

echo "<br>";

$count = 1;

  while ($count <= 12)
  {
    echo "$count times 12 is " . $count * 12 . "<br>";
    ++$count;
  }

// a quicker way of writing a while loop

$count = 0;

  while (++$count <=12)
  {
    echo "$count times 8 is " . $count * 8 . "<br>";
  }

function longdate($timestamp)
{
  return date("l F jS Y", $timestamp);
}

// use a for loop instead

for ($count = 1; $count <= 12 ; ++$count)
{
  echo "$count times 7 is " . $count * 7 . "<br>";
}

echo "The date is ".longdate(time());
echo "<br>";

// This is a comment

/* This is a multiline c
 * omment t
 * hat won't be
 * interpreted */

$names = array("KEVIN", "joHN", "dudLEY"); // asign three name strings to an array variable
echo $names[0] . " " . $names[1] . " " . $names[2] . "<br>";
fix_names();
echo $names[0] . " " . $names[1] . " " . $names[2] . "<br>";
$username = $names[0] . " " . $names[2];

function fix_names()
{
  global $names; 
  $names[0] = ucfirst(strtolower($names[0]));
  $names[1] = ucfirst(strtolower($names[1]));
  $names[2] = ucfirst(strtolower($names[2]));
}

$x += 9; // Increment by 10
$variable = "Like this.";
echo "x equals " . $x;
echo "<br>";
$y = 3 * (abs(2 * $x) + 4);
echo "if x equals $x and y = 3(|2x| + 4) then y equals: " . $y;
echo "<br>"; // line break
echo " Today is " . date("l") . ". ";
echo "<br>";
$current_user = $username;
echo $current_user;
echo "<br>";
if (++$x == 10) echo $x;
echo "<br>";
$info = "Preface variables with a $ like this: $variable";
echo $info;
echo "<br>";

$author = $username;

$anything = <<<_ANYTHING
  This is the first line. 
  This is the second line. Etc.
- $author.
_ANYTHING;

echo $anything;

?>

<?php

echo "<br>";
echo "This is line " . __LINE__ . " of file " . __FILE__;
echo "<br>";
?>

Here's the latest news.
