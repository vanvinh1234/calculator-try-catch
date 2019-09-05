<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$operand = $_POST["divide"];
function add($number1,$number2){
    return $number1 + $number2;
}
function sub($number1,$number2){
    return $number1 - $number2;
}
function multiplication($number1,$number2){
    return $number1*$number2;
}
function division($number1,$number2){
    return $number1/$number2;
}
function calculator($number1,$operand,$number2){
    if($operand =='divide'){
        if($number2 ==0){
            throw new Exception("error");
        }$result=$number1/$number2;
        echo "Result: " . $number1. "/" . $number2 . "=" . $result;
    }
}
try{
    division($number1,$number2);
}catch (Exception $e){
    echo $e->getMessage();
}
?>
<form method="post">
    <table>
        <tr>
            <td>So thu nhat:</td>
            <td><input type="text" name="number1"  ></td>
        </tr>
        <tr>
            <td>So thu hai:</td>
            <td><input type="text" name="number2" ></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit"> Submit</button>
            </td>
        </tr>
        <tr>
            <td> Tong:</td>
            <td><input type="text" name="add" value="<?php echo add($number1,$number2) ?>" "></td>
        </tr>
        <tr>
            <td> Hieu:</td>
            <td><input type="text" name="sub" value="<?php echo sub($number1,$number2) ?>" "></td>
        </tr>
        <tr>
            <td>Tich:</td>
            <td><input type="text" name="multi" value="<?php echo multiplication($number1,$number2) ?>" "></td>
        </tr>
        <tr>
            <td>Thuong:</td>
            <td><input type="text" name="divide" value="<?php echo division($number1,$number2) ?>" "></td>
        </tr>
    </table>
</form>
</body>
</html>