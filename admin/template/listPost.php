<h3>Post list</h3>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Created</th>
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
                        echo "<td><small>" . ($rowPost['created_date'] ? dateFormat($rowPost['created_date']) : 'TBA') . "</small></td>";
                            echo "<td>
                            <a href='?action=editPage&ID={$rowPost['id']}' data-toggle='popover' data-trigger='hover' data-content='Edit'><i class='fa fa-pencil'></i></a></td>";
                            echo "<td><a href='?action=deletePost&ID={$rowPost['id']}' onClick='return confirm(\"Are you sure you want to delete this post?\")'><i class='fa fa-remove'></i></a></td>";
                        echo "</tr>";
                       
                    }
                    
                ?>
</table>