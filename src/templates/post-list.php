<?php
  require_once __DIR__ . '/../data.php'
?>

<div class="row">
  <?php foreach($postList as $post) :?>
  <div class="col-md-3">
    <div class="card">
      <a href="/single-post.php">
        <img src="<?php echo $post['image']; ?>" alt="">
      </a>
      <div class="card-body">
        <a href="/single-post.php">
          <h2>
            <?php echo $post['title']; ?>
          </h2>
        </a>
        <p>
          <?php echo $post['content']; ?>
        </p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>