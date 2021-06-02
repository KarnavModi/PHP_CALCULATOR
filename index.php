<?php
include_once 'Operations.php';
if(!empty($_POST['Number1'])){
    $Num1=$_POST['Number1'];
}
if(!empty($_POST['Number2'])){
    $Num2=$_POST['Number2'];
}
$Ans='';
$Answer=new Operations();
if(isset($_POST['add'])){
    $Ans=$Answer->Addition($Num1, $Num2);
}
elseif(isset($_POST['sub'])){
    $Ans=$Answer->Subtraction($Num1, $Num2);
}
elseif(isset($_POST['mul'])){
    $Ans=$Answer->Multiplication($Num1, $Num2);
}
elseif(isset($_POST['div'])){
    $Ans=$Answer->Division($Num1, $Num2);
}
elseif(isset($_POST['pct'])){
    $Ans=$Answer->Percentage($Num1);
}
elseif(isset($_POST['sqr'])){
    $Ans=$Answer->Square($Num1);
}
elseif(isset($_POST['cub'])){
    $Ans=$Answer->Cube($Num1);
}
elseif(isset($_POST['fact'])){
    $Ans=$Answer->Factorial($Num1);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>
    <body>
        <form method="post" attribute="post" action="index.php">
        <table border="2">
            <tr><td>Enter Number 1 </td>
                <td><input type=text name="Number1" id="Number1" required=""></td></tr>
            <tr><td>Enter Number 2 </td>
                <td><input type=text name="Number2" id="Number2" ></td></tr>
            <tr><td>Answer </td><?php echo'<td>'.$Ans.'</td>';?></tr>
            <tr><td><input type="submit" name="add" value="+">
                <input type="submit" name="sub" value="-">
                <input type="submit" name="mul" value="*">
                <input type="submit" name="div" value="/">
                <input type="submit" name="sqr" value="X^2"></td>
                <td>
                <input type="submit" name="cub" value="X^3">
                <input type="submit" name="pct" value="%">
                <input type="submit" name="fact" value="X!">
                </td></tr>
        </table>
        </form>
    </body>
</html>
