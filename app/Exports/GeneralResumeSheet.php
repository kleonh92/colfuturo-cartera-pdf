<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
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
use Maatwebsite\Excel\Events\BeforeSheet;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Time;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Style\Conditional;
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
        $this->data = $data;
    }

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
            'L' => 12,
            'M' => 8,
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
        return [
            BeforeSheet::class => function(BeforeSheet $event){
                $event->getSheet()->getStyle('I19')->getNumberFormat()->setFormatCode('D MMM YYYY');
            },
            AfterSheet::class => function(AfterSheet $event){

                $drawing = new Drawing();
                $drawing->setName('Logo');
                $drawing->setCoordinates('A1');
                $drawing->setPath(resource_path() . '/img/logo.png');
                $drawing->setHeight(95);
                $drawing->setWidth(120);
                $drawing->setWorksheet($event->sheet->getDelegate());


                $event->getSheet()->getStyle('C29')->getNumberFormat()->setFormatCode('DD\ MMM\ YYYY');
                $event->getSheet()->getStyle('C30')->getNumberFormat()->setFormatCode('DD\ MMM\ YYYY');
                $event->getSheet()->getStyle('J30')->getNumberFormat()->setFormatCode('DD\ MMM\ YYYY');
                $event->getSheet()->getStyle('C31')->getNumberFormat()->setFormatCode('DD\ MMM\ YYYY');
                $event->getSheet()->getStyle('J31')->getNumberFormat()->setFormatCode('DD\ MMM\ YYYY');
                $event->getSheet()->getStyle('L31')->getNumberFormat()->setFormatCode('DD\ MMM\ YYYY');
                $event->getSheet()->getStyle('C33')->getNumberFormat()->setFormatCode('DD\ MMM\ YYYY');
                $event->getSheet()->getStyle('C34')->getNumberFormat()->setFormatCode('DD\ MMM\ YYYY');
                $event->getSheet()->getStyle('C35')->getNumberFormat()->setFormatCode('DD\ MMM\ YYYY');

                $conditional = new Conditional();
                $conditional->setConditionType(Conditional::CONDITION_CONTAINSTEXT);
                $conditional->setText('En mora');
                $conditional->getStyle()->getFont()->getColor()->setARGB(Color::COLOR_RED);
                $conditionalStyles[] = $conditional;

                $event->getSheet()->getStyle('I10')->setConditionalStyles($conditionalStyles);

            }
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getParent()->getDefaultStyle()->getFont()->setSize(11);
        $sheet->getRowDimension('12')->setRowHeight('0.79', 'cm');
        $sheet->getRowDimension('13')->setRowHeight('0.53', 'cm');
        $sheet->getRowDimension('30')->setRowHeight('0.95', 'cm');
        $sheet->getRowDimension('31')->setRowHeight('0.74', 'cm');
        $sheet->mergeCells('C1:E1');
        $sheet->mergeCells('I1:J1');
        $sheet->mergeCells('I2:J2');
        $sheet->mergeCells('D12:E12');
        $sheet->mergeCells('H29:I29');
        $sheet->mergeCells('J29:K29');
        $sheet->mergeCells('H30:I30');
        $sheet->mergeCells('J30:K30');
        $sheet->mergeCells('H31:I31');
        $sheet->mergeCells('J31:K31');

        return [
            'C1:K3'  => ['font' => ['size' => 9]],
            'C1'  => ['font' => ['bold' => true, 'color' => ['argb' => Color::COLOR_RED]]],
            'I1'  => [
                'numberFormat' => ['formatCode' => '\ #,##0\ [$USD] '],
                'alignment' => ['horizontal' => 'left']
            ],
            'I2'  => [
                'numberFormat' => ['formatCode' => '\ #,##0\ [$COP] '],
                'alignment' => ['horizontal' => 'left']
            ],
            'A6'  => ['font' => ['bold' => true, 'color' => ['argb' => Color::COLOR_RED]]],
            'C7'  => ['numberFormat' => ['formatCode' => NumberFormat::FORMAT_DATE_TIME1]],
            'A10'  => ['font' => ['bold' => true, 'color' => ['argb' => '434343']]],
            'H10'  => ['font' => ['bold' => true]],
            'I10'  => ['font' => ['bold' => true, 'color' => ['argb' => Color::COLOR_GREEN]]],
            'I10:I20'  => ['alignment' => ['horizontal' => 'right']],
            12 => ['alignment' => ['vertical' => 'center']],
            'B12:E12'  => [
                'fill' => ['fillType'   => Fill::FILL_SOLID, 'startColor' => ['argb' => 'E5E5E5']],
                'font' => ['bold' => true, 'color' => ['argb' => '434343']],
                'alignment' => ['horizontal' => 'center']
            ],
            'I12'  => ['font' => ['color' => ['argb' => Color::COLOR_RED]]],
            'H12:I12'  => ['fill' => ['fillType'   => Fill::FILL_SOLID, 'startColor' => ['argb' => 'F4F4F4']]],
            'H13:I13'  => ['font' => ['size' => 10]],
            'I13'  => ['font' => ['color' => ['argb' => Color::COLOR_RED]]],
            'B14:E14'  => ['fill' => ['fillType'   => Fill::FILL_SOLID, 'startColor' => ['argb' => 'F4F4F4']]],
            'F14'  => ['font' => ['color' => ['argb' => Color::COLOR_RED]]],
            'H14:I14'  => ['fill' => ['fillType'   => Fill::FILL_SOLID, 'startColor' => ['argb' => 'E5E5E5']]],
            'I14'  => ['font' => ['bold' => true], 'numberFormat' => ['formatCode' => '[$USD]\ #,##0\ ']],
            'C14:E20'  => ['numberFormat' => ['formatCode' => '#,##0;[Red]\(#,##0\)']],
            'E16:E17'  => ['numberFormat' => ['formatCode' => '_-* #,##0.00_-;\-* #,##0.00_-;_-* "-"??_-;_-@']],
            'H17'  => ['font' => ['bold' => true]],
            'B16:E16'  => ['fill' => ['fillType'   => Fill::FILL_SOLID, 'startColor' => ['argb' => 'F4F4F4']]],
            'B18:E18'  => ['fill' => ['fillType'   => Fill::FILL_SOLID, 'startColor' => ['argb' => 'F4F4F4']]],
            'H19:I19'  => ['fill' => ['fillType'   => Fill::FILL_SOLID, 'startColor' => ['argb' => 'F4F4F4']]],
            'B20:E20'  => ['fill' => ['fillType'   => Fill::FILL_SOLID, 'startColor' => ['argb' => 'F4F4F4']]],
            'H20:I20'  => ['fill' => ['fillType'   => Fill::FILL_SOLID, 'startColor' => ['argb' => 'E5E5E5']]],
            'B21:E21'  => [
                'fill' => ['fillType'   => Fill::FILL_SOLID, 'startColor' => ['argb' => 'E5E5E5']],
                'numberFormat' => ['formatCode' => '_(* #,##0_);_(* \(#,##0\);_(* "-"??_);_(@_)'],
                'font' => ['bold' => true]
            ],
            'B23:B24'  => ['font' => ['color' => ['argb' => Color::COLOR_RED]]],
            'A27'  => ['font' => ['bold' => true]],
            'H27'  => ['font' => ['bold' => true]],
            'H29:M29'  => [
                'font' => ['bold' => true],
                'fill' => ['fillType'   => Fill::FILL_SOLID, 'startColor' => ['argb' => 'E5E5E5']],
                'alignment' => ['horizontal' => 'center']
            ],
            'C29:C35'  => ['alignment' => ['horizontal' => 'right']],
            'J30:L31'  => ['alignment' => ['horizontal' => 'right']],
            'H31:M31'  => ['fill' => ['fillType'   => Fill::FILL_SOLID, 'startColor' => ['argb' => 'E5E5E5']]],
        ];
    }
}
