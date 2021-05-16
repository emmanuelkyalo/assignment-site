<?php
use App\Notification;
function logNotification($assignment_id,$description,$url,$target){
    $notification = new Notification();
    $notification->assignment_id = $assignment_id;
    $notification->description = $description.' at '.date(DATE_RFC822);
    $notification->url = $url;
    $notification->target = $target;
    $notification->save();
}
