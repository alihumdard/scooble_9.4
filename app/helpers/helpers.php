<?php
function table_date($datetime){
    $date = DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z',$datetime);
    return $date->format('M d, Y');
}

function end_url($apiurl){
    return url('/api').'/'.$apiurl;
}
?>