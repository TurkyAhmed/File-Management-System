<?php
if (isset($_GET['file'])) {
    if (is_dir($_GET['file'])) {
        if (rmdir($_GET['file'])) {
            header('Location: index.php');
            exit;
        } else {
            exit('Directory must be empty!');
        }
    } else {
        unlink($_GET['file']);
        header('Location: index.php');
        exit;
    }
} else {
    exit('Invalid Request!');
}
?>