<?php 

    function lang ($phrase)
    {
        static $lang = [
            /*=============================
                   Dashboard Words
            ============START=============*/    
            'ADMIN' => 'المدير',
            'Category'  => 'اللاقسام'
            //============END=============
        ];

        return $lang[$phrase];
    }