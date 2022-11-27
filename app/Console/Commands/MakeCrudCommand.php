<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;

class MakeCrudCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:crud {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Criação de um CRUD';

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
     * @return Command
     */
    public function handle()
    {
        try {
            $started = Carbon::now();

            $choice = $this->ask('Escolha uma das opções? [web/api] [default:web]', 'web');
            
            $createController = $choice === 'api'
                ? 'php artisan make:controller ' . $this->argument('model') . 'Controller --model=' . $this->argument('model') . ' --api'
                : 'php artisan make:controller ' . $this->argument('model') . 'Controller --model=' . $this->argument('model');

            system('php artisan make:Model ' . $this->argument('model') . ' -m -s');
            system($createController);
            
            system('php artisan make:request Create' . $this->argument('model') . 'Request');
            system('php artisan make:request Update' . $this->argument('model') . 'Request');

            $finished = Carbon::now();

            $this->info('Processo concluído em ' . $finished->diffInSeconds($started) . ' segundos.');

            return Command::SUCCESS;
        } catch (\Exception $e) {
            $this->info('Erro: ' . $e->getMessage());

            return Command::FAILURE;
        }
    }
}