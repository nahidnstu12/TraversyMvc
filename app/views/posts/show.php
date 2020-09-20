<?php require APPROOT . '/views/includes/header.php'; ?>

<a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<br>

<h1><?php echo $data['post']->title; ?></h1>

<div class="bg-secondary text-white p-2 mb-3">
  Written by <?php echo $data['user']->username; ?> on <?php echo $data['post']->created_at; ?>
</div>

<p><?php echo $data['post']->body; ?></p>

<div class="d-flex m-2">
<?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
  <hr>
  <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark mr-2">Edit</a>

  <form class="pull-right" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
    <input type="submit" value="Delete" class="btn btn-danger">
  </form>
<?php endif; ?>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>