<?php

namespace App\Exports;

use App\Models\FamilyCard;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FamilyCardExport implements FromView
{
    /**
    * @return \Illuminate\Support\FromView
    */
    public function view(): view
    {
        $familyCards = FamilyCard::all();

        return view('exports.family-cards', [
            'family_cards' => $familyCards,
        ]);
    }
}
