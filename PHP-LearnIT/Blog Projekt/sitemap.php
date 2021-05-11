<?php include("./init.php");?>
<?php include("elements/header.php");?>

<h1>Übersicht des Blogs</h1>
<p class="lead">Das hier ist die Übersicht des Blogs.</p>

<?php
    $res = fetchPosts();
?>

<ul>
    <?php foreach ($res as $row): ?>
    <li>
        <?php echo $row["title"]; ?>
    </li>
    <?php endforeach; ?>
</ul>

<?php include("elements/footer.php");?>