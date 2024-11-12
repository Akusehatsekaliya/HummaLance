<?php

namespace App\Providers;

use App\Contracts\Interfaces\AboutInterface;
use App\Contracts\Interfaces\BannerInterface;
use App\Contracts\Repositories\AboutRepository;
use App\Contracts\Repositories\BannerRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        AboutInterface::class => AboutRepository::class,
        BannerInterface::class => BannerRepository::class,

    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->register as $index => $value) {
            $this->app->bind($index, $value);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
