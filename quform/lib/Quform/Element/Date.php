<?php

/**
 * Quform_Element_Date
 *
 * A Quform date element
 *
 * @package Quform
 * @subpackage Element
 * @copyright Copyright (c) 2009-2012 ThemeCatcher (http://www.themecatcher.net)
 */
class Quform_Element_Date extends Quform_Element
{
    /**
     * The PHP date() format of the date for display
     * @var string
     */
    protected $_dateFormat = 'F j, Y';

    /**
     * Class constructor
     *
     * @param string $name
     * @param string $label
     * @param array $options
     */
    public function __construct($name, $label = '', $options = null)
    {
        parent::__construct($name, $label);

        if (is_array($options)) {
            if (array_key_exists('dateFormat', $options)) {
                $this->setDateFormat($options['dateFormat']);
            }
        }
    }

    /**
     * Sets the PHP date() format of the date for display
     *
     * @param string $format
     * @return Quform_Element_Date
     */
    public function setDateFormat($format)
    {
        $this->_dateFormat = $format;
        return $this;
    }

    /**
     * Get the PHP date() format of the date for display
     *
     * @return string
     */
    public function getDateFormat()
    {
        return $this->_dateFormat;
    }

    /**
     * Get the formatted value
     *
     * The value can be formatted into HTML or plain text, arrays
     * are joined by $separator
     *
     * @param string $format plain or html
     * @param string $separator
     */
    public function getFormattedValue($format = 'plain', $separator = QUFORM_EMAIL_NEWLINE)
    {
        $v = $this->getValue();
        $value = '';

        if (is_array($v) && isset($v['day'], $v['month'], $v['year'])) {
            $value = date($this->getDateFormat(), mktime(0, 0, 0, $v['month'], $v['day'], $v['year']));
        }

        return $value;
    }

    /**
     * Get the fully qualified name of the element
     *
     * @return string
     */
    public function getFullyQualifiedName()
    {
        // This is hacky. The JS needs to find an element with this name
        return $this->getName() . '[month]';
    }
}