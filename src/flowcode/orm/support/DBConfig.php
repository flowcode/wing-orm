<?php

namespace flowcode\orm\support;

/**
 * Description of EntityManagerConfig
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
class DBConfig {

    protected static $config = array();

    private function __construct() {
        
    }

    public static function set($key, $val) {
        self::$config[$key] = $val;
    }

    public static function get($key) {
        if (isset(self::$config[$key])) {
            return self::$config[$key];
        } else {
            return NULL;
        }
    }

}

?>
