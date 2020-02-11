<?php

namespace App\Console\Commands\Upgrade;

use App\Models\Article;
use Illuminate\Console\Command;
use Illuminate\Database\Schema\Blueprint;
use Schema;

class V6_14_0 extends Command
{
    protected $signature   = 'upgrade:v6.14.0';
    protected $description = 'Upgrade to v6.14.0';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->integer('views')->after('is_top');
        });

        $articles = Article::withTrashed()->get();

        foreach ($articles as $article) {
            /** @var \App\Models\Article $article */
            $article->update([
                'views' => $article->visits()->count(),
            ]);
        }

        Schema::drop('visits');
    }
}
