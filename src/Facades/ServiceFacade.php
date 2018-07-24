<?php
	namespace Divinityfound\ServicesApi\Facades;

	use Illuminate\Support\Facades\Facade;

	class ServiceFacade extends Facade
	{
	    /**
	     * Get the registered name of the component.
	     *
	     * @return string
	     */
	    protected static function getFacadeAccessor() { return 'MathisonApi'; }
	}

?>