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

/**
 * AssetBundle for the SVG files of the twbs/bootstrap-icons pkg
 *
 * For the svg icons we usually want a fixed output dir to be able to use
 * the icons e.g. in CSS because a hashed output dirname - which can change
 * at any time - would produce 404 errors.
 *
 * therefor this bundle define a $fixedPublishDir property and set this in
 * self::publish via AssetManager->hashCallback property.
 *
 * per default the SVG files wil always be published to
 * web/assets/bootstrap/icons/
 */
class BoostrapIconsSvg extends AssetBundle
{
    /**
     * for the svg icons we usually want a fixed output dir and not
     * (like for other assesBundles) an hashed dirname.
     *
     * @var string
     */
    public $fixedPublishDir = 'bootstrap/icons';

    public $sourcePath = '@vendor/twbs/bootstrap-icons/icons';

    public $css = [];
    public $js = [];

    public function publish($am)
    {
        if (is_string($this->fixedPublishDir)) {
            $prevCallback = $am->hashCallback;
            $am->hashCallback = function ($path) {
                return $this->fixedPublishDir;
            };
        }
        parent::publish($am);
        $am->hashCallback = $prevCallback;
    }
}
