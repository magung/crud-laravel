<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = "data";

    protected $fillable = [
        'nama', 
        'umur', 
        'jenis_kelamin',
        'perusahaan',
        'posisi',
        'tgl_mulai',
        'tgl_akhir',
        'created_at',
        'updated_at'
    ];

    public static function getGrafik() {
        $tahun_awal = date('Y') -5;
        $tahun_skrg = date('Y');

        $category = [];

        $series[0]['name'] = "Laki - Laki";
        $series[1]['name'] = "Perempuan";

        $j = 0;
    	for ($i=$tahun_awal; $i <= $tahun_skrg ; $i++) { 
    		$category[] = $i;
 
    		$series[0]['data'][] = Self::where('jenis_kelamin', '=', 'Laki - Laki')->where('tgl_mulai','like', $i.'%')->count();
    		$series[1]['data'][] = Self::where('jenis_kelamin', '=', 'Perempuan')->where('tgl_akhir','like', $i.'%')->count();
    		
        }
        
        return ['category' => $category, 'series' => $series];
    }
}
