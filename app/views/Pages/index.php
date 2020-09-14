<?php require_once APPROOT ."/views/includes/header.php"; ?>
<!-- Main Section -->
<?php echo "Index Page <br/>" ?>
<ul>
<?php foreach($data['posts'] as $post) : ?>
    <li> <?php echo $post->username ?></li>
<?php endforeach; ?>
</ul>



<!-- End Section -->
<?php require_once APPROOT ."/views/includes/footer.php"; ?>