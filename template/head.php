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
              
                 while($row = mysqli_fetch_array($result)){
                                           echo "<li>";
                        echo "<a style='color:#fff;' class='nav-link' href='?page={$row['id']}'>{$row['title']}</a>";
                    echo "<li>"; 
                       
                    }
                    
                ?>

              <a style='color:#fff;' class="nav-link" href="blog.php">Blog</a>

            </ul>
        </div>
    </div>
</nav>