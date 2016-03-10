<?php 
$pageTitle = "Full Catalog";

$section = null;

if (isset($_GET["cat"])){
    if($_GET["cat"] == "books")
    {
        $pageTitle = "Books";
        $section = "Books";
    }
    else if ($_GET["cat"] == "movies"){
        $pageTitle = "Movies";
        $section = "Movies";
    }
    else if ($_GET["cat"] == "music"){
        $pageTitle = "Music";
        $section = "Music";
    }
}

include("includes/header.php");?>

<div class="section page">
    <h1><?php echo $pageTitle; ?></h1>
</div>

<?php include("includes/footer.php"); ?>