<?php 
    $title = 'Functions';
    include 'includes/header.php';

    function WriteMsg($sname) {
        echo 'Ahoy ' . $sname . '<br/>';
    }
    
    WriteMsg("Test");
    
    echo '<br/><br/>';
    include 'includes/footer.php';
?>