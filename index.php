<?php
require_once("/var/www/html/api/vendor/autoload.php");

class MyTestIndex extends \CafeLatte\Core\BaseRoute implements \CafeLatte\Interfaces\RouterInterface
{
    public function routing()
    {
        //Write your php code here(GET/POST/DELETE/PUT)
        echo "Hello CL PHP World";
    }

}

$framework = new MyTestIndex("/var/www/html/api/cafelatte.json");
$framework->execute();