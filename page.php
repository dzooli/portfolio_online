<?php
require_once('common/code/gencaroussel.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("common/html/htmlheader.html"); ?>
    <title>Branding</title>
</head>

<body>
    <?php require_once("common/html/navbar.php"); ?>
    <div class="wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">&nbsp;</div>
                <div class="col">
                    <div class="row">
                        <?php if (!empty($navname)) {
                            gen_carousel('img/' . str_replace('nav-', '', $navname), 5000, true);
                        } ?>
                    </div>
                </div>
                <div class="col-1">&nbsp;</div>
            </div>
        </div>
    </div>
    <?php require_once("common/html/scripts.html"); ?>
</body>

</html>