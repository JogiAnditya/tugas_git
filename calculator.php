<?php
//menambil data dari form
    $num1 = $_POST['num1'] ?? 0;
    $num2 = $_POST['num2'] ?? 0;
    $op = $_POST['op'] ?? '+';

    // validasi nilai input
    if (!is_numeric($num1) || !is_numeric($num2)) {
        $error = "Please enter valid numbers";
    } elseif ($op == '/' && $num2 == 0) {
        $error = "Cannot divide by zero";
    } else {
        $error = "";
    }

    // operasional aritmatika
    switch ($op) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
            break;
        default:
            $result = "Invalid operation";
    }
    // Menampilkan hasil
    $result = number_format($result, 2);

    // Membuat array operasi aritmatika
    $operations = ['+', '-', '*', '/'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
</head>
<body>
    <h1>PHP Calculator</h1>
    <p>Kalkulator sederhana yang dapat melakukan operasi aritmatika dasar pada dua angka</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Masukkan angka pertama:</label>
        <input type="text" id="num1" name="num1" value="<?php echo htmlspecialchars($num1); ?>">
        <br>
        <label for="op">Pilih Operasi:</label>
        <select id="op" name="op">
            <?php foreach ($operations as $operation): ?>
                <option value="<?php echo $operation; ?>" <?php if ($op == $operation) echo 'selected'; ?>>
                    <?php echo $operation; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="num2">Masukkan angka kedua:</label>
        <input type="text" id="num2" name="num2" value="<?php echo htmlspecialchars($num2); ?>">
        <br>
        <input type="submit" value="Calculate">
    </form>
    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php else: ?>
        <p>The result is: <?php echo $result; ?></p>
    <?php endif; ?>
</body>
</html>
