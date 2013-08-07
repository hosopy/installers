<?php
namespace Composer\Installers;

class FuelInstaller extends BaseInstaller
{
    protected $locations = array(
        'core'    => 'fuel/{$name}/',
        'module'  => 'fuel/app/modules/{$name}/',
        'package' => 'fuel/packages/{$name}/',
    );
}
