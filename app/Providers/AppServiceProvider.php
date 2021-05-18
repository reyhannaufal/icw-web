<?php

namespace App\Providers;

use App\Models\Messages;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Event;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!Collection::hasMacro('paginate')) {

            Collection::macro('paginate',
                function ($perPage = 15, $page = null, $options = []) {
                    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
                    return (new LengthAwarePaginator(
                        $this->forPage($page, $perPage), $this->count(), $perPage, $page, $options))
                        ->withPath('');
                });
        }

        View::composer('layouts.guest', function ($view) {
            $view->with('events', Event::all());
        });

        View::composer('navigation-menu', function ($view) {
            $curr_event = Event::where('id', auth()->user()->id)->first();

            if (isset($curr_event) && $curr_event->name == 'Paper Competition') {
                $view = $view
                    ->with('event', $curr_event)
                    ->with('messages_count', null)
                    ->with('ungraded_paper_count', $curr_event
                        ->usersWithPaper()
                        ->where('paper_grade', '0.00')
                        ->count());
            } else {
                $view = $view
                    ->with('event', $curr_event)
                    ->with('messages_count', Messages::where('status', '!=', 'Sudah diproses')
                        ->count())
                    ->with('ungraded_paper_count', null);
            }
            return $view;
        });

        Validator::extend('gdrive', function ($attribute, $value, $parameters, $validator) {
            return str_contains($value,'https://drive.google.com);
        });
    }
}
