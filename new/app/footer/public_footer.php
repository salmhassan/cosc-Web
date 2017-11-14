<?php
    
    $sql_login = "select login_count from total_logins";
    $result = mysqli_query($con,$sql_login);
    $row = mysqli_fetch_assoc($result);
    $total_logins = $row['login_count'];
?>
<footer>
    <div class="container"><div class="well">Total login : <?php if($total_logins > 0){ 
                                                                    echo $total_logins;
                                                                }else{
                                                                    echo 0;
                                                                }    
                                                            ?></div></div>
</footer>
</body>
</html>