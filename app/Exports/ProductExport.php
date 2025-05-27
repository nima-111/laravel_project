<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ProductExport implements FromCollection, WithCustomStartCell, WithHeadings, WithStyles
{
    public function collection()
    {
        return Product::join('categories', 'category_id', '=', 'categories.id')
            ->join('suppliers', 'supplier_id', '=', 'suppliers.id')
            ->select(
                'products.id',
                'products.name',
                'products.description',
                'price',
                DB::raw("CONCAT(suppliers.first_name, ' ', suppliers.last_name) as supplier"),
                'categories.name as category'
            )
            ->get();
    }

    public function headings(): array
    {
        return ['ID', 'Name', 'Description', 'Price', 'Supplier', 'Category'];
    }

    public function startCell(): string
    {
        return 'C5';
    }

    public function styles(Worksheet $sheet)
    {
        // Style de l'en-tête
        $sheet->getStyle('C5:H5')->applyFromArray([
            'font' => [
                'bold' => true,
                'color' => ['rgb' => 'FFFFFF'],
                'size' => 12
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['rgb' => '007BFF'] // Bleu Bootstrap
            ],
            'alignment' => [
                'horizontal' => 'center'
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['rgb' => '000000']
                ]
            ]
        ]);

        // Auto ajustement de la taille des colonnes
        foreach (range('C', 'H') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        return [];
    }
}