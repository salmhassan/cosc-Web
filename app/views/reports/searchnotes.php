<?php require_once '../templates/header.php' ?>
</br></br></br>
<div class="container">
<a href="/reports/students">Back</a>
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1> <?php echo "Notes Created from ".$_POST['from']. " to ".$_POST['to']; ?></h1>
            </div>
        </div>
    </div>
	
<?php

	require_once '../../controllers/reports.php';
	$_index = new Reports(); 
$result = $_index->getCertainNotes($_POST['from'],$_POST['to']);
	echo "<table class='table'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th>Subject</th>";
        echo "<th>Created Date</th>";
		echo "<th>UserName</th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
	foreach($result as $row)
	{
		echo "<tr>";
		echo "<td> {$row['subject']} </td>";
		echo "<td> {$row['createdDate']} </td>";
		echo "<td> {$row['username']} </td>";
		echo "</tr>";
		
	}

    echo "</tbody>";
    echo "</table>";	
	
    ?>

    <?php require_once '../templates/footer.php' ?>
