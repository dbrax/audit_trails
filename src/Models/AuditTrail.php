<?php

/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github:https://github.com/dbrax/audit-trails
 * Email: emmanuel@dsg.co.tz
 * 
 */

namespace Epmnzava\AuditTrails\Models;

use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model
{
    protected $guarded = [];
    protected $table = "audit_trails";
}
