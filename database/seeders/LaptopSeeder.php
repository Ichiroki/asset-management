<?php

namespace Database\Seeders;

use App\Models\Asset\Laptop;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laptop::create([
            'name' => 'Giffari',
            'no_asset' => 'FA.21.10.0119',
            'status' => 'Active',
            'date_used' => Carbon::createFromFormat('d-m-Y', '23-04-2023')->format('Y-m-d'),
            'processor' => 'Core i7 - Gen 10',
            'ram' => 'DDR4 - 16',
            'main_storage' => 'SSD - 500',
            'vga' => 'GTX 1650 Ti',
            'monitor' => 'Samsung 24\'',
        ]);

        Laptop::create([
            'name' => 'Ulung',
            'no_asset' => 'FA.21.08.001',
            'status' => 'On Loan',
            'date_used' => Carbon::createFromFormat('d-m-Y', '23-04-2023')->format('Y-m-d'),
            'processor' => 'Core i5 - Gen 10 2.5 GHZ',
            'ram' => 'DDR4 - 16',
            'main_storage' => 'SSD - 500',
            'vga' => 'GTX 1650 Ti',
            'monitor' => '15,6\'',
        ]);

        Laptop::create([
            'name' => 'Webinar 1',
            'no_asset' => 'FA.21.10.021',
            'status' => 'Active',
            'processor' => 'Core i7 - Gen 10 2.6 GHZ',
            'ram' => 'DDR4 - 16',
            'main_storage' => 'SSD - 500',
            'extend_storage' => 'HDD - 1000',
            'vga' => 'GTX 1660 Ti',
            'monitor' => '16\'',
        ]);

        Laptop::create([
            'name' => 'Zia',
            'no_asset' => 'FA.21.10.019',
            'status' => 'Active',
            'date_used' => Carbon::createFromFormat('d-m-Y', '23-11-2021')->format('Y-m-d'),
            'processor' => 'Core i5 - Gen 8 1.6 GHZ',
            'ram' => 'DDR4 - 20',
            'main_storage' => 'SSD - 250',
            'vga' => 'UHD Graphics',
            'monitor' => '14\'',
        ]);

        Laptop::create([
            'name' => 'Pak Dedi',
            'no_asset' => 'FA.22.03.006',
            'status' => 'Active',
            'date_used' => Carbon::createFromFormat('d-m-Y', '23-04-2022')->format('Y-m-d'),
            'processor' => 'Core i9 - Gen 12 2.9 GHZ',
            'ram' => 'DDR4 - 32',
            'main_storage' => 'SSD - 1000',
            'vga' => 'RTX 3060',
            'monitor' => '15.6\' + Samsung 24\'',
        ]);
    }
}
