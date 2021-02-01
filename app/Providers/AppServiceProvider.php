<?php

namespace App\Providers;

use App\Models\Classroom\Classes;
use App\View\Components\TaskList;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Blade::component('task-list', TaskList::class);
        Blade::include('includes.tasks.upcoming', 'upcoming');
        Blade::include('includes.tasks.today', 'todayList');

        $classesList = Classes::with('instructors')->get();
        // dd($classesList);
        View::share('classes_list', $classesList);
    }
}
