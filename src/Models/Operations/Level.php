<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** The level of error correction to use for the QR code. Defaults to `L` if not provided. */
enum Level: string
{
    case L = 'L';
    case M = 'M';
    case Q = 'Q';
    case H = 'H';
}
