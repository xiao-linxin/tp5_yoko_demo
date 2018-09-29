<?php

namespace Yoko;

use think\App;
use think\console\Command;
use think\console\Input;
use think\console\Output;

class PrintVersion extends Command
{
    public function configure() {
        $this->setName('version')->setDescription('it will print current thinkphp5 version.');
    }

    public function execute(Input $input, Output $output) {
        $output->write('current thinkphp5 version is:' . App::VERSION);
    }

    public function a() {

    }
}