<?php
class Job extends MvcModel {
    var $display_field = 'name';
   //var $includes = array('Jobsession');
  var $has_many = array('Jobsession');
  //var $join_table = array("Jobsession");

 /*   var $has_and_belongs_to_many = array(
		'Jobsession' => array('fields' => array('id', 'session_starttime', 'session_endtime','hourlyrate')
	));
*/
}
?>
