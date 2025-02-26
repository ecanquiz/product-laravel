<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Presentation;

class PresentationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $presentations = [
            ['product_id' => 1 , 'packing' => '[{"packing": "CUÑETE(S)", "quantity":     18.92}]', 'bar_cod' => 'N/A'],
            ['product_id' => 1 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      3.78}]', 'bar_cod' => 'N/A'],
            ['product_id' => 1 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      1.89}]', 'bar_cod' => 'N/A'],
            ['product_id' => 1 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      0.94}]', 'bar_cod' => 'N/A'],

            ['product_id' => 2 , 'packing' => '[{"packing": "CUÑETE(S)", "quantity":     18.92}]', 'bar_cod' => 'N/A'],
            ['product_id' => 2 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      3.78}]', 'bar_cod' => 'N/A'],
            ['product_id' => 2 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      1.89}]', 'bar_cod' => 'N/A'],
            ['product_id' => 2 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      0.94}]', 'bar_cod' => 'N/A'],

            ['product_id' => 3 , 'packing' => '[{"packing": "CUÑETE(S)", "quantity":     18.92}]', 'bar_cod' => 'N/A'],
            ['product_id' => 3 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      3.78}]', 'bar_cod' => 'N/A'],
            ['product_id' => 3 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      1.89}]', 'bar_cod' => 'N/A'],
            ['product_id' => 3 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      0.94}]', 'bar_cod' => 'N/A'],

            ['product_id' => 4 , 'packing' => '[{"packing": "CUÑETE(S)", "quantity":     18.92}]', 'bar_cod' => 'N/A'],
            ['product_id' => 4 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      3.78}]', 'bar_cod' => 'N/A'],
            ['product_id' => 4 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      1.89}]', 'bar_cod' => 'N/A'],
            ['product_id' => 4 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      0.94}]', 'bar_cod' => 'N/A'],

            ['product_id' => 5 , 'packing' => '[{"packing": "CUÑETE(S)", "quantity":     18.92}]', 'bar_cod' => 'N/A'],
            ['product_id' => 5 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      3.78}]', 'bar_cod' => 'N/A'],
            ['product_id' => 5 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      1.89}]', 'bar_cod' => 'N/A'],
            ['product_id' => 5 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      0.94}]', 'bar_cod' => 'N/A'],

            ['product_id' => 6 , 'packing' => '[{"packing": "CUÑETE(S)", "quantity":     18.92}]', 'bar_cod' => 'N/A'],
            ['product_id' => 6 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      3.78}]', 'bar_cod' => 'N/A'],
            ['product_id' => 6 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      1.89}]', 'bar_cod' => 'N/A'],
            ['product_id' => 6 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      0.94}]', 'bar_cod' => 'N/A'],

            ['product_id' => 7 , 'packing' => '[{"packing": "CUÑETE(S)", "quantity":     18.92}]', 'bar_cod' => 'N/A'],
            ['product_id' => 7 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      3.78}]', 'bar_cod' => 'N/A'],
            ['product_id' => 7 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      1.89}]', 'bar_cod' => 'N/A'],
            ['product_id' => 7 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      0.94}]', 'bar_cod' => 'N/A'],

            ['product_id' => 8 , 'packing' => '[{"packing": "CUÑETE(S)", "quantity":     18.92}]', 'bar_cod' => 'N/A'],
            ['product_id' => 8 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      3.78}]', 'bar_cod' => 'N/A'],
            ['product_id' => 8 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      1.89}]', 'bar_cod' => 'N/A'],
            ['product_id' => 8 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      0.94}]', 'bar_cod' => 'N/A'],

            ['product_id' => 9 , 'packing' => '[{"packing": "CUÑETE(S)", "quantity":     18.92}]', 'bar_cod' => 'N/A'],
            ['product_id' => 9 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      3.78}]', 'bar_cod' => 'N/A'],
            ['product_id' => 9 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      1.89}]', 'bar_cod' => 'N/A'],
            ['product_id' => 9 , 'packing' => '[{"packing": "GALON(ES)", "quantity":      0.94}]', 'bar_cod' => 'N/A'],

            ['product_id' => 10 , 'packing' => '[{"packing": "PAQUETE(S)", "quantity":       110}]', 'bar_cod' => 'N/A'],
            ['product_id' => 11 , 'packing' => '[{"packing": "PAQUETE(S)", "quantity":       110}]', 'bar_cod' => 'N/A'],
            ['product_id' => 12 , 'packing' => '[{"packing": "PAQUETE(S)", "quantity":       110}]', 'bar_cod' => 'N/A'],

            ['product_id' => 13 , 'packing' => '[{"packing": "POTE(S)", "quantity":        90}]', 'bar_cod' => 'N/A'],
            ['product_id' => 14 , 'packing' => '[{"packing": "POTE(S)", "quantity":        90}]', 'bar_cod' => 'N/A'],
            ['product_id' => 15 , 'packing' => '[{"packing": "POTE(S)", "quantity":        90}]', 'bar_cod' => 'N/A'],

            ['product_id' => 16 , 'packing' => '[{"packing": "POTE(S)", "quantity":       200}]', 'bar_cod' => 'N/A'],
            ['product_id' => 17 , 'packing' => '[{"packing": "POTE(S)", "quantity":       200}]', 'bar_cod' => 'N/A'],
            ['product_id' => 18 , 'packing' => '[{"packing": "POTE(S)", "quantity":       200}]', 'bar_cod' => 'N/A'],

            ['product_id' => 19 , 'packing' => '[{"packing": "FRASCO(S)", "quantity":         1}]', 'bar_cod' => 'N/A'],
            ['product_id' => 20 , 'packing' => '[{"packing": "FRASCO(S)", "quantity":         1}]', 'bar_cod' => 'N/A'],
            ['product_id' => 21 , 'packing' => '[{"packing": "FRASCO(S)", "quantity":         1}]', 'bar_cod' => 'N/A'],

            ['product_id' => 22 , 'packing' => '[{"packing": "FRASCO(S)", "quantity":         1}]', 'bar_cod' => 'N/A'],
            ['product_id' => 23 , 'packing' => '[{"packing": "FRASCO(S)", "quantity":         1}]', 'bar_cod' => 'N/A'],
            ['product_id' => 24 , 'packing' => '[{"packing": "FRASCO(S)", "quantity":         1}]', 'bar_cod' => 'N/A']
        ];

        
        foreach ($presentations as $presentation) {
            Presentation::create([
                'product_id' => $presentation['product_id'],
                'packing' => $presentation['packing'],
                'bar_cod' => $presentation['bar_cod']
            ]);
        }
    }
}
