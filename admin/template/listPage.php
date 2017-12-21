<h3>Pages list</h3>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Active?</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
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
                            echo "<td>
                            <a class='btn btn-primary' href='index.php?action=editPage&ID={$row['id']}'><i class='fa fa-pencil'></i> Edit</a></td>";
                            echo "<td><a class='btn btn-danger' href='index.php?action=deletePage&ID={$row['id']}'><i class='fa fa-remove'></i> Delete</a></td>";
                        echo "</tr>";
                       
                    }
                    
                ?>
</table>