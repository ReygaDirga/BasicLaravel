<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new blade template';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $view = $this->argument('view');
        $path =$this->viewPath($view);
        $this->createDir($path);
        if(File::exist($path)){
            $this->error('View already exists!');
            return;
        }
        File::put($path, $path);
        $this->info("File {$path} created");
    }

    public function viewPath($view){
        $view = str_replace('.', '/', $view) . '.blade.php';
        $path = resource_path('views/' . $view);
        return $path;
    }

    public function createDir($path){
        $dir = dirname($path);
        if(!file_exists($dir)){
            mkdir($dir, 0755, true);
        }
    }
}
