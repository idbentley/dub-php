<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace Dub\Hooks;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;


class SDKHooks implements Hooks
{
    /**
     * @var array<SDKInitHook> $sdkInitHooks
     */
    private array $sdkInitHooks = [];
    /**
     * @var array<BeforeRequestHook> $beforeRequestHooks
     */
    private array $beforeRequestHooks = [];
    /**
     * @var array<AfterSuccessHook> $afterSuccessHooks
     */
    private array $afterSuccessHooks = [];
    /**
     * @var array<AfterErrorHook> $afterErrorHooks
     */
    private array $afterErrorHooks = [];

    public function __construct()
    {
        HookRegistration::initHooks($this);
    }

    public function registerSDKInitHook(SDKInitHook $hook): void
    {
        $this->sdkInitHooks[] = $hook;
    }

    public function registerBeforeRequestHook(BeforeRequestHook $hook): void
    {
        $this->beforeRequestHooks[] = $hook;
    }

    public function registerAfterSuccessHook(AfterSuccessHook $hook): void
    {
        $this->afterSuccessHooks[] = $hook;
    }

    public function registerAfterErrorHook(AfterErrorHook $hook): void
    {
        $this->afterErrorHooks[] = $hook;
    }

    public function sdkInit(string $baseUrl, \GuzzleHttp\ClientInterface $client): SDKRequestContext
    {
        $rc = new SDKRequestContext($baseUrl, $client);
        foreach ($this->sdkInitHooks as $hook) {
            try {
                $rc = $hook->sdkInit($rc->url, $rc->client);
            } catch (\Exception $e) {
                throw new \Exception('An error occurred while calling SDKInit hook.', $e->getCode(), $e);
            }

        }

        return $rc;
    }

    public function beforeRequest(BeforeRequestContext $context, RequestInterface $request): RequestInterface
    {
        foreach ($this->beforeRequestHooks as $hook) {
            try {
                $request = $hook->beforeRequest($context, $request);
            } catch (\Exception $e) {
                throw new \Exception('An error occurred while calling BeforeRequest hook.', $e->getCode(), $e);
            }
        }

        return $request;
    }

    public function afterSuccess(AfterSuccessContext $context, ResponseInterface $response): ResponseInterface
    {
        foreach ($this->afterSuccessHooks as $hook) {
            try {
                $response = $hook->afterSuccess($context, $response);
            } catch (\Exception $e) {
                throw new \Exception('An error occurred while calling AfterSuccess hook.', $e->getCode(), $e);
            }
        }

        return $response;
    }

    public function afterError(AfterErrorContext $context, ?ResponseInterface $response, ?\Throwable $exception): ResponseInterface
    {
        $errorContext = new ErrorResponseContext($response, $exception);
        foreach ($this->afterErrorHooks as $hook) {
            try {
                $errorContext = $hook->afterError($context, $errorContext->response, $errorContext->e);
            } catch (FailEarlyException $e) {
                throw $e;
            } catch (\Exception $e) {
                throw new \Exception('An error occurred while calling AfterError hook.', $e->getCode(), $e);
            }
        }
        if ($errorContext->e !== null) {
            throw $errorContext->e;
        } else {
            return $errorContext->response;
        }
    }
}
