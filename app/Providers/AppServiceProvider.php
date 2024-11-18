<?php

namespace App\Providers;

use App\Constract\Interfaces\AboutInterface;
use App\Constract\Interfaces\BannerInterface;
use App\Constract\Interfaces\CategoryInterface;
use App\Constract\Interfaces\UserInterface;
use App\Constract\Repositories\AboutRepository;
use App\Constract\Repositories\BannerRepository;
use App\Constract\Repositories\CategoryRepository;
use App\Constract\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        AboutInterface::class => AboutRepository::class,
        BannerInterface::class => BannerRepository::class,
        UserInterface::class => UserRepository::class,
        CategoryInterface::class => CategoryRepository::class

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
