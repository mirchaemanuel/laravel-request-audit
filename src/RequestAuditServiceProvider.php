<?php

namespace Illegal\RequestAudit;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Illegal\RequestAudit\Commands\RequestAuditCommand;

class RequestAuditServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('request-audit')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_request-audit_table')
            ->hasCommand(RequestAuditCommand::class);
    }
}
