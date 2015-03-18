﻿<?php
$url = esc_url( home_url( '/' )); 
$templtpath= get_template_directory_uri(); 
?>
<script>
jQuery( document ).ready(function() {

	//console.log( "ready!" );
	jQuery("#submit1").click(function () {
		$("#calendarform").submit();
	});

});
</script>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 		<script type="text/javascript" src="<?php echo $templtpath;?>/js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="<?php echo $templtpath;?>/js/jquery-ui-1.11.1.js"></script>
 		<!-- loads mdp -->
		<script type="text/javascript" src="<?php echo $templtpath;?>/jquery-ui.multidatespicker.js"></script>
 		<!-- loads some utilities (not needed for your developments) -->
		<link rel="stylesheet" type="text/css" href="<?php echo $templtpath;?>/css/mdp.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $templtpath;?>/css/prettify.css">
 		<script type="text/javascript" src="<?php echo $templtpath;?>/js/prettify.js"></script>
		<script type="text/javascript" src="<?php echo $templtpath;?>/js/lang-css.js"></script>
		<script type="text/javascript">
		$(function() {
			prettyPrint();
		});
		</script>
 
<!--middle start here-->
	
	<div class="midcol">
		<div class="container">
		<div class="row">
		
				<div class="aligncenter">
					<h2 class="text1">Find locums in 3 simple steps</h2>
					<p>Completely <b>free</b> to post! Takes just <b>3 minutes!</b> Collect applications just as fast!</p>
					<br>
				</div>
				<form id="Form" name="" id="calendarform" action="<?php echo $url;?>jobs/publicjobcreate" method="POST">
				<div class="col-md-8 col-md-offset-2 ">
 					<div class="bitbox1">
						<div class="aligncenter">
							<h2><i class="fa fa-calendar seticon"></i>Select dates</h2>
							<h3>It only takes 3 minutes to post a job.</h3>
							<p>Select dates by clicking on the calendar.</p>
						</div>
						<div class="panel panel-default calendar">
 						<!-- its my code -->
						<div id="datecalenderdiv">		
						 <input type="hidden" id="session_date_range" name="session_date_range"  size="200"/>
						<div  id="datepickerdiv" class="demo"> 
						<script>
						 $('#datepickerdiv').multiDatesPicker({dateFormat: "yy-m-d",altField: '#session_date_range'});
						 </script>
				 	 	</div>
 						</div>
						<!-- its my code end here -->
						</div>
 
						<div align="center">
							<button class="btn btn-info sbtn" id="submit1">Save and Continue</button>
						</div>
					</div>
					</form>
					<div class="bitbox1">
						<div class="aligncenter">
							<h2><i class="fa fa-clock-o seticon"></i>Set times and rates</h2>
							<h3>We are not an agency - <b>set your own rates!</b></h3>
							<p>Select dates you need cover for above</p>
						</div>
						
						<!-- its my code end here -->
						<div id="settimerates">	</div>
						
						<!-- its my code end here -->					

					</div>

<div class="bitbox1">
		<div class="col-md-12 col-sm-12">
			<div class="nl-payment-sys" style="display: block;">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="nl-payment-sys-explnd col-md-12">
							<h5 class="nl-payment-explnd-title">How does Networklocum help you save time and money?</h5>
							<p>At Networklocum, we believe into fair pay and transparency!</p>
							<p>This is how we save you money:</p>
							<ul>
								<li>50% cheaper than locum agencies</li>
								<li>You set your own rates</li>
								<li>Huge VAT savings</li>
								<li><a href="/costs/">Find our more about the benefits of working with Networklocum.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="total-cost-summary col-md-12">
							<div class="row">
								<div class="col-md-12">
									<h5 class="total-cost-summary-title">Cost breakdown</h5>
								</div>
	 						</div>
	 						<div class="row">
								<div class="col-md-12"><hr></div>
							</div>
							<div class="row">
								<div class="col-md-8 col-sm-8">
									<p class="form-pay-locum">Pay to locum</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<p>£ <span class="locum-total-pay" id="grandtotallocumpay">0</span></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 col-sm-8">
									<p class="form-pay-nl">Networklocum fees <span class="details-txt">(15% of locum fees)</span></p>
								</div>
								<div class="col-md-4 col-sm-4">
									<p>£ <span class="nl-total-fee" id="grandmedbidfee">0</span></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 col-sm-8">
									<p class="form-practice-saving" >Estimated saving (inc. VAT)</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<p class="form-practice-saving">£ <span class="pm-total-save" id="estimatedsavingvat" >0</span></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 col-sm-8">
									<p class="form-pay-nl">VAT <span class="details-txt">(only on Network Locum fees)</span></p>
								</div>
								<div class="col-md-4">
									<p>£ <span class="nl-total-vat" id="vatonmedbidfee" >0</span></p>
								</div>
							</div>
							<div class="row">
 								<div class="col-md-12"><hr></div>
 							</div>
							<div class="row">
								<div class="col-md-8">
									<p class="total-cost" >TOTAL COST</p>
								</div>
								<div class="col-md-4">
									<p class="total-cost">£ <span class="pm-total-pay" id="pmtotalcost">0</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				 
					 <div align="center">
							<button class="btn btn-info sbtn" id="submit2">Save and Continue</button>
					</div>



				</div>
			</div>
		</div>
	</div>

					
					<div class="bitbox1">
						<div class="aligncenter">
							<h2><i class="fa fa-list seticon"></i>Tell us about the job</h2>
							<h3>Collect applications <b>in minutes</b></h3>
							<p>Provide detailed job description to increase the number of applications for the job.</p>
						</div>
						
					  <div class="form-group">
						  <label for="password" class="control-label">One job or multiple sessions</label><br>
						  <input type="radio" name="sex" value="male" checked> Post as one job <input style="margin-left:20px;" type="radio" name="sex" value="female"> Post as individual sessions
						  <span class="help-block"></span>
					  </div>
					  <div class="bitbox1" style="background:#D9F3FC;">
						<h3>One locum or multiple locums?</h3>
						<ul style="margin-left:20px; margin-top:10px;">
							<li>Post your jobs as individual sessions so that multiple GPs can apply. This will massively increase your chance filling the session.</li>
							<li>If looking for one GP continuity of care, you can post for one locum with an understanding that fewer people will be available.</li>
						</ul>
					  </div>
					  <div class="form-group">
						  <label for="password" class="control-label">Required IT systems</label>
						  <select id="id_ccg" name="ccg" class="form-control ff1">
							<option value=""> Select</option>
							<option value=""> Select</option>
						 </select>
						 
						  <span class="help-block"></span>
					  </div>
					  <div class="form-group">
						  <label for="username" class="control-label">Parking facilities</label>
						  <select id="id_ccg" name="ccg" class="form-control ff1">
							<option value=""> Select</option>
							<option value=""> Select</option>
						 </select>
						  <span class="help-block"></span>
					  </div>
					  <div class="form-group">
						  <label for="username" class="control-label">Additional information</label>
						  <textarea class="form-control ff1" id="" name="" rows="5" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a"></textarea>
						  <span class="help-block"></span>
					  </div>
					  <div align="center">
							<button class="btn btn-info sbtn" id="submit3">Save and Continue</button>
						</div>
					  
				  </form>
					</div>
					
					<div class="bitbox1">
						<div class="aligncenter">
							<h2><i class="fa fa-list seticon"></i>Tell us about your practice</h2>
							<h3><b>Save up to 50%</b> with Medbid.</h3>
						</div>
						<form id="Form" method="POST">
					  <div class="form-group">
						  <label for="password" class="control-label">Practice code</label><br>
						  <input type="text" class="form-control ff1" id="" name="username" value="" required="" title="" placeholder="Practice code">
						  <span class="help-block"></span>
					  </div>
					  <div class="form-group">
						  <label for="password" class="control-label">Practice name</label><br>
						  <input type="text" class="form-control ff1" id="" name="username" value="" required="" title="" placeholder="Practice name">
						  <span class="help-block"></span>
					  </div>
					  <div class="form-group">
						  <label for="password" class="control-label">First name</label><br>
						  <input type="text" class="form-control ff1" id="" name="username" value="" required="" title="" placeholder="First name">
						  <span class="help-block"></span>
					  </div>
					  <div class="form-group">
						  <label for="password" class="control-label">Last name</label><br>
						  <input type="text" class="form-control ff1" id="" name="username" value="" required="" title="" placeholder="Last name">
						  <span class="help-block"></span>
					  </div>
					  <div class="form-group">
						  <label for="password" class="control-label">Email</label><br>
						  <input type="text" class="form-control ff1" id="" name="username" value="" required="" title="" placeholder="me@example.com">
						  <span class="help-block"></span>
					  </div>
					  <div class="form-group">
						  <label for="password" class="control-label">Phone number</label><br>
						  <input type="text" class="form-control ff1" id="" name="username" value="" required="" title="" placeholder="XXXXXXXXXXX">
						  <span class="help-block"></span>
					  </div>
					  
					 
					 
					  
				  </form>
					</div>
					
					<p style="text-align:center;">I agree with the <a href="#" target="_blank">Terms and Conditions</a>  and <a href="#" target="_blank">Privacy Policy</a>  of Medbid</a></p>
					
					<br>
					 <div align="center">
							<button class="btn btn-info sbtn" id="submit5" >Post Job</button>
						</div>
					
					
			</div>
		</div>  
	</div>
	</div>
	
	<!--middle end here-->
	
 
