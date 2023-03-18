<?php
namespace GDO\Hydra;

use GDO\Core\GDO;
use GDO\Core\GDT_AutoInc;
use GDO\Core\GDT_Name;
use GDO\Net\GDT_Url;
use GDO\Date\GDT_Timestamp;
use GDO\Core\GDT_CreatedAt;
use GDO\Core\GDT_CreatedBy;
use GDO\Core\GDT_DeletedAt;
use GDO\Core\GDT_DeletedBy;
use GDO\Date\GDT_Duration;

/**
 * Database entry for a service installation.
 * 
 * @author gizmore
 */
final class GDO_Installation extends GDO
{
	
	public function gdoColumns(): array
	{
		return [
			GDT_AutoInc::make('hi_id'),
			GDT_Name::make('hi_name'),
			GDT_Url::make('hi_url')->notNull()->reachable(true),
			GDT_Duration::make('hi_interval')->notNull()->initial('30m'),
			GDT_Timestamp::make('hi_last_check'),
			GDT_HydraStatus::make('hi_status'),
			GDT_Timestamp::make('hi_alert_since'),
			GDT_CreatedAt::make('hi_created'),
			GDT_CreatedBy::make('hi_creator'),
			GDT_DeletedAt::make('hi_deleted'),
			GDT_DeletedBy::make('hi_deletor'),
		];
	}

	public static function getByName(string $name): ?self
	{
		return self::getBy('hi_name', $name);
	}
	
}
