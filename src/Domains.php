<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub;

class Domains 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Retrieve a list of domains
     * 
     * Retrieve a list of domains associated with the authenticated workspace.
     * 
     * @param ?string $workspaceId
     * @param ?string $projectSlug
     * @return \Dub\Models\Operations\ListDomainsResponse
     */
	public function list(
        ?string $workspaceId = null,
        ?string $projectSlug = null,
    ): \Dub\Models\Operations\ListDomainsResponse
    {
        $request = new \Dub\Models\Operations\ListDomainsRequest();
        $request->workspaceId = $workspaceId;
        $request->projectSlug = $projectSlug;
        
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/domains');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Dub\Models\Operations\ListDomainsRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Dub\Models\Operations\ListDomainsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->domainSchemas = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Dub\Models\Components\DomainSchema>', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\BadRequest', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorized = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Unauthorized', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbidden = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Forbidden', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFound = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\NotFound', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 409) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->conflict = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Conflict', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 410) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->inviteExpired = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\InviteExpired', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unprocessableEntity = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\UnprocessableEntity', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 429) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->rateLimitExceeded = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\RateLimitExceeded', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->internalServerError = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\InternalServerError', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Add a domain
     * 
     * Add a domain to the authenticated workspace.
     * 
     * @param ?string $workspaceId
     * @param ?string $projectSlug
     * @param ?\Dub\Models\Operations\AddDomainRequestBody $requestBody
     * @return \Dub\Models\Operations\AddDomainResponse
     */
	public function add(
        ?string $workspaceId = null,
        ?string $projectSlug = null,
        ?\Dub\Models\Operations\AddDomainRequestBody $requestBody = null,
    ): \Dub\Models\Operations\AddDomainResponse
    {
        $request = new \Dub\Models\Operations\AddDomainRequest();
        $request->workspaceId = $workspaceId;
        $request->projectSlug = $projectSlug;
        $request->requestBody = $requestBody;
        
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/domains');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Dub\Models\Operations\AddDomainRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Dub\Models\Operations\AddDomainResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->domainSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\DomainSchema', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\BadRequest', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorized = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Unauthorized', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbidden = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Forbidden', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFound = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\NotFound', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 409) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->conflict = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Conflict', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 410) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->inviteExpired = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\InviteExpired', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unprocessableEntity = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\UnprocessableEntity', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 429) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->rateLimitExceeded = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\RateLimitExceeded', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->internalServerError = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\InternalServerError', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Delete a domain
     * 
     * Delete a domain from a workspace. It cannot be undone. This will also delete all the links associated with the domain.
     * 
     * @param \Dub\Models\Operations\DeleteDomainRequest $request
     * @return \Dub\Models\Operations\DeleteDomainResponse
     */
	public function delete(
        ?\Dub\Models\Operations\DeleteDomainRequest $request,
    ): \Dub\Models\Operations\DeleteDomainResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/domains/{slug}', \Dub\Models\Operations\DeleteDomainRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Dub\Models\Operations\DeleteDomainRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Dub\Models\Operations\DeleteDomainResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->object = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Operations\DeleteDomainResponseBody', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\BadRequest', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorized = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Unauthorized', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbidden = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Forbidden', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFound = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\NotFound', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 409) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->conflict = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Conflict', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 410) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->inviteExpired = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\InviteExpired', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unprocessableEntity = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\UnprocessableEntity', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 429) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->rateLimitExceeded = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\RateLimitExceeded', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->internalServerError = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\InternalServerError', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a domain
     * 
     * Update a domain for the authenticated workspace.
     * 
     * @param \Dub\Models\Operations\UpdateDomainRequest $request
     * @return \Dub\Models\Operations\UpdateDomainResponse
     */
	public function update(
        ?\Dub\Models\Operations\UpdateDomainRequest $request,
    ): \Dub\Models\Operations\UpdateDomainResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/domains/{slug}', \Dub\Models\Operations\UpdateDomainRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Dub\Models\Operations\UpdateDomainRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Dub\Models\Operations\UpdateDomainResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->domainSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\DomainSchema', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\BadRequest', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorized = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Unauthorized', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbidden = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Forbidden', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFound = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\NotFound', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 409) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->conflict = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Conflict', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 410) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->inviteExpired = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\InviteExpired', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unprocessableEntity = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\UnprocessableEntity', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 429) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->rateLimitExceeded = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\RateLimitExceeded', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->internalServerError = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\InternalServerError', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Set a domain as primary
     * 
     * Set a domain as primary for the authenticated workspace.
     * 
     * @param \Dub\Models\Operations\SetPrimaryDomainRequest $request
     * @return \Dub\Models\Operations\SetPrimaryDomainResponse
     */
	public function setPrimary(
        ?\Dub\Models\Operations\SetPrimaryDomainRequest $request,
    ): \Dub\Models\Operations\SetPrimaryDomainResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/domains/{slug}/primary', \Dub\Models\Operations\SetPrimaryDomainRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Dub\Models\Operations\SetPrimaryDomainRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Dub\Models\Operations\SetPrimaryDomainResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->domainSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\DomainSchema', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\BadRequest', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorized = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Unauthorized', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbidden = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Forbidden', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFound = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\NotFound', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 409) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->conflict = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Conflict', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 410) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->inviteExpired = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\InviteExpired', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unprocessableEntity = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\UnprocessableEntity', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 429) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->rateLimitExceeded = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\RateLimitExceeded', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->internalServerError = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\InternalServerError', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Transfer a domain
     * 
     * Transfer a domain to another workspace within the authenticated account.
     * 
     * @param \Dub\Models\Operations\TransferDomainRequest $request
     * @return \Dub\Models\Operations\TransferDomainResponse
     */
	public function transfer(
        ?\Dub\Models\Operations\TransferDomainRequest $request,
    ): \Dub\Models\Operations\TransferDomainResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/domains/{slug}/transfer', \Dub\Models\Operations\TransferDomainRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Dub\Models\Operations\TransferDomainRequest::class, $request, $this->sdkConfiguration->globals));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Dub\Models\Operations\TransferDomainResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->domainSchema = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\DomainSchema', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\BadRequest', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorized = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Unauthorized', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbidden = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Forbidden', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFound = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\NotFound', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 409) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->conflict = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\Conflict', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 410) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->inviteExpired = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\InviteExpired', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unprocessableEntity = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\UnprocessableEntity', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 429) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->rateLimitExceeded = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\RateLimitExceeded', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->internalServerError = $serializer->deserialize((string)$httpResponse->getBody(), 'Dub\Models\Components\InternalServerError', 'json');
            }
        }

        return $response;
    }
}