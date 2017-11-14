<table class="table table-hover">
    <thead>
      <tr>
        <th>Task Name<th>
      </tr>
    </thead>
    <tbody>
    <?php
    $user = $_SESSION['user'];
    $sql = "select * from notes where username='$user' and deleted=0";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td><a href='reminder_view.php?id=".$row['id']."'>".$row['subject']."</a></td>";
        }
    }

    ?>
    </tbody>
  </table>