<?php
	function active($routeName)
	{
		return request()->routeIs($routeName) ? 'active' : 'inactive';
	}
 ?>