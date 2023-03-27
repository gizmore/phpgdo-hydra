<?php
namespace GDO\Hydra\Method;

use GDO\Admin\MethodAdmin;
use GDO\Core\GDT;
use GDO\Core\GDT_Response;
use GDO\Core\Method;
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

	public function execute(): GDT
	{
		return GDT_Response::make();
	}

}
