<?php 

$catalog = array();
$catalog[101] = "Design Patterns";
$catalog[201] = "Forrest Gump";
$catalog[301] = "Beethoven";
$catalog[102] = "Clean Code";

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

<div class="section catalog page">
    <div class="wrapper">
        <h1><?php echo $pageTitle; ?></h1>
        <ul>
            <?php 
            foreach($catalog as $item){
                echo "<li>".$item."</li>";
            }
            ?>
        </ul>
    </div>
    
</div>

<?php include("includes/footer.php"); ?>