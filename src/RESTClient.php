<?php

namespace OneFit\VirtuaGymConnect;

use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\GuzzleException;

abstract class RESTClient
{
    /**
     * HTTP request client.
     *
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * RESTClient constructor.
     *
     * @param ClientInterface $httpClient
     */
    public function __construct(ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * Get the headers
     *
     * @return array
     */
    protected function getHeaders(): array
    {
        return [
          'headers' => [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
          ]
        ];
    }

    /**
     * Get the request client
     *
     * @return ClientInterface
     */
    protected function getClient(): ClientInterface
    {
        return $this->httpClient;
    }

    /**
     * @param string $method
     * @param string $url
     * @param array $options
     * @return ResponseInterface
     */
    protected function sendRequest(string $method, string $url, array $options = []): ResponseInterface
    {
        try {
            $response = $this->getClient()->request($method, $url, array_merge($this->getHeaders(), $options));
        } catch (GuzzleException $exception) {
            //you should log this exception and throw application level exception
        }

        return $response;
    }
}
