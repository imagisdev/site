<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While loop</title>
</head>
<body>
    <h1>While loop</h1>
    <a href="index.php">Back<a>

    <?php 
        $grade = 0;
        while($grade < 10) {
            echo "<p>Less than 10 - $grade</p>";
            $grade++;
        }
    ?>

    <h1>Do-While loop</h1>
    <?php 
        echo 'Reset variable to 5<br/>';
        $grade = 5;
        do {
            echo "<p>Less than 10 - $grade</p>";
            $grade++;
        }while($grade < 10);
    ?>
</body>
</html>