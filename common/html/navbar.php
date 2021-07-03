<?php
require_once("common/code/commonfunctions.php");

$navname = generate_navname();
?>

<script type="text/javascript">
    var active_item = "#<?= $navname ?>";
</script>

<!--Navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.php">Intro</a>
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicNav" aria-controls="basicNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicNav">
        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li id="nav-branding" class="nav-item">
                <a class="nav-link" href="page.php?nav=branding">Branding</a>
            </li>
            <li id="nav-icons" class="nav-item">
                <a class="nav-link" href="page.php?nav=icons">Ikon</a>
            </li>
            <li id="nav-mobiles" class="nav-item">
                <a class="nav-link" href="page.php?nav=mobiles">Mobil hátlap</a>
            </li>
            <li id="nav-books" class="nav-item">
                <a class="nav-link" href="page.php?nav=books">Könyv</a>
            </li>
            <li id="nav-commercials" class="nav-item">
                <a class="nav-link" href="page.php?nav=commercials">Plakát</a>
            </li>
            <li id="nav-drawings" class="nav-item">
                <a class="nav-link" href="page.php?nav=drawings">Szabadkézi</a>
            </li>
            <li id="nav-photos" class="nav-item">
                <a class="nav-link" href="page.php?nav=photos">Fénykép</a>
            </li>
            <li id="nav-3d" class="nav-item">
                <a class="nav-link" href="page.php?nav=3d">3D tartalom</a>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar-->