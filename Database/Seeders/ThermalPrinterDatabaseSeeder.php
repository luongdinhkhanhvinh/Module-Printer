<?php

namespace Modules\ThermalPrinter\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ThermalPrinterDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(SeedAdminSettingsForThermalPrinterTableSeeder::class);
    }
}
