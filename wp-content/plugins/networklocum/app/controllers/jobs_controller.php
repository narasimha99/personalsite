<?php
class JobsController extends MvcPublicController {

 	public function index() {
		$this->set('mylayout', 'client');	
  	}

	public function  publicjobcreate(){

		global $wpdb;
 		$this->set('mylayout', 'client');

		$this->load_model('Job');
   		//echo "<pre>"; print_r($_POST); echo "</pre>";
	 
		echo "<pre>"; print_r($_POST); echo "</pre>";
		if(isset($_POST['session_date']) ){
			$session_date_count_primary = count($_POST['session_date']);
			$session_starttime_secondry = count($_POST['session_starttime']);
			for($x=1;$x<=$session_date_count_primary; $x++ ){
			for($y=1; $y<=count($_POST['session_starttime'][$x]); $y++){
		
 			//int mktime ( [int $hour ] [, int $minute ] [, int $second ] [, int $month ] [, int $day ] [, int $year ] [, int $is_dst ] )
			$session_date =	$_POST['session_date'][$x];
			$session_date_array = explode('-',$session_date);
			//print_r($session_date);
			$start_Hours_minutes = explode(':',$_POST['session_starttime'][$x][$y]);
			$end_Hours_minutes = explode(':',$_POST['session_endtime'][$x][$y]);


			//$session_starttime = mktime($start_Hours_minutes[0],$start_Hours_minutes[1],0,$session_date_array[1],$session_date_array[2],$session_date_array[0]);
 			
			$session_starttime = new DateTime('2012-12-06');
			$session_starttime->setDate($session_date_array[0], $session_date_array[1], $session_date_array[2]);
			$session_starttime->setTime($start_Hours_minutes[1],$start_Hours_minutes[0]);
			echo $session_starttime>format('d-m-Y');
			$session_endtime = new DateTime();
			$session_endtime->setDate($session_date_array[0], $session_date_array[1], $session_date_array[2]);
			$session_endtime->setTime($end_Hours_minutes[1],$end_Hours_minutes[0]);

	

			//$session_endtime = mktime($end_Hours_minutes[0],$end_Hours_minutes[1],0,$session_date_array[1],$session_date_array[2],$session_date_array[0]);
		
			echo $timediff  = $session_starttime->diff($session_endtime);
			echo "<br>";
			echo $seconds = $timediff/1000;
			echo "<br>";
 
	$mil = $session_endtime;
	echo date("m-d-Y H:i:s.u", $mil/1000);
	echo "dust".$seconds = $mil / 1000;

		echo $session_starttime->diff($session_endtime);



$time =  $timediff / 1000;

$days = floor($time / (24*60*60));
$hours = floor(($time - ($days*24*60*60)) / (60*60));
$minutes = floor(($time - ($days*24*60*60)-($hours*60*60)) / 60);
$seconds = ($time - ($days*24*60*60) - ($hours*60*60) - ($minutes*60)) % 60;

echo'Time Played: '.$days.' days '.$hours.' hours '.$minutes.' minutes '.$seconds.' seconds';

			
			$session_starttime =  date('c', $session_starttime);
 
 			$session_endtime =  date('c', $session_endtime);
			
			$hourlyrate = $_POST['hourlyrate'][$x][$y];




			$paytolocums =  $hourlyrate * $timediff;
			$medbidfee  = ($paytolocums * 15)/100;
			
		  echo	$sql_jobsessions = "INSERT INTO wp_jobsessions ( `job_id`, `session_date`, `session_starttime`, `session_endtime`,
				 `Hourlyrate`,paytolocums,medbidfee) VALUES ('1', '$session_date', '$session_starttime', '$session_endtime', $hourlyrate,$paytolocums,$medbidfee)";
			$wpdb->query($sql_jobsessions);
			
		
			}
			}

		}


   
 	 	$this->load_model('cgcode');
		$cgcodelist = $this->cgcode->find();
		
		$this->set('cgcodelist',$cgcodelist);

		$this->load_model('itsystem');
		$itsystemlist = $this->itsystem->find();
		$this->set('itsystemlist',$itsystemlist);

		$this->load_model('howdidyouhear');
		$howdidyouhearlist = $this->howdidyouhear->find();
		$this->set('howdidyouhearlist',$howdidyouhearlist);
		
   	}
 
		
	
	public function  settimerates(){

	 	$this->set('mylayout', 'empty');
		//print_r($_GET);
		$dateranges = $_GET['dateranges'];
		$this->set('dateranges',$dateranges);
  	}
}

?>
