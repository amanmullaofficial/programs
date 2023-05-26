<!DOCTYPE html>
<html>
<head>
    <title>Armstrong Number Check</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <form method="POST">
        <h2>Please input a number:</h2>
        <input type="text" name="number">
        <input type="submit" value="Submit Number">
    </form>

    <?php
    if (isset($_POST["number"]) && !empty($_POST["number"])) {
        $a = $_POST["number"];
        $flag = 2;
        $flag = armstrongCheck($a);
        if ($flag == 1)
            echo "Yes... The number $a is an Armstrong number ";
        else if ($flag == 0)
            echo "No... The number $a is not an Armstrong number ";
        else if ($flag == 2)
            echo " ";
    }

    function armstrongCheck($number)
    {
        $sum = 0;
        $x = $number;
        while ($x != 0) {
            $rem = $x % 10;
            $sum = $sum + $rem * $rem * $rem;
            $x = (int) ($x / 10);
        }
        if ($number == $sum)
            return 1;
        return 0;
    }
    ?>
</body>
</html>