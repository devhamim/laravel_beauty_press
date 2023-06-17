<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BreadcrumbsServiceProvider extends ServiceProvider
{

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    require base_path('routes/backend/breadcrumbs.php');
  }
}
