<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Opcodes\LogViewer\Facades\LogViewer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // LogViewer::auth(function ($request) {
        //     return $request->user() && $request->user()->is_admin === 1;
        // });

        Gate::define('viewLogViewer', function (?User $user) {
            return $user->is_admin === 1;
        });
    }
}
