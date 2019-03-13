<?php
/**
 * @package     CMH
 * @author      Codilar Technologies
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        http://www.codilar.com/
 */

namespace Codilar\Import\Model\Import;


interface RowValidatorInterface extends \Magento\Framework\Validator\ValidatorInterface
{
    const ERROR_INVALID_TITLE= 'InvalidValueTITLE';
    const ERROR_TITLE_IS_EMPTY = 'EmptyTITLE';

    /**
     * @param $context
     * @return
     */
    public function init($context);
}