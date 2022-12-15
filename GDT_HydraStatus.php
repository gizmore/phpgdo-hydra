<?php
namespace GDO\Hydra;

use GDO\Core\GDT_Enum;

/**
 * Service status indicator enum.
 * 
 * @author gizmore
 */
final class GDT_HydraStatus extends GDT_Enum
{
	
	const FRESH = 'fresh';
	const FINE = 'fine';
	const SLOW = 'slow';
	const MAINTENANCE = 'maintenance';
	const DOWN = 'down';
	
	protected function __construct()
	{
		parent::__construct();
		$this->enumValues(self::FRESH, self::FINE, self::SLOW, self::MAINTENANCE, self::DOWN);
		$this->initial(self::FRESH);
		$this->notNull();
		$this->icon('info');
	}
	
}
