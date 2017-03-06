<?php

//When this page is loaded
//This variable can get used in another file
//if referenced before the include statement!
//therefore it is used in header.php
$pageTitle = "Suggest a media item";
$section = "suggest";
include("inc/header.php");

?>

<div class="section page">
    <h1><?php $pageTitle; ?></h1>
</div>

<?php include("inc/footer.php"); ?>