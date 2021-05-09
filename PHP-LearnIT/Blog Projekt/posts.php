<?php include("./database.php");?>
<?php include("elements/header.php");?>

<h1>Post.php</h1>
<p class="lead">Du befindest dich jetzt auf der posts.php Seite.</p>

<?php
$title = $_GET['title'];
$post = fetch_post($title);
var_dump($post->fetch());
?>

<pre><?php var_dump($_GET); ?></pre>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $post["title"]; ?></h3>
    </div>
    <div class="panel-body">
        <?php echo $post["content"]; ?>
    </div>
</div>

<?php include("elements/footer.php");?>
