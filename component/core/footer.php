 <?php
 error_reporting(0);
include 'configuration/config_connect.php';
        $queryback="SELECT * FROM backset";
		$resultback=mysqli_query($conn,$queryback);
		$rowback=mysqli_fetch_assoc($resultback);
		$footer=$rowback['footer'];


 ?>
 <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0.1.0
                </div>
                <strong>Copyright © 2021 HIKCibitung.</strong> All rights
                reserved. <?php echo $footer;?>
				</div>
            </footer>
