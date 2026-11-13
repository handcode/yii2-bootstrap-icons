<?php

/**
 * @author: Jens Giessmann <jg@handcode.de>
 *
 * @copyright: 2026 - NOW(), Jens Giessmann
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace handcode\bootstrapIcons;

use yii\web\AssetBundle;

class BoostrapIconsFont extends AssetBundle
{
    public $sourcePath = '@vendor/twbs/bootstrap-icons';

    public $css = [
        'font/bootstrap-icons.css',
    ];

    public $publishOptions = [
        'only' => [
            'font/*',
            'font/fonts/*',
        ],
    ];
}
