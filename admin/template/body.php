<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php
             if (isset($_GET['action']) && $_GET['action'] != ''){
                 switch($_GET['action']){
                 case 'addPage':
                 include('addPage.php');
                 break;
                 case 'insertPage':
                                   $title = $_POST['title'];
                $content = $_POST['content'];
                $isActive = ($_POST['is_active'] == 1 ? 1 : 'NULL');
                
                $sql = "INSERT INTO page (title, content, is_active) 
                        VALUES ('{$title}', '{$content}', {$isActive})";
                
                $db->query($sql);
                
                echo "<div class='alert alert-success' role='alert'>
  Page successfully added!
</div>";
                 break;
                 case 'deletePage':
                 
                 break;
                 }
             }else{
                 include('listPage.php');
             }
            ?>
        </div>
    </div>
</div>

<hr>