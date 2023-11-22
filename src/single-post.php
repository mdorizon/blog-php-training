<?php
  require_once __DIR__ . '/components/header.php';
  require_once __DIR__ . '/data.php';

  $index = $_GET['index'];
  $post = $postList[$index];
?>

<section class="container">
  <img src="<?php echo $post['image'] ?>" alt="">
  <h1>
    <?php echo $post['title'] ?>
  </h1>
  <p>
    <?php echo $post['content'] ?>
  </p>
</section>


<?php
  require_once __DIR__ . '/components/footer.php';
?>