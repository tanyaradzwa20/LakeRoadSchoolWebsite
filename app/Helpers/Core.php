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
