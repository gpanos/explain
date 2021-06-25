<?php

namespace App\Commands;

use App\Formatters\RemoveLinks;
use App\Services\ManKier;
use LaravelZero\Framework\Commands\Command;

class ShellCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'shell {cmd : The command to be explained (required)}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Explain a Shell Command';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(ManKier $manKier)
    {
        $info = $manKier->explain(
            $this->argument('cmd'),
            exec('tput cols')
        );

        $info = resolve(RemoveLinks::class)
            ->__invoke($info);

        $this->output->write(
            "<fg=#7C3AED;options=bold>{$info}</>"
        );
    }
}
