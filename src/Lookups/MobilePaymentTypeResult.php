<?php
namespace Databowl\Vapi\Lookups;

use Databowl\Vapi\AbstractResult;

class MobilePaymentTypeResult extends AbstractResult
{
    const RESULT_CONTRACT = 'Contract';
    const RESULT_PAYG = 'PAYG';

    /**
     * @var string
     */
    protected $error;

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }
}
