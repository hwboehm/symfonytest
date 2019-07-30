<?php
// src/Controller/StartController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StartController
{
    /**
     * @Route("/{page}")
     */
    public function page($page = '')
    {

        return new Response(
            '<html><body>Start '.$page.'<pre>
Needed: symfony client; composer; php.

symfony new my_project
cd my_project/
composer require symfony/web-server-bundle --dev

php bin/console server:start localhost:8001

php bin/console server:status

php bin/console server:stop

nice:
 composer require annotations
</pre></body></html>'
        );
    }
}