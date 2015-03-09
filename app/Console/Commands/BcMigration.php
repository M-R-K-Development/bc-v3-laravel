<?php namespace App\Console\Commands;

use App;
use Exception;
use Illuminate\Console\Command;

class BcMigration extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'bc:migration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run migrations for mrk/bc workbench.';

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
        $migrations = App::make('migration.repository');
        try {
            $migrations->createRepository();
        } catch (Exception $e) {
        }

        $migrator = App::make('migrator');

        $path = base_path('workbench/mrk/bc/src/migrations');
        $this->info($path);
        $migrator->run($path);
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
