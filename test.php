<?php
include 'connection.php';

$date = date('Y-m-d');

if(date('w', strtotime($date)) == 6 || date('w', strtotime($date)) == 0) {
    echo 'Event on a weekend';
} else {
    echo 'Event is on a weekday'; 
}



//date range
function createDateRangeArray($strDateFrom,$strDateTo)
{
    // takes two dates formatted as YYYY-MM-DD and creates an
    // inclusive array of the dates between the from and to dates.

    // could test validity of dates here but I'm already doing
    // that in the main script

    $aryRange=array();

    $iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2),     substr($strDateFrom,8,2),substr($strDateFrom,0,4));
    $iDateTo=mktime(1,0,0,substr($strDateTo,5,2),     substr($strDateTo,8,2),substr($strDateTo,0,4));

    if ($iDateTo>=$iDateFrom)
    {
        array_push($aryRange,date('Y-m-d',$iDateFrom)); // first entry
        while ($iDateFrom<$iDateTo)
        {
            $iDateFrom+=86400; // add 24 hours
            array_push($aryRange,date('Y-m-d',$iDateFrom));
        }
    }
    return $aryRange;
}




$begin = new DateTime( '2012-08-01' );
$end = new DateTime( '2012-08-15' );
$end = $end->modify( '+1 day' ); 

$interval = new DateInterval('P1D');
$daterange = new DatePeriod($begin, $interval ,$end);

foreach($daterange as $date){
   // echo $date->format("Y-m-d") . "<br>";
   $sepdate =$date->format("Y-m-d");
   
    
    $result1 = mysql_query("select SUM(`room1`= '') + SUM(`room2`= '') + SUM(`room3` = '') + SUM(`room4` = '') + SUM(`room5` = '') as total,
        sum(`banglow` = '') as bang FROM resereved where date = '$sepdate'");
     $row1 = mysql_fetch_array($result1);
     
     if (($row1['total']==NULL)&& ($row1['bang']==NULL)) {
         echo $sepdate."- 5 rooms OR Bungalow is Available"."<br>";
         
     }elseif (($row1['bang']==0) && ($row1['total']=5)) {
        echo $sepdate."Bungalow is Reserved"."<br>";
    }  else {
    echo $sepdate."-".$row1['total']."rooms Available"."<br>";    
    }
  
    
}


?>
