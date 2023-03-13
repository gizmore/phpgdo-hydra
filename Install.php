<?php
namespace GDO\Hydra;

/**
 * Install gizmore's sites as default.
 * 
 * @author gizmore
 * @version 7.0.2
 */
final class Install 
{
	
	public static function onInstall(): void
	{
		foreach (self::$URLS as $name => $url)
		{
			self::installSite($name, $url);
		}
	}
	
	private static array $URLS = [
		'phpgdo' => 'https://phpgdo.com',
		'Hydra' => 'https://hydra.phpgdo.com',
		'Geo2C' => 'https://geo2country.phpgdo.com',
		'Fineprint' => 'https://fineprint.phpgdo.com',
		'KC' => 'https://kassierercard.org',
		'TBS' => 'https://tbs.wechall.net',
		'Dog' => 'https://dog.phpgdo.com',
		'Diary' => 'https://diary.gizmore.org',
	];
	
	private static function installSite(string $name, string $url)
	{
		if (!($site = GDO_Installation::getByName($name)))
		{
			$site = GDO_Installation::blank();
		}
		$site->setVars([
			'hi_name' => $name,
			'hi_url' => $url,
		]);
		$site->save();
	}
	
}
