<?php

declare(strict_types=1);

namespace GralhaoTest\Test;

class RequestTest extends \Gralhao\Test\TestCase
{
    public function setUp(): void
    {
        $this->bootstrap()->setConfig([
            'modules' => [
                'GralhaoTest\Test\Module'
            ]
        ]);
    }

    public function testReturnAValidRequestResponse(): void
    {
        $request = new \Gralhao\Test\Request();
        $request->setMethod('POST')
            ->setPath('/test')
            ->setHeader('key', 'value')
            ->setBody('test');
        $response = $this->dispatch($request);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('test', $response->data->body);
        $this->assertEquals('value', $response->data->headers->key);
    }
}
