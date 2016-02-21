<?PHP
$pagetitle='Projects';
require('../config.php');
require('../header.php');
?>
 <div class="row">
 
          <div class="col-lg-12">
           
            <h2 class="text-success">Projects : <?PHP echo count($myprojectsfull); ?></h2>  

			
			<ul class="list-group">
  <?PHP
foreach($myprojectsfull as $project => $project_info) {
	
	?>
  <li class="list-group-item">
<?PHP echo $project; ?> <br>
<?PHP echo $project_info; ?>
  </li>
<?PHP }?>

</ul>
            
			
</div>

		</div>
		
<?PHP
require('../footer.php');
?>


