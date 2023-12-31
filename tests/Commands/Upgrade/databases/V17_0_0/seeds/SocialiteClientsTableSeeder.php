<?php

declare(strict_types=1);

namespace Tests\Commands\Upgrade\Databases\V17_0_0\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialiteClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('socialite_clients')->exists()) {
            $this->command->getOutput()->writeln('<question>Skipping: ' . __CLASS__ . '</question>');

            return;
        }

        DB::table('socialite_clients')->insert([
            [
                'id'            => 1,
                'name'          => 'qq',
                'icon'          => 'qq',
                'client_id'     => '',
                'client_secret' => '',
                'created_at'    => '2019-05-08 22:13:54',
                'updated_at'    => '2019-05-08 22:13:54',
                'deleted_at'    => null,
            ],
            [
                'id'            => 2,
                'name'          => 'weibo',
                'icon'          => 'weibo',
                'client_id'     => '',
                'client_secret' => '',
                'created_at'    => '2019-05-08 22:13:54',
                'updated_at'    => '2019-05-08 22:13:54',
                'deleted_at'    => null,
            ],
            [
                'id'            => 3,
                'name'          => 'github',
                'icon'          => 'github',
                'client_id'     => '',
                'client_secret' => '',
                'created_at'    => '2019-05-08 22:13:54',
                'updated_at'    => '2019-05-08 22:13:54',
                'deleted_at'    => null,
            ],
            [
                'id'            => 4,
                'name'          => 'google',
                'icon'          => 'google',
                'client_id'     => '',
                'client_secret' => '',
                'created_at'    => '2019-05-14 23:26:38',
                'updated_at'    => '2019-05-14 23:26:38',
                'deleted_at'    => null,
            ],
            [
                'id'            => 5,
                'name'          => 'facebook',
                'icon'          => 'facebook',
                'client_id'     => '',
                'client_secret' => '',
                'created_at'    => '2019-05-14 23:26:38',
                'updated_at'    => '2019-05-14 23:26:38',
                'deleted_at'    => null,
            ],
            [
                'id'            => 6,
                'name'          => 'vkontakte',
                'icon'          => 'vk',
                'client_id'     => '',
                'client_secret' => '',
                'created_at'    => '2019-07-01 23:26:38',
                'updated_at'    => '2019-07-01 23:26:38',
                'deleted_at'    => null,
            ],
        ]);
    }
}
