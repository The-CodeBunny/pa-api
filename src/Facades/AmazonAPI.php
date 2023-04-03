<?php
namespace TheCodeBunny\PaApi\Facades;

use Illuminate\Support\Facades\Facade;

class AmazonAPI extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'TheCodeBunnyPaApi';
	}
}