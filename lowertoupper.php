<html>
<head>
<title>Convert Lowercase to Uppercase</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form method="POST">
<h2>Enter a string:</h2>
<input type="text" name="string">
<input type="submit" value="Submit String">
</form>

<?php
if(isset($_POST["string"]) && !empty($_POST["string"])) {
    $a = $_POST["string"];
    echo "Original String: \n";
    echo $a . "\n";
    echo "Uppercase String: \n";
    $chars = str_split($a);
    foreach ($chars as $ch) {
        if (ctype_lower($ch)) {
            echo chr(ord($ch) - 32);
        } else {
            echo $ch;
        }
    }
}
?>
</body>
</html>