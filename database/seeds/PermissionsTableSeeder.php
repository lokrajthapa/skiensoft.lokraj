<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'service_create',
            ],
            [
                'id'    => '18',
                'title' => 'service_edit',
            ],
            [
                'id'    => '19',
                'title' => 'service_show',
            ],
            [
                'id'    => '20',
                'title' => 'service_delete',
            ],
            [
                'id'    => '21',
                'title' => 'service_access',
            ],
            [
                'id'    => '22',
                'title' => 'portfolio_create',
            ],
            [
                'id'    => '23',
                'title' => 'portfolio_edit',
            ],
            [
                'id'    => '24',
                'title' => 'portfolio_show',
            ],
            [
                'id'    => '25',
                'title' => 'portfolio_delete',
            ],
            [
                'id'    => '26',
                'title' => 'portfolio_access',
            ],
            [
                'id'    => '27',
                'title' => 'team_create',
            ],
            [
                'id'    => '28',
                'title' => 'team_edit',
            ],
            [
                'id'    => '29',
                'title' => 'team_show',
            ],
            [
                'id'    => '30',
                'title' => 'team_delete',
            ],
            [
                'id'    => '31',
                'title' => 'team_access',
            ],
            [
                'id'    => '32',
                'title' => 'testimonial_create',
            ],
            [
                'id'    => '33',
                'title' => 'testimonial_edit',
            ],
            [
                'id'    => '34',
                'title' => 'testimonial_show',
            ],
            [
                'id'    => '35',
                'title' => 'testimonial_delete',
            ],
            [
                'id'    => '36',
                'title' => 'testimonial_access',
            ],
            [
                'id'    => '37',
                'title' => 'client_create',
            ],
            [
                'id'    => '38',
                'title' => 'client_edit',
            ],
            [
                'id'    => '39',
                'title' => 'client_show',
            ],
            [
                'id'    => '40',
                'title' => 'client_delete',
            ],
            [
                'id'    => '41',
                'title' => 'client_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
