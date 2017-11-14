<?php 
    require_once 'header/private_header.php';
    $id = @$_GET['id'];

    $sql = "select * from notes where id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST['delete'])){
        $sql="update notes set deleted=1 where id=$id";
        mysqli_query($con,$sql);
        header('location:user.php');
    }
    if(isset($_POST['edit'])){
        $desc = $_POST['description'];
        $sql="update notes set description='$desc' where id=$id";
        mysqli_query($con,$sql);
        header('location:user.php');
    }
    
?>
<div class="container">
    <div class="well">
        <form method="post">
            <div class="form-group">
                Subject : <?php echo $row['subject']; ?>
            </div>
            <div class="form-group">
                Date Created : <?php echo $row['date_created']; ?>
            </div>
            <div class="form-group">
                Description : <textarea cols="20" rows="15" name="description" id="form-control"><?php echo $row['description']; ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="edit" class="btn btn-info">Edit</button>
                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                
            </div>

        </form>
    </div>
</div>

<?php 
    require_once 'footer/private_footer.php';
?>