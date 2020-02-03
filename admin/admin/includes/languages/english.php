<?php 

    function lang ($phrase)
    {
        static $lang = [
            
            /*=============================
                   Dashboard Words
            ============START=============*/    
            'ADMIN'           => 'Administrator',
            'HOME'            => 'Home',
            'CATEGORY'        => 'Categories',
            'ITEMS'           => 'Items',
            'MEMBERS'         => 'Members',
            'STATISTICS'      => 'Stitistics',
            'CONF'            => 'Configuration',
            'EDIT'            => 'Edit',
            'SETTINGS'        => 'Settings',
            'LOGOUT'          => 'Logout'
            //============END=============
        ];

        return $lang[$phrase];
    }