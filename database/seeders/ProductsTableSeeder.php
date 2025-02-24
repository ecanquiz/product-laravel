<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = [
            ['name' => 'BLANCO TRÁFICO', 'category_id' => 8, 'mark_id' => 1, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],
            ['name' => 'BLANCO TRÁFICO', 'category_id' => 8, 'mark_id' => 2, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],
            ['name' => 'BLANCO TRÁFICO', 'category_id' => 8, 'mark_id' => 3, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],

            ['name' => 'BLANCO OSTRA', 'category_id' => 9, 'mark_id' => 1, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],
            ['name' => 'BLANCO OSTRA', 'category_id' => 9, 'mark_id' => 2, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],
            ['name' => 'BLANCO OSTRA', 'category_id' => 9, 'mark_id' => 3, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],

            ['name' => 'SELLADOR GRIS', 'category_id' => 10, 'mark_id' => 1, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],
            ['name' => 'SELLADOR GRIS', 'category_id' => 10, 'mark_id' => 2, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],
            ['name' => 'SELLADOR GRIS', 'category_id' => 10, 'mark_id' => 3, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],           
            
            ['name' => 'JABON DE BARRA', 'category_id' => 11, 'mark_id' => 1, 'measure_unit_type_id' => 2, 'measure_unit_id' => 17, 'measure_unit' => 'Gramo(s)'],
            ['name' => 'JABON DE BARRA', 'category_id' => 11, 'mark_id' => 4, 'measure_unit_type_id' => 2, 'measure_unit_id' => 17, 'measure_unit' => 'Gramo(s)'],
            ['name' => 'JABON DE BARRA', 'category_id' => 11, 'mark_id' => 5, 'measure_unit_type_id' => 2, 'measure_unit_id' => 17, 'measure_unit' => 'Gramo(s)'],

            ['name' => 'DESODORANTE ROLLON', 'category_id' => 11, 'mark_id' => 1, 'measure_unit_type_id' => 3, 'measure_unit_id' => 29, 'measure_unit' => 'Mililitro(s)'],
            ['name' => 'DESODORANTE ROLLON', 'category_id' => 11, 'mark_id' => 5, 'measure_unit_type_id' => 3, 'measure_unit_id' => 29, 'measure_unit' => 'Mililitro(s)'],
            ['name' => 'DESODORANTE ROLLON', 'category_id' => 11, 'mark_id' => 6, 'measure_unit_type_id' => 3, 'measure_unit_id' => 29, 'measure_unit' => 'Mililitro(s)'],

            ['name' => 'SHAMPOO', 'category_id' => 11, 'mark_id' => 1, 'measure_unit_type_id' => 3, 'measure_unit_id' => 29, 'measure_unit' => 'Mililitro(s)'],
            ['name' => 'SHAMPOO', 'category_id' => 11, 'mark_id' => 6, 'measure_unit_type_id' => 3, 'measure_unit_id' => 29, 'measure_unit' => 'Mililitro(s)'],
            ['name' => 'SHAMPOO', 'category_id' => 11, 'mark_id' => 7, 'measure_unit_type_id' => 3, 'measure_unit_id' => 29, 'measure_unit' => 'Mililitro(s)'],

            ['name' => 'DETERGENTE LÍQUIDO', 'category_id' => 12, 'mark_id' => 1, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],
            ['name' => 'DETERGENTE LÍQUIDO', 'category_id' => 12, 'mark_id' => 8, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],
            ['name' => 'DETERGENTE LÍQUIDO', 'category_id' => 12, 'mark_id' => 9, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],

            ['name' => 'DESINFECTANTE', 'category_id' => 12, 'mark_id' => 1, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],
            ['name' => 'DESINFECTANTE', 'category_id' => 12, 'mark_id' => 8, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],
            ['name' => 'DESINFECTANTE', 'category_id' => 12, 'mark_id' => 9, 'measure_unit_type_id' => 3, 'measure_unit_id' => 26, 'measure_unit' => 'Litro(s)'],

        ];

        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'mark_id' => $product['mark_id'],
                'category_id' => $product['category_id'],
                'measure_unit_type_id' => $product['measure_unit_type_id'],
                'measure_unit_id' => $product['measure_unit_id'],
                'measure_unit' => $product['measure_unit'],
            ]);
        }
    }
}


