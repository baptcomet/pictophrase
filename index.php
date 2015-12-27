<?php
function debug($string, $die = true) {
    echo '<pre>';
    var_dump($string);
    echo '</pre>';
    if ($die) {
        die;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'views/partial/header.php' ?>
</head>
<body>
<div class="container">
    <?php include 'views/content.php' ?>
</div>
</body>
</html>

