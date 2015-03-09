<?php namespace Mrk\Bc\Models;

use Illuminate\Database\Eloquent\Model;

class RemoteLog extends Model
{
    public $table      = 'bc_remote_logs';

    public $fillable   = [
        'action',
        'lastUpdateDate',
        'skip',
    ];

    public static $rules = [
        'lastUpdateDate' => 'required',
        'skip'           => 'required|integer',
    ];
}
