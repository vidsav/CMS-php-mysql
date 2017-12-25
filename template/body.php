<?php

$pageId = isset($_GET['page']) ? $_GET['page'] : 1;
$query = "SELECT * FROM page WHERE id = {$pageId}";

$result = mysqli_query($db, $query);

$page = mysqli_fetch_assoc($result);

?>


<!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1><?php echo $page['title']; ?></h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php echo $page['content'] ?>
          <hr>
          <!-- Pager -->
        </div>
      </div>
    </div>

    <hr>