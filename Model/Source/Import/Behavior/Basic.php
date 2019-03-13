<?php
/**
 * @package     Magento Tutorials
 * @author      Jaya Chandra, Codilar Technologies
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        http://www.codilar.com/
 */

namespace Codilar\Import\Model\Source\Import\Behavior;


class Basic extends \Magento\ImportExport\Model\Source\Import\AbstractBehavior
{

    /**
     * Get array of possible values
     *
     * @return array
     */
    public function toArray()
    {
        return [
            \Magento\ImportExport\Model\Import::BEHAVIOR_APPEND => __('Add'),
            \Magento\ImportExport\Model\Import::BEHAVIOR_REPLACE => __('Replace'),
            \Magento\ImportExport\Model\Import::BEHAVIOR_DELETE => __('Delete')
        ];
    }

    /**
     * Get current behaviour group code
     *
     * @return string
     */
    public function getCode()
    {
        return 'demo_import';
    }
}