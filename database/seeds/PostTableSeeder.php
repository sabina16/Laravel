<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
        	['nama'=>'Sabina', 'Jabatan'=>'Manager','jk'=>'Perempuan', 'alamat'=>'Cibaduyut','agama'=>'Islam', 'total_gaji'=>'20000'],
        	['nama'=>'Renasya', 'Jabatan'=>'Sekertaris','jk'=>'Perempuan', 'alamat'=>'Rancamanyar','agama'=>'Islam', 'total_gaji'=>'30000'],
        	['nama'=>'Anisa', 'Jabatan'=>'Bendahara','jk'=>'Perempuan', 'alamat'=>'Holis','agama'=>'Islam', 'total_gaji'=>'40000'],
        	['nama'=>'Vallerin', 'Jabatan'=>'Sekertaris','jk'=>'Perempuan', 'alamat'=>'Kircon','agama'=>'Islam', 'total_gaji'=>'50000'],
        	['nama'=>'Anita', 'Jabatan'=>'Bendahara','jk'=>'Perempuan', 'alamat'=>'Cibaduyut','agama'=>'Islam', 'total_gaji'=>'60000']
        ];
        DB::table('penggajians')->insert($data);
    }
}
 