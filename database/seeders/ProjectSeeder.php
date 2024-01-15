<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $projects = config('db.projects');
            foreach ($projects as $project) {
            $new_project = new Project();
            $new_project->name = $project['name'];
            $new_project->description = $project['description'];
            $new_project->language = $project['language'];
            $new_project->image = $project['image'];
            $new_project->save();
        }
    }
}
