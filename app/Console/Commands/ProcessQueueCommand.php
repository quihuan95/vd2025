<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ProcessQueueCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'queue:process-now';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process all pending jobs in the queue immediately';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Processing all pending jobs...');
        
        // Process all jobs in the queue
        $this->call('queue:work', [
            '--once' => false,
            '--timeout' => 300,
            '--tries' => 3,
        ]);
        
        $this->info('Queue processing completed!');
    }
}
