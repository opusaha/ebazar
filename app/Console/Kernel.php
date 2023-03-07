<?php

namespace App\Console;

use App\Models\Product;
use App\Models\SpecialDeals;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
{
    $schedule->call(function () {
        SpecialDeals::where('start_time', '<=', now())
            ->where('end_time', '>=', now())
            ->get()
            ->each(function (SpecialDeals $specialDeal) {
                $product = Product::find($specialDeal->product_id);
                $product->special_price = $specialDeal->price;
                $product->save();

                $specialDeal->is_active = true;
                $specialDeal->save();
            });

        SpecialDeals::where('end_time', '<=', now())
            ->get()
            ->each(function (SpecialDeals $specialDeal) {
                $product = Product::find($specialDeal->product_id);
                $product->special_price = null;
                $product->save();

                $specialDeal->delete();
            });
    })->everyMinute();
}

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}


//  * * * * * live server er trminal a paste kora lagbe
// * * * * * cd /path/to/your/laravel/project && php artisan schedule:run >> /dev/null 2>&1

