<?php

namespace Godruoyi\LaravelTablerUi;

use Laravel\Ui\UiCommand;
use Laravel\Ui\Presets\Bootstrap;
use Laravel\Ui\AuthCommand as LaravelAuthCommand;

class Tabler
{
    /**
     * The Table display name.
     */
    const TABLER = 'tabler';

    /**
     * The version.
     */
    const VERSION = '0.0.1';

    /**
     * Default theme for dashbarod.
     *
     * @var string
     */
    protected static $theme = '';

    /**
     * Specified a default theme.
     *
     * @param  string $theme
     *
     * @return void
     */
    public static function useTheme(string $theme)
    {
        self::$theme = $theme;
    }

    /**
     * Expand laravel uicommand and authcommand macro.
     *
     * @return void
     */
    public static function expandCommandMacro()
    {
        UiCommand::macro(self::TABLER, self::uiCommandExpand());
    }

    /**
     * Laravel UiCommand macro expand.
     *
     * @return callable
     */
    protected static function uiCommandExpand()
    {
        return function ($command) {
            return $command instanceof UiCommand ? static::presetInstall($command)
                : static::viewInstall($command);
        };
    }

    /**
     * Scaffold basic login and registration views and routes.
     *
     * @param  LaravelAuthCommand $command
     *
     * @return mixed
     */
    protected static function viewInstall(LaravelAuthCommand $command)
    {
        $command->call('tabler:auth', [
            '--views' => $command->option('views'),
            '--force' => $command->option('force'),
        ]);
    }

    /**
     * Install tabler Preset.
     *
     * @param  UiCommand $command
     *
     * @return void
     */
    protected static function presetInstall(UiCommand $command)
    {
        Bootstrap::install();
        TablerPreset::install();

        $command->info('Tabler scaffolding installed successfully.');
        $command->comment('Please run "npm install && npm run dev" or "yarn install && yarn run dev" to compile your fresh scaffolding.');

        if ($command->option('auth')) {
            $command->call('tabler:auth');
        }
    }
}
