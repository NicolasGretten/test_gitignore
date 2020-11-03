<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('data')->table('images')->insert([
            'id'                    => substr('cdn_' . md5(Str::uuid()),0 ,25),
            'thumbnail_filename'    => Str::uuid() . '.jpg',
            'original_filename'     => Str::uuid() . '.jpg',
            'image_filename'        => Str::uuid() . '.jpg',
            'height'                =>random_int(768, 1800),
            'width'                 =>random_int(800, 2046),
            'checksum'              => hash('sha256', Str::uuid()),
            'deleted_at'            => NULL,
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now()
        ]);
        DB::connection('data')->table('images')->insert([
            'id'                    => substr('cdn_' . md5(Str::uuid()),0 ,25),
            'thumbnail_filename'    => Str::uuid() . '.jpg',
            'original_filename'     => Str::uuid() . '.jpg',
            'image_filename'        => Str::uuid() . '.jpg',
            'height'                =>random_int(768, 1800),
            'width'                 =>random_int(800, 2046),
            'checksum'              => hash('sha256', Str::uuid()),
            'deleted_at'            => NULL,
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now()
        ]);
        DB::connection('data')->table('images')->insert([
            'id'                    => substr('cdn_' . md5(Str::uuid()),0 ,25),
            'thumbnail_filename'    => Str::uuid() . '.jpg',
            'original_filename'     => Str::uuid() . '.jpg',
            'image_filename'        => Str::uuid() . '.jpg',
            'height'                =>random_int(768, 1800),
            'width'                 =>random_int(800, 2046),
            'checksum'              => hash('sha256', Str::uuid()),
            'deleted_at'            => Carbon::now(),
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now()
        ]);
        DB::connection('data')->table('images')->insert([
            'id'                    => substr('cdn_' . md5(Str::uuid()),0 ,25),
            'thumbnail_filename'    => Str::uuid() . '.jpg',
            'original_filename'     => Str::uuid() . '.jpg',
            'image_filename'        => Str::uuid() . '.jpg',
            'height'                =>random_int(768, 1800),
            'width'                 =>random_int(800, 2046),
            'checksum'              => hash('sha256', Str::uuid()),
            'deleted_at'            => NULL,
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now()
        ]);
    }
}
