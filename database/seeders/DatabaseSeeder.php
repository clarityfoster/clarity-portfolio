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
        // Some Projects
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
                'name' => 'NULL',
                'language' => 'NULL',
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

        // Abilities
        $list = [
            [
                'title' => 'Frontend development as your needs',
                'body' => 'Proficient in HTML, CSS, and JavaScript, with experience in Bootstrap and Sass for building responsive, high-performing interfaces. Focused on delivering smooth and consistent user experiences across devices.',
            ],
            [
                'title' => 'Backend development as your needs',
                'body' => 'Skilled in server-side technologies like PHP, with strong knowledge in database management. Emphasizes secure, efficient application logic and reliable data handling.',
            ],
            [
                'title' => 'UI designs as your needs',
                'body' => 'Adept at crafting intuitive, visually appealing interfaces using Figma and Adobe XD. Prioritizes responsive layouts, cohesive design, and usability, ensuring interfaces look great on all screens.',
            ],
            [
                'title' => 'Database Management',
                'body' => 'Experienced in SQL and NoSQL databases, with skills in organizing and querying data efficiently. Emphasizes data security and performance optimization to support reliable application functionality.',
            ]
        ];
        foreach($list as $item) {
            \App\Models\Ability::factory()->create([
                'title' => $item['title'],
                'body' => $item['body'],
            ]);
        }

        // Categories
        $list = [
            'Frontend', 'Backend', 'UI/UX',
        ];
        foreach($list as $list) {
            \App\Models\Category::factory()->create(['name' => $list]);
        }

        // Features
        $list = [
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
            [
                'title' => 'Homepage:',
                'body' => 'Navigation Bar linking to different sections and it\'s displaying the most popular items.',
                'project_id' => 3,
            ],
            [
                'title' => 'Hot Items:',
                'body' => 'It\'s displaying hot items among the customers.',
                'project_id' => 3,
            ],
            [
                'title' => 'Foods List:',
                'body' => 'Showing all of the food items that can be ordered from this shop.',
                'project_id' => 3,
            ],
            [
                'title' => 'Delievery System:',
                'body' => 'Displaying how to deliever and explain the delievery\'s fees.',
                'project_id' => 3,
            ],
            [
                'title' => 'Contact Page:',
                'body' => 'Adding contact form to give feedback from customers.',
                'project_id' => 3,
            ],
            [
                'title' => 'Authentication:',
                'body' => 'Secure login keeps your account personalized, so you can save movies, create playlists, and get tailored recommendations.',
                'project_id' => 4,
            ],
            [
                'title' => 'Movies by Genre:',
                'body' => 'Effortlessly explore movies across genres like action, drama, comedy, and more, ensuring there is something for every mood.',
                'project_id' => 4,
            ],
            [
                'title' => 'Movie Detail Page:',
                'body' => 'Each movie has a detailed page with synopsis, cast, ratings, trailers, and more, making it easy to dive into each title before watching.',
                'project_id' => 4,
            ],
            [
                'title' => 'Advanced Filters:',
                'body' => 'Narrow down your movie search by genre, release year, rating, country, and quality, making it simple to find exactly what you are looking for.',
                'project_id' => 4,
            ],
            [
                'title' => 'Wishlist:',
                'body' => 'Save movies you want to watch later, keeping all your favorite picks in one convenient list.',
                'project_id' => 4,
            ],
            [
                'title' => 'Premium Package:',
                'body' => 'Enjoy ad-free streaming and access to the full movie catalog with a premium subscription.',
                'project_id' => 4,
            ],
            [
                'title' => 'Setting:',
                'body' => 'Customize your experience, manage account preferences, notifications, and more, for a personalized viewing journey.',
                'project_id' => 4,
            ],
            [
                'title' => 'Home Page:',
                'body' => 'Displays the best seller of all time and new arrival items.',
                'project_id' => 5,
            ],
            [
                'title' => 'Shop By Category:',
                'body' => 'Easily navigate through products organized by categories. Find exactly what you need quickly and enjoy a tailored shopping experience.',
                'project_id' => 5,
            ],
            [
                'title' => 'User Authentication:',
                'body' => 'Secure and simple sign-in ensures your information is safe. Enjoy a personalized experience every time you log in.',
                'project_id' => 5,
            ],
            [
                'title' => 'Wishlist:',
                'body' => 'Save your favorite items in one place with our Wishlist feature. Easily track what you love and purchase later at your convenience.',
                'project_id' => 5,
            ],
            [
                'title' => 'Delievery Information:',
                'body' => 'We provide reliable delivery with clear timelines and tracking options. Expect transparent shipping costs, prompt service, and guidance in case of delays or issues, ensuring a smooth delivery experience.',
                'project_id' => 5,
            ],
            [
                'title' => 'Contact Us:',
                'body' => 'Easily reach us via email, phone, or live chat. Our contact form is also available for inquiries, ensuring we\'re accessible for all your questions and support needs.',
                'project_id' => 5,
            ],
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
        ];
        foreach ($list as $feature) {
            \App\Models\Feature::factory()->create([
                'title' => $feature['title'], 
                'body' => $feature['body'], 
                'project_id' => $feature['project_id'],
            ]);
        }

        // Main Project
        $projects = [
            [
                'name' => 'Blog',
                'pre_body' => 'A simple blog application built with Laravel, showcasing the use of the framework to create a basic blogging platform.',
                'body' => 'A simple blog application built with Laravel, showcasing the use of the framework to create a basic blogging platform. This project includes essential features like user authentication, post creation, and commenting functionality.',
                'feature_id' => 1,
                'tech_id' => 1,
                'category_id' => 2,
                'project_img' => 'blog.png',
                'video_url' => 'https://www.youtube.com/embed/ylInsbXwSGg',
                'github_url' => 'https://github.com/clarityfoster/blog',
                'ui_image' => NULL,
            ],
            [
                'name' => 'Quiz Game',
                'pre_body' => 'This is a web-based quiz game built using Laravel. The app allows users to participate in various quizzes.',
                'body' => 'This is a web-based quiz game built using Laravel. The app allows users to participate in various quizzes, test their knowledge, and view their scores. It features user authentication, quiz and users management, and leaderboard.',
                'feature_id' => 2,
                'tech_id' => 2,
                'category_id' => 2,
                'project_img' => 'quiz.png',
                'video_url' => 'https://www.youtube.com/embed/E6NuFvJbRfk',
                'github_url' => 'https://github.com/clarityfoster/quiz-game',
                'ui_image' => NULL,
            ],
            [
                'name' => 'Food House',
                'pre_body' => 'This is a beautifully crafted front-end food website designed to offer a delightful experience for food lovers',
                'body' => 'This is a beautifully crafted front-end food website designed to offer a delightful experience for food lovers. With its visually appealing layout and intuitive navigation.',
                'feature_id' => '3',
                'tech_id' => '3',
                'category_id' => '1',
                'project_img' => 'foodhouse.png',
                'video_url' => 'https://www.youtube.com/embed/_rUO0zxb-94',
                'github_url' => NULL,
                'ui_image' => NULL,
            ],
            [
                'name' => 'Movie App',
                'pre_body' => 'Here\'s a template outline for a movie app, designed to highlight key sections like featured movies, etc.',
                'body' => 'Here\'s a template outline for a movie app, designed to highlight key sections like featured movies, genres, and user interaction. This layout keeps a smooth flow for exploring and discovering films.',
                'feature_id' => '4',
                'tech_id' => NULL,
                'category_id' => '3',
                'project_img' => 'moviePoster.png',
                'video_url' => NULL,
                'github_url' => NULL,
                'ui_image' => [
                    'movie1.png',
                    'movie2.png',
                    'movie3.png',
                    'movie4.png',
                    'movie5.png',
                    'movie6.png',
                    'movie7.png',
                    'movie8.png',
                    'movie9.png',
                    'movie10.png',
                    'movie11.png',
                    'movie12.png',
                    'movie13.png',
                    'movie14.png',
                    'movie15.png',
                    'movie16.png',
                    'movie17.png',
                    'movie18.png',
                    'movie19.png',
                    'movie20.png',
                    'movie21.png',
                    'movie22.png',
                    'movie23.png',
                    'movie24.png',
                    'movie25.png',
                    'movie26.png',
                    'movie27.png',
                    'movie28.png',
                    'movie29.png',
                    'movie30.png',
                    'movie31.png',
                ],
            ],
            [
                'name' => 'Clothing Website',
                'pre_body' => 'Here\'s a template outline for a clothing website, designed to highlight key sections.',
                'body' => 'Here\'s a template outline for a clothing website, designed to highlight key sections. This layout keeps a smooth flow for exploring and discovering different kind of clothings.',
                'feature_id' => '5',
                'tech_id' => NULL,
                'category_id' => '3',
                'project_img' => 'clothingPoster.png',
                'video_url' => NULL,
                'github_url' => NULL,
                'ui_image' => [
                    'clothing1.png',
                    'clothing2.png',
                    'clothing3.png',
                    'clothing4.png',
                    'clothing5.png',
                    'clothing6.png',
                    'clothing7.png',
                    'clothing8.png',
                    'clothing9.png',
                    'clothing10.png',
                    'clothing11.png',
                    'clothing12.png',
                    'clothing13.png',
                    'clothing14.png',
                    'clothing15.png',
                    'clothing16.png',
                    'clothing17.png',
                    'clothing18.png',
                    'clothing19.png',
                    'clothing20.png',
                    'clothing21.png',
                    'clothing22.png',
                    'clothing23.png',
                    'clothing24.png',
                    'clothing25.png',
                    'clothing26.png',
                    'clothing27.png',
                ],
            ],
        ];
        foreach ($projects as $list) {
            $imgPath = null;
            $uiPath = null;
        
            if ($list['project_img']) {
                $imgPath = Storage::disk('public')->putFile('img', new \Illuminate\Http\File(public_path('img/' . $list['project_img'])));
            }
            if(!empty($list['ui_image'])) {
                foreach($list['ui_image'] as $image) {
                    $uiPath[] = Storage::disk('public')->putFile('img', new \Illuminate\Http\File(public_path('img/' . $image)));
                }
            }
        
            \App\Models\Project::factory()->create([
                'name' => $list['name'],
                'pre_body' => $list['pre_body'],
                'body' => $list['body'],
                'feature_id' => $list['feature_id'],
                'tech_id' => $list['tech_id'],
                'github_url' => $list['github_url'],
                'category_id' => $list['category_id'],
                'video_url' => $list['video_url'],
                'project_img' => $imgPath,
                'ui_image' => isset($uiPath) ? json_encode($uiPath) : null,
            ]);
        }
    
        // Tech
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
            ['name' => 'HTML', 'project_id' => 3],
            ['name' => 'CSS', 'project_id' => 3],
            ['name' => 'Javascript', 'project_id' => 3],
        ];
        foreach ($tech as $item) {
            \App\Models\Tech::factory()->create([
                'name' => $item['name'],
                'project_id' => $item['project_id'],
            ]);
        }

        // Essence
        $essence = [
            [
                'essence_img' => 'coding.svg',
                'title' => 'Who am I?',
                'subtitle' => 'Let me introduce you',
                'body' => 'I am a motivated junior web developer with a solid foundation
                                    in Laravel. I have experience building web applications, web
                                    design, and managing databases. I focus on writing clean,
                                    maintainable code.',
                'cv_path' => 'cv/CMM_CV.pdf',
            ],
            [
                'essence_img' => 'UI:UX.svg',
                'title' => 'Web Design',
                'subtitle' => 'Please check how I can work!',
                'body' => 'I have experience in both web design and development, so I can create websites that are both visually appealing and functional. I can able to handle both the technical and creative sides of web development.',
                'cv_path' => 'cv/CMM_CV.pdf',
            ],
            [
                'essence_img' => 'creative.svg',
                'title' => 'Critical thinking',
                'subtitle' => 'Please check how I can work!',
                'body' => 'I also have strong critical thinking skills. This means I can analyze problems and find effective solutions. I enjoy thinking deeply about different situations and making decisions based on careful consideration. My critical thinking helps me in both web design and development.',
                'cv_path' => 'cv/CMM_CV.pdf',
            ],
        ];
        foreach($essence as $item) {
            $imgPath = Storage::disk('public')->putFile('img', new \Illuminate\Http\File(public_path('img/' . $item['essence_img'])));

            \App\Models\Essence::factory()->create([
                'title' => $item['title'],
                'subtitle' => $item['subtitle'],
                'body' => $item['body'],
                'cv_path' => $item['cv_path'],
                'essence_img' => $imgPath,
            ]);
        }

        // Cards
        $card = [
           [
            'icon_class' => 'bi bi-patch-check-fill fs-4',
            'card_name' => 'Completed',
            'essence_id' => 1,
           ],
           [
            'icon_class' => 'bi bi-patch-check-fill fs-4',
            'card_name' => 'Completed',
            'essence_id' => 2,
           ],
        ];
        foreach($card as $cards) {
            \App\Models\Card::factory()->create([
                'icon_class' => $cards['icon_class'],
                'card_name' => $cards['card_name'],
                'essence_id' => $cards['essence_id'],
            ]);
        }
    }
}
