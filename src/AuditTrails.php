<?php

namespace Epmnzava\AuditTrails;

use Epmnzava\AuditTrails\Models\AuditTrail;
use Ramsey\Uuid\Type\Integer;

class AuditTrails
{


    public function __construct()
    {
    }

    public function logdata(string $event, string $event_category, array $request, array $response, string $ip, string $fullUrl, string $device, string $comment, $userid = null, $request_id = null, $session_id = null)
    {
        $audit = new AuditTrail;
        $audit->event = $event;
        $audit->event_category = $event_category;
        $audit->request = json_encode($request);
        $audit->response = json_encode($response);
        $audit->ip = $ip;
        $audit->comment = $comment;
        $audit->userid = $userid;
        $audit->fullUrl = $fullUrl;
        $audit->device = $device;
        $audit->request_id = $request_id;
        $audit->session_id = $session_id;
        $audit->save();
    }
}
