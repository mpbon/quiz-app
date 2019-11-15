<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [
                'herring' => 'Software Eligibility and Optimization',
                'question_id' => 1,
            ],
            [
                'herring' => 'Some Evil Ogres',
                'question_id' => 1,
            ],
            [
                'herring' => 'Server Entries Object',
                'question_id' => 1,
            ],
            [
                'herring' => 'Mark Zuckerberg',
                'question_id' => 2,
            ],
            [
                'herring' => 'Evan Me',
                'question_id' => 2,
            ],
            [
                'herring' => 'Cody McCoderson',
                'question_id' => 2,
            ],
            [
                'herring' => 'A tasty dessert',
                'question_id' => 3,
            ],
            [
                'herring' => 'A coding language',
                'question_id' => 3,
            ],
            [
                'herring' => 'A library',
                'question_id' => 3,
            ],
            [
                'herring' => 'Standard Query Language',
                'question_id' => 4,
            ],
            [
                'herring' => 'Server Query Language',
                'question_id' => 4,
            ],
            [
                'herring' => 'Some Quick Lemurs',
                'question_id' => 4,
            ],
            [
                'herring' => 'Certified Style System',
                'question_id' => 5,
            ],
            [
                'herring' => 'Coded Style Sheets',
                'question_id' => 5,
            ],
            [
                'herring' => 'Coding Standard Syntax',
                'question_id' => 5,
            ],
            [
                'herring' => '<header>',
                'question_id' => 6,
            ],
            [
                'herring' => '<h6>',
                'question_id' => 6,
            ],
            [
                'herring' => '<head>',
                'question_id' => 6,
            ],
            [
                'herring' => '<image src="image.gif" alt="MyImage">',
                'question_id' => 7,
            ],
            [
                'herring' => '<img href="image.gif" alt="MyImage">',
                'question_id' => 7,
            ],
            [
                '<img alt="MyImage">image.gif</img>',
                'question_id' => 7,
            ],
        ]);

        DB::table('questions')->insert([
            [
                'question' => 'What does SEO stand for?',
                'solution' => 'Search Engine Optimization'
            ],
            [
                'question' => 'Who created Vue.js?',
                'solution' => 'Evan You'
            ],
            [
                'question' => 'What is Laravel?',
                'solution' => 'An MVC framework'
            ],
            [
                'question' => 'What does SQL stand for?',
                'solution' => 'Structured Query Language'
            ],
            [
                'question' => 'What does CSS stand for?',
                'solution' => 'Cascading Style Sheets'
            ],
            [
                'question' => 'Choose the correct HTML tag for the largest heading',
                'solution' => '<h1>'
            ],
            [
                'question' => 'What is the correct HTML for inserting an image?',
                'solution' => '<img src="image.gif" alt="MyImage">'
            ],
        ]);
    }
}
