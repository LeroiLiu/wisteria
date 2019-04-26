<?php

/*
 * This file is part of the overtrue/wisteria.
 *
 * (c) overtrue <anzhengchao@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Overtrue\Wisteria\Commands;

use Illuminate\Console\Command;
use Overtrue\Wisteria\WisteriaServiceProvider;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wisteria:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Wisteria and publish the required files.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('vendor:publish', ['--provider' => WisteriaServiceProvider::class, '--tag' => ['wisteria-assets', 'wisteria-config']]);

        $this->info('Wisteria successfully installed! Enjoy 😍');
    }
}
