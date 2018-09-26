<html>
<head>
  <title>Programming Logic Test</title>
</head>
<body>
  <form method="POST">
    <h3>Programming Logic Test</h3>
  <input type="text" name="input"/>
</form>
</body>
</html>
<?php

if (isset($_POST['input'])) {
    $input = $_POST['input'];

    $values = explode(";", $input);

    foreach ($values as $value) {
        if (((($value % 3 == 0) || ((strpos($value, '3') !== false))) || (($value % 5 == 0) || ((strpos($value, '5') !== false)))) && (($value % 3 == 0) && ($value % 5 == 0))) {
            $values = str_replace($value, "lucky", $values);
        } else {
            if (($value % 3 == 0) && ($value % 5 == 0)) {
                $values = str_replace($value, "fizzbuzz", $values);
            } elseif (($value % 3 == 0) || ((strpos($value, '3') !== false))) {
                if (($value % 3 == 0) && ((strpos($value, '3') !== false))) {
                    $values = str_replace($value, "fizz fizz", $values);
                } else {
                    $values = str_replace($value, "fizz", $values);
                }
            } elseif (($value % 5 == 0) || ((strpos($value, '5') !== false))) {
                if (($value % 5 == 0) && ($i=(strpos($value, '5') !== false))) {
                    $values = str_replace($value, "buzz buzz", $values);
                }
                $values = str_replace($value, "buzz", $values);
            }
        }
    }

    print_r($values);
}
?>
