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
 * @subpackage forms
 * @copyright  Copyright (c) 2012 Oleksii Chkhalo http://zfmyadmin.com
 * @license    http://zfmyadmin.com/license     New BSD License
 * @version    1.0
 * @author     Oleksii Chkhalo <oleksii.chkhalo@zfmyadmin.com>
 */

/**
 * Reset password form 
 *
 * @package    zfmyadmin
 * @subpackage forms
 */
class Zfmyadmin_Forms_ChangePassword extends Zfmyadmin_Form
{
    
    /**
     * Init form parametrs and create form elements
     * 
     * @return void
     */
    public function init()
    {     
        
        $this->setAction('');
        $this->setMethod('POST');
        $this->setDecorators(array(
            'FormElements',
            array('HtmlTag', array('tag' => 'div')),
            'Form'
        )); 
        
        
        $element = new Zend_Form_Element_Password('password', array(
            'id'         => 'form-user-password',
            'label'      => $this->translate('New password')
            
        ));
        $element->addValidator(new Zend_Validate_StringLength(array('min'=>6, 'max'=>32)));
        
        $element->setDecorators(array(
                array(array('switcher' => 'HtmlTag'), array('tag' => 'div', 'class'  => 'switcher')),
                'label',
                'ViewHelper',
                'Errors',
                array(array('data' => 'HtmlTag'), array('tag' => 'div', 'class'  => 'element')),

                array(array('row' => 'HtmlTag'), array('tag' => 'div', 'class'  => 'element-container')),
        ));        
        $this->addElement($element); 
        
        $element = new Zend_Form_Element_Password('passwordConfirm', array(
            'id'         => 'form-user-password-confirm',
            'label'      => $this->translate('Confirm password')
            
        ));
        $element->addValidator(new Zend_Validate_StringLength(array('min'=>6, 'max'=>32)));
        $element->setDecorators(array(
                'label',
                'ViewHelper',
                'Errors',
                array(array('data' => 'HtmlTag'), array('tag' => 'div', 'class'  => 'element')),

                array(array('row' => 'HtmlTag'), array('tag' => 'div', 'class'  => 'element-container')),
        ));        
        $this->addElement($element); 

        
        $this->setSubmit();
    }
}
