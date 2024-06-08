<?php

namespace App\Console\Commands;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FamilyCardExport;
use Illuminate\Console\Command;

class SaveExcelFamilyCardCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:save-kk-to-excel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        return Excel::store(new FamilyCardExport(), 'excel/family_cards.xlsx');
    }
}
