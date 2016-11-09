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
}
