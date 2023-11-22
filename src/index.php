<?php
  require_once __DIR__ . '/components/header.php';
?>

<section>
  <h1>My amazing blog</h1>

  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <a href="/single-post.php">
          <img src="https://source.unsplash.com/random/300x300" alt="">
        </a>
        <div class="card-body">
          <a href="/single-post.php">
            <h2>Amazin Card Title</h2>
          </a>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <img src="https://source.unsplash.com/random/300x300" alt="">
        <div class="card-body">
          <h2>Amazin Card Title</h2>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <img src="https://source.unsplash.com/random/300x300" alt="">
        <div class="card-body">
          <h2>Amazin Card Title</h2>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <img src="https://source.unsplash.com/random/300x300" alt="">
        <div class="card-body">
          <h2>Amazin Card Title</h2>
          <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  require_once __DIR__ . '/components/footer.php';
?>