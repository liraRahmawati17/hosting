<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\barang;
use App\Models\suplier;
use App\Models\pelanggan;
use App\Models\Pesanan;
use App\Models\PesananDetail;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample data suplier
        $suplier1 = Suplier::create(['nama'=>'lira rahmawati','alamat'=>'kp.ciodeng barat']);
        $suplier2 = Suplier::create(['nama'=>'meylani rahmawati','alamat'=>'situ terate']);
        $suplier3 = Suplier::create(['nama'=>'nabila khaerunnisa','alamat'=>'jln.bahuan']);

         //membuat sample barang
        //  $produk1 = produk::create(['nama_barang'=>'bola','harga'=>25000, 'stok'=>50, 'suplier_id'=>$suplier1->id, ]);
        //  $produk2 = produk::create(['nama_barang'=>'raket', 'suplier_id'=>$suplier2->id, 'harga'=>'200000', 'stok'=>3]);
        //  $produk3 = produk::create(['nama_barang'=>'skiping', 'suplier_id'=>$suplier3->id, 'harga'=>'300000', 'stok'=>3]);

        //  membuat sample pembeli
        // $pelanggan1 = pelanggan::create(['nama'=>'lira rahmawati', 'jenis_kelamin'=>'perempuan', 'alamat'=>'kp.ciodeng', 'email'=>'lira@gmail.com']);
        // $pelanggan2 = pelanggan::create(['nama'=>'mey rahmawati', 'jenis_kelamin'=>'perempuan', 'alamat'=>'situ tatare', 'email'=>'mey@gmail.com']);

}
    }
