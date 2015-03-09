<?php namespace Mrk\Bc\Console\Commands;

use Illuminate\Console\Command;
use Mrk\Bc\Syncs\Order;

class SyncOrders extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'bc:sync-orders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Syncs orders using remote log.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $syncRepo = new Order;

        $syncRepo->sinceRemoteLog();
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
        ];
    }
}
