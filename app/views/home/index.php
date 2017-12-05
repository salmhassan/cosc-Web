<?php 
require_once '../../init.php';
require_once '../templates/header.php';
?>

<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Hey, <?=$_SESSION['name']?></h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p>  </p>
        </div>
    </div>
	<?php 
	
    echo "<a href='mylogs.php'>My Logs (Previous Attempts)</a>";
	echo "</br>";
    echo "<a href='create.php'>New Note</a>";
	require_once '../../controllers/crud.php';
	$_index = new crud();
	$result = $_index -> index();
	echo "<table class='table'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Subject</th>";
        echo "<th>Description</th>";
		echo "<th>Created Date</th>";
		echo "<th>Actions</th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
	foreach($result as $row)
	{
		echo "<tr>";
		echo "<td> {$row['reminderID']} </td>";
		echo "<td> {$row['subject']} </td>";
		echo "<td> {$row['description']} </td>";
		echo "<td> {$row['createdDate']} </td>";
		echo "<td>";
        echo "<a href='/crud/delete?id={$row['reminderID']}'>Remove</a>";		
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<a href='/home/update?id={$row['reminderID']}&subject={$row['subject']}&description={$row['description']}'>Update</a>";
		echo "</td>";
		echo "</tr>";
	}

    echo "</tbody>";
    echo "</table>";
    ?>

    <?php require_once '../templates/footer.php' ?>
