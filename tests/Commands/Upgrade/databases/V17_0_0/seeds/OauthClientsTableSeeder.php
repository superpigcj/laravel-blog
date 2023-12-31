<?php

declare(strict_types=1);

namespace Tests\Commands\Upgrade\Databases\V17_0_0\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OauthClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('oauth_clients')->exists()) {
            $this->command->getOutput()->writeln('<question>Skipping: ' . __CLASS__ . '</question>');

            return;
        }

        DB::table('oauth_clients')->insert([
            [
                'id'                     => 1,
                'user_id'                => null,
                'name'                   => config('app.name') . ' Password Grant Client',
                'secret'                 => '',
                'redirect'               => 'http://localhost',
                'personal_access_client' => 0,
                'password_client'        => 1,
                'revoked'                => 0,
                'created_at'             => '2019-06-29 20:35:12',
                'updated_at'             => '2019-06-29 20:35:12',
            ],
        ]);
    }
}
