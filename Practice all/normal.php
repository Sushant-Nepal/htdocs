<?php
$fname="Sushant";
$lname="Nepal";
echo "<b>"."Outside Function"."<br>","</b>";
echo "My name is: ". $fname." ".$lname. "<br>";
echo "<b>"."Inside Function"."<br>","</b>";
function myname()
{
    echo "My name is: ".$GLOBALS['fname']." ".$GLOBALS['lname']."<br>";
    echo "<b>"."__FUNCTION__"."<br>", "</b>";
    echo "Function name is: " .__FUNCTION__."<br>";
}
myname();
echo "<b>"."$ and $$"."<br>", "</b>";
$x="abc";
$$x=200;
echo $x."<br>";
echo $$x."<br>";
echo $abc."<br>";
define("msg","Hello World!");
echo msg."<br>";
echo "<b>"."__LINE__"."<br>", "</b>";
echo "I am at line: ". __LINE__."<br>";
echo "<b>"."__FILE__"."<br>", "</b>";
echo __FILE__."<br>";
echo "<b>"."__DIR__"."<br>", "</b>";
echo __DIR__."<br>";

class MyClass 
{
    public $myProperty = "This is a property";

    public function __construct()
    {
        echo "<b>"."Constructor called"."<br>","</b>";
        echo "<b>"."__CLASS__"."<br>", "</b>";
        echo "Class is: " . __CLASS__ . "<br>";
    }
}

$obj = new MyClass();
echo "<b>"."Arithmetic Operator"."<br>", "</b>";
$a=1;
$b=2;
echo "<b>"."Binary operator"."<br>", "</b>";
$sum=$a+$b."<br>";
echo "Sum= ".$sum;
echo "<b>"."<h3>"."Unary Operator"."<br>", "</b>","</h3>";
echo "<b>"."Before Increment and Decrement"."<br>", "</b>";
echo "a=" .$a."<br>";
echo "b=" .$b."<br>";
echo "<b>"."After Increment"."<br>", "</b>";
$a++;
$b++;
echo "a=" .$a."<br>";
echo "b=" .$b."<br>"; 
echo "<b>"."After Decrement"."<br>", "</b>";
$a--;
$b--;
echo "a=" .$a."<br>";
echo "b=" .$b."<br>";
echo "<b>"."Assignment Operator"."<br>", "</b>";
$c=$a;
echo "Value of c after a is assigned :".$c;
$c+=$b;
echo "<br>". "Value of c after adding b to it :".$c."<br>";
echo "<b>"."<h3>"."If-Else"."<br>", "</b>","</h3>";
echo "
if(a==b)
{
    echo 'EQUAL';
}
else
{
    echo 'NOT EQUAL';
}
","<br>";
if($a==$b)
{
    echo 'EQUAL';
}
else
{
    echo 'NOT EQUAL';
}
echo "<b>"."<h3>"."Switch-Else"."<br>", "</b>","</h3>";?>
<pre>
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $opt=$_POST['opt'];
    switch($opt)
    {
        case 1:
            echo 'Option 1 Selected';
            break;
        case 2:
            echo 'Option 2 Selected';
            break;
        default:
            echo 'Input 1 or 2';
            break;
        }
    };
</pre>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(isset($_POST['Submit'])){
    $opt=$_POST['opt'];
    switch($opt)
    {
        case 1:
            echo "<b>".'Option 1 Selected'."</b>";
            break;
        case 2:
            echo "<b>".'Option 2 Selected'."</b>";
            break;
        default:
            echo "<b>".'Input 1 or 2'."</b>";
            break;
        }
    };
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practce PHP</title>
</head>
<body>
    <form method="POST" action="">
    <label for="opt">Select an option:</label>
        <select id="opt" name="opt">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select><br><br>
        <input type="submit" value="Submit">
</form>
</body>
</html>
<?php
echo "<b>"."<h3>"."For Loop"."<br>", "</b>","</h3>";
?>
<pre>
'for ($i=0;$i<10;$i++)
{
    echo $i."<br>";
}'
</pre>
<?php
for ($i=0;$i<10;$i++)
{
    echo $i."<br>";
}
echo "<b>"."<h3>"."Foreach Loop"."<br>", "</b>","</h3>";
?>
