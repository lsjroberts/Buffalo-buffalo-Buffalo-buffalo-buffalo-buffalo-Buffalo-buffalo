<?php namespace Buffalo\buffalo\Buffalo\buffalo\buffalo\Buffalo\buffalo;

/**
 * A buffalo instance of buffalo.
 *
 * @package Buffalo\buffalo\Buffalo\buffalo\buffalo\Buffalo\buffalo;
 * @author  Laurence Roberts <lsjroberts@outlook.com>
 */
class Buffalo {

    public $buffalo = 'buffalo';

    /**
     * Checks if the buffalo's buffalo is buffalo.
     *
     * @return boolean
     */
    public function isBuffalo()
    {
        return 'buffalo' === $this->buffalo;
    }

    /**
     * Get the buffalo's buffalo
     *
     * @return string
     */
    public function buffalo()
    {
        return 'Buffalo buffalo Buffalo buffalo buffalo buffalo Buffalo buffalo';
    }

    public function __toString()
    {
        return $this->buffalo();
    }

}