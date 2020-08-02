<?php

declare(strict_types=1);

namespace GralhaoTest\Test\Module;

class TestCollection extends \Gralhao\Collection
{
    public function __construct()
    {
        $this->setHandler(TestController::class)
            ->setPrefix('/test')
            ->post('', 'post');
    }
}
