<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get table names from config
        $menusTable = config('filament-menu-builder.tables.menus', 'menus');
        $menuItemsTable = config('filament-menu-builder.tables.menu_items', 'menu_items');
        $menuLocationsTable = config('filament-menu-builder.tables.menu_locations', 'menu_locations');

        // Truncate if exist
        Schema::disableForeignKeyConstraints();
        DB::table($menuLocationsTable)->truncate();
        DB::table($menuItemsTable)->truncate();
        DB::table($menusTable)->truncate();
        Schema::enableForeignKeyConstraints();

        // Create Menus
        $menus = [
            [
                'id' => 1,
                'name' => 'Main',
                'is_visible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Sample Pages',
                'is_visible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Main Footer',
                'is_visible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Resources',
                'is_visible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Community',
                'is_visible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table($menusTable)->insert($menus);

        // Create Menu Locations
        $menuLocations = [
            [
                'id' => 1,
                'menu_id' => 1,
                'location' => 'header',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'menu_id' => 3,
                'location' => 'footer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'menu_id' => 2,
                'location' => 'footer-2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'menu_id' => 4,
                'location' => 'footer-3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'menu_id' => 5,
                'location' => 'footer-4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table($menuLocationsTable)->insert($menuLocations);

        // Create Menu Items
        $menuItems = [
            [
                'id' => 1,
                'menu_id' => 1,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'Home',
                'url' => 'http://localhost:8000',
                'target' => '_self',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'menu_id' => 1,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'Blog',
                'url' => 'http://localhost:8000/blog',
                'target' => '_self',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'menu_id' => 2,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'Privacy Policy',
                'url' => 'http://localhost:8000/privacy-policy',
                'target' => '_self',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'menu_id' => 2,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'Terms & Conditions',
                'url' => 'http://localhost:8000/terms-conditions',
                'target' => '_self',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'menu_id' => 2,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'Coming Soon',
                'url' => 'http://localhost:8000/coming-soon',
                'target' => '_self',
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'menu_id' => 4,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'Case Studies',
                'url' => '#',
                'target' => '_self',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'menu_id' => 4,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'IT Blog',
                'url' => 'http://localhost:8000/blog',
                'target' => '_self',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'menu_id' => 4,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'Careers',
                'url' => '#',
                'target' => '_self',
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'menu_id' => 4,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'Support',
                'url' => 'http://localhost:8000/contact-us',
                'target' => '_self',
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'menu_id' => 5,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'Our Team',
                'url' => '#',
                'target' => '_self',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'menu_id' => 5,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'Partners',
                'url' => '#',
                'target' => '_self',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'menu_id' => 5,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'Testimonials',
                'url' => '#',
                'target' => '_self',
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                'menu_id' => 5,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'FAQ',
                'url' => '#',
                'target' => '_self',
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'menu_id' => 3,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'Blog',
                'url' => 'http://localhost:8000/blog',
                'target' => '_self',
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,
                'menu_id' => 3,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'Contact Us',
                'url' => 'http://localhost:8000/contact-us',
                'target' => '_self',
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 16,
                'menu_id' => 1,
                'parent_id' => null,
                'linkable_type' => null,
                'linkable_id' => null,
                'title' => 'Contact Us',
                'url' => 'http://localhost:8000/contact-us',
                'target' => '_self',
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table($menuItemsTable)->insert($menuItems);
    }
}
