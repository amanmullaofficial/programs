<!DOCTYPE html>
<html>
<head>
    <title>Sum of Digits</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <form method="POST">
        <h2>Please input a number:</h2>
        <input type="text" name="number">
        <input type="submit" value="Submit Number">
    </form>

    <?php
    if (isset($_POST["number"])) {
        $number = $_POST["number"];
        echo sum_of_digits($number);
    }

    function sum_of_digits($num)
    {
        $tempnum = $num;
        $sum = 0;

        for ($i = 0; $i < strlen($num); $i++) {
            $digit = (int) $num[$i];
            $sum += $digit;
        }

        return "Sum of digits $tempnum is $sum";
    }
    ?>
</body>
</html>