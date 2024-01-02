<?php

 return [
    'menu' => [

        [
            'view'=>true,
            'sel_routs'=>'ShopCustomer',
            'type'=>'many',
            'text'=> 'admin/menu.shop_customer',
            'icon'=>'fas fa-user-tie',
            'roleView'=>'ShopCustomer_view',
            'submenu'=>[
                [
                    'sel_routs'=> 'Customer',
                    'url'=> 'ShopCustomer.Customer.index',
                    'roleView'=>'ShopCustomer_view',
                    'text'=> 'admin/menu.shop_customer_list',
                    'icon'=>'fas fa-list'
                ],


            ],
        ], #ShopCustomer

        [
            'view'=>true,
            'sel_routs'=>'FAQ',
            'type'=>'one',
            'text'=> 'admin/menu.faq',
            'url'=> 'FAQ.FaqList.index',
            'icon'=>'fas fa-question',
            'roleView'=>'Faq_view',
        ],#FAQ

        [
            'view'=>true,
            'sel_routs'=>'Pages',
            'type'=>'one',
            'text'=> 'admin/menu.web_pages',
            'url'=> 'Pages.pageList.index',
            'icon'=>'fab fa-html5',
            'roleView'=>'Pages_view',
        ],#PAge

        [
            'view'=>true,
            'sel_routs'=>'weblang',
            'type'=>'one',
            'text'=> 'admin/menu.lang_file_web',
            'url'=> 'weblang.index',
            'icon'=>'fas fa-globe-africa',
            'roleView'=>'weblang_view',
        ], #Web Lang

        [
            'view'=>true,
            'sel_routs'=>'adminlang',
            'type'=>'one',
            'text'=> 'admin/menu.lang_file_admin',
            'url'=> 'adminlang.index',
            'icon'=>'fas fa-globe-africa',
            'roleView'=>'adminlang_view',
        ], #Admin Lang

        [
            'view'=>true,
            'sel_routs'=>'config',
            'type'=>'many',
            'text'=> 'admin/menu.setting',
            'icon'=>'fas fa-cogs',
            'roleView'=>'config_section',
            'submenu'=>[

                ['roleView'=>'website_config','text'=> 'admin/menu.setting_web','url'=> 'config.web.index','sel_routs'=> 'web','icon'=>'fas fa-cog'],
//                ['roleView'=>'website_config','text'=> 'admin/menu.setting_model','url'=> 'config.model.index','sel_routs'=> 'model', 'icon'=>'fas fa-cog'],
                ['roleView'=>'webPrivacy_view','text'=> 'admin/menu.webPrivacy','url'=> 'config.webPrivacy.index','sel_routs'=> 'webPrivacy', 'icon'=>'fas fa-file-invoice'],
                ['roleView'=>'defPhoto_view','text'=> 'admin/menu.setting_def_photo','url'=> 'config.defPhoto.index','sel_routs'=> 'defPhoto','icon'=>'fas fa-image'],
                ['roleView'=>'upFilter_view','text'=> 'admin/menu.uploadFilter','url'=> 'config.upFilter.index','sel_routs'=> 'upFilter','icon'=>'fas fa-filter'],


//                ['roleView'=>'config_section','text'=> 'admin/menu.setting_icon','url'=> 'config.defIcon.show','sel_routs'=> 'defIcon','icon'=>'fab fa-fonticons'],
            ],
        ], #Setting

        [
            'view'=>true,
            'sel_routs'=>'users',
            'type'=>'many',
            'text'=> 'admin/menu.roles',
            'icon'=>'fas fa-unlock-alt',
            'roleView'=>'users_view',
            'submenu'=>[

                ['roleView'=>'users_view','text'=> 'admin/menu.roles_users' ,'url'=> 'users.users.index', 'sel_routs'=> 'users','icon'=>'fas fa-users'],
                ['roleView'=>'roles_view','text'=> 'admin/menu.roles_role','url'=>  'users.roles.index','sel_routs'=> 'roles','icon'=>'fas fa-traffic-light'],
                ['roleView'=>'permissions_view','text'=> 'admin/menu.roles_permissions' ,'url'=> 'users.permissions.index','sel_routs'=> 'permissions','icon'=>'fas fa-user-shield'],
            ],

        ], #Permissions

    ],

];
