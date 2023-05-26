<!DOCTYPE html>
<html>
<head>
    <title>Word to Digit Converter</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <form method="POST">
        <h2>Please input a word:</h2>
        <input type="text" name="word">
        <input type="submit" value="Convert">
    </form>

    <?php
    if (isset($_POST["word"])) {
        $word = $_POST["word"];
        word_digit($word);
    }

    function word_digit($word)
    {
        $warr = explode(' ', $word);
        $result = '';
        foreach ($warr as $value) {
            switch (trim($value)) {
                case 'zero':
                    $result .= '0 ';
                    break;
                case 'one':
                    $result .= '1 ';
                    break;
                case 'two':
                    $result .= '2 ';
                    break;
                case 'three':
                    $result .= '3 ';
                    break;
                case 'four':
                    $result .= '4 ';
                    break;
                case 'five':
                    $result .= '5 ';
                    break;
                case 'six':
                    $result .= '6 ';
                    break;
                case 'seven':
                    $result .= '7 ';
                    break;
                case 'eight':
                    $result .= '8 ';
                    break;
                case 'nine':
                    $result .= '9 ';
                    break;
                default:
                    $result .= 'Invalid word ';
                    break;
            }
        }
        echo '<h3>Converted Digits:</h3>';
        echo '<p>' . $result . '</p>';
    }
    ?>
</body>
</html>
