<?php
namespace Databowl\Vapi\Validators;

use Databowl\Vapi\Contracts\IsRequest;

class InivioEmail implements IsRequest
{
    /**
     * @var string
     */
    protected $email;

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
        return 'inivio_email';
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return [
            'email' => $this->email,
        ];
    }

    /**
     * @return InivioEmailResult
     */
    public function getResultObject()
    {
        return new InivioEmailResult();
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
