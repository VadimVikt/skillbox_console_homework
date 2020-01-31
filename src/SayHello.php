<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class SayHello extends Command
{
	protected function configure()
    {
        
		$this
			->setName('say_hello')
			->setDescription('output - "Hello <input>"')
			->addArgument('input_name', InputArgument::REQUIRED, 'input you name');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	$inputString = $input->getArgument('input_name');
     
        $output->writeln('Привет ' . $inputString);
      
        return 0;
    }
}
