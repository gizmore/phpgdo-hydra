<?php
namespace GDO\Hydra;

use GDO\Core\GDT_Enum;

/**
 * Service status indicator enum.
 *
 * @author gizmore
 */
final class GDT_HydraType extends GDT_Enum
{

	public const PHPGDO = 'phpgdo';

    public const HTTPOK = 'httpok';

    public const CUSTOM = 'custom';

	protected function __construct()
	{
		parent::__construct();
		$this->enumValues(self::PHPGDO, self::HTTPOK. self::CUSTOM);
		$this->initial(self::HTTPOK);
		$this->notNull();
		$this->icon('select');
	}

}
