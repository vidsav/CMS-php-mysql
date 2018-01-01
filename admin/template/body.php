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

                    $sql = "INSERT INTO page (title, content, is_active, created_date, updated_date) 
                            VALUES ('{$title}', '{$content}', {$isActive}, NOW(), NOW())";

                    $db->query($sql);

                    echo "<div class='alert alert-success' role='alert'>
      Page successfully added!
    </div>";
                 break;
                 case 'addPost':
                 include('addPost.php');
                 break;
                 case 'insertPost':
                 $title = $_POST['title'];
                 $content = $_POST['content'];

                 $sql = "INSERT INTO post (title, content, created_date) 
                            VALUES ('{$title}', '{$content}', NOW())";

                 $db->query($sql);

                 echo "<div class='alert alert-success' role='alert'>
      Post successfully added!
    </div>";
                break;
                 case 'editPage':
                    $sql = "SELECT * FROM page WHERE id = {$_GET['ID']}";
                    $result = mysqli_query($db, $sql);
                    $page = mysqli_fetch_assoc($result);
                    include('editPage.php');
                 break;
                 case 'updatePage':
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $isActive = ($_POST['is_active'] == 1 ? 1 : 'NULL');
                    if (isset($_FILES['image'])) {
                        $fileName = $_FILES['image']['name'];
                        $fileName = str_replace(' ', '', $fileName);
                        $fileTmp = $_FILES['image']['tmp_name'];
                        move_uploaded_file($fileTmp, realpath('') . "/../uploads/" . $fileName);
                    } else {
                        $fileName = 'NULL';
                    }
                         
                    $sql = "UPDATE page SET title = '{$title}', content = '{$content}', is_active = {$isActive}, image = '{$fileName}', updated_date = NOW() WHERE id = {$_GET['ID']}";
                    $db->query($sql);
                    header('Location: '. ADMIN_URL);
                 break;
                 case 'deletePage':
                    $id = $_GET['ID'];
                    $sql = "DELETE FROM page WHERE id= {$id}";
                    $db->query($sql);
                    
                    header('Location: '. ADMIN_URL);
                 break;
                 }
             }else{
                 include('listPage.php');
                 include('listPost.php');
             }
            ?>
        </div>
    </div>
</div>

<hr>