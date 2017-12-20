<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php 
            if (isset($_GET['action']) && $_GET['action'] == 'addPage'){
                include('addPage.php');
            }else if(isset($_GET['action']) && $_GET['action'] == 'insertPage'){
                echo="Success!"
            }else{
                include('listPage.php');
            }
            ?>
        </div>
    </div>
</div>

<hr>