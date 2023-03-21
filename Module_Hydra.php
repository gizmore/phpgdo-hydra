<?php
namespace GDO\Hydra;

use GDO\Core\GDO_Module;

/**
 * Keep track of gdo installations and services.
 * Send alerts on service failures.
 *
 * @version 7.0.1
 * @since 7.0.1
 * @author gizmore
 */
final class Module_Hydra extends GDO_Module
{

	public int $priority = 150;

	public function isSiteModule(): bool
	{
		return true;
	}

	###############
	### Install ###
	###############
	public function onAfterInstall(): void
	{
		Install::onInstall();
	}

	##############
	### Config ###
	##############

	############
	### Init ###
	############
	public function onLoadLanguage(): void
	{
		$this->loadLanguage('lang/hydra');
	}

}
