<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'title' => 'Using SQL ORMs with Node.js',
            'summary' => 'In this course, you\'ll learn how to use the Sequelize ORM to leverage the power of SQL within your Node.js applications.',
            'duration' => '121',
            'language' => 'JavaScript',
            'difficulty' => 'Intermediate',
            'stages' => '3',
        ]);
        DB::table('courses')->insert([
            'title' => 'Introducing Dictionaries',
            'summary' => 'Another useful Python data structure is the dictionary. Learn how to write one and use one in your day to day Python code.',
            'duration' => '60',
            'language' => 'Python',
            'difficulty' => 'Beginner',
            'stages' => '2',
        ]);
        DB::table('courses')->insert([
            'title' => 'Python Sequences',
            'summary' => 'Discover several types of Python sequences, many ways of sequence iterations, and all of the common sequence operations.',
            'duration' => '61',
            'language' => 'Python',
            'difficulty' => 'Intermediate',
            'stages' => '2',
        ]);
        DB::table('courses')->insert([
            'title' => 'Functions, Packing, and Unpacking',
            'summary' => 'Learn the ins and outs of Python functions, how to send and receive values to functions, and all about Python packing and unpacking.',
            'duration' => '65',
            'language' => 'Python',
            'difficulty' => 'Beginner',
            'stages' => '3',
        ]);
        DB::table('courses')->insert([
            'title' => 'Introducing Tuples',
            'summary' => 'Learn about a python data structures that\'s similar to lists, but with one key difference!',
            'duration' => '13',
            'language' => 'Python',
            'difficulty' => 'Beginner',
            'stages' => '1',
        ]);
        DB::table('courses')->insert([
            'title' => 'React Authentication',
            'summary' => 'In this course, you will learn how to implement the Basic Authentication scheme in a React application using an Express REST API.',
            'duration' => '82',
            'language' => 'JavaScript',
            'difficulty' => 'Intermediate',
            'stages' => '3',
        ]);
        DB::table('courses')->insert([
            'title' => 'Designing Layouts',
            'summary' => 'In this course you\'ll learn how to apply design principles through a series of examples. Each example will include some component that can be improved, and by making the improvement, you\'ll develop strong aesthetic sensibilities about things like visual and typographic hierarchy, the use of grids and alignment in layouts, and how to choose colors.',
            'duration' => '52',
            'language' => 'Design',
            'difficulty' => 'Beginner',
            'stages' => '2',
        ]);
        DB::table('courses')->insert([
            'title' => 'AJAX Basics',
            'summary' => 'AJAX is an important front-end web technology that lets JavaScript communicate with a web server. It lets you load new content without leaving the current page, creating a better, faster experience for your web site\'s visitors. In this course, you\'ll learn how AJAX works and how you can use JavaScript to communicate with a web server. We\'ll use plain JavaScript to create AJAX requests and use the response to dynamically update your web pages. Along the way, you\'ll build mini-projects to reinforce your learning.',
            'duration' => '149',
            'language' => 'JavaScript',
            'difficulty' => 'Intermediate',
            'stages' => '2',
        ]);
        DB::table('courses')->insert([
            'title' => 'Build a Simple iPhone App with Swift v5',
            'summary' => 'Building the Random Facts app will teach you how to use the Swift language and the Xcode and Interface Builder tools. You will also learn about core concepts such as views and view controllers, creating a data model, and how to refactor your code. Towards the end you will have finished creating a fun app that will get you oriented with the world of iOS development.',
            'duration' => '120',
            'language' => 'iOS',
            'difficulty' => 'Beginner',
            'stages' => '6',
        ]);
        DB::table('courses')->insert([
            'title' => 'C# Basics',
            'summary' => 'C# is the most popular programming language in the Microsoft ecosystem of products. C# code is designed to run fast and to be easily maintainable. In C# Basics, we\'ll learn how to work with C# to write simple programs.',
            'duration' => '188',
            'language' => 'C#',
            'difficulty' => 'Beginner',
            'stages' => '5',
        ]);
        DB::table('courses')->insert([
            'title' => 'Design Systems',
            'summary' => 'Design Systems are more than just bits of UI and visual guidelines. They\'re living documents, usually created by companies or design groups, that are intended to guide the creation of user experiences. They often touch upon everything from high level goals and user interface metaphors down to details like buttons and drop shadows. In this course, we\'ll learn about the fundamentals of design systems.',
            'duration' => '82',
            'language' => 'Design',
            'difficulty' => 'Intermediate',
            'stages' => '3',
        ]);
        DB::table('courses')->insert([
            'title' => 'Using Cookies and JWTs for Secure Authentication',
            'summary' => 'Refactor an existing authentication project by using cookies and JSON Web Token to increase security. Cookies are a way for a browser to store information while tokens are a stand-in or representation for something else.',
            'duration' => '71',
            'language' => 'PHP',
            'difficulty' => 'Advanced',
            'stages' => '2',
        ]);
    }
}
