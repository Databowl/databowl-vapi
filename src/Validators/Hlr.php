<?php
namespace Databowl\Vapi\Validators;

use Databowl\Vapi\Contracts\IsRequest;

class Hlr implements IsRequest
{
    /**
     * @var string
     */
    protected $mobile;

    /**
     * @var string
     */
    protected $country = 'GB';

    /**
     * @return string
     */
    public function getService()
    {
        return 'validate';
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'hlr';
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return [
            'mobile' => $this->mobile,
            'country' => $this->country,
        ];
    }

    /**
     * @return HlrResult
     */
    public function getResultObject()
    {
        return new HlrResult;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }
}
