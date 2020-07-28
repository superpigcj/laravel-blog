<?php

declare(strict_types=1);

namespace App\Console\Commands\Upgrade;

use Illuminate\Console\Command;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class V5_5_8_0 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upgrade:v5.5.8.0';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function handle(): int
    {
        if (!Schema::hasColumn('oauth_users', 'remember_token')) {
            Schema::table('oauth_users', function (Blueprint $table) {
                $table->string('remember_token', 100)
                    ->after('is_admin')
                    ->nullable();
            });
        }

        return 0;
    }
}
