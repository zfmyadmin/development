<?php
/**
 * ZfMyAdmin
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license, that is available
 * at this URL: http://zfmyadmin.com/license
 * If you are unable to obtain the licence, please send an email to:
 * license@zfmyadmin.com
 *
 * @package    ZfMyAdmin
 * @subpackage library/Validate
 * @copyright  Copyright (c) 2012 Oleksii Chkhalo http://zfmyadmin.com
 * @license    http://zfmyadmin.com/license     New BSD License
 * @version    1.0
 * @author     Oleksii Chkhalo <oleksii.chkhalo@zfmyadmin.com>
 */

/**
 * 
 *
 * @package    zfmyadmin
 * @subpackage library/Validate
 */
abstract class Zfmyadmin_Validate_Abstract extends Zend_Validate_Abstract
{
    protected $_translatorDisabled = true;
    
    /**
     * Create translator.
     *
     *
     * @param  string $text
     * @return string
     */
    
    public function translate($text)
    {
        $translate = Zend_Registry::get('Zend_Translate');
        $text = $translate->_($text);
        return $text;
    }
    
    /**
     * Constructs and returns a validation failure message.
     *
     *
     * @param  string $messageKey
     * @param  string $value
     * @return string
     */
    protected function _createMessage($messageKey, $value)
    {

        return $value;
    }
}
