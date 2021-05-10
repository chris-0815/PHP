<?php include("./database.php");?>
<?php include("elements/header.php");?>

<h1>Startseite des Blogs</h1>
<p class="lead">Das hier ist die Startseite des Blogs.</p>

<?php
    $res = fetch_posts();
?>

<ul>
    <?php foreach ($res as $row): ?>
    <li>
        <a href="post.php?id=<?php echo $row["id"]; ?>">
            <?php echo $row["title"]; ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>

<?php include("elements/footer.php");?>