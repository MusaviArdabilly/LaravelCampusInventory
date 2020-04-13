<?php

namespace App\Exports;

use App\User;
use App\Barang;
use App\Ruangan;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class BarangExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
          return DB::table('Barang')
            ->select('barang.id', 'ruangan.room', 'barang.item', 'barang.total', 'barang.broken', 'user1.username as created_by', 'user2.username as updated_by', 'barang.created_at', 'barang.updated_at')
            ->leftJoin('user as user1', 'user1.id', '=', 'barang.created_by')
            ->leftJoin('user as user2', 'user2.id', '=', 'barang.updated_by')
            ->leftJoin('ruangan', 'ruangan.id', '=', 'barang.id_ruangan')
            ->orderBy('id')
            ->get();
    }

    public function headings(): array
    {
        return [
            'No',
            'Barang',
            'Jumlah',
            'Rusak',
            'Dibuat Oleh',
            'Diupdate Oleh',
            'Ruangan',
            'Created at',
            'Updated at'
        ];
    }
}
