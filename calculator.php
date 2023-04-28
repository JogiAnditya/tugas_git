<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
</head>
<body>
    <h1>PHP Calculator</h1>
    <p>This is a single file PHP project that shows off some of my PHP skills.</p>
    <p>It is a simple calculator that can perform basic arithmetic operations on two numbers.</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Enter first number:</label>
        <input type="text" id="num1" name="num1" value="<?php echo htmlspecialchars($num1); ?>">
        <br>
        <label for="op">Select an operation:</label>
        <select id="op" name="op">
            <?php foreach ($operations as $operation): ?>
                <option value="<?php echo $operation; ?>" <?php if ($op == $operation) echo 'selected'; ?>>
                    <?php echo $operation; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="num2">Enter second number:</label>
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
