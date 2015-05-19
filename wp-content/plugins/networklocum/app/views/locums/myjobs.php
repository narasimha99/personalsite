<?php
 $templtpath= get_template_directory_uri(); 
 $url = esc_url( home_url( '/' ) );
?>
<!--middle start here-->
	
	<div class="midcol">
		<div class="container">
		<div class="row">
		
				<div class="aligncenter">
					<h2 class="text1">Applied Jobs </h2>
					
				</div>
				
				<div class="col-md-12">
					
					<div>
					<div class="container">
    <div class="row">
        <div id="no-more-tables">
            <table class="col-md-12 table-bordered table-striped table-condensed cf">
        		<thead class="cf">
        			<tr>
					<th>Job</th>
        				<th>Practicer details</th>
        				<th>Applied Session details</th>
        			 	<th class="numeric">Hourly rate</th>
        			</tr>
        		</thead>
        		<tbody>
        			 
<?php 

foreach($appliedjoblists as $jobsession){
 
//$jobsessions  = count($job->jobsessions);
?>
					<tr>
        				<td data-title="Code"><?php echo $jobsession->job_id;?></td>
	       				<td data-title="Code"><?php echo $jobsession->practice->firstname.','.$jobsession->practice->lastname;?></td>
        				<td data-title="Company"><?php 
 
 
echo date('D j M Y, H:ma', strtotime($jobsession->session_starttime)).' - '.date('H:ma', strtotime($jobsession->session_endtime));
 
?> </td>

<td data-title="Change" class="numeric">£ <?php echo $jobsession->hourlyrate;?> </td>
        		 
        			</tr>
<?php 
	

	}
?>	
        		</tbody>
        	</table>
        </div>
    </div>

</div>

<center> <?php echo $this->pagination(); ?> </center>	
					</div>
					
					
					
			</div>
		</div>  
	</div>
	</div>
	
	<!--middle end here-->
			