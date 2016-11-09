<?php
namespace Databowl\Vapi\Lookups;

use Databowl\Vapi\Contracts\IsRequest;

class MobilePaymentType implements IsRequest
{
    /**
     * @var string
     */
    protected $mobile;

    /**
     * @var string
     */
    protected $network;

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
        return 'mobile_payment_type';
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return [
            'mobile' => $this->mobile,
            'network' => $this->network,
        ];
    }

    /**
     * @return MobilePaymentTypeResult
     */
    public function getResultObject()
    {
        return new MobilePaymentTypeResult;
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
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @param string $network
     */
    public function setNetwork($network)
    {
        $this->network = $network;
    }
}
