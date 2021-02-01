<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $task = new Task();
        $task->name= 'Alice';
        $task->description= 'Alice Kessln Columbia, y ex presidenta de la Organización de Historiadores Americanos, y especialista en el trabajo estadounidense y la exploración comparativa e interdisciplinaria de la mujer y el género.';
        $task->content='hola Alice';
        $task->imagen='Kessler-Harris.jpeg';
        $task->save();

        $task1 = new Task();
        $task1->name= 'Magdalena';
        $task1->description= 'Alice Kessln Columbia, y ex presidenta de la Organización de Historiadores Americanos, y especialista en el trabajo estadounidense y la exploración comparativa e interdisciplinaria de la mujer y el género.';
        $task1->content='hola Alice';
        $task1->imagen='magdalena_leon_gomez.jpg';
        $task1->save();
        
        
        $task2 = new Task();
        $task2->name= 'Laura';
        $task2->description= 'Alice Kessln Columbia, y ex presidenta de la Organización de Historiadores Americanos, y especialista en el trabajo estadounidense y la exploración comparativa e interdisciplinaria de la mujer y el género.';
        $task2->content='hola Alice';
        $task2->imagen='laura-perls.jpg';
        $task2->save();

        $task3 = new Task();
        $task3->name= 'Karen';
        $task3->description= 'Alice Kessln Columbia, y ex presidenta de la Organización de Historiadores Americanos, y especialista en el trabajo estadounidense y la exploración comparativa e interdisciplinaria de la mujer y el género.';
        $task3->content='hola Alice';
        $task3->imagen='Karen_Horney_1938.jpg';
        $task3->save();

        $task4 = new Task();
        $task4->name= 'Lisa';
        $task4->description= 'Alice Kessln Columbia, y ex presidenta de la Organización de Historiadores Americanos, y especialista en el trabajo estadounidense y la exploración comparativa e interdisciplinaria de la mujer y el género.';
        $task4->content='hola Alice';
        $task4->imagen='LisaAdkins.png';
        $task4->save();


        $task5 = new Task();
        $task5->name= 'Lizabeth';
        $task5->description= 'Alice Kessln Columbia, y ex presidenta de la Organización de Historiadores Americanos, y especialista en el trabajo estadounidense y la exploración comparativa e interdisciplinaria de la mujer y el género.';
        $task5->content='hola Alice';
        $task5->imagen='Lizabeth_Cohen.jpg';
        $task5->save();
    }
}
