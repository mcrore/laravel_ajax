<?php

use Illuminate\Database\Seeder;
use App\pegawai;
class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\pegawai::class, 3000)->create();
        $user = factory(App\Pegawai::class, 1000)->create();
        // $this->assertDeleted($user);
    }
}
