<?php
/**.
 * This is an example of packeging an php Application for Example purpose
 * 
 * Created under the CCC Licence. 
 * 
 * @author Jan-David Siegl <jan@siegl-netz.de>
 * @since 09.08.2015
 */

function __autoload($name){
    include $name.".php";
}
$config=  parse_ini_file("config.ini");
AppManager::run($config);