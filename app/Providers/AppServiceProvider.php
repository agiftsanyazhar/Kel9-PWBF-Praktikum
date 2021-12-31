<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin', function(User $user){                 //Admin => administrator
            return $user->role === 'Admin';
        });

        Gate::define('pengurus', function(User $user){              //Pengurus
            return $user->role === 'Pengurus';
        });

        Gate::define('adminpengurus', function(User $user){         //Admin+Pengurus
            return $user->role !== 'Santri';
        });

        Gate::define('santri', function(User $user){
            return $user->role === 'Santri';
        });
    }
}
