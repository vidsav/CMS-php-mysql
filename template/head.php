<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo(BASE_URL); ?>">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php
                $query = "SELECT * FROM page WHERE is_active IS NOT NULL";
                $result = mysqli_query($db, $query);
                $pages = mysqli_fetch_all($result, MYSQLI_ASSOC);
              
                foreach($pages as $page){
                    echo "<li>";
                        echo "<a class='nav-link' href='?page={$page['id']}'>{$page['title']}</a>";
                    echo "<li>"; 
                }
              ?>

            </ul>
        </div>
    </div>
</nav>