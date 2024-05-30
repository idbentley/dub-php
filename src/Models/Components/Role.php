<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


/** The role of the authenticated user in the workspace. */
enum Role: string
{
    case Owner = 'owner';
    case Member = 'member';
}
