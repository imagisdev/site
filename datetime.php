<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date/Time</title>
</head>
<body>
    <h1>Date/Time</h1>
    <a href="index.php">Back<a><br/>   

    <?php 
        $datetime = getdate();
        $timeonly = time();
        echo '<p>' . $datetime['year'] . '/' . $datetime['mon'] . '/' . $datetime['mday'] . '</p>';
        echo '<p>' . date("Ymd H.i.s", $timeonly). '</p>';
    ?>
</body>
</html>