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
                            echo "<td>{$row['id']}</td>";
                            echo "<td>{$row['id']}</td>";
                        echo "</tr>";
                       
                    }
                    
                ?>
            </table>