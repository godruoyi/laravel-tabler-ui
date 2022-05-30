<?php

namespace Godruoyi\LaravelTablerUi;

use Laravel\Ui\UiCommand;
use Laravel\Ui\AuthCommand;
use Laravel\Ui\Presets\Bootstrap;
use Laravel\Ui\Presets\Preset as BasePreset;

class TablerPreset extends BasePreset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
        static::updateSass();
        static::updateBootstrapping();
        static::removeNodeModules();
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            '@tabler/core' => '^1.0.0-beta10',
        ] + $packages;
    }

    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function updateSass()
    {
        copy(__DIR__.'/stubs/scss/app.scss', resource_path('sass/app.scss'));
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        copy(__DIR__.'/stubs/js/bootstrap.js', resource_path('js/bootstrap.js'));
    }
}
