<?php
function table_date($datetime){
    $date = DateTime::createFromFormat('Y-m-d\TH:i:s.u\Z',$datetime);
    if ($date instanceof DateTime) {
        return $date->format('M d, Y');
    } else {
        return 'Invalid datetime';
    }
}

function end_url(){
    return url('/api').'/';
}
?>