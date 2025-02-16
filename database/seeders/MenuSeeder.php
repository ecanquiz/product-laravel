<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        Menu::create([ // id 1
            "title" => "Dashboard",
            "menu_id" => null,
            "path" => "dashboard",
            "icon" => "dashboard.svg",
            "sort" => 1
        ]);

        Menu::create([ // id 2
            "title" => "Registrar",
            "menu_id" => null,
            "path" => "#",
            "icon" => "printer",
            "sort" => 2
        ]);

        Menu::create([ // id 3
            "title" => "Productos",
            "menu_id" => 2,
            "path" => "products",
            "icon" => "products.svg",
            "sort" => 1
        ]);
        
        Menu::create([ // id 4
            "title" => "Categorías",
            "menu_id" => 2,
            "path" => "categories",
            "icon" => "categories.svg",
            "sort" => 2
        ]);

        Menu::create([ // id 5
            "title" => "Marcas",
            "menu_id" => 2,
            "path" => "marks",
            "icon" => "mark.svg",
            "sort" => 3
        ]);

        Menu::create([ // id 6
            "title" => "Admin",
            "menu_id" => null,
            "path" => "#",
            "icon" => "printer",
            "sort" => 3
        ]);
        
        Menu::create([ // id 7
            "title" => "Usuarios",
            "menu_id" => 6,
            "path" => "users",
            "icon" => "users.svg",
            "sort" => 1
        ]);

        Menu::create([ // id 8
            "title" => "Roles",
            "menu_id" => 6,
            "path" => "roles",
            "icon" => "user.svg",
            "sort" => 2
        ]);

        Menu::create([ // id 9
            "title" => "Menus",
            "menu_id" => 6,
            "path" => "menus",
            "icon" => "menus.svg",
            "sort" => 3
        ]);

    }
}

