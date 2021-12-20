<?php

namespace HuiHo\LaravelDockerize;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish Dockerfile';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $basePath = $this->laravel->basePath('.docker');
        File::copyDirectory(__DIR__ . '/stubs/.docker', $basePath);
        $this->info('published successfully.');
    }
}
