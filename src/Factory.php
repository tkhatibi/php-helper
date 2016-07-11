<?php

namespace tjpx\helper;

/**
 * @link https://github.com/2rajpx/php-easyfield/
 * @license https://github.com/2rajpx/php-easyfield/blob/master/LICENSE
 */
/**
 * Factory Class
 * Used to create form field
 * Field provides concrete implementation for Form Elements
 *
 * @author Tooraj Khatibi <2rajpx@gmail.com>
 * @link https://github.com/2rajpx/
 */
class Factory
{

    /**
     * Returns an instance of the object
     *
     * @param array $config Object properties
     *
     * @return object
     */
    public static function getInstance(array $config = []){
        // If class attribute is unset
        if(!isset($config['class'])){
            throw new \Exception("You have to set class attribute", 1);
        }
        $class = $config['class'];
        unset($config['class']);
        return new $class($config);
    }

}
