<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Strings</title>
</head>
<body>
    <h1>Strings</h1>
    <a href="index.php">Back<a><br/>   

    <?php 
        $p1 = "Students who came late";
        $p2 = "in class, stand with Rock";
        $name = 'keyur desai';
        
        echo $p1 . ' ' . $p2;
        echo '<hr/>';
        echo 'First uppercase: '. ucfirst($name) . '<br/>';
        echo 'Proper case: '. ucwords($name) . '<br/>';
        echo 'Upper case: '. strtoupper($name) . '<br/>';
        echo '<hr/>';
        echo 'Repeat string: <br/>' . str_repeat($name . '<br/>', 10) . '<br/>';
        echo 'D is in position ' . strpos($name, 'D') . '<br/>';
        echo 'Substring: ' . substr($name, 6, 5) . '<br/>';
        echo 'Find character e: ' . strchr($name, 'e') . '<br/>';
    ?>
</body>
</html>