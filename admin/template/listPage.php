<h3>Pages list</h3>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Active?</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    include('../functions.php');
                    $query = "SELECT * FROM page";
                    $result = mysqli_query($db, $query);
                    
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>{$row['id']}</td>";
                            echo "<td>{$row['title']}</td>";
                            echo "<td>";
                                if ($row['is_active']){
                                    echo "Yes";
                                } else {
                                    echo "No";
                                }
                            echo "</td>";
                        echo "<td><small>" . ($row['created_date'] ? dateFormat($row['created_date']) : 'TBA') . "</small></td>";
                        echo "<td><small>" . ($row['updated_date'] ? dateFormat($row['updated_date']) : 'TBA') . "</small></td>";
                        
                            echo "<td>
                            <a href='?action=editPage&ID={$row['id']}' data-toggle='popover' data-trigger='hover' data-content='Edit'><i class='fa fa-pencil'></i></a></td>";
                            echo "<td><a href='?action=deletePage&ID={$row['id']}' onClick='return confirm(\"Are you sure you want to delete this page?\")'><i class='fa fa-remove'></i></a></td>";
                        echo "</tr>";
                       
                    }
                    
                ?>
</table>