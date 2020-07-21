<?php

namespace Godruoyi\LaravelTablerUi;

use Laravel\Ui\AuthCommand as LaravelAuthCommand;

class AuthCommand extends LaravelAuthCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tabler:auth
                    { type=tabler : The preset type (tabler) }
                    {--views : Only scaffold the authentication views}
                    {--force : Overwrite existing views by default}';

    /**
     * Execute the console command.
     *
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function handle()
    {
        $this->ensureDirectoriesExist();
        $this->exportViews();

        if (! $this->option('views')) {
            $this->exportBackend();
        }

        $this->info('Authentication scaffolding generated successfully.');
    }

    /**
     * Export the authentication views.
     *
     * @return void
     */
    protected function exportViews()
    {
        $views = array_merge($this->views, $this->includeViews());

        foreach ($views as $key => $value) {
            if (file_exists($view = $this->getViewPath($value)) && ! $this->option('force')) {
                if (! $this->confirm("The [{$value}] view already exists. Do you want to replace it?")) {
                    continue;
                }
            }

            copy($this->stubsPath($key), $view);
        }
    }

    /**
     * Include layout view.
     *
     * @return array
     */
    protected function includeViews()
    {
        return [
            'layouts/_footer.stub' => 'layouts/_footer.blade.php',
            'layouts/_head.stub' => 'layouts/_head.blade.php',
            'layouts/_header.stub' => 'layouts/_header.blade.php',
            'layouts/base.stub' => 'layouts/base.blade.php',
        ];
    }

    /**
     * Full Path for Tabler stub.
     *
     * @param  string $path
     *
     * @return string
     */
    protected function stubsPath(string $path)
    {
        return __DIR__.'/stubs/views/' . $path;
    }
}
