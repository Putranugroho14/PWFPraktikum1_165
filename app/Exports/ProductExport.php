<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProductExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::with('user')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Quantity',
            'Price (Rp)',
            'Owner',
            'Created At'
        ];
    }

    public function map($product): array
    {
        return [
            $product->id,
            $product->name,
            $product->qty,
            number_format($product->price, 0, ',', '.'),
            $product->user->name ?? '-',
            $product->created_at->format('d-m-Y H:i')
        ];
    }
}
