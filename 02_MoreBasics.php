<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: auto;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: grey;
        margin:auto;
        padding: 21px;

    }

</style>
<body>
    <div class="container">
        <h1> lets learn about php </h1>

        This is a container
    <?php
$age =7;
if($age>18)
{
    echo"you can go to party";

}
else if($age==7)
{
    echo "you are 7 years old";
}
else{
    echo"you cant go to party";

}
$languages = array("python","c++","php","node");
//echo $languages[1];
//echo count($languages);
//loopx in php
$a = 0;
while($a <= 10)
{
    echo "<br> the value of a is:";
    echo $a;
    $a++;

}
//iterative arrays in PHP using while loop
$a =0;
while($a < count($languages))
{
    echo "<br>the value of a is:";
    echo $languages[$a];
    $a++;

}
//iterative arrays in PHP using dowhile loop
$a =0;
do
{
    echo "<br>the value of a is:";
    echo $a;
    $a++;

}
while($a < 10);
//for loop
$a=100;
for ($a=0; $a < 10; $a++) {
    echo "<br>the value of a  from fro loop is:";
    echo $a;

    # code...

}
foreach ($languages as $value ) {
    echo "<br>the value from foreach is:";
    echo $value;
    # code...
}
function print5(){
    echo "FIVE";
}

print5();
print5();
print5();
function print_number($number){
    echo "<br>your number is";
    echo $number;
}
print_number(45);
print_number(444);

?>
    </div>
    
</body>
</html>