<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SpecialDeals;

class ExpireSpecialDeals extends Command
{

    protected $signature = 'special-deals:expire';


    protected $description = 'Command description';

    public function handle()
    {
        $expiredDeals = SpecialDeals::where('end_time', '<=', now())->where('is_active', true)->get();

        foreach ($expiredDeals as $deal) {
            $deal->is_active = false;
            $deal->save();
        }

        $this->info('Expired special deals updated.');
    }
}
