<?php namespace Anomaly\FilesModule\File;

use Illuminate\Support\ServiceProvider;

/**
 * Class FileServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\FilesModule\File
 */
class FileServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Anomaly\FilesModule\File\FileModel',
            'Anomaly\FilesModule\File\FileModel'
        );
        $this->app->bind(
            'Anomaly\FilesModule\File\Contract\FileRepositoryInterface',
            'Anomaly\FilesModule\File\FileRepository'
        );

        $this->app->register('Anomaly\FilesModule\File\FileRouteProvider');
    }
}
