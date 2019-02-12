<?php
    $flag = false;
    if (isset($_GET['copyright'])) {
        if ($_GET['copyright'] == 'y') {
            $flag = true;
        } else {
            if ($_GET['copyright'] == 'n') {
                $flag = false;
            }
        }
    }

    if (!isset ($_GET['copyright'])) {
        $flag = true;
    }

    if ($flag == true) {
        ?> Copyright &copy; <?php echo date ('Y') . " The Edgerton Group";
    }
?>