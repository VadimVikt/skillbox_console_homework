<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class TimesOutput extends Command
{
	protected function configure()
    {
        
		$this
			->setName('times_output')
			->setDescription('prints a string "option" times')
			->addArgument('input_string', InputArgument::REQUIRED, 'input string for print')
            ->addOption(
                'times',
                null, 
                InputOption::VALUE_OPTIONAL, 
                'option for times', 2)
            ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	$inputString = $input->getArgument('input_string');
    	$times = $input->getOption('times');
  
    	for ($i = 1; $i <= $times; $i++) {
 			$output->writeln('Исходящая строка: ' . $inputString);
    	}

        return 0;
    }
}

