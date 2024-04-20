<?php

use Epmnzava\AuditTrails\AuditTrails;
use Ramsey\Uuid\Type\Integer;



if (!function_exists('log_audit')) {

    function log_audit(string $event, string $event_category, array $request, array $response, string $ip, string $fullUrl, string $device, string $comment,  $userid = null, $createdby = null, $request_id = null, $session_id = null)
    {
        $audit = new AuditTrails;
        $audit->logdata($event, $event_category, $request, $response, $ip, $fullUrl, $device, $comment, $userid, $createdby, $request_id, $session_id);
    }
}



function tojson($value)
{
    return json_encode($value);
}

function to_array($value)
{
    return json_decode($value);
}
