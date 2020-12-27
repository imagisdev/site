<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If</title>
</head>
<body>
    <?php 
        echo "<h1>If statements</h1><br/>";
        echo '<a href="index.php">Back<a><br/>';
        $grade = 50;

        if($grade >= 50) {
            echo '<h3 style="color: #00AA00;">YOU HAVE PASSED</h3>';
        }
        else {
            echo '<h3 style="color: red;">YOU HAVE FAILED</h3>';
        }

        if($grade > 79) {
            echo 'A';
        }
        elseif($grade > 69) {
            echo 'B';
        }
        elseif($grade > 59) {
            echo 'C';
        }
        elseif($grade > 49) {
            echo 'D';
        }
        else {
            echo 'F';
        }
    ?>    
    <br/>
    
</body>
</html>