<?php
namespace GDO\Hydra\Method;

use GDO\Core\Method;
use GDO\Admin\MethodAdmin;
use GDO\Hydra\MethodHydra;

/**
 * Admin dashboard.
 * 
 * @author gizmore
 */
final class Admin extends Method
{
	
	use MethodAdmin;
	use MethodHydra;
	
	public function execute()
	{
	}
	
}
