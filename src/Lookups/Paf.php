<?php
namespace Databowl\Vapi\Lookups;

use Databowl\Vapi\Contracts\IsRequest;

class Paf implements IsRequest
{
    /**
     * @var string
     */
    protected $postcode;

    /**
     * @return string
     */
    public function getService()
    {
        return 'lookup';
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'paf';
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return [
           'postcode' => $this->postcode,
        ];
    }

    /**
     * @return PafResult
     */
    public function getResultObject()
    {
        return new PafResult;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }
}
