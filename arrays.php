<?php 
        $title = "Arrays";
        include 'includes/header.php';
?>

    <?php 
        $numbers = array(1, 2, 3, 4, 5);

        echo "<p>$numbers[2]</p>";
        echo '<p>Array numbers is '. count($numbers) . 'element(s)</p>';

        for($ctr = 0; $ctr < count($numbers); $ctr++) {
        echo "<p>$numbers[$ctr]</p>";

        }
        include 'includes/footer.php';
    ?>