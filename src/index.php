<?php
  require_once __DIR__ . '/components/header.php';
?>

<section>
  <h1>My amazing blog</h1>

  <?php 
    require_once __DIR__ . '/templates/post-list.php'
  ?>
</section>

<?php
  require_once __DIR__ . '/components/footer.php';
?>