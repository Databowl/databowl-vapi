<?php
namespace Databowl\Vapi\Validators;

use Databowl\Vapi\Contracts\IsRequest;

class InivioPhone implements IsRequest
{
    /**
     * @var string
     */
    protected $phone;

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
        return 'inivio_phone';
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return [
            'phone' => $this->phone,
        ];
    }

    /**
     * @return InivioPhoneResult
     */
    public function getResultObject()
    {
        return new InivioPhoneResult();
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}
