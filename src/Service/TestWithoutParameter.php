<?php

namespace App\Service;


use Psr\Log\LoggerInterface;

class TestWithoutParameter
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __toString()
    {
        return 'autowire ' . \get_class($this->logger);
    }
}
