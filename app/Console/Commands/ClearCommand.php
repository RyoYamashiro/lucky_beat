<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:clear {--all : キャッシュクリア後、composer dump-autoloadを実行}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description =  'Laravelのもろもろのキャッシュをまとめてクリアする。--allオプション付きで実行するとキャッシュクリア後にcomposer dump-autoloadを実施する。';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $all = $this->option("all");

        $this->call('optimize:clear');
        $this->call('optimize');

        if ($all) {
            exec('composer dump-autoload');
        }
    }
}
