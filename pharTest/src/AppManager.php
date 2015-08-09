<?php
/**
 * Description of AppManager
 *
 * @author Jan-David Siegl <jan@siegl-netz.de>
 */

class AppManager {

    /**
     * Example Function shows the given Parameter
     * 
     * @param type $config
     */
    public static function run($config) {
        echo "Following Configuration is uses: ";
        var_export($config);
    }

}
