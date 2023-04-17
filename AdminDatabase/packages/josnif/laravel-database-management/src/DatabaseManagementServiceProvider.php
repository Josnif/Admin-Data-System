<?php

namespace Josnif\DatabaseManagement;

use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class DatabaseManagementServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package) : void
    {
        $package->name('laravel-database-management');
    }
}
