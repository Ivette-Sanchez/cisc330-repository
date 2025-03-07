<?php

namespace Model;

class PostModel {
    public function getArray() {

        return [
            [
                'title' => 'Introduction to PHP',
                'description' => 'Learn the basics of PHP programming.'
            ],
            [
                'title' => 'Understanding MVC in Web Development',
                'description' => 'A guide to the Model-View-Controller pattern in PHP.'
            ],
            [
                'title' => 'Building REST APIs with PHP',
                'description' => 'Step-by-step tutorial on creating RESTful APIs using PHP.'
            ]
        ];

    }

   
}

