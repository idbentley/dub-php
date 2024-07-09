<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub;

class QRCodes
{
    private SDKConfiguration $sdkConfiguration;

    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Retrieve a QR code
     *
     * Retrieve a QR code for a link.
     *
     * @param  \Dub\Models\Operations\GetQRCodeRequest  $request
     * @return \Dub\Models\Operations\GetQRCodeResponse
     */
    public function get(
        ?\Dub\Models\Operations\GetQRCodeRequest $request,
    ): \Dub\Models\Operations\GetQRCodeResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/qr');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Dub\Models\Operations\GetQRCodeRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, image/png;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Dub\Models\Operations\GetQRCodeResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'image/png')) {
                $response->res = $httpResponse->getBody()->getContents();
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequest = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\BadRequest', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorized = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\Unauthorized', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbidden = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\Forbidden', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFound = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\NotFound', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 409) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->conflict = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\Conflict', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 410) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->inviteExpired = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\InviteExpired', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unprocessableEntity = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\UnprocessableEntity', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 429) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->rateLimitExceeded = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\RateLimitExceeded', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->internalServerError = $serializer->deserialize((string) $httpResponse->getBody(), 'Dub\Models\Components\InternalServerError', 'json');
            }
        }

        return $response;
    }
}