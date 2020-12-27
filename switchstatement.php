<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch</title>
</head>
<body>
    <h1>Switch Statement</h1>
    <a href="index.php">Back<a><br/>
    <?php 
        $grade = 'A';

        switch($grade){
            case 'A':
                echo 'You are a superstar!';
                break;
            case 'B':
                echo 'You did well.';
                break;
            default:
                echo 'You have failed';
                break;
        }
    ?>
    <br />
    
</body>
</html>