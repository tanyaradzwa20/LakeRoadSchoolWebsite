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

function secondaryCurriculumn()
{
    $juniorSecondarySubjects = [
        'grade' => [8, 9],

        'compulsory_subjects' => [
            [
                'code' => 609,
                'name' => 'Business Studies',
            ],
            [
                'code' => 402,
                'name' => 'Computer Studies',
            ],
            [
                'code' => 101,
                'name' => 'English Language',
            ],
            [
                'code' => 502,
                'name' => 'Integrated Science',
            ],
            [
                'code' => 401,
                'name' => 'Mathematics',
            ],
            [
                'code' => 204,
                'name' => 'Religious Education',
            ],
            [
                'code' => 207,
                'name' => 'Social Studies',
            ],
        ],

        'optional_subjects' => [
            [
                'code' => 205,
                'name' => 'Art and Design (Art)',
            ],
            [
                'code' => 608,
                'name' => 'Design and Technology (D & T)',
            ],
            [
                'code' => 305,
                'name' => 'French Language',
            ],
            [
                'code' => 208,
                'name' => 'Musical Arts Education (Music)',
            ],
            [
                'code' => 601,
                'name' => 'Home Economics',
            ],
        ],

        'summary' => [
            'compulsory' => 7,
            'optional' => 1,
            'total' => 8,
        ],

        'rules' => [
            'take_all_compulsory' => true,
            'optional_required' => 1,
            'total_subjects_required' => 8,
        ],
    ];
    $seniorSecondarySubjects = [
        'grades' => [10, 11, 12],

        'pathways' => [

            'business_studies_oriented' => [
                'compulsory_subjects' => [
                    ['code' => 4024, 'name' => 'Mathematics'],
                    ['code' => 1121, 'name' => 'English'],
                    ['code' => 5090, 'name' => 'Biology'],
                    ['code' => 5070, 'name' => 'Chemistry'],
                    ['code' => 5024, 'name' => 'Physics'],
                    ['code' => 2030, 'name' => 'Civic Education'],
                    ['code' => 7110, 'name' => 'Principles of Accounts'],
                ],

                'optional_subjects' => [
                    'option_a' => [
                        ['code' => 6010, 'name' => 'Art'],
                        ['code' => 6020, 'name' => 'Music'],
                        ['code' => 6045, 'name' => 'Design & Technology'],
                        ['code' => 4030, 'name' => 'Additional Math'],
                        ['code' => 2046, 'name' => 'Religious Education'],
                    ],
                    'option_b' => [
                        ['code' => 3016, 'name' => 'French'],
                        ['code' => 2218, 'name' => 'Geography'],
                        ['code' => 2167, 'name' => 'History'],
                        ['code' => 2011, 'name' => 'Literature'],
                        ['code' => 7100, 'name' => 'Commerce'],
                    ],
                ],
            ],

            'technology_oriented' => [
                'compulsory_subjects' => [
                    ['code' => 4024, 'name' => 'Mathematics'],
                    ['code' => 1121, 'name' => 'English'],
                    ['code' => 5090, 'name' => 'Biology'],
                    ['code' => 5070, 'name' => 'Chemistry'],
                    ['code' => 5024, 'name' => 'Physics'],
                    ['code' => 2030, 'name' => 'Civic Education'],
                    ['code' => 7010, 'name' => 'Computer Studies'],
                ],

                'optional_subjects' => [
                    'option_a' => [
                        ['code' => 6010, 'name' => 'Art'],
                        ['code' => 6020, 'name' => 'Music'],
                        ['code' => 6045, 'name' => 'Design & Technology'],
                        ['code' => 4030, 'name' => 'Additional Math'],
                        ['code' => 2046, 'name' => 'Religious Education'],
                    ],
                    'option_b' => [
                        ['code' => 3016, 'name' => 'French'],
                        ['code' => 2218, 'name' => 'Geography'],
                        ['code' => 2167, 'name' => 'History'],
                        ['code' => 2011, 'name' => 'Literature'],
                        ['code' => 7100, 'name' => 'Commerce'],
                    ],
                ],
            ],
        ],

        'rules' => [
            'compulsory_subjects' => 7,
            'optional_subjects_required' => 2,
            'optional_selection' => [
                'option_a' => 1,
                'option_b' => 1,
            ],
            'total_subjects' => 9,
            'term_two_science_rule' => 'If Pure Science (Chemistry & Physics) is continued, one optional subject must be dropped. If Science is taken instead, optional subjects are retained.',
        ],
    ];
    $seniorLevel = [
        'compulsory_subjects' => [
            'Biology',
            [
                'choice' => [
                    'Chemistry',
                    'Physics',
                    'Combined Science',
                ],
            ],
            'English Language',
            'Mathematics',
            'Computer Science',
            'Global Citizenship',
        ],

        'options' => [
            'option_a' => [
                'Literature in English',
                'Religious Studies',
                'Commerce',
                'Geography/History',
                'French',
            ],
            'option_b' => [
                'Music',
                'Design & Technology',
                'Further Pure Mathematics',
                'Art',
                'Accounting',
            ],
        ],

        'co_curricular_activities' => [
            'Physical Education',
            'Sports',
            'Clubs',
        ],

        'rules' => [
            'minimum_subjects' => 7,
            'maximum_subjects' => 8,
            'option_change_window' => '3 weeks after opening',
            'advisory_note' => 'Students should consider career options and subject combinations carefully before final selection.',
        ],
    ];

return [
    'seniorLevel' => $seniorLevel,
    'seniorSecondarySubjects' => $seniorSecondarySubjects,
    'juniorSecondarySubjects'=>$juniorSecondarySubjects
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


function secondaryFees()
{
    $grade8 =[
        'title'=>'Grade 8 - 9 Fees',
        'description'=>'',
        'data'=>
            [
                'returning_pupils' => [
                    'title' => 'Returning Pupils Fees',
                    'fees' => [
                        [
                            'name' => 'Tuition Fee',
                            'amount' => 13900,
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
                        'Pay the Tuition fee of ZMW 13,900.00 during school holidays or when school opens. Pupils will not be allowed in class until fees are fully paid.',
                        'Pay next term’s school fees during the current term to enjoy a 5% Early Bird discount and pay ZMW 13,205.00.',
                    ],
                ],

                'new_pupils' => [
                    'title' => 'New Pupils Fees',
                    'fees' => [
                        [
                            'name' => 'Tuition Fee',
                            'amount' => 13900,
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
                        'For first-time admission into Grade 8, the total payable amount is ZMW 21,900.00.',
                        'For each subsequent school term in Grade 8, only the Tuition Fee of ZMW 13,900.00 will be paid.',
                    ],
                ],
            ]
    ];
    $grade10 =[
        'title'=>'Grade 10 - 12 Fees',
        'description'=>'',
        'data'=> [

                'returning_pupils' => [
                    'title' => 'Returning Pupils Fees',
                    'fees' => [
                        [
                            'name' => 'Tuition Fee',
                            'amount' => 15100,
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
                        'Pay the Tuition fee of ZMW 15,100.00 during school holidays or when school opens. Pupils will not be allowed in class until fees are paid in full.',
                        'Pay next term’s school fees during the current term to enjoy a 5% Early Bird discount and pay ZMW 14,100.00.',
                    ],
                ],

                'new_pupils' => [
                    'title' => 'New Pupils Fees',
                    'fees' => [
                        [
                            'name' => 'Tuition Fee',
                            'amount' => 15100,
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
                        'For first-time admission into the school, the total payable amount is ZMW 23,100.00.',
                        'For each subsequent school term, only the Tuition Fee of ZMW 15,100.00 will be paid.',
                    ],
                ],
            ]
    ];

return [
  'grade8'=>$grade8,
  'grade10'=>$grade10
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
function secondryCirculars(){
   return [
       [
           'title' => 'Circular Wednesday September 22, 2021',
           'year' => 2021,
           'date' => '2021-09-22',
           'term' => null,
           'information' => [
               'Term 2, 2021',
               'Term 3, 2021',
               'School-Based Assessments (SBA)',
               'Exam Practice',
           ],
           'download' => true,
       ],
       [
           'title' => 'Circular No. 3, Term 1 2021',
           'number' => 3,
           'term' => 'Term 1',
           'year' => 2021,
           'information' => [
               'Open Day for Term 1, 2021',
               'School-Based Assessments (SBA) – ECZ Candidates Only',
           ],
           'download' => true,
       ],
       [
           'title' => 'Circular No. 2, Term 1 2021',
           'number' => 2,
           'term' => 'Term 1',
           'year' => 2021,
           'information' => [
               'Civilian Day',
           ],
           'download' => true,
       ],
       [
           'title' => 'Circular No. 1, Term 1 2021',
           'number' => 1,
           'term' => 'Term 1',
           'year' => 2021,
           'information' => [
               '2021 Candidate Registration – Grades 9 and 12',
               'Grade 9 Registration',
               'Grade 12 Registration',
               'Registration Form',
               'Method of Payments',
           ],
           'download' => true,
       ],
       [
           'title' => 'Circular No. 2, Term 3 & 2 2020',
           'number' => 2,
           'term' => 'Term 3 & 2',
           'year' => 2020,
           'information' => [
               'Grade 12 Graduation 2020',
           ],
           'download' => true,
       ],
       [
           'title' => 'Circular No. 1, Term 3 & 2 2020',
           'number' => 1,
           'term' => 'Term 3 & 2',
           'year' => 2020,
           'information' => [
               'Grade 10 Afternoon Programme',
               'End of Afternoon Programme',
               'Mock Examinations for 9th and 12th Graders',
               'Examination Practice',
               'School Calendar',
               'World / International Teachers’ Day',
           ],
           'download' => true,
       ],
       [
           'title' => 'Circular No. 1, Term 2 2020',
           'number' => 1,
           'term' => 'Term 2',
           'year' => 2020,
           'information' => [
               'End of Term 1 Examinations',
               'Important Dates to Diarise for 9th and 12th Graders',
           ],
           'download' => true,
       ],
   ];

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

function secondaryResults(){
    $grade12  =[
  'title'=>'Subject Analysis - Grade 12',
        'description'=>'Almost all the Pupils at Lake Road PTA School who sat for the Grade 12 Exams obtained full certificates.',
      'data'=>  [
        'English' => [
            2023 => 100, 2022 => 100, 2021 => 100, 2020 => 100,
            2019 => 100, 2018 => 100, 2017 => 100, 2016 => 100,
            2015 => 100, 2014 => 100, 2013 => 100, 2012 => 100,
            2011 => 100, 2010 => 100,
        ],

        'Mathematics' => [
            2023 => 93, 2022 => 83, 2021 => 68, 2020 => 82,
            2019 => 88, 2018 => 83, 2017 => 80, 2016 => 87,
            2015 => 83, 2014 => 100, 2013 => 93, 2012 => 93,
            2011 => 75, 2010 => 87,
        ],

        'Physics' => [
            2023 => 100, 2022 => 100, 2021 => 88, 2020 => 67,
            2019 => 92, 2018 => 100, 2017 => 100, 2016 => 100,
            2015 => 100, 2014 => 100, 2013 => 94, 2012 => 94,
            2011 => 100, 2010 => 100,
        ],

        'Chemistry' => [
            2023 => 100, 2022 => 100, 2021 => 88, 2020 => 83,
            2019 => 92, 2018 => 100, 2017 => 83, 2016 => 100,
            2015 => 91, 2014 => 100, 2013 => 94, 2012 => 94,
            2011 => 100, 2010 => 100,
        ],

        'Biology' => [
            2023 => 96, 2022 => 97, 2021 => 96, 2020 => 91,
            2019 => 93, 2018 => 91, 2017 => 100, 2016 => 100,
            2015 => 98, 2014 => 100, 2013 => 98, 2012 => 98,
            2011 => 100, 2010 => 91,
        ],

        'Science' => [
            2023 => 89, 2022 => 92, 2021 => 85, 2020 => 90,
            2019 => 97, 2018 => 90, 2017 => 88, 2016 => 88,
            2015 => 94, 2014 => 100, 2013 => 100, 2012 => 100,
            2011 => 97, 2010 => 92,
        ],

        'Religious Education' => [
            2023 => 100, 2022 => 100, 2021 => 67, 2020 => 100,
            2019 => 94, 2018 => 100, 2017 => 100, 2016 => 100,
            2015 => 100, 2014 => 100, 2013 => 100, 2012 => 100,
            2011 => 100, 2010 => 100,
        ],

        'Geography' => [
            2023 => 75, 2022 => 100, 2021 => 100, 2020 => 100,
            2019 => 94, 2018 => 95, 2017 => 100, 2016 => 100,
            2015 => 100, 2014 => 100, 2013 => 100, 2012 => 100,
            2011 => 89, 2010 => 100,
        ],

        'History' => [
            2023 => 100, 2022 => 100, 2021 => 100, 2020 => 100,
            2019 => 100, 2018 => 100, 2017 => 100, 2016 => 100,
            2015 => 100, 2014 => 100, 2013 => 100, 2012 => 100,
            2011 => 100, 2010 => 82,
        ],

        'Commerce' => [
            2023 => 100, 2022 => 100, 2021 => 100, 2020 => 80,
            2019 => 93, 2018 => 100, 2017 => 100, 2016 => 100,
            2015 => 100, 2014 => 100, 2013 => 100, 2012 => 100,
            2011 => 96, 2010 => 100,
        ],

        'Accounts' => [
            2023 => 100, 2022 => 100, 2021 => 100, 2020 => 100,
            2019 => 100, 2018 => 100, 2017 => 100, 2016 => 100,
            2015 => 100, 2014 => 100, 2013 => 100, 2012 => 100,
            2011 => 100, 2010 => 100,
        ],

        'Computer Studies' => [
            2023 => 84, 2022 => 100, 2021 => 88, 2020 => 100,
            2019 => 100, 2018 => 100, 2017 => 100, 2016 => 100,
            2015 => 100, 2014 => 85, 2013 => 100, 2012 => 100,
            2011 => 88, 2010 => 86,
        ],

        'Art' => [
            2023 => 100, 2022 => 100, 2021 => 100, 2020 => 100,
            2019 => null, 2018 => 100, 2017 => 100, 2016 => 100,
            2015 => 100, 2014 => 100, 2013 => 100, 2012 => 100,
            2011 => 100, 2010 => 100,
        ],

        'Music' => [
            2023 => 100, 2022 => 100, 2021 => 100, 2020 => 100,
            2019 => 100, 2018 => null, 2017 => 100, 2016 => 100,
            2015 => 100, 2014 => null, 2013 => null, 2012 => null,
            2011 => null, 2010 => null,
        ],

        'Design & Technology' => [
            2023 => 100, 2022 => 100, 2021 => 100, 2020 => 100,
            2019 => null, 2018 => null, 2017 => 100, 2016 => null,
            2015 => 100, 2014 => 100, 2013 => 100, 2012 => 100,
            2011 => 100, 2010 => 100,
        ],

        'Literature' => [
            2023 => 100, 2022 => 100, 2021 => 100, 2020 => 100,
            2019 => 100, 2018 => 75, 2017 => 100, 2016 => 93,
            2015 => 100, 2014 => 100, 2013 => 100, 2012 => 93,
            2011 => 77, 2010 => null,
        ],

        'ADMA' => [
            2023 => 100, 2022 => null, 2021 => null, 2020 => null,
            2019 => null, 2018 => 100, 2017 => 75, 2016 => 20,
            2015 => 100, 2014 => 100, 2013 => 100, 2012 => 78,
            2011 => 67, 2010 => null,
        ],

        'French' => [
            2023 => 100, 2022 => 100, 2021 => null, 2020 => null,
            2019 => null, 2018 => 100, 2017 => 100, 2016 => null,
            2015 => null, 2014 => 100, 2013 => 100, 2012 => 100,
            2011 => 100, 2010 => 100,
        ],

        'Civic Education' => [
            2023 => 100, 2022 => 100, 2021 => 96, 2020 => 91,
            2019 => 98, 2018 => 100, 2017 => 100, 2016 => 100,
            2015 => 100, 2014 => null, 2013 => null, 2012 => null,
            2011 => null, 2010 => null,
        ],
    ]
    ];
    $grade9 = [
        'title'=>'Subject Analysis - Grade 9',
        'description'=>'At Lake Road PTA School, the Grade 9 Pupils who sit for the Grade 9 National Exams 98% of them obtains full certificates and proceed to grade 10.',
       'data'=>[
           'English' => [
               2023 => 100, 2022 => 98, 2021 => 97, 2020 => 100,
               2019 => 100, 2018 => 100, 2017 => 100, 2016 => 100,
               2015 => 100, 2014 => 100, 2013 => 98.2, 2012 => 100,
               2011 => 100, 2010 => 100,
           ],

           'Mathematics' => [
               2023 => 79, 2022 => 83, 2021 => 77, 2020 => 87,
               2019 => 85, 2018 => 55, 2017 => 54, 2016 => 72,
               2015 => 56.6, 2014 => 83, 2013 => 81.8, 2012 => 75,
               2011 => 82, 2010 => 92.6,
           ],

           'Integrated Science' => [
               2023 => 94, 2022 => 95, 2021 => 84, 2020 => 100,
               2019 => 100, 2018 => 97, 2017 => 94, 2016 => 100,
               2015 => 100, 2014 => 92, 2013 => 96.4, 2012 => 96,
               2011 => 100, 2010 => 100,
           ],

           'Social Studies' => [
               2023 => 96, 2022 => 98, 2021 => 97, 2020 => 100,
               2019 => 98, 2018 => 74, 2017 => 89, 2016 => 96,
               2015 => 96.3, 2014 => null, 2013 => null, 2012 => null,
               2011 => null, 2010 => null,
           ],

           'Business Studies' => [
               2023 => 96, 2022 => 95, 2021 => 100, 2020 => 97,
               2019 => 100, 2018 => 100, 2017 => 97, 2016 => 93,
               2015 => 92.6, 2014 => null, 2013 => null, 2012 => null,
               2011 => null, 2010 => null,
           ],

           'Art' => [
               2023 => 100, 2022 => 100, 2021 => 100, 2020 => 100,
               2019 => 100, 2018 => 100, 2017 => 100, 2016 => null,
               2015 => 100, 2014 => 100, 2013 => 100, 2012 => 100,
               2011 => 100, 2010 => 100,
           ],

           'French' => [
               2023 => 71, 2022 => 100, 2021 => 100, 2020 => 90,
               2019 => 88, 2018 => 100, 2017 => 94, 2016 => 100,
               2015 => 98.1, 2014 => 100, 2013 => 97.7, 2012 => 86,
               2011 => 97, 2010 => 92.6,
           ],

           'Religious Education' => [
               2023 => 100, 2022 => 97, 2021 => 94, 2020 => 100,
               2019 => 100, 2018 => 100, 2017 => 89, 2016 => 88,
               2015 => 98.1, 2014 => 100, 2013 => 100, 2012 => 100,
               2011 => 100, 2010 => 100,
           ],

           'Computer Studies' => [
               2023 => 98, 2022 => 98, 2021 => 100, 2020 => 97,
               2019 => 98, 2018 => 97, 2017 => 97, 2016 => 100,
               2015 => 100, 2014 => null, 2013 => null, 2012 => null,
               2011 => null, 2010 => null,
           ],

           'Design & Technology' => [
               2023 => 100, 2022 => 100, 2021 => 100, 2020 => 100,
               2019 => 100, 2018 => 100, 2017 => 82, 2016 => null,
               2015 => null, 2014 => null, 2013 => null, 2012 => null,
               2011 => null, 2010 => null,
           ],

           'Music' => [
               2023 => 100, 2022 => 78, 2021 => 100, 2020 => 92,
               2019 => 100, 2018 => 100, 2017 => 100, 2016 => null,
               2015 => null, 2014 => null, 2013 => null, 2012 => null,
               2011 => null, 2010 => null,
           ],
       ]
    ];
    return [
        'grade12'=>$grade12,
        'grade9'=>$grade9
    ];

}

function gecFees(){
    $eczCharges = [
        'code' => 'A',
        'board' => 'ECZ',
        'charges' => [
            [
                'description' => 'Entry Fee',
                'amount' => 75.00,
                'currency' => 'K'
            ],
            [
                'description' => 'Subject Fee',
                'amount' => 120.00,
                'currency' => 'K'
            ]
        ]
    ];
    $schoolCharges = [
        'code' => 'B',
        'source' => 'School',
        'charges' => [
            [
                'description' => 'Centre Fee',
                'amount' => 300.00,
                'currency' => 'K'
            ],
            [
                'description' => 'Fee/Practical (Science, Biology, Chemistry or Physics)',
                'amount' => 200.00,
                'currency' => 'K'
            ]
        ]
    ];
    $candidateFees = [
        'currency' => 'ZMW',
        'subjects_count' => 4,
        'items' => [
            [
                'item' => 1,
                'description' => 'Compulsory Payments',
                'entry_fee' => 75.00,
                'centre_fee' => 300.00,
                'subject_fee' => 0.00,
                'practical_fee' => 0.00,
                'total' => 375.00,
            ],
            [
                'item' => 2,
                'description' => 'Mathematics (4024)',
                'entry_fee' => 0.00,
                'centre_fee' => 0.00,
                'subject_fee' => 120.00,
                'practical_fee' => 0.00,
                'total' => 120.00,
            ],
            [
                'item' => 3,
                'description' => 'Biology (5090)',
                'entry_fee' => 0.00,
                'centre_fee' => 0.00,
                'subject_fee' => 120.00,
                'practical_fee' => 200.00,
                'total' => 320.00,
            ],
            [
                'item' => 4,
                'description' => 'Science (Physics & Chemistry)',
                'entry_fee' => 0.00,
                'centre_fee' => 0.00,
                'subject_fee' => 120.00,
                'practical_fee' => 200.00,
                'total' => 320.00,
            ],
            [
                'item' => 5,
                'description' => 'English Language (1121)',
                'entry_fee' => 0.00,
                'centre_fee' => 0.00,
                'subject_fee' => 120.00,
                'practical_fee' => 0.00,
                'total' => 120.00,
            ],
        ],
        'grand_total' => 1255.00,
    ];


    return [
        'eczCharges' => $eczCharges,
        'schoolCharges' => $schoolCharges,
        'candidateFees' => $candidateFees,
    ];
}

function getProducts(){
    return  [
                                    [
                                        'name' => 'School Blazer (Primary)',
                                        'price' => 'K450.00',
                                        'image' => '1.png',
                                        'category' => 'Uniforms',
                                        'badge' => 'New',
                                        'stock' => 15
                                    ],
                                    [
                                        'name' => 'School Tie',
                                        'price' => 'K85.00',
                                        'image' => '4.png',
                                        'category' => 'Uniforms',
                                        'badge' => '',
                                        'stock' => 50
                                    ],
                                    [
                                        'name' => 'V-Neck Sweater',
                                        'price' => 'K220.00',
                                        'image' => '7.png',
                                        'category' => 'Uniforms',
                                        'badge' => '',
                                        'stock' => 25
                                    ],
                                    [
                                        'name' => 'White School Shirt',
                                        'price' => 'K150.00',
                                        'image' => '2.png',
                                        'category' => 'Uniforms',
                                        'badge' => '',
                                        'stock' => 40
                                    ],
                                    [
                                        'name' => 'Sports Jersey',
                                        'price' => 'K180.00',
                                        'image' => '5.png',
                                        'category' => 'Sports Wear',
                                        'badge' => 'Sale',
                                        'stock' => 12
                                    ],
                                    [
                                        'name' => 'School Bag (LRTPS)',
                                        'price' => 'K350.00',
                                        'image' => '8.png',
                                        'category' => 'Academic Items',
                                        'badge' => '',
                                        'stock' => 20
                                    ],
                                    [
                                        'name' => 'Scientific Calculator',
                                        'price' => 'K250.00',
                                        'image' => '3.png',
                                        'category' => 'Academic Items',
                                        'badge' => '',
                                        'stock' => 10
                                    ],
                                    [
                                        'name' => 'Geometry Set',
                                        'price' => 'K75.00',
                                        'image' => '6.png',
                                        'category' => 'Academic Items',
                                        'badge' => '',
                                        'stock' => 30
                                    ],
                                    [
                                        'name' => 'School Tracksuit',
                                        'price' => 'K400.00',
                                        'image' => '9.png',
                                        'category' => 'Sports Wear',
                                        'badge' => '23',
                                        'stock' => 8
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
    $data=[];
    for($i=1;$i<=2;$i++){
        $data[]= [
            'category' => 'campus',
            'category_name' => 'Campus',
            'image' => "cp$i.jpg",
            'title' => 'School Campus'
        ];
    }
    for($i=1;$i<=8;$i++){
        $data[]= [
            'category' => 'students',
            'category_name' => 'Students',
            'image' => "st$i.jpg",
            'title' => 'Primary Students'
        ];
    }
    for($i=1;$i<=4;$i++){
        $data[]= [
            'category' => 'events',
            'category_name' => 'Events',
            'image' =>"ev$i.jpg",
            'title' => 'School Event'
        ];
    }
    return $data;


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
function secondaryTeachers()
{
    return [
        [
            'name' => 'Mr Muyanjilwa Mugode',
            'position' => 'HOD',
            'section' => 'Social Sciences',
            'qualification' => 'Bachelor of Arts in Education',
            'subjects' => 'Civic Education, History, Social Studies',
            'image' => 'muyanjilwa_mugode.jpg',
        ],
        [
            'name' => 'Mrs Sarah Banda',
            'position' => 'Acting HOD',
            'section' => 'Natural Sciences',
            'qualification' => 'Bachelor of Science (Chemistry & Biology)',
            'subjects' => 'Science',
            'image' => 'sarah_banda.jpg',
        ],
        [
            'name' => 'Mr Mathews S Bwalya',
            'position' => 'HOD',
            'section' => 'Maths & Computer Science',
            'qualification' => 'Masters in Computer Science',
            'subjects' => 'Computer Science',
            'image' => 'mathews_bwalya.jpg',
        ],
        [
            'name' => 'Mrs Given Somali',
            'position' => 'Acting HOD',
            'section' => 'Literature & Languages',
            'qualification' => 'Bachelor of Education (English)',
            'subjects' => 'English',
            'image' => 'given_somali.jpg',
        ],
        [
            'name' => 'Mrs Olipa Simbeye',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Education',
            'subjects' => 'Mathematics',
            'image' => 'olipa_simbeye.jpg',
        ],
        [
            'name' => 'Mr Chipili Lupandala',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Arts with Education',
            'subjects' => 'Mathematics',
            'image' => 'chipili_lupandala.jpg',
        ],
        [
            'name' => 'Mrs Elizabeth Chiti',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Arts in Education',
            'subjects' => 'Physics, Integrated Science',
            'image' => 'elizabeth_chiti.jpg',
        ],
        [
            'name' => 'Mrs Tiza Mulubwa',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Theology & Education',
            'subjects' => 'Religious Education, English',
            'image' => 'tiza_mulubwa.jpg',
        ],
        [
            'name' => 'Mr Vwalika Canaan',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Arts in Education',
            'subjects' => 'Civic Education, History',
            'image' => 'vwalika_canaan.jpg',
        ],
        [
            'name' => 'Ms Joan Chishala',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Special Education (Linguistic & African Languages)',
            'subjects' => 'English',
            'image' => 'joan_chishala_secondary.jpg',
        ],
        [
            'name' => 'Mr Francis Musonda',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Education (Mathematics)',
            'subjects' => 'Mathematics',
            'image' => 'francis_musonda.jpg',
        ],
        [
            'name' => 'Mr Davies Chomba',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Science',
            'subjects' => 'Chemistry, Physics',
            'image' => 'davies_chomba.jpg',
        ],
        [
            'name' => 'Ms Natasha Chileshe',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Arts in Education',
            'subjects' => 'English, Religious Education',
            'image' => 'natasha_chileshe.jpg',
        ],
        [
            'name' => 'Mr Innocent Chitwa',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Special Education',
            'subjects' => 'Geography',
            'image' => 'innocent_chitwa_secondary.jpg',
        ],
        [
            'name' => 'Mr Felix Nimpe Chasaya',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Arts in Education',
            'subjects' => 'French, Physical Education',
            'image' => 'felix_chasaya.jpg',
        ],
        [
            'name' => 'Mr Bernard Mangenda',
            'position' => 'Science Lab Technician',
            'section' => 'Science Laboratory',
            'qualification' => 'Advanced Certificate in Science Laboratory',
            'subjects' => 'Laboratory Management',
            'image' => 'bernard_mangenda.jpg',
        ],
        [
            'name' => 'Mr Enock Kamandala',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Secondary School Diploma',
            'subjects' => 'GMD, Design & Technology',
            'image' => 'enock_kamandala.jpg',
        ],
        [
            'name' => 'Ms Idah Tembo',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma in Education',
            'subjects' => 'Physical Education, Art',
            'image' => 'idah_tembo.jpg',
        ],
        [
            'name' => 'Mr Sam Sichalwe',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma in Business Studies',
            'subjects' => 'Principles of Accounts, Business Studies, Commerce',
            'image' => 'sam_sichalwe.jpg',
        ],
        [
            'name' => 'Mr Felix Mwewa',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Diploma in Art and Design / Physical',
            'subjects' => 'Art & Design, Physical Education',
            'image' => 'felix_mwewa.jpg',
        ],
        [
            'name' => 'Mr Sipho Chipeso',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => "Music Teacher's Diploma",
            'subjects' => 'Music',
            'image' => 'sipho_chipeso.jpg',
        ],
        [
            'name' => 'Mr Chinyemba Chinyama',
            'position' => 'Teacher',
            'section' => null,
            'qualification' => 'Bachelor of Commerce',
            'subjects' => 'Commercials',
            'image' => 'chinyemba_chinyama.jpg',
        ],
        [
            'name' => 'Ms Petronella Mulenga',
            'position' => 'Secretary',
            'section' => null,
            'qualification' => 'Diploma in Secretarial',
            'subjects' => null,
            'image' => 'petronella_mulenga_secondary.jpg',
        ],
    ];

}

function contactData() {
    return [
        'address' => 'Corner of Lake Road & Leopards Hill Road, Woodlands, Lusaka, Zambia',
        'phone' => [
            '+260 211 263 361',
            '+260 211 263 362',
            '+260 977 770 000'
        ],
        'email' => [
            'info@lakeroadptaschool.ac.zm',
            'accounts@lakeroadptaschool.ac.zm'
        ],
        'opening_hours' => [
            'Monday - Friday: 07:30 - 16:30',
            'Saturday: Closed',
            'Sunday: Closed'
        ],
        'map_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3846.136371534062!2d28.351221474889617!3d-15.42436858508101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1940149090909091%3A0x1234567890abcdef!2sLake%20Road%20PTA%20School!5e0!3m2!1sen!2szm!4v1704364000000!5m2!1sen!2szm'
    ];
}
