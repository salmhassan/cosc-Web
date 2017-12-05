<?php require_once '../templates/header.php' ?>

<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
			</br>
			<a href="/home">Back</a>
                <h1>My Logs</h1>
            </div>
        </div>
    </div>
	
	<?php 
	
	require_once '../../controllers/crud.php';
	$_index = new crud();
	$result = $_index -> mylogs();
	echo "<table class='table'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th>Attempt</th>";
        echo "<th>Attempt Time</th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
	foreach($result as $row)
	{
		echo "<tr>";
		echo "<td> {$row['state']} </td>";
		echo "<td> {$row['activityTime']} </td>";
		echo "</tr>";
	}

    echo "</tbody>";
    echo "</table>";
    ?>

    <?php require_once '../templates/footer.php' ?>
