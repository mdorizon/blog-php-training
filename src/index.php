<?php
  require_once __DIR__ . '/components/header.php';
?>

<section>
  <h1>My amazing blog</h1>

  <form action="/actions/create-post.php">
    <input type="text" placeholder="Entrez un titre" name="title">
    <textarea name="content" cols="30" rows="10" placeholder="Entrez un contenu"></textarea>
    <input type="submit" value="Ajouter">
  </form>

  <?php 
    require_once __DIR__ . '/templates/post-list.php'
  ?>
</section>

<?php
  require_once __DIR__ . '/components/footer.php';
?>