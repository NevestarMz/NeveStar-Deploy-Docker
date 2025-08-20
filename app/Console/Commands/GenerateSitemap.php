<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Gera o sitemap.xml para o site NeveStar';

    public function handle()
    {
        $url = config('app.url') ?? 'https://nevestar.co.mz';

        SitemapGenerator::create($url)
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap gerado com sucesso em public/sitemap.xml');
    }
}
