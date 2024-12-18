<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace Dub\Hooks;

class AfterErrorContext extends HookContext
{
    public function __construct(HookContext $hookCtx)
    {
        parent::__construct($hookCtx->operationID, $hookCtx->oauth2Scopes, $hookCtx->securitySource);
    }

    /**
     * @param  string  $name
     * @param  array<mixed>  $args
     * @return mixed
     */
    public function __call($name, $args): mixed
    {
        if ($name === 'securitySource') {
            return call_user_func_array($this->securitySource, $args);
        }

        return null;
    }
}
