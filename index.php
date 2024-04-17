<html>
<form action="#" method="post">
    <input type="number" name="num">
    <button type="submit">save</button>
</form>
</html>
<?php
 $a=(int)$_POST['num'];
 $b=1;
for ($c=$a;$c>=1;$c--){
    $b=$b*$c;
}
echo "Factorial of $a is $b";
echo 'by';
echo 'k';
?>

