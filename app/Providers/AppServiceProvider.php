<?php

namespace App\Providers;

use App\Constract\Interfaces\AboutInterface;
use App\Constract\Interfaces\BannerInterface;
use App\Constract\Interfaces\CategoryInterface;
use App\Constract\Interfaces\CompanyInterface;
use App\Constract\Interfaces\ContractInterface;
use App\Constract\Interfaces\DashboardInterface;
use App\Constract\Interfaces\ProjectInterface;
use App\Constract\Interfaces\RegisterInterface;
use App\Constract\Interfaces\UserInterface;
use App\Constract\Repositories\AboutRepository;
use App\Constract\Repositories\BannerRepository;
use App\Constract\Repositories\CategoryRepository;
use App\Constract\Repositories\CompanyRepository;
use App\Constract\Repositories\ContractRepository;
use App\Constract\Repositories\DashboardRepository;
use App\Constract\Repositories\ProjectRepository;
use App\Constract\Repositories\RegisterRepository;
use App\Constract\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        AboutInterface::class => AboutRepository::class,
        BannerInterface::class => BannerRepository::class,
        UserInterface::class => UserRepository::class,
        CategoryInterface::class => CategoryRepository::class,
        DashboardInterface::class => DashboardRepository::class,
        ProjectInterface::class => ProjectRepository::class,
        ContractInterface::class => ContractRepository::class,
        RegisterInterface::class => RegisterRepository::class,
        CompanyInterface::class => CompanyRepository::class
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
