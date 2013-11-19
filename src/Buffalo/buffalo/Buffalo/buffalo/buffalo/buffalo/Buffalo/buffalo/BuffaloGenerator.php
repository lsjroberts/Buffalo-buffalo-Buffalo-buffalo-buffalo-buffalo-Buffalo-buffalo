<?php namespace Buffalo\buffalo\Buffalo\buffalo\buffalo\buffalo\Buffalo\buffalo;

/**
 * Buffalo generator for generating buffalos.
 *
 * @package Buffalo\buffalo\Buffalo\buffalo\buffalo\buffalo\Buffalo\buffalo
 * @author  Laurence Roberts <lsjroberts@outlook.com>
 */
class BuffaloGenerator {

    /**
     * Generate buffalos by yielding buffalos.
     *
     * @param  integer $countBuffalos Buffalo count
     * @return Buffalo
     */
    public static function generateBuffalo($countBuffalos = 1)
    {
        for ($buffalo = 0; $buffalo < $countBuffalos; $buffalo++)
        {
            yield new Buffalo;
        }
    }

}