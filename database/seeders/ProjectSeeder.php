<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = Type::all();

        $ids = $types->pluck('id')->all();




        DB::table('projects')->truncate();
        for($i = 0; $i < 30 ; $i++){
            $new_project = new Project();
            $new_project->name = $faker->sentence(5);
            $new_project->slug = str::slug($new_project->name);
            $new_project->description = $faker->text();
            $new_project->github_url = $faker->url();
            $new_project->type_id = $faker->optional()->randomElement($ids);
            $new_project->save();
        }
        
    }
}
