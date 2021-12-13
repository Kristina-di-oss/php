<!DOCTYPE html>
<html>
<head>
    <title>Кристина Осинкина</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите число x (меньше одного):</p>
        <input type="text" name="x">
        <p>Введите число n:</p>
        <input type="text" name="n">
        <input type="submit" value="OK">
    </form>
    <?php
        $x=$_POST["x"];
        $n=$_POST["n"];
        $b = 0;
            for($a=0; $a<=$n; $a++){
                $b=$b+(((-1)**($a+1))/((2*$a+1)*($x**(2*$a+1))));
            }
            $b=$b-(3.14/2);
        
        echo $b;
    ?>
</body>
</html>