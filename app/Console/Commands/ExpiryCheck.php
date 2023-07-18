<?php

namespace App\Console\Commands;

use App\Models\Drugs;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class ExpiryCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:expiry';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
              foreach (Drugs::all() as $drug) {
                if (Carbon::now() > $drug->expiration_date) {
                     $drug->update(['approval_status' => 'expired']);
                }
            }
            $this->info('Successfully check expiry date.');
    }
}
