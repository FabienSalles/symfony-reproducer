<?php

namespace App\Command;


use App\Service\TestWithoutParameter;
use App\Service\TestWithParameter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class TestCommand extends Command
{
    protected static $defaultName = 'app:test';

    /** @var TestWithoutParameter */
    private $testWithoutParameter;

    /** @var TestWithParameter */
    private $testWithParameter;

    public function __construct(TestWithoutParameter $testWithoutParameter, TestWithParameter $testWithParameter)
    {
        $this->testWithoutParameter = $testWithoutParameter;
        $this->testWithParameter = $testWithParameter;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $io->note(sprintf('Test without parameter : ' . $this->testWithoutParameter));
        $io->note(sprintf('Test with parameter : ' . $this->testWithParameter));
    }


}
