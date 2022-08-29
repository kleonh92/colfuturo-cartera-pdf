<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithDefaultStyles;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Time;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Illuminate\Contracts\View\View;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Style\Color;

//class GeneralResumeSheet implements FromArray, WithTitle, WithDrawings, WithMapping, WithColumnWidths
class GeneralResumeSheet implements FromView, WithEvents, WithColumnWidths, WithStyles
{
    protected $data;

    public function __construct($data)
    {
        $this->data = [
            'data' => $data
        ];
    }

//    public function headings(): array
//    {
//        return [
//            ['', '', $this->data['beneficiario']['name'].' '.$this->data['beneficiario']['lastname']],
//            ['', '', $this->data['beneficiario']['program']],
//            ['', '', $this->data['beneficiario']['university']],
//        ];
//    }


//    public function map($row): array
//    {
////        dd($row);
////        dd(selff::ge)
//        $data = $this->data['data'];
//        // This example will return 3 rows.
//        // First row will have 2 column, the next 2 will have 1 column
//        return [
//            [
//                '',
//                '',
//                $data['beneficiario']['name'].' '.$data['beneficiario']['lastname']
//            ],
//            [
//                '', '', $data['beneficiario']['program']
//            ],
//            [
//                '', '', $data['beneficiario']['university']
//            ]
//        ];
//    }
//
//    public function drawings()
//    {
//        $drawing = new Drawing();
//        $drawing->setName('Logo');
//        $drawing->setPath(resource_path() . '/img/logo.png');
//        $drawing->setHeight(75);
//        $drawing->setWidth(190);
//        $drawing->setCoordinates('A1');
//
//        return $drawing;
//    }

    /**
     * @return \Illuminate\Support\Collection
     */
//    public function collection()
//    {
////        return collect($this->data);
////        dd($this->data);
//        return $this->data;
//    }

    public function array(): array
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Resumen General';
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 18,
            'C' => 15,
            'D' => 11,
            'E' => 16,
            'F' => 15,
            'G' => 5,
            'H' => 18,
            'I' => 15,
            'J' => 8,
            'K' => 7,
        ];
    }

    public function view(): View
    {
        return view('excel.sheet1', [
            'data' => $this->data
        ]);
    }

    public function registerEvents(): array
    {
        return [ AfterSheet::class => function(AfterSheet $event){

            $drawing = new Drawing();
            $drawing->setName('Logo');
            $drawing->setCoordinates('A1');
            $drawing->setPath(resource_path() . '/img/logo.png');
            $drawing->setHeight(95);
            $drawing->setWidth(120);
            $drawing->setWorksheet($event->sheet->getDelegate());

        }];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getParent()->getDefaultStyle()->getFont()->setSize(9);
        $sheet->getRowDimension('12')->setRowHeight('0.79', 'cm');
        $sheet->mergeCells('C1:E1');
        $sheet->mergeCells('D12:E12');

        return [
            'C1'  => ['font' => ['bold' => true, 'color' => ['argb' => Color::COLOR_RED]]],
            'A6'  => ['font' => ['bold' => true, 'size' => 11, 'color' => ['argb' => Color::COLOR_RED]]],
            'C7'  => ['numberFormat' => ['formatCode' => NumberFormat::FORMAT_DATE_TIME1]],
            'A10'  => ['font' => ['bold' => true, 'size' => 11, 'color' => ['argb' => '434343']]],
            'H10'  => ['font' => ['bold' => true, 'size' => 11]],
            'I10'  => ['font' => ['bold' => true, 'size' => 11, 'color' => ['argb' => Color::COLOR_RED]]],
            12 => ['alignment' => ['vertical' => 'center']],
            'B12:E12'  => [
                'fill' => ['fillType'   => Fill::FILL_SOLID, 'startColor' => ['argb' => 'E5E5E5']],
                'font' => ['bold' => true, 'size' => 11, 'color' => ['argb' => '434343']],
                'alignment' => ['horizontal' => 'center']
            ],
            'H12'  => ['font' => ['size' => 11]],
            'I12'  => ['font' => ['size' => 11, 'color' => ['argb' => Color::COLOR_RED]]],
            'H12:I12'  => ['fill' => ['fillType'   => Fill::FILL_SOLID, 'startColor' => ['argb' => 'E5E5E5']]],
        ];
    }
}
