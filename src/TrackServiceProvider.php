<?php

namespace Shuklajasmin\Track;

use Illuminate\Support\ServiceProvider;


class TrackServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->AddConfigFiles();
    }


    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->AddConfigFiles();

        $this->mergeConfigFrom(
            $this->getConfigFile(),
            'track'
        );

    }

    public function AddConfigFiles(): void
    {
        $this->mergeConfigFrom($this->getConfigFile(), 'track');

            $this->publishes([
                $this->getConfigFile() => config_path('track.php'),
            ], 'config');
    }

    protected function getConfigFile(): string
    {
        return __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'track.php';
    }


}

?>
