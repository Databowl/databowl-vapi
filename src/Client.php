<?php
namespace Databowl\Vapi;

use Databowl\Vapi\Contracts\IsRequest;
use Databowl\Vapi\Exceptions\ResponseException;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\ClientInterface as HttpClientInterface;

class Client
{
    /**
     * @var ClientConfig
     */
    protected $config;

    /**
     * @var HttpClientInterface
     */
    protected $httpClient;

    /**
     * Client constructor.
     * @param ClientConfig $config
     * @param HttpClientInterface|null $httpClient
     */
    public function __construct(ClientConfig $config, HttpClientInterface $httpClient = null)
    {
        $this->config = $config;
        $this->httpClient = is_null($httpClient) ? $this->createHttpClient() : $httpClient;
    }

    /**
     * @param IsRequest $request
     * @return AbstractResult
     * @throws ResponseException
     */
    public function sendRequest(IsRequest $request)
    {
        $query = $this->generateQueryParameters($request);
        $query['signature'] = $this->generateAuthenticationSignature($query);
        $query['key'] = $this->config->getPublicKey();

        $response = $this->httpClient->request('GET', '', [
            'query' => $query,
        ]);

        $responseData = json_decode($response->getBody()->getContents(), true);
        if (is_null($responseData)) {
            throw new ResponseException('Failed to decode response contents');
        }

        return $this->createResult($request->getResultObject(), $responseData);
    }

    /**
     * @return HttpClientInterface
     */
    protected function createHttpClient()
    {
        return new HttpClient([
            'base_uri' => sprintf($this->config->getBaseUrl(), $this->config->getInstance()),
        ]);
    }

    /**
     * @param IsRequest $request
     * @return array
     */
    protected function generateQueryParameters(IsRequest $request)
    {
        $parameters = $request->getParameters();
        $data = [];

        array_walk($parameters, function ($value, $key) use (&$data) {
            $key = sprintf('data[%s]', $key);
            $data[$key] = $value;
        });

        return array_merge([
            'timestamp' => time(),
            'service' => $request->getService(),
            'type' => $request->getType(),
        ], $data);
    }

    /**
     * @param array $query
     * @return string
     */
    protected function generateAuthenticationSignature(array $query)
    {
        $value = urldecode(http_build_query($query));
        return hash_hmac('SHA256', $value, $this->config->getPrivateKey());
    }

    /**
     * @param $resultClass
     * @param array $responseData
     * @return AbstractResult
     */
    protected function createResult($resultClass, array $responseData)
    {
        /** @var AbstractResult $result */
        $result = new $resultClass;
        $result->hydrateFromArray($responseData);

        return $result;

    }
}
