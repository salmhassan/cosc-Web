<?php require_once '../app/views/templates/header.php'?>
<div class="count">
<div class="row">
  <div class="col-sm-4 col-sm-4">
    <p class ="load"> <?=date("f js,Y"); ?></p>
    <h2>Reminder Page</h2>

</div>

	</div>
	
  </div>
  <div class="row">
    <div class="col-sm-4 col-sm-4">
        <p class ="load"> <?=date("f js,Y"); ?></p>

	
	</div>
	
  </div>
    <?php 
	
	if (empty($data['message']) && !empty($data['values'])) { ?>
        <div class="row">
            <div class="col-sm-4 col-sm-4">
                <p>id:<?= data['values']['id'] ?> </p>
                <p>subject:<?= data['values']['subject'] ?> </p>
                <p>description:<?= data['values']['description'] ?> </p>
                <p><a href="/remind/remove/<?= $items['id'] ?>">Remove</a> |
                    <a href="/remind/<?= $items['id'] ?>">View</a> |
                    <a href="/remind/update/<?= $items['id'] ?>">Update</a>
            </div>
        </div>
        <?php
    } else if(!empty($data['list'])){ ?>
        <table class='table table-striped table-condensed'>
        <tr>
            <th>Subject</th>
            <th>Action</th>
        </tr>
        <?php foreach ($data['list'] as $items){  ?>
            <tr>
                <td><?=$items['subject']?></td>
                <td><a href="/remind/remove/<?=$items['id']?>">Remove</a> |
                    <a href="/remind/<?=$items['id']?>">View</a> |
                    <a href="/remind/update/<?=$items['id']?>">Update</a>
                </td>
            </tr>
	<?php } ?>
        </table>
	<?php }?>
 <div class="row">
 <a href=/home">back to the list</a>
  </div>

<?php require_once '../app/views/templates/header.php'?>