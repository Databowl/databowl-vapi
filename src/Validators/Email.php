<?php
namespace Databowl\Vapi\Validators;

use Databowl\Vapi\Contracts\IsRequest;

class Email implements IsRequest
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
        return 'email';
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
     * @return EmailResult
     */
    public function getResultObject()
    {
        return new EmailResult;
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
