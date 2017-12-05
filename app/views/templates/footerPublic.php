<footer class="footer">    

    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; <?php echo date('Y'); ?>
			&nbsp;&nbsp;&nbsp;
<?php 
		require_once '../../controllers/crud.php';
		$_index = new crud();
		$result = $_index -> getTotalLongAttemptsToday();
		echo "Total Login Attempts Today: ".$result;
	?>
			</p>
        </div>
    </div>
</footer>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
</body>
</html>