<?php include("./database.php");?>
<?php include("elements/header.php");?>

<h1>Post.php</h1>
<p class="lead">Du befindest dich jetzt auf der posts.php Seite.</p>

<?php
$id = $_GET['id'];
$post = fetch_post($id);
var_dump($post);
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $post["title"]; ?></h3>
    </div>
    <div class="panel-body">
        <!-- <?php echo str_replace("\n", "<br />", $post["content"]); ?> --><!-- DAS IST EINE OPTION FÜR NEWLINE--> 
        <?php echo nl2br($post["content"]);?>
    </div>
</div>

<?php include("elements/footer.php");?>