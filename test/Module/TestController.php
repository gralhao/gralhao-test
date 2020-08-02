<?php

declare(strict_types=1);

namespace GralhaoTest\Test\Module;

class TestController extends \Gralhao\Controller
{
    public function post(): void
    {
        $this->send([
            'body'    => $this->request->getRawBody(),
            'headers' => $this->request->getHeaders(),
            'method'  => $this->request->getMethod(),
        ]);
    }
}
