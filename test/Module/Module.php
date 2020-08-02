<?php

declare(strict_types=1);

namespace GralhaoTest\Test\Module;

class Module extends \Gralhao\Module
{
    public function getconfig(): array
    {
        return [
            'collections' => [
                TestCollection::class
            ]
        ];
    }
}
