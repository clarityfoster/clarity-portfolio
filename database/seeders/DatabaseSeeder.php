<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $list = [
            [
                'name' => 'Blog',
                'language' => 'Laravel',
                'github_url' => 'https://github.com/clarityfoster/blog',
            ],
            [
                'name' => 'Quiz Game',
                'language' => 'Laravel',
                'github_url' => 'https://github.com/clarityfoster/blog',
            ],
            [
                'name' => 'Null',
                'language' => 'Null',
                'github_url' => '',
            ],
        ];
        foreach ($list as $item) {
            \App\Models\Someprj::factory()->create([
                'name' => $item['name'],
                'language' => $item['language'],
                'github_url' => $item['github_url'],
            ]
            );
        }
        $list = [
            [
                'title' => 'Frontend development as your needs',
                'body' => 'Save your favorite articles to read offline, sync your reading lists     across devices and customize your
                    reading experience with the official Wikipedia app across devices and customize your reading.',
                'class' => 'abCard',
            ],
            [
                'title' => 'Frontend development as your needs',
                'body' => 'Save your favorite articles to read offline, sync your reading lists     across devices and customize your
                    reading experience with the official Wikipedia app across devices and customize your reading.',
                'class' => 'abCard1',
            ],
            [
                'title' => 'Frontend development as your needs',
                'body' => 'Save your favorite articles to read offline, sync your reading lists     across devices and customize your
                    reading experience with the official Wikipedia app across devices and customize your reading.',
                'class' => 'abCard2',
            ],
            [
                'title' => 'Frontend development as your needs',
                'body' => 'Save your favorite articles to read offline, sync your reading lists     across devices and customize your
                    reading experience with the official Wikipedia app across devices and customize your reading.',
                'class' => 'abCard3',
            ]
        ];
        foreach($list as $item) {
            \App\Models\Ability::factory()->create([
                'title' => $item['title'],
                'body' => $item['body'],
                'class' => $item['class'],
            ]);
        }
        $list = [
            'Frontend', 'Backend', 'UI/UX',
        ];
        foreach($list as $list) {
            \App\Models\Category::factory()->create(['name' => $list]);
        }
        $list = [
            [
                [
                    'title' => 'User Authentication',
                    'body' => 'Registration and login system for users. Password reset functionality.',
                    'project_id' => 1,
                ],
                [
                    'title' => 'Post Creation With Privacy',
                    'body' => 'Users can create, edit, and delete their own blog posts. Articles can be posted with privacy like public, friends only, and only me.',
                    'project_id' => 1,
                ],
                [
                    'title' => 'Like And Comment System',
                    'body' => 'Users can leave comments on posts. Comments can be deleted by the user and replied to by other users.',
                    'project_id' => 1,
                ],
                [
                    'title' => 'Follow System',
                    'body' => 'Users can follow each other.',
                    'project_id' => 1,
                ],
                [
                    'title' => 'Admin Dashboard:',
                    'body' => 'Admins can change the roles like managers and users. Users can be banned by admins and managers.',
                    'project_id' => 1,
                ],
            ],
            [
                [
                    'title' => 'User Authentication',
                    'body' => 'Registration and login system for users. Password reset functionality.',
                    'project_id' => 2,
                ],
                [
                    'title' => 'Participating Quiz',
                    'body' => 'Users can participate in different quizzes by categories.',
                    'project_id' => 2,
                ],
                [
                    'title' => 'Quiz Creation',
                    'body' => 'Admins and managers can create the quizzes by categories.',
                    'project_id' => 2,
                ],
                [
                    'title' => 'Leaderboard',
                    'body' => 'Leaderboard shows which users are ranked at the top based on their quiz score.',
                    'project_id' => 2,
                ],
                [
                    'title' => 'Admin Dashboard:',
                    'body' => 'Admins can change the roles like managers and users. Users can be banned by admins and managers.',
                    'project_id' => 2,
                ],
            ],
        ];
        foreach ($list as $features) {
            foreach ($features as $feature) {
                \App\Models\Feature::factory()->create([
                    'title' => $feature['title'], 
                    'body' => $feature['body'], 
                    'project_id' => $feature['project_id'],
                ]);
            }
        }
        $list = [
            [
                'name' => 'Blog',
                'body' => 'A simple blog application built with Laravel, showcasing the use of the framework to create a basic blogging platform. This project includes essential features like user authentication, post creation, and commenting functionality.',
                'feature_id' => 1,
                'tech_id' => 1,
                'category_id' => 2,
                'project_img' => 'blog.png',
                'video_url' => 'https://www.youtube.com/embed/ylInsbXwSGg',
                'github_url' => 'https://github.com/clarityfoster/blog',
            ],
            [
                'name' => 'Quiz Game',
                'body' => 'This is a web-based quiz game built using Laravel. The app allows users to participate in various quizzes, test their knowledge, and view their scores. It features user authentication, quiz and users management, and leaderboard.',
                'feature_id' => 2,
                'tech_id' => 2,
                'category_id' => 2,
                'project_img' => 'quiz.png',
                'video_url' => 'https://www.youtube.com/embed/E6NuFvJbRfk',
                'github_url' => 'https://github.com/clarityfoster/quiz-game',
            ],
        ];
        foreach($list as $list) {
            $imgPath = Storage::disk('public')->putFile('img', new \Illuminate\Http\File(public_path('img/' . $list['project_img'])));
            \App\Models\Project::factory()->create([
                'name' => $list['name'],
                'body' => $list['body'],
                'feature_id' => $list['feature_id'],
                'tech_id' => $list['tech_id'],
                'github_url' => $list['github_url'],
                'category_id' => $list['category_id'],
                'video_url' => $list['video_url'],
                'project_img' => $imgPath,
            ]);
        }
        $tech = [
            ['name' => 'Laravel', 'project_id' => 1],
            ['name' => 'Laravel', 'project_id' => 2],
            ['name' => 'MySQL(managed using phpMyAdmin)', 'project_id' => 1],
            ['name' => 'MySQL(managed using phpMyAdmin)', 'project_id' => 2],
            ['name' => 'HTML', 'project_id' => 1],
            ['name' => 'HTML', 'project_id' => 2],
            ['name' => 'SCSS', 'project_id' => 2],
            ['name' => 'Bootstrap', 'project_id' => 1],
            ['name' => 'Bootstrap', 'project_id' => 2],
        ];
        foreach ($tech as $item) {
            \App\Models\Tech::factory()->create([
                'name' => $item['name'],
                'project_id' => $item['project_id'],
            ]);
        }
    }
}
