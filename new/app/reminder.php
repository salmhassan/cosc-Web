<?php
    if(isset($_POST['create'])){
        $sub = $_POST['subject'];
        $desc = $_POST['description'];
        $user = $_SESSION['user'];
        $sql = "insert into notes values(NULL,'$sub','$desc',NULL,0,'$user')";
        mysqli_query($con,$sql);
        header('location:user.php');
    }
?>


<h2>Your Reminders</h2>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <button type="button" name="newReminder" data-toggle="modal" href="#createModal" class="form-control btn btn-danger" >Create Reminder</button>
        </div>
        
        <div class="well">
            <?php require_once 'reminder_display.php'; ?>
        </div>
    </form>

</div>
<!-- Login Modal -->
<div class="modal fade" id="createModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Create Reminder</h4>
            </div>
            <div class="modal-body">
            <form method="post">
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required/>
                </div>
                <div class="form-group">
                    <textarea cols="20" rows="15" class="form-control" name='description' id="desc" placeholder="Decription" required ></textarea>
                </div>
                <button type="submit" name="create" class="btn btn-success">Create</button>
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>