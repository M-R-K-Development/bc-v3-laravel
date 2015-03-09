<?php

use Illuminate\Database\Migrations\Migration;
use Mrk\Bc\Repositories\RemoteLogRepository;

class OrdersRemoteLogEntry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $repo = new \Mrk\Bc\Repositories\RemoteLogRepository();
        $repo->create([
                'action'         => 'orders',
                'skip'           => 0,
                'lastUpdateDate' => '1900-01-01T00:00:00',

          ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
