<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - For</title>
</head>
<body>
    <h1>For loop</h1>
    <a href="index.php">Back<a>

    <?php 
        for($count = 0; $count < 10; $count++){
            echo '<p>Counter: ' . $count . '</p>';
        }
    ?>
</body>
</html>