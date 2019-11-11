<?php

namespace App\Service;


use Psr\Log\LoggerInterface;

class AbstractWithParameter
{
    private $parameter;

    private $logger;

    public function __construct(string $parameter, LoggerInterface $logger = null)
    {
        $this->parameter = $parameter;
        $this->logger = $logger;
    }

    public function __toString()
    {
        return $this->parameter. ' but Logger ' . (null === $this->logger ? 'is not autowire' : 'is autowire');
    }
}
