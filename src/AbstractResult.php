<?php
namespace Databowl\Vapi;

use Databowl\Vapi\Traits\ArrayObjectHydrator;

abstract class AbstractResult
{
    use ArrayObjectHydrator;

    /**
     * @var string
     */
    protected $result;

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param string $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }
}
