<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class QuesterAnswer extends Command
{
    protected function configure()
    {
        
		$this
			->setName('question')
			->setDescription('Quester-Answer')
            ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');
      
        $question = new Question('Введите ваше имя - ', 'Вадим');
        $firstName = $helper->ask($input, $output, $question);

        $question = new Question('Введите ваш возраст - ', '52');
        $age = $helper->ask($input, $output, $question);

        $question = new ChoiceQuestion('Ваш пол (м)', array('м', 'ж'), 0);

        $question->setErrorMessage('Пол %s не существует!!! мы таки не в Таиланде');

        $sex = $helper->ask($input, $output, $question);

        $output->writeln('Здравствуйте ' . $firstName . ' Ваш возраст: ' . $age . ' Ваш пол: ' . $sex);

        return 0;
    }
}
