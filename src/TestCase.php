<?php

declare(strict_types=1);

namespace Gralhao\Test;

use PHPUnit\Framework\TestCase as PhpUnitTestCase;
use Gralhao\Bootstrap;

class TestCase extends PhpUnitTestCase
{
    /**
     * @var Bootstrap
     */
    private Bootstrap $bootstrap;

    /**
     * @var \Phalcon\Mvc\Micro
     */
    private \Phalcon\Mvc\Micro $app;

    /**
     * Return an instance of Gralhao\Bootstrap
     *
     * @return Bootstrap
     */
    public function bootstrap(): Bootstrap
    {
        $this->bootstrap = new Bootstrap();
        $this->app = $this->bootstrap->getApp();
        return $this->bootstrap;
    }

    /**
     * Get Application
     *
     * @return \Phalcon\Mvc\Micro
     */
    public function getApp(): \Phalcon\Mvc\Micro
    {
        return $this->app;
    }

    /**
     * Dispatch request
     *
     * @param Request $request
     *
     * @return [type]
     */
    public function dispatch(Request $request)
    {
        $this->app->di->set('request', $request);
        ob_start();
        $this->bootstrap->init();
        ob_end_clean();
        $content = $this->app->response->getContent();
        $this->app->response->data = $content ? json_decode($content) : $content;
        return $this->app->response;
    }
}
