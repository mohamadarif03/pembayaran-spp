<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\Interfaces\ClassroomInterface;
use App\Contracts\Repositories\ClassroomRepository;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        ClassroomInterface::class => ClassroomRepository::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->register as $index => $value) $this->app->bind($index, $value);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
