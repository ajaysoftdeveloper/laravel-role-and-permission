<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    public static function defaultPermissions()
	{
	    return [
	        'view_users',
	        'add_users',
	        'edit_users',
	        'delete_users',

	        'view_roles',
	        'add_roles',
	        'edit_roles',
	        'delete_roles',

	        'view_posts',
	        'add_posts',
	        'edit_posts',
	        'delete_posts',
	    ];
	}
}
