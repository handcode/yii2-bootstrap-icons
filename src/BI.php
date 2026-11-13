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

use yii\helpers\Html;

class BI extends BaseBI
{
    public static $baseClass = 'bi';

    public static $iconClassPrefix = 'bi-';

    public static $iconTag = 'span';

    /**
     * get the css classes for the given icon type
     * return value is a string (default) or
     * an array if $asArray Param = true
     *
     * @param string $type
     * @param bool   $asArray
     *
     * @return array|false|string
     */
    public static function getIconClasses($type, $asArray = false)
    {
        if (!is_string($type)) {
            return false;
        }
        $classes = [
            static::$baseClass,
            static::$iconClassPrefix . $type,
        ];
        if ($asArray) {
            return $classes;
        }

        return implode(' ', $classes);
    }

    /**
     * create an HTML tag with css classes for the given icon type.
     * if no tag is provided, it will create a self:iconTag
     *
     * $content & $options will be used as params while calling Html::tag()
     *
     * @param string      $type
     * @param null|string $tag
     * @param null|string $content
     * @param null|array  $options
     *
     * @return string
     */
    public static function icon($type, $tag = null, $content = null, $options = null)
    {
        $tag = is_string($tag) ? $tag : self::$iconTag;
        $options = is_array($options) ? $options : [];
        foreach (self::getIconClasses($type, true) as $c) {
            Html::addCssClass($options, $c);
        }

        return Html::tag($tag, $content, $options);
    }

    /**
     * This i just an shortcut for self::icon()
     *
     * @see self::icon()
     *
     * @param string      $type
     * @param null|string $tag
     * @param null|string $content
     * @param null|array  $options
     *
     * @return string
     */
    public static function i($type, $tag = null, $content = null, $options = null)
    {
        return self::icon($type, $tag = null, $content = null, $options = null);
    }
}
