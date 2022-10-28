<?php

/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github:https://github.com/dbrax/audit-trails
 * Email: epmnzava@gmail.com
 * 
 */

namespace Epmnzava\AuditTrails\Models;

use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model
{
    protected $guarded = [];
    protected $table = "audit_trails";
}
