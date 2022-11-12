<?php

declare(strict_types=1);

/*
 * This file is part of Contao Lieferanten.
 *
 * (c) beRnhard renner 2022 <bernhard@werbepanorama.at>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/berecont/contao-bootstrap-icons-bundle
 */

namespace Berecont\ContaoBootstrapIconsBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BerecontContaoBootstrapIconsBundle extends Bundle
{
    
	/**
	 * {@inheritdoc}
	 */
	public function build(ContainerBuilder $container): void
	{
		parent::build($container);
		
	}
}