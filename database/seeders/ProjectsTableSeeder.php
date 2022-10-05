<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    private $_projects = [
        ["title" => "Project 5", "description" => "Deskripsi project 1"],
        ["title" => "Project 6", "description" => "Deskripsi project 2"],
        ["title" => "Project 7", "description" => "Deskripsi project 3"],
        ["title" => "Project 8", "description" => "Deskripsi project 4"],
        ["title" => "Project 9", "description" => "Deskripsi project 5"],
        ["title" => "Project 10", "description" => "Deskripsi project 6"],
        ["title" => "Project 11", "description" => "Deskripsi project 7"],
        ["title" => "Project 12", "description" => "Deskripsi project 8"],
        ["title" => "Project 13", "description" => "Deskripsi project 9"],
        ["title" => "Project 14", "description" => "Deskripsi project 10"]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach ($this->_projects as $project) {
            $data[] = [
                'title' => $project['title'],
                'description' => $project['description']
            ];       
        }
        DB::table('projects')->insert($data);
    }
}
