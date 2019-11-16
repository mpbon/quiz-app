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
            // Question 1:
            [
                'choice' => 'Software Eligibility and Optimization',
                'question_id' => 1,
            ],
            [
                'choice' => 'Search Engine Optimization', //answer
                'question_id' => 1,
            ],
            [
                'choice' => 'Some Evil Ogres',
                'question_id' => 1,
            ],
            [
                'choice' => 'Server Entries Object',
                'question_id' => 1,
            ],
            // Question 2:
            [
                'choice' => 'Mark Zuckerberg',
                'question_id' => 2,
            ],
            [
                'choice' => 'Evan Me',
                'question_id' => 2,
            ],
            [
                'choice' => 'Cody McCoderson',
                'question_id' => 2,
            ],
            [
                'choice' => 'Evan You', //answer
                'question_id' => 2,
            ],
            // Question: 3
            [
                'choice' => 'A tasty dessert',
                'question_id' => 3,
            ],
            [
                'choice' => 'An MVC framework', //answer
                'question_id' => 3,
            ],
            [
                'choice' => 'A coding language',
                'question_id' => 3,
            ],
            [
                'choice' => 'A library',
                'question_id' => 3,
            ],
            // Question: 4
            [
                'choice' => 'Standard Query Language',
                'question_id' => 4,
            ],
            [
                'choice' => 'Server Query Language',
                'question_id' => 4,
            ],
            [
                'choice' => 'Some Quick Lemurs',
                'question_id' => 4,
            ],
            [
                'choice' => 'Structured Query Language', //answer
                'question_id' => 4,
            ],
            // Question: 5
            [
                'choice' => 'Certified Style System',
                'question_id' => 5,
            ],
            [
                'choice' => 'Coded Style Sheets',
                'question_id' => 5,
            ],
            [
                'choice' => 'Coding Standard Syntax',
                'question_id' => 5,
            ],
            [
                'choice' => 'Cascading Style Sheets', //answer
                'question_id' => 5,
            ],
            // Question: 6
            [
                'choice' => '<h1>', //answer
                'question_id' => 6,
            ],
            [
                'choice' => '<header>',
                'question_id' => 6,
            ],
            [
                'choice' => '<h6>',
                'question_id' => 6,
            ],
            [
                'choice' => '<head>',
                'question_id' => 6,
            ],
            // Question: 7
            [
                'choice' => '<image src="image.gif" alt="MyImage">',
                'question_id' => 7,
            ],
            [
                'choice' => '<img src="image.gif" alt="MyImage">', // answer
                'question_id' => 7,
            ],
            [
                'choice' => '<img href="image.gif" alt="MyImage">',
                'question_id' => 7,
            ],
            [
                'choice' => '<img alt="MyImage">image.gif</img>',
                'question_id' => 7,
            ],
        ]);

        DB::table('questions')->insert([
            [
                'question' => 'What does SEO stand for?',
                'answer_id' => 1
            ],
            [
                'question' => 'Who created Vue.js?',
                'answer_id' => 7
            ],
            [
                'question' => 'What is Laravel?',
                'answer_id' => 9
            ],
            [
                'question' => 'What does SQL stand for?',
                'answer_id' => 15
            ],
            [
                'question' => 'What does CSS stand for?',
                'answer_id' => 19
            ],
            [
                'question' => 'Choose the correct HTML tag for the largest heading',
                'answer_id' => 20
            ],
            [
                'question' => 'What is the correct HTML for inserting an image?',
                'answer_id' => 25
            ],
        ]);
    }
}
