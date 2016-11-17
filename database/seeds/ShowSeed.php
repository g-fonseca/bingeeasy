<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

Use App\Show;


class ShowSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // clear out any old data if it exists
        DB::table('shows')->delete();

        $data = [
            [
                'id' => 1,
                'name' => 'Empire',
                'time' => null,
                'photo' => null,
                'season' => null,
                'network' => null,
                'day' => null,
                'active' => 1,
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 2,
                'name' => 'Gotham',
                'time' => null,
                'photo' => null,
                'season' => null,
                'network' => null,
                'day' => null,
                'active' => 1,
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 3,
                'name' => 'Jane the Virgen',
                'time' => null,
                'photo' => null,
                'season' => null,
                'network' => null,
                'day' => null,
                'active' => 1,
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ]

        ];

        foreach ($data as $item) {
            
            $show = new Show();

            foreach ($item as $key => $value) {
                $show->{$key} = $value;
            }

            $show->save();
        }
    }
}
