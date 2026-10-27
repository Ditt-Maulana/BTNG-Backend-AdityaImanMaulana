<?php

namespace Database\Seeders;

use App\Models\Mobil;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $cars = [
            ['nama'=>'Avanza 1.5 G','brand'=>'Toyota','harga'=>245000000,'tahun'=>2023,'transmisi'=>'Matic','bahan_bakar'=>'Bensin','status'=>'tersedia','foto'=>'https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb'],
            ['nama'=>'Civic RS','brand'=>'Honda','harga'=>616000000,'tahun'=>2024,'transmisi'=>'CVT','bahan_bakar'=>'Bensin','status'=>'tersedia','foto'=>'https://images.unsplash.com/photo-1590362891991-f776e747a буду'],
            ['nama'=>'Innova Zenix Hybrid','brand'=>'Toyota','harga'=>473000000,'tahun'=>2024,'transmisi'=>'CVT','bahan_bakar'=>'Hybrid','status'=>'tersedia','foto'=>'https://images.unsplash.com/photo-1552519507-da3b142c6e3d'],
            ['nama'=>'Pajero Sport Dakar','brand'=>'Mitsubishi','harga'=>720000000,'tahun'=>2023,'transmisi'=>'Matic','bahan_bakar'=>'Diesel','status'=>'sold','foto'=>'https://images.unsplash.com/photo-1519641471654-76ce0107ad1b'],
            ['nama'=>'Brio Satya E','brand'=>'Honda','harga'=>190000000,'tahun'=>2022,'transmisi'=>'CVT','bahan_bakar'=>'Bensin','status'=>'tersedia','foto'=>'https://images.unsplash.com/photo-1503376780353-7e6692767b70'],
            ['nama'=>'Model 3 Long Range','brand'=>'Tesla','harga'=>950000000,'tahun'=>2024,'transmisi'=>'Matic','bahan_bakar'=>'Listrik','status'=>'tersedia','foto'=>'https://images.unsplash.com/photo-1560958089-b8a1929_created'],
            ['nama'=>'Fortuner 2.8 VRZ','brand'=>'Toyota','harga'=>630000000,'tahun'=>2023,'transmisi'=>'Matic','bahan_bakar'=>'Diesel','status'=>'tersedia','foto'=>'https://images.unsplash.com/photo-1511919884226-fd3cad34687c'],
            ['nama'=>'Xpander Ultimate','brand'=>'Mitsubishi','harga'=>330000000,'tahun'=>2022,'transmisi'=>'Matic','bahan_bakar'=>'Bensin','status'=>'sold','foto'=>'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7'],
            ['nama'=>'Ioniq 5 Prime','brand'=>'Hyundai','harga'=>782000000,'tahun'=>2024,'transmisi'=>'Matic','bahan_bakar'=>'Listrik','status'=>'tersedia','foto'=>'https://images.unsplash.com/photo-1593941707882-a5bba14938c7'],
            ['nama'=>'HR-V SE','brand'=>'Honda','harga'=>420000000,'tahun'=>2023,'transmisi'=>'CVT','bahan_bakar'=>'Bensin','status'=>'tersedia','foto'=>'https://images.unsplash.com/photo-1502161254066-6c74afbf07aa'],
            ['nama'=>'Jimny 5 Door','brand'=>'Suzuki','harga'=>475000000,'tahun'=>2024,'transmisi'=>'Manual','bahan_bakar'=>'Bensin','status'=>'tersedia','foto'=>'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf'],
            ['nama'=>'Camry Hybrid','brand'=>'Toyota','harga'=>937000000,'tahun'=>2024,'transmisi'=>'CVT','bahan_bakar'=>'Hybrid','status'=>'sold','foto'=>'https://images.unsplash.com/photo-1617469767053-d3b523a0b982'],
        ];
        foreach ($cars as $car) {
            // Remove invalid placeholder URLs so validation/data remain clean.
            if (str_contains($car['foto'], 'created') || str_contains($car['foto'], 'bubu')) $car['foto'] = null;
            Mobil::updateOrCreate(['nama' => $car['nama'], 'brand' => $car['brand']], $car);
        }
    }
}
