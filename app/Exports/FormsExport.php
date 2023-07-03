<?php

namespace App\Exports;

use App\Models\Admisionform;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;


class FormsExport implements FromCollection,WithHeadings,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       
        // return Admisionform::all();
        return Admisionform::select("id", "fullname", "email","mobileno","status")->get();
        
    }


    public function headings() :array
    {
        return ["ID","Full Name","Email","Mobile No","Status"];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
   
                $event->sheet->getDelegate()->getStyle('A1:E1')
                                ->getFont()
                                ->setBold(true);
   
            },
        ];
    }
}


