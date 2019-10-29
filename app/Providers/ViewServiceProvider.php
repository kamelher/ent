 <?php

namespace App\Providers;
use App\Models\Tictype;
use App\Models\Typeencarement;
use App\Models\Posttype;
use App\Models\User;
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
        View::composer(['ticusages.fields'], function ($view) {
            $tictypeItems = Tictype::pluck('name','id')->toArray();
            $view->with('tictypeItems', $tictypeItems);
        });
        View::composer(['ticusages.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['ticusages.fields'], function ($view) {
            $tictypeItems = Tictype::pluck('name','id')->toArray();
            $view->with('tictypeItems', $tictypeItems);
        });
        View::composer(['ticusages.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['ticusages.fields'], function ($view) {
            $tictypeItems = Tictype::pluck('ticname','id')->toArray();
            $view->with('tictypeItems', $tictypeItems);
        });
        View::composer(['ticusages.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['ticusages.fields'], function ($view) {
            $tictypeItems = Tictype::pluck('ticname','id')->toArray();
            $view->with('tictypeItems', $tictypeItems);
        });
        View::composer(['ticusages.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['ticusages.fields'], function ($view) {
            $tictypeItems = Tictype::pluck('name','id')->toArray();
            $view->with('tictypeItems', $tictypeItems);
        });
        View::composer(['ticusages.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['tictypes.fields'], function ($view) {
            $tictypeItems = Tictype::pluck('name','id')->toArray();
            $view->with('tictypeItems', $tictypeItems);
        });
        View::composer(['tictypes.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['ticusages.fields'], function ($view) {
            $tictypeItems = Tictype::pluck('name','id')->toArray();
            $view->with('tictypeItems', $tictypeItems);
        });
        View::composer(['ticusages.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['tictypes.fields'], function ($view) {
            $tictypeItems = Tictype::pluck('name','id')->toArray();
            $view->with('tictypeItems', $tictypeItems);
        });
        View::composer(['tictypes.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['students.fields'], function ($view) {
            $typeencarementItems = Typeencarement::pluck('name','id')->toArray();
            $view->with('typeencarementItems', $typeencarementItems);
        });
        View::composer(['students.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['students.fields'], function ($view) {
            $typeencarementItems = Typeencarement::pluck('name','id')->toArray();
            $view->with('typeencarementItems', $typeencarementItems);
        });
        View::composer(['students.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['students.fields'], function ($view) {
            $facultyItems = Faculty::pluck('name','id')->toArray();
            $view->with('facultyItems', $facultyItems);
        });
        View::composer(['students.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['students.fields'], function ($view) {
            $facultyItems = Faculty::pluck('name','id')->toArray();
            $view->with('facultyItems', $facultyItems);
        });
        View::composer(['students.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['students.fields'], function ($view) {
            $facultyItems = Faculty::pluck('name','id')->toArray();
            $view->with('facultyItems', $facultyItems);
        });
        View::composer(['students.fields'], function ($view) {
            $facultyItems = Faculty::pluck('name','id')->toArray();
            $view->with('facultyItems', $facultyItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $posttypeItems = Posttype::pluck('postDescription','id')->toArray();
            $view->with('posttypeItems', $posttypeItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $posttypeItems = Posttype::pluck('postDescription','id')->toArray();
            $view->with('posttypeItems', $posttypeItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $posttypeItems = Posttype::pluck('postDescription','id')->toArray();
            $view->with('posttypeItems', $posttypeItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $posttypeItems = Posttype::pluck('postDescription','id')->toArray();
            $view->with('posttypeItems', $posttypeItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $posttypeItems = Posttype::pluck('postDescription','id')->toArray();
            $view->with('posttypeItems', $posttypeItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $posttypeItems = Posttype::pluck('postDescription','id')->toArray();
            $view->with('posttypeItems', $posttypeItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $posttypeItems = Posttype::pluck('postDescription','id')->toArray();
            $view->with('posttypeItems', $posttypeItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $posttypeItems = Posttype::pluck('postDescription','id')->toArray();
            $view->with('posttypeItems', $posttypeItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['administrativetasks.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['researchprojects.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['researchprojects.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['pesearchprojects.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['formations.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['formations.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['formations.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['formations.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['adresses.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['adresses.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['adresses.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['interstings.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['interstings.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['interstings.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['reseachdomains.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['reseach_domains.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['reseach_domains.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
        });
        View::composer(['reseach_domains.fields'], function ($view) {
            $userItems = User::pluck('firstname','id')->toArray();
            $view->with('userItems', $userItems);
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