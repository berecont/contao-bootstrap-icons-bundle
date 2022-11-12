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

namespace Berecont\ContaoBootstrapIconsBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Berecont\ContaoBootstrapIconsBundle\ContaoBootstrapIconsBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * @return array
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('Berecont\ContaoBootstrapIconsBundle\BerecontContaoBootstrapIconsBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle']),
        ];
    }
}