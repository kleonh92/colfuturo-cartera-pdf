<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;

class GeneralResumeSheet implements FromCollection, WithTitle
{
    protected $data;

    public function __construct($data)
    {
        $this->data = collect($data);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
//        return collect($this->data);
        dd($this->data);
        return $this->data;
    }

//    public function array(): array
//    {
//        return $this->data;
//    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Resumen General';
    }

}
