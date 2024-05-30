<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class Users
{
    /**
     * The role of the authenticated user in the workspace.
     * 
     * @var \Dub\Models\Components\Role $role
     */
	#[\JMS\Serializer\Annotation\SerializedName('role')]
    #[\JMS\Serializer\Annotation\Type('enum<Dub\Models\Components\Role>')]
    public Role $role;
    
	public function __construct()
	{
		$this->role = \Dub\Models\Components\Role::Owner;
	}
}
