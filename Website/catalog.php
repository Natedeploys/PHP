<?php
//When this page is loaded
//This variable can get used in another file
//if referenced before the include statement!
//therefore it is used in header.php

include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Full Catalog";
$section = null;


//If there is a value in cat assign pagetitle
if (isset($_GET["cat"])) {
    //Get the valhttp://blog.udacity.com/2017/03/change-careers-10-steps.html?utm_content=buffer5fea5&utm_medium=social&utm_source=facebook.com&utm_campaign=updateue of the cat variable in the url tag
    //set the correct page titles
    if ($_GET["cat"] == "books") {
        $pageTitle = "Books";
        $section = "books";
    } else if ($_GET["cat"] == "movies") {
        $pageTitle = "Movies";
        $section = "movies";
    } else if ($_GET["cat"] == "music") {
        $pageTitle = "Music";
        $section = "music";
    }
}

include("inc/header.php"); ?>

<div class="section catalog page">
    <div class="wrapper">
        <h1><?php echo $pageTitle; ?></h1>

        <ul class="items">
            <?php
                foreach ($catalog as $id => $item) {
                    echo get_item_html($id,$item);
                }
            ?>
        </ul>
    </div>
</div>

<?php include("inc/footer.php"); ?>