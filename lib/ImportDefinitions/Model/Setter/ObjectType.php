<?php
/**
 * Import Definitions.
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2016 W-Vision (http://www.w-vision.ch)
 * @license    https://github.com/w-vision/ImportDefinitions/blob/master/gpl-3.0.txt GNU General Public License version 3 (GPLv3)
 */

namespace ImportDefinitions\Model\Setter;

use ImportDefinitions\Model\Mapping;
use Pimcore\File;
use Pimcore\Model\Object\Concrete;
use Pimcore\Tool;

/**
 * Class ObjectType
 * @package ImportDefinitions\Model\Setter
 */
class ObjectType extends AbstractSetter
{
    /**
     * @param Concrete $object
     * @param $value
     * @param Mapping $map
     * @param array $data
     * @return mixed
     */
    public function set(Concrete $object, $value, Mapping $map, $data)
    {
        if($value === Concrete::OBJECT_TYPE_FOLDER) {
            return Concrete::OBJECT_TYPE_FOLDER;
        }
        else if($value === Concrete::OBJECT_TYPE_VARIANT) {
            return Concrete::OBJECT_TYPE_VARIANT;
        }

        return Concrete::OBJECT_TYPE_OBJECT;
    }
}
