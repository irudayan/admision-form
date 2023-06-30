<?php

namespace App\Exports;

use App\Models\Admisionform;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        return Admisionform::all();
    }
}
