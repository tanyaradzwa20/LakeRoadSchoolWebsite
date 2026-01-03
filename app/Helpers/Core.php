<?php


function getPrimaryCurriculum()
{
    $nursery = [
        "title" => "Nursery",
        "description" => "At Nursery, Lake Road PTA School offers four (4) subjects in which our Learners are prepared in order to advance to the Reception class.",
        "data" => [
            [
                "subject" => "English",
                "topics" => [
                    "Oral Language",
                    "Pre-Writing",
                    "Pre-Reading",
                    "Phonics",
                    "News"
                ],
            ],
            [
                "subject" => "ART Work",
                "topics" => [
                    "Physical Education",
                    "Songs & Rhymes",
                    "Creative Activities",
                    "Free Play"
                ]
            ],
            [
                "subject" => "Number Work",
                "topics" => [
                    "Oral",
                    "Practical",
                    "Written"
                ]
            ],
            [
                "subject" => "Topic Work",
                "topics" => [
                    "Social Studies",
                    "Science",
                    "Religious Education"
                ]
            ]
        ]
    ];
    $reception = [
        "title" => "Reception",
        "description" => "At Reception, Lake Road PTA School offers eight (8) subjects in which our Learners are prepared to proceed to Grade one (1) class.",
        "data" => [
            [
                'subject' => 'English',
                'topics' => [
                    'Pre-Reading',
                    'Pre-Writing',
                    'News',
                    'Oral Language',
                    'Songs',
                    'Rhymes',
                    'Stories',
                    'Phonics',
                    'Reading',
                    'Handwriting',
                    'Comprehension',
                ],
            ],
            [
                'subject' => 'Number Work',
                'topics' => [
                    'Oral',
                    'Practical',
                    'Written',
                ],
            ],
            [
                'subject' => 'Topic Work',
                'topics' => [
                    'Science',
                    'Social Studies',
                    'Religious Education',
                ],
            ],
            [
                'subject' => 'French',
                'topics' => [],
            ],
            [
                'subject' => 'Music',
                'topics' => [],
            ],
            [
                'subject' => 'Swimming',
                'topics' => [],
            ],
            [
                'subject' => 'Physical Education',
                'topics' => [],
            ],
            [
                'subject' => 'Art',
                'topics' => [],
            ],
        ]
    ];
    $grade1 = [
        "title" => "Grade One",
        "description" => "In Grade One (1), Lake Road PTA School offers nine (9) subjects in which our Learners are prepared in order to proceed to Grade 2 (1) class.",
        "data" =>[
            [
                'subject' => 'English Language',
                'topics' => [
                    'Phonics',
                    'Creative Writing',
                    'Spellings',
                    'Comprehension',
                    'Reading & Writing',
                ],
            ],
            [
                'subject' => 'Number Work',
                'topics' => [
                    'Oral',
                    'Practical',
                    'Written',
                ],
            ],
            [
                'subject' => 'Social Studies',
                'topics' => [],
            ],
            [
                'subject' => 'Integrated Science',
                'topics' => [],
            ],
            [
                'subject' => 'French',
                'topics' => [],
            ],
            [
                'subject' => 'Information Technology',
                'topics' => [],
            ],
            [
                'subject' => 'Music',
                'topics' => [],
            ],
            [
                'subject' => 'Physical Education',
                'topics' => [],
            ],
            [
                'subject' => 'Art',
                'topics' => [],
            ],
        ]

    ];
    $grade2 = [
        "title" => "Grade Two",
        "description" => "In Grade Two (2), Lake Road PTA School offers nine (9) subjects in which our Learners are prepared in order to proceed to Grade three (3) class.",
        'data'=> [
            [
                'subject' => 'Literacy & Languages',
                'topics' => [
                    'Grammar',
                    'Reading',
                    'Creative Writing',
                    'Oral Language',
                    'Spelling',
                    'Phonics',
                    'Handwriting',
                ],
            ],
            [
                'subject' => 'Mathematics',
                'topics' => [
                    'Mental Maths',
                    'Oral Skills',
                    'Computational Skills',
                    'Practical Skills',
                ],
            ],
            [
                'subject' => 'Social Studies',
                'topics' => [],
            ],
            [
                'subject' => 'Integrated Science',
                'topics' => [],
            ],
            [
                'subject' => 'French',
                'topics' => [],
            ],
            [
                'subject' => 'Information Technology',
                'topics' => [],
            ],
            [
                'subject' => 'Music',
                'topics' => [],
            ],
            [
                'subject' => 'Physical Education',
                'topics' => [],
            ],
            [
                'subject' => 'Art',
                'topics' => [],
            ],
        ]


    ];
    $grade3 = [
        "title" => "Grades Three (3) - Four (4)",
        "description" => "For Grades Three (3) - Four (4), Lake Road PTA School offers ten (10) subjects in which our Learners are prepared in order to proceed to Grade four (4) and five (5) classes respectively.",
        "data"=>[
            [
                'subject' => 'English',
                'topics' => [
                    'Phonics',
                    'Creative Writing',
                    'Handwriting',
                    'Grammar',
                    'Comprehension',
                    'Spelling',
                ],
            ],
            [
                'subject' => 'Mathematics',
                'topics' => [],
            ],
            [
                'subject' => 'Social & Development Studies',
                'topics' => [],
            ],
            [
                'subject' => 'Integrated Science',
                'topics' => [],
            ],
            [
                'subject' => 'French',
                'topics' => [],
            ],
            [
                'subject' => 'Information Technology',
                'topics' => [],
            ],
            [
                'subject' => 'Music',
                'topics' => [],
            ],
            [
                'subject' => 'Physical Education',
                'topics' => [],
            ],
            [
                'subject' => 'Art',
                'topics' => [],
            ],
            [
                'subject' => 'Design & Technology',
                'topics' => [],
            ],
            [
                'subject' => 'Home Economics',
                'topics' => [],
            ],
        ]
    ];

    $grade5 = [
        "title" => "Grades Five (5) - Six (6) - Seven (7)",
        "description" => "For Grades Five (5), Six (6) & Seven (7), Lake Road PTA School offers ten (10) subjects in which our Learners are prepared in order to proceed to Grades six (6) and seven (7) & eight (8) classes respectively.",
        "data"=> [
            [
                'subject' => 'English',
                'topics' => [],
            ],
            [
                'subject' => 'Mathematics',
                'topics' => [],
            ],
            [
                'subject' => 'Social Studies',
                'topics' => [],
            ],
            [
                'subject' => 'Integrated Science',
                'topics' => [],
            ],
            [
                'subject' => 'Verbal Reasoning (Special Paper 1)',
                'topics' => [],
            ],
            [
                'subject' => 'Non Verbal Reasoning (Special Paper 2)',
                'topics' => [],
            ],
            [
                'subject' => 'French',
                'topics' => [],
            ],
            [
                'subject' => 'Home Economics',
                'topics' => [],
            ],
            [
                'subject' => 'Technology Studies',
                'topics' => [
                    'Computers',
                    'Woodwork',
                    'Metalwork',
                    'Building Crafts',
                ],
            ],
            [
                'subject' => 'Expressive Arts',
                'topics' => [
                    'Music',
                    'Physical Education',
                    'Art',
                ],
            ],
        ]

    ];


    return [
        "nursery" => $nursery,
        "reception" => $reception,
        "grade1" => $grade1,
        "grade2" => $grade2,
        "grade3" => $grade3,
        "grade4" => $grade5,
    ];

}

function primaryFees()
{
    $nursery = [
        "title" => "Nursery",
        "description" => "Fees for Nursery pupils at Lake Road PTA School.",
        "data" => [
            'returning_pupils' => [
                'title' => 'Returning Pupils Fees',
                'fees' => [
                    [
                        'name' => 'Tuition Fee',
                        'amount' => 7700,
                        'currency' => 'ZMW',
                        'type' => 'termly',
                    ],
                    [
                        'name' => 'PTA Fund',
                        'amount' => 1500,
                        'currency' => 'ZMW',
                        'type' => 'yearly_per_child',
                    ],
                ],
                'notes' => [
                    'Pay the Tuition fee of ZMW 7,700.00 during school holidays or when school opens. Pupils will not be allowed in class until fees are fully paid.',
                    'Pay next term’s school fees during the current term to enjoy a 5% Early Bird discount and pay ZMW 7,315.00.',
                ],
            ],

            'new_pupils' => [
                'title' => 'New Pupils Fees',
                'fees' => [
                    [
                        'name' => 'Tuition Fee',
                        'amount' => 7700,
                        'currency' => 'ZMW',
                        'type' => 'termly',
                    ],
                    [
                        'name' => 'Assessment',
                        'amount' => 500,
                        'currency' => 'ZMW',
                        'type' => 'one_off',
                    ],
                    [
                        'name' => 'Enrolment',
                        'amount' => 3000,
                        'currency' => 'ZMW',
                        'type' => 'one_off',
                    ],
                    [
                        'name' => 'Project',
                        'amount' => 3000,
                        'currency' => 'ZMW',
                        'type' => 'one_off_per_family',
                    ],
                    [
                        'name' => 'PTA Fund',
                        'amount' => 1500,
                        'currency' => 'ZMW',
                        'type' => 'yearly_per_child',
                    ],
                ],
                'notes' => [
                    'For first-time admission into Nursery, the total payable amount is ZMW 15,700.00.',
                    'For each subsequent school term in Nursery, only the Tuition Fee of ZMW 7,700.00 will be paid.',
                ],
            ],
        ]
    ];

    $reception = [
        "title" => "Reception",
        "description" => "Fees for Reception pupils at Lake Road PTA School.",
        "data"=> [
            'returning_pupils' => [
                'title' => 'Returning Pupils Fees',
                'fees' => [
                    [
                        'name' => 'Tuition Fee',
                        'amount' => 9990,
                        'currency' => 'ZMW',
                        'type' => 'termly',
                    ],
                    [
                        'name' => 'PTA Fund',
                        'amount' => 1500,
                        'currency' => 'ZMW',
                        'type' => 'yearly_per_child',
                    ],
                ],
                'notes' => [
                    'Pay the Tuition fee of ZMW 9,990.00 during school holidays or when school opens. Pupils will not be allowed in class until fees are paid in full.',
                    'Pay next term’s school fees during the current term to enjoy a 5% Early Bird discount and pay ZMW 9,490.50.',
                ],
            ],

            'new_pupils' => [
                'title' => 'New Pupils Fees',
                'fees' => [
                    [
                        'name' => 'Tuition Fee',
                        'amount' => 9990,
                        'currency' => 'ZMW',
                        'type' => 'termly',
                    ],
                    [
                        'name' => 'Assessment',
                        'amount' => 500,
                        'currency' => 'ZMW',
                        'type' => 'one_off',
                    ],
                    [
                        'name' => 'Enrolment',
                        'amount' => 3000,
                        'currency' => 'ZMW',
                        'type' => 'one_off',
                    ],
                    [
                        'name' => 'Project',
                        'amount' => 3000,
                        'currency' => 'ZMW',
                        'type' => 'one_off_per_family',
                    ],
                    [
                        'name' => 'PTA Fund',
                        'amount' => 1500,
                        'currency' => 'ZMW',
                        'type' => 'yearly_per_child',
                    ],
                ],
                'notes' => [
                    'For first-time admission into Nursery, the total payable amount is ZMW 17,990.00.',
                    'For each subsequent school term in Nursery, only the Tuition Fee of ZMW 9,990.00 will be paid.',
                ],
            ],
        ]

    ];
    $grades = [
        "title" => "Grades 1-7",
        "description" => "Fees for Grades 1-7 pupils at Lake Road PTA School.",
        "data"=>  [
            'returning_pupils' => [
                'title' => 'Returning Pupils Fees',
                'fees' => [
                    [
                        'name' => 'Tuition Fee',
                        'amount' => 11600,
                        'currency' => 'ZMW',
                        'type' => 'termly',
                    ],
                    [
                        'name' => 'PTA Fund',
                        'amount' => 1500,
                        'currency' => 'ZMW',
                        'type' => 'yearly_per_child',
                    ],
                ],
                'notes' => [
                    'Pay the Tuition fee of ZMW 11,600.00 during school holidays or when school opens. Pupils will not be allowed in class until fees are fully paid.',
                    'Pay next term’s school fees during the current term to enjoy a 5% Early Bird discount and pay ZMW 11,020.00.',
                ],
            ],

            'new_pupils' => [
                'title' => 'New Pupils Fees',
                'fees' => [
                    [
                        'name' => 'Tuition Fee',
                        'amount' => 11600,
                        'currency' => 'ZMW',
                        'type' => 'termly',
                    ],
                    [
                        'name' => 'Assessment',
                        'amount' => 500,
                        'currency' => 'ZMW',
                        'type' => 'one_off',
                    ],
                    [
                        'name' => 'Enrolment',
                        'amount' => 3000,
                        'currency' => 'ZMW',
                        'type' => 'one_off',
                    ],
                    [
                        'name' => 'Project',
                        'amount' => 3000,
                        'currency' => 'ZMW',
                        'type' => 'one_off_per_family',
                    ],
                    [
                        'name' => 'PTA Fund',
                        'amount' => 1500,
                        'currency' => 'ZMW',
                        'type' => 'yearly_per_child',
                    ],
                ],
                'notes' => [
                    'For first-time admission into Nursery, the total payable amount is ZMW 19,600.00.',
                    'For each subsequent school term in Nursery, only the Tuition Fee of ZMW 11,600.00 will be paid.',
                ],
            ],
        ]

    ];

    return [
        "nursery" => $nursery,
        "reception" => $reception,
        "grades" => $grades,
    ];
}

function primaryCirculars(){
    $schoolCirculars = [
        [
            'number' => 1,
            'term' => 'Term 1',
            'year' => 2021,
            'title' => 'Circular No. 1, Term 1 2021',
            'information' => [
                'Civilian Day'
            ],
            'download' => true
        ],
        [
            'number' => 2,
            'term' => 'Term 3 & 2',
            'year' => 2020,
            'title' => 'Circular No. 2, Term 3 & 2 2020',
            'information' => [
                'School Uniform'
            ],
            'download' => true
        ],
        [
            'number' => 1,
            'term' => 'Term 3 & 2',
            'year' => 2020,
            'title' => 'Circular No. 1, Term 3 & 2 2020',
            'information' => [
                'COVID 19 Preventive Measures',
                'Afternoon Programme',
                'School Cafeteria',
                'School Based Assessment',
                'E-Learning Platform',
                'School Calendar'
            ],
            'download' => true
        ],
        [
            'number' => 1,
            'term' => 'Term 2',
            'year' => 2018,
            'title' => 'Circular No. 1, Term 2 2018',
            'information' => [
                'Primary School Science Fair'
            ],
            'download' => true
        ],
        [
            'number' => 2,
            'term' => 'Term 1',
            'year' => 2018,
            'title' => 'Circular No. 2, Term 1 2018',
            'information' => [
                'Primary School Upper Concert for 2018'
            ],
            'download' => true
        ],
        [
            'number' => 1,
            'term' => 'Term 1',
            'year' => 2018,
            'title' => 'Circular No. 1, Term 1 2018',
            'information' => [
                'Consultation Afternoon',
                'Afternoon Activity Programme',
                'School Lunches',
                'Educational Trips'
            ],
            'download' => true
        ],
    ];
return $schoolCirculars;
}


function primaryResults()
{
    return  [
        [
            'year' => 2023,
            'candidates' => 80,
            'highest_score' => 840,
            'lowest_score' => 633,
            'average_score' => 766,
            'progression_percentage' => 100,
        ],
        [
            'year' => 2022,
            'candidates' => 70,
            'highest_score' => 828,
            'lowest_score' => 625,
            'average_score' => 755,
            'progression_percentage' => 100,
        ],
        [
            'year' => 2021,
            'candidates' => 81,
            'highest_score' => 848,
            'lowest_score' => 653,
            'average_score' => 778,
            'progression_percentage' => 100,
        ],
        [
            'year' => 2020,
            'candidates' => 77,
            'highest_score' => 836,
            'lowest_score' => 579,
            'average_score' => 760,
            'progression_percentage' => 100,
        ],
        [
            'year' => 2019,
            'candidates' => 78,
            'highest_score' => 847,
            'lowest_score' => 672,
            'average_score' => 769,
            'progression_percentage' => 100,
        ],
        [
            'year' => 2018,
            'candidates' => 71,
            'highest_score' => 844,
            'lowest_score' => 594,
            'average_score' => 765,
            'progression_percentage' => 100,
        ],
        [
            'year' => 2017,
            'candidates' => 72,
            'highest_score' => 842,
            'lowest_score' => 643,
            'average_score' => 773,
            'progression_percentage' => 100,
        ],
        [
            'year' => 2016,
            'candidates' => 68,
            'highest_score' => 841,
            'lowest_score' => 680,
            'average_score' => 771,
            'progression_percentage' => 100,
        ],
        [
            'year' => 2015,
            'candidates' => 58,
            'highest_score' => 833,
            'lowest_score' => 693,
            'average_score' => 780,
            'progression_percentage' => 100,
        ],
        [
            'year' => 2014,
            'candidates' => 74,
            'highest_score' => 836,
            'lowest_score' => 662,
            'average_score' => 778,
            'progression_percentage' => 100,
        ],
        [
            'year' => 2013,
            'candidates' => 61,
            'highest_score' => 860,
            'lowest_score' => 623,
            'average_score' => 779,
            'progression_percentage' => 100,
        ],
        [
            'year' => 2012,
            'candidates' => 83,
            'highest_score' => 851,
            'lowest_score' => 672,
            'average_score' => 779,
            'progression_percentage' => 100,
        ],
        [
            'year' => 2011,
            'candidates' => 71,
            'highest_score' => 859,
            'lowest_score' => 661,
            'average_score' => 787,
            'progression_percentage' => 99,
        ],
    ];


}

function primarySEN()
{
    return [
        'what_is_sen' => [
            'title' => 'What is SEN?',
            'content' => [
                'SEN stands for Special Education Needs. It is a critical strategic repositioning Department in the School that deals with Pupils with learning difficulties in the areas of writing and Mathematics.',
                'This Department in the School is managed by our qualified and skilled SEN Teacher.'
            ]
        ],
        'objectives' => [
            'title' => 'SEN\'s Objectives',
            'content' => [
                'The SEN Teacher gives the Pupils remedial lessons as well as other specialized learning aimed at improving their specific area of need.',
                'SEN involves fine motor muscle training to improve Pupils\' handwriting and extensive reading program. The SEN Teacher is equal to this task which he demonstrates and performs effectively.',
                'A lot of Pupils who join the School with a number of different difficulties are helped. These Pupils are later integrated back to their Classrooms and they do better.'
            ]
        ],
        'program_offered' => [
            'title' => 'SEN Program Offered',
            'content' => [
                'The Learners with Special Education Needs are incorporated in an Inclusive Education System where they have individual sessions with the SEN teacher, then are later mainstreamed into regular classrooms of their grade level. This gives them an opportunity of a double coordinated learning style where they benefit not only in the specialized area of their challenge but also in the mainstream activities.'
            ]
        ],
        'provides' => [
            'title' => 'SEN Provides the following',
            'items' => [
                'Reading and Writing Programmes',
                'Arithmetic Programmes',
                'General counselling programmes'
            ]
        ],
        'categories' => [
            'title' => 'Categories of Special Needs',
            'description' => 'Considering the Education form being provided for such learners at the moment (Inclusive Education system), the categories of the cases being enrolled are those with Mild to Moderate cases and the classifications are Physical and Health Impairments that have an effect in the academic achievements of these learners. Cases that we cater for at the moment include:',
            'items' => [
                'Mild - Moderate Cerebral Palsy and Ataxia',
                'Mild - Moderate Attention Deficit and Hyperactivity Disorders',
                'Mild - Moderate Down Syndrome',
                'Specific Learning Disabilities'
            ]
        ],
        'fees' => [
            'title' => 'Special Needs Fees',
            'content' => 'SEN Fees shall be charged additional to the standard billing for the term to every child registered for learning support'
        ]
    ];
}

function galleryData()
{
    return [
        [
            'category' => 'campus',
            'category_name' => 'Campus',
            'image' => 'about-1.jpg',
            'title' => 'School Campus'
        ],
        [
            'category' => 'students',
            'category_name' => 'Students',
            'image' => 'primary-students-lake-road-school.jpg',
            'title' => 'Primary Students'
        ],
        [
            'category' => 'students',
            'category_name' => 'Students',
            'image' => 'secondary-students-lake-road-school.jpg',
            'title' => 'Secondary Students'
        ],
        [
            'category' => 'campus',
            'category_name' => 'Campus',
            'image' => 'admission-lake-road-school.jpg',
            'title' => 'Admission Office'
        ],
        [
            'category' => 'events',
            'category_name' => 'Events',
            'image' => 'mission-1.jpg',
            'title' => 'School Event'
        ],
        [
            'category' => 'events',
            'category_name' => 'Events',
            'image' => 'mission-2.jpg',
            'title' => 'Graduation'
        ],
    ];
}


function primaryTeachers()
{
    return [
        [
            'name' => 'Mrs Leonora Chitambala',
            'position' => 'Head of Section',
            'section' => 'Middle Primary',
            'qualification' => 'Bachelor of Education',
            'subjects' => 'Primary School Grades',
            'image' => 'leonora_chitambala.jpg',
        ],
        [
            'name' => 'Mrs Grace Kapambwe',
            'position' => 'Head of Section',
            'section' => 'Lower Primary',
            'qualification' => 'Diploma of Education',
            'subjects' => 'Reception',
            'image' => 'grace_kapambwe.jpg',
        ],
        [
            'name' => 'Mr Amon Samakayi',
            'position' => 'Head of Section',
            'section' => 'Upper Primary',
            'qualification' => 'Diploma in Education',
            'subjects' => 'Primary School Grades',
            'image' => 'amon_samakayi.jpg',
        ],
        [
            'name' => 'Mr Olias Mulaisho',
            'position' => 'Head of Section',
            'section' => 'Co-curricular',
            'qualification' => 'Advanced Diploma in Management of Information System',
            'subjects' => 'Information Technology',
            'image' => 'olias_mulaisho.jpg',
        ],
        [
            'name' => 'Mr Masuzyo Daka',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Education',
            'subjects' => 'Primary School Grades',
            'image' => 'masuzyo_daka.jpg',
        ],
        [
            'name' => 'Mr Ackim Kaseya',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Arts in Education (French & English)',
            'subjects' => 'French',
            'image' => 'ackim_kaseya.jpg',
        ],
        [
            'name' => 'Mrs Pamela Kayamba Japi',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Education',
            'subjects' => 'Primary School Grades',
            'image' => 'pamela_japi.jpg',
        ],
        [
            'name' => 'Mrs Mirriam Yambala',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Education',
            'subjects' => 'Primary School Grades',
            'image' => 'mirriam_yambala.jpg',
        ],
        [
            'name' => 'Mrs Mukota Mweemba',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Education',
            'subjects' => 'Primary School Grades',
            'image' => 'mukota_mweemba.jpg',
        ],
        [
            'name' => 'Ms Joan Chishala',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Special Education (Linguistic & African Languages)',
            'subjects' => 'Special Education',
            'image' => 'joan_chishala.jpg',
        ],
        [
            'name' => 'Ms Tina Namoomba',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Education',
            'subjects' => 'Music',
            'image' => 'tina_namoomba.jpg',
        ],
        [
            'name' => 'Mr Innocent Chitwa',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Special Education',
            'subjects' => 'Special Education',
            'image' => 'innocent_chitwa.jpg',
        ],
        [
            'name' => 'Ms Chikumbi Chibaye',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Education',
            'subjects' => 'Primary School Grades',
            'image' => 'chikumbi_chibaye.jpg',
        ],
        [
            'name' => 'Mrs Joan Kakhongwe',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Primary Teachers Diploma',
            'subjects' => 'Primary School Grades',
            'image' => 'joan_kakhongwe.jpg',
        ],
        [
            'name' => 'Mrs Helen Matafwali',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma of Education',
            'subjects' => 'Home Economics',
            'image' => 'helen_matafwali.jpg',
        ],
        [
            'name' => 'Mrs Mary Banda',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma of Education',
            'subjects' => 'Primary School Grades',
            'image' => 'mary_banda.jpg',
        ],
        [
            'name' => 'Mrs Mildred Banda',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma of Education',
            'subjects' => 'Primary School Grades',
            'image' => 'mildred_banda.jpg',
        ],
        [
            'name' => 'Mr Chimuka Mukonka',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma in Education',
            'subjects' => 'Physical Education',
            'image' => 'chimuka_mukonka.jpg',
        ],
        [
            'name' => 'Mrs Mary Mwansa',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => "Primary Teacher's Diploma of Education",
            'subjects' => 'Primary School Grades',
            'image' => 'mary_mwansa.jpg',
        ],
        [
            'name' => 'Ms Abgail Mwenda',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma of Education',
            'subjects' => 'Primary School Grades',
            'image' => 'abgail_mwenda.jpg',
        ],
        [
            'name' => 'Ms Lucy Maluti',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma',
            'subjects' => 'Nursery',
            'image' => 'lucy_maluti.jpg',
        ],
        [
            'name' => 'Mrs Nancy B Mutono',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma of Education',
            'subjects' => 'Primary School Grades',
            'image' => 'nancy_mutono.jpg',
        ],
        [
            'name' => 'Mrs Patricia C Kutala',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma of Education',
            'subjects' => 'Pre-School',
            'image' => 'patricia_kutala.jpg',
        ],
        [
            'name' => 'Mrs Jacintha Lungu',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma in Education',
            'subjects' => 'Primary School Grades',
            'image' => 'jacintha_lungu.jpg',
        ],
        [
            'name' => 'Ms Maureen Chishala',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma in Education',
            'subjects' => 'Primary School Grades',
            'image' => 'maureen_chishala.jpg',
        ],
        [
            'name' => 'Ms Florence Banda',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => "Primary Teacher's Diploma",
            'subjects' => 'Primary School Grades',
            'image' => 'florence_banda.jpg',
        ],
        [
            'name' => 'Ms Namposya Nambule',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma in Education',
            'subjects' => 'Primary School Grades',
            'image' => 'namposya_nambule.jpg',
        ],
        [
            'name' => 'Mr Kennedy Mpola',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma in Lower Primary',
            'subjects' => 'Primary School Grades',
            'image' => 'kennedy_mpola.jpg',
        ],
        [
            'name' => 'Ms Sympathy Musamba',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma in Special Education & Certificate in Early Childhood',
            'subjects' => 'Primary School Grades',
            'image' => 'sympathy_musamba.jpg',
        ],
        [
            'name' => 'Mrs Doris Simukulwa',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Pre-School Certificate',
            'subjects' => 'Reception',
            'image' => 'doris_simukulwa.jpg',
        ],
        [
            'name' => 'Mrs Linda Lisulo',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Pre-School Certificate',
            'subjects' => 'Pre-School',
            'image' => 'linda_lisulo.jpg',
        ],
        [
            'name' => 'Mrs Petronella Mulenga',
            'position' => 'Secretary',
            'section' => null,
            'qualification' => 'Diploma in Secretarial Studies',
            'subjects' => null,
            'image' => 'petronella_mulenga.jpg',
        ],
    ];


}
