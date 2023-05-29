<?php

namespace App\Controller;

use Exception;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    /**
     * @throws Exception
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html lang="en"><body>Lucky number: '.$number.'</body></html>'
        );
    }
}