<?php
require "head.php";
?>

<br><br>

<div class="container">
	<h3 class="text-center"><br>View Tables<br></h3>

	<?php
	if(isset($_SESSION['user_id']))
	{
		if(isset($_GET['delete']))
		{
			if($_GET['delete'] == "error")
			{
				 echo '<h5 class="bg-danger text-center">Error!</h5>';
			}
			if($_GET['delete'] == "success")
			{
				echo '<h5 class="bg-success text-center">Successfully Deleted!</h5>';
			}
		}
		require 'connection/view.tables.con.php'; 
	}
	else
	{
		echo '	<p class="text-center"><br>You are have no permission<br><br></p>';  
	}

	 ?>
</div>
<br><br>

<?php
require "footer.php";
?>