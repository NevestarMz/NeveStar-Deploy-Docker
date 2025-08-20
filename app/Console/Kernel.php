<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Artisan;

class Kernel extends ConsoleKernel
{
    /**
     * Define o agendamento de comandos.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Exemplo: agenda o sitemap para gerar todos os dias às 2h
        $schedule->command('sitemap:generate')->dailyAt('02:00');
    }

    /**
     * Regista os comandos Artisan.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        Artisan::command('sitemap:generate', function () {
            $this->call(\App\Console\Commands\GenerateSitemap::class);
        });
        require base_path('routes/console.php');
    }
}
