<?php

declare(strict_types=1);

namespace GralhaoTest\Test;

class TestCaseTest extends \Gralhao\Test\TestCase
{
    public function testReturnAnApplicationInstance(): void
    {
        $this->bootstrap()->setConfig([
            'modules' => []
        ]);
        $this->assertInstanceOf(\Phalcon\Mvc\Micro::class, $this->getApp());
    }
}
