<?php
namespace Databowl\Vapi\Contracts;

use Databowl\Vapi\AbstractResult;

interface IsRequest
{
    /**
     * @return string
     */
    public function getService();

    /**
     * @return string
     */
    public function getType();

    /**
     * @return array
     */
    public function getParameters();

    /**
     * @return AbstractResult
     */
    public function getResultObject();
}
