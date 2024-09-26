<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Tag::create([
            'name' => 'ايجار',
        ]);
        Tag::create([
            'name' => 'بيع',
        ]);
        Tag::create([
            'name' => 'طابق واحد',
        ]);
        Tag::create([
            'name' => 'فيلا',
        ]);
        Tag::create([
            'name' => 'شقة',
        ]);
        Tag::create([
            'name' => 'القاهرة',
        ]);
        Tag::create([
            'name' => 'حديقة',
        ]);

    }
}
