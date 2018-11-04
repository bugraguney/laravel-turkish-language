<?php
/**
 * Created by PhpStorm.
 * User: Buğra Güney
 * Date: 04.11.2018
 * Time: 00:26
 */

namespace bugraguney\laraveltr\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallLang extends Command
{
    protected $signature = 'turkish:install-lang';
    protected $description = 'Türkçe dil dosyalarını yükle/güncelle';
    public function handle()
    {
        Artisan::call('vendor:publish' , [
            '--provider' => 'bugraguney\laraveltr\ServiceProvider'
        ]);

        $this->info('Türkçe dil dosyaları eklendi.');
    }
}