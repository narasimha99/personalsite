<div id="settimerates">
<?php
$daterangeList = explode(",",$dateranges);
?>
<?php 
$i=1;
foreach($daterangeList as $sessiondate) {
?>

<div id="<?php echo 'DIVsessionday'.$i;?>" style="border-style: solid; border-color: 	#00CED1;margin:50px 10px 20px 30px">

<table id="<?php echo 'TABLEsessionday'.$i;?>" style="border:1px solid #DAA520;"  >
		<tr> <td>
	 <input type="text" id="<?php echo 'session_date_'.$i;?>" name="data[Jobsession][session_date][]" value="<?php echo $sessiondate;?>" />  
		<input type='button' name="add" id="<?php echo 'add'.$i;?>" value="add more sessions" onclick="addsession(<?php echo $i;?>);"/>
		<input type='button' name="delete" id="<?php echo 'delete'.$i;?>" value="Delete day" onclick="deletedate(<?php echo $i;?>);"/>
	</td> </tr>

		<tr class='sessiontime' id='times1'> <td>Session 1 Enter session times using 24 hour notation (eg. 10:00, 18:00). <br/>  <span> Time</span> <input type="text" name="session_starttime[]" id="<?php echo 'session_starttime_'.$i.'_1';?>"  placeholder='eg: 09:00'/>	<span>Till</span> <input type="text" name="session_endtime" id="<?php echo 'session_endtime_'.$i.'_1';?>"  placeholder='eg: 17:00'  />  <span>Hourly rate £</span> 
<input type="text" name="Hourlyrate" id="<?php echo 'hourlyrate_'.$i.'_1';?>" myid="<?php echo '_'.$i.'_1';?>"   onblur="gethourlyrate(<?php echo $i;?>,1)"  placeholder='eg: 80.00' /> 

<input type='button' class='deltimesession' name='delete'  class='deltimesession' id="1" value='delete' onclick="$(this).closest('tr').remove();"  /> </td> </tr>
</table>


<div>
	<p> <span> Pay to locum</span>  <span id="paytolocumspan"></span> <input type="text" value="0" name="paytolocums[]" id="<?php echo 'paytolocum_'.$i;?>"/> </p>
	<p> <span> Medbid Locum fees (15% of locum fees)</span> <span id="networklocumfee"></span> 
		<input type="text" value="0" name="medbidfee[]" id="<?php echo 'medbidfee_'.$i;?>"/>  
	</p>
</div>

</div>

<?php
$i= $i + 1;
 } 
?>
</div>
