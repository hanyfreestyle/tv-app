<?php

namespace Database\Seeders\roles;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{

    public function run(): void
    {
        $data = [
            ['cat_id'=> '1', 'name' => 'users_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '1', 'name' => 'users_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '1', 'name' => 'users_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '1', 'name' => 'users_delete','name_ar'=>'حذف','name_en'=>'Delete'],

            ['cat_id'=> '2', 'name' => 'roles_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '2', 'name' => 'roles_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '2', 'name' => 'roles_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '2', 'name' => 'roles_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '2', 'name' => 'roles_update_permissions','name_ar'=>'تعديل صلاحيات المجموعة','name_en'=>'Roles Update Permissions'],

            ['cat_id'=> '3', 'name' => 'permissions_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '3', 'name' => 'permissions_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '3', 'name' => 'permissions_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '3', 'name' => 'permissions_delete','name_ar'=>'حذف','name_en'=>'Delete'],

            ['cat_id'=> '4', 'name' => 'webPrivacy_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '4', 'name' => 'webPrivacy_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '4', 'name' => 'webPrivacy_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '4', 'name' => 'webPrivacy_delete','name_ar'=>'حذف','name_en'=>'Delete'],

            ['cat_id'=> '5', 'name' => 'adminlang_view','name_ar'=>'عرض ملفات لغة التحكم','name_en'=>'View Admin Lang'],
            ['cat_id'=> '5', 'name' => 'adminlang_edit','name_ar'=>'تعديل ملفات لغة التحكم','name_en'=>'Edit Admin Lang'],
            ['cat_id'=> '5', 'name' => 'weblang_view','name_ar'=>'عرض ملفات لغة الموقع','name_en'=>'View'],
            ['cat_id'=> '5', 'name' => 'weblang_edit','name_ar'=>'تعديل ملفات لغة الموقع','name_en'=>'Edit'],

            ['cat_id'=> '6', 'name' => 'config_section','name_ar'=>'عرض الاعدادات','name_en'=>'Setting View'],
            ['cat_id'=> '6', 'name' => 'website_config','name_ar'=>'اعدادات الموقع','name_en'=>'Web Site Setting'],

            ['cat_id'=> '7', 'name' => 'defPhoto_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '7', 'name' => 'defPhoto_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '7', 'name' => 'defPhoto_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '7', 'name' => 'defPhoto_delete','name_ar'=>'حذف','name_en'=>'Delete'],

            ['cat_id'=> '8', 'name' => 'upFilter_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '8', 'name' => 'upFilter_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '8', 'name' => 'upFilter_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '8', 'name' => 'upFilter_delete','name_ar'=>'حذف','name_en'=>'Delete'],

            ['cat_id'=> '9', 'name' => 'Pages_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '9', 'name' => 'Pages_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '9', 'name' => 'Pages_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '9', 'name' => 'Pages_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '9', 'name' => 'Pages_restore','name_ar'=>'استعادة المحذوف','name_en'=>'Restore'],
            ['cat_id'=> '9', 'name' => 'Pages_edit_slug','name_ar'=>'Edit Slug','name_en'=>'Edit Slug'],




            ['cat_id'=> '12', 'name' => 'OurClient_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '12', 'name' => 'OurClient_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '12', 'name' => 'OurClient_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '12', 'name' => 'OurClient_delete','name_ar'=>'حذف','name_en'=>'Delete'],




            ['cat_id'=> '14', 'name' => 'Banner_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '14', 'name' => 'Banner_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '14', 'name' => 'Banner_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '14', 'name' => 'Banner_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '14', 'name' => 'Banner_restore','name_ar'=>'استعادة المحذوف','name_en'=>'Restore'],

            ['cat_id'=> '15', 'name' => 'Faq_view','name_ar'=>'عرض','name_en'=>'View'],
            ['cat_id'=> '15', 'name' => 'Faq_add','name_ar'=>'اضافة','name_en'=>'Add'],
            ['cat_id'=> '15', 'name' => 'Faq_edit','name_ar'=>'تعديل','name_en'=>'Edit'],
            ['cat_id'=> '15', 'name' => 'Faq_delete','name_ar'=>'حذف','name_en'=>'Delete'],
            ['cat_id'=> '15', 'name' => 'Faq_restore','name_ar'=>'استعادة المحذوف','name_en'=>'Restore'],
            ['cat_id'=> '15', 'name' => 'Faq_edit_slug','name_ar'=>'Edit Slug','name_en'=>'Edit Slug'],


        ];

        $countData =  Permission::all()->count();
        if($countData == '0'){
            foreach ($data as $value){
                Permission::create($value);
            }
        }
    }
}
