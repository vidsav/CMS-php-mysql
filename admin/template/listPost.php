<h3>Blog post list</h3>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    include('../functions.php');
                    $query = "SELECT * FROM post";
                    $result = mysqli_query($db, $query);
                    
                    while($rowPost = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>{$rowPost['id']}</td>";
                            echo "<td>{$rowPost['title']}</td>";  
                            echo "<td>
                            <a href='?action=editPage&ID={$rowPost['id']}' data-toggle='popover' data-trigger='hover' data-content='Edit'><i class='fa fa-pencil'></i></a></td>";
                            echo "<td><a href='?action=deletePage&ID={$rowPost['id']}' onClick='return confirm(\"Are you sure you want to delete this page?\")'><i class='fa fa-remove'></i></a></td>";
                        echo "</tr>";
                       
                    }
                    
                ?>
</table>