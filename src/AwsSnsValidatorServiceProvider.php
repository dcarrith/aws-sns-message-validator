<?php
namespace Dcarrith\AwsSnsMessageValidator;

use Illuminate\Support\ServiceProvider;

use Aws\Sns\Message;
use Aws\Sns\MessageValidator;

class AwsSnsMessageValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
	return new MessageValidator();	
    }

    /**
     * Register the application services.
     */
    public function register()
    {}
}
