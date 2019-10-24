<?php

namespace App\Providers;
use App\Models\Departement;
use App\Models\Faculty;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['users.fields'], function ($view) {
            $departementItems = Departement::pluck('name','id')->toArray();
            $view->with('departementItems', $departementItems);
        });
        View::composer(['users.fields'], function ($view) {
            $departementItems = Departement::pluck('name','id')->toArray();
            $view->with('departementItems', $departementItems);
        });
        View::composer(['users.fields'], function ($view) {
            $departementItems = Departement::pluck('name','id')->toArray();
            $view->with('departementItems', $departementItems);
        });
        View::composer(['users.fields'], function ($view) {
            $departementItems = Departement::pluck('name','id')->toArray();
            $view->with('departementItems', $departementItems);
        });
        View::composer(['users.fields'], function ($view) {
            $departementItems = Departement::pluck('name','id')->toArray();
            $view->with('departementItems', $departementItems);
        });
        View::composer(['users.fields'], function ($view) {
            $departementItems = Departement::pluck('name','id')->toArray();
            $view->with('departementItems', $departementItems);
        });
        View::composer(['users.fields'], function ($view) {
            $departementItems = Departement::pluck('name','id')->toArray();
            $view->with('departementItems', $departementItems);
        });
        View::composer(['users.fields'], function ($view) {
            $departementItems = Departement::pluck('name','id')->toArray();
            $view->with('departementItems', $departementItems);
        });
        View::composer(['users.fields'], function ($view) {
            $departementItems = Departement::pluck('name','id')->toArray();
            $view->with('departementItems', $departementItems);
        });
        View::composer(['users.fields'], function ($view) {
            $departementItems = Departement::pluck('name','id')->toArray();
            $view->with('departementItems', $departementItems);
        });
        View::composer(['users.fields'], function ($view) {
            $departementItems = Departement::pluck('name','id')->toArray();
            $view->with('departementItems', $departementItems);
        });
        View::composer(['departements.fields'], function ($view) {
            $facultyItems = Faculty::pluck('name','id')->toArray();
            $view->with('facultyItems', $facultyItems);
        });
        //
    }
}