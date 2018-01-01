<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require('config.php');

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <?php include('template/header.php'); ?>

    </head>

    <body>
        <?php include('template/head.php'); ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <h1>Blog</h1>
                        <hr>
                        <?php
                $query = "SELECT * FROM post";
                $result = mysqli_query($db, $query);
              
                 while($row = mysqli_fetch_array($result)){
                     
                      echo "<div class='post-preview'>";
             echo "<h2 class='post-title'>
                {$row['title']}</h2>";
              echo "<h6 class='post-subtitle'>
                {$row['content']}</h6>";
                echo "<p class='post-meta'>Created {$row['created_date']}</p>";
         echo "</div><hr>";

                    }
                    
                ?>
                            <!-- Pager -->
                    </div>
                </div>
            </div>
            <?php include('template/footer.php'); ?>

    </body>

    </html>