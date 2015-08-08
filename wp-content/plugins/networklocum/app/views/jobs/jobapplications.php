<?php
 $templtpath= get_template_directory_uri(); 
 $url = esc_url( home_url( '/' ) );
?>
<!--middle start here-->
	
	<div class="midcol">
		<div class="container">
		<div class="row">
		
				<div class="aligncenter">
					<h2 class="text1">Job applications</h2>
 				</div>

					 <?php $this->display_flash(); ?>

				<div class="col-md-12">
					
					<div>
					<div class="container">
					    <div class="row">
						

	<?php

	if ( count($appliedjoblists) == 0 ) {
	?>	
	<div class="row">
	<div style="padding:15px; border:1px solid #cdcdcd; background-color:#fafafa;">You have not received any applications... <a href="<?php echo  '#'; ?>">Know about...</a></div>
	</div>	
	<?php			

	}else  {
	?>
						<div id="no-more-tables">
						    <table class="col-md-12 table-bordered table-striped table-condensed cf">
								<thead class="cf">
        			<tr>
					<th>Application id </th>
        				<th>Locum details</th>
        				<th>Applied Session details</th>
        			 	<th>Hourly rate</th>
 					<th>Paperwork</th>
					<th>referrals</th>
					<th>Home Visits</th>
					<th>Bloods</th>
					<th>Pension Included?</th>
 					<th>&nbsp;</th>
        			</tr>
        		</thead>
        		<tbody>
        			 
<?php 


$yenoarray = array('0'=>'No','1'=>'Yes');
 
foreach($appliedjoblists as $jobsession){
 //$jobsessions  = count($job->jobsessions);
?>
					<tr>
        				<td data-title="Code"> <a target="_blank" href="<?php echo $url.'locums/applyedjobdetails/'.$jobsession->id;?>"> <?php echo $jobsession->	id;?></a></td>
	       				<td data-title="Code"><?php echo $jobsession->firstname.','. $jobsession->lastname;?></td>
        				<td data-title="Company"><?php 
 
 
echo date('D j M Y, H:ma', strtotime($jobsession->session_starttime)).' - '.date('H:ma', strtotime($jobsession->session_endtime));

 
?> </td>

<td data-title="Change" class="numeric">£ <?php echo $jobsession->hourlyrate; ?> </td>
<td data-title="Change" class="numeric"> <?php  echo  $yenoarray[$jobsession->paperwork];  ?> </td>
<td data-title="Change" class="numeric"> <?php  echo  $yenoarray[$jobsession->referrals]; ?> </td>
<td data-title="Change" class="numeric"> <?php  echo  $yenoarray[$jobsession->home_visits]; ?> </td>
<td data-title="Change" class="numeric"> <?php  echo  $yenoarray[$jobsession->bloods]; ?> </td>
<td data-title="Change" class="numeric"> <?php  echo  $yenoarray[$jobsession->pension_included]; ?> </td>
<td data-title="Change %" class="numeric">

<?php 
	if( $jobsession->practicer_accepted == 1 && $jobsession->locum_accepted == 0 ) { echo " practicer accepted waiting for locum acceptance";}
?>
<?php  if( $jobsession->practicer_accepted == 0) { ?> 
<a href="<?php echo $url.'practices/acceptyourlocum/'.$jobsession->id.'/?locum_id='.$jobsession->locum_id;?>" class="btn btn-primary aplbtn" title="Accept the locum">Accept</a>
<a href="<?php echo $url.'practices/rejectlocum/'.$jobsession->id.'/?locum_id='.$jobsession->locum_id;?>" class="btn btn-primary aplbtn" title="Reject locum">Reject</a>
<?php 
} 

if( $jobsession->practicer_accepted == 1 && $jobsession->locum_accepted == 1 ) { echo "Job Awarded for this locum";}
?>
</td>

<td>
<?php 
if( $jobsession->practicer_rejected  == 1 ){
	echo "practicer rejected";
}
if( $jobsession->practicer_accepted == 1 && $jobsession->locum_rejected == 1 ) { echo "rejected by locum";}
?>		
</td>        		 
        			</tr>
<?php  
	}
?>	
        		</tbody>
        	</table>

<center> <?php echo $this->pagination(); ?> </center>	
<?php } ?>
        </div>
    </div>

</div>

					</div>
					
					
					
			</div>
		</div>  
	</div>
	</div>
	
	<!--middle end here-->			
