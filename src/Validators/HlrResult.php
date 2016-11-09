<?php
namespace Databowl\Vapi\Validators;

use Databowl\Vapi\AbstractResult;

class HlrResult extends AbstractResult
{
    const RESULT_LIVE = 'live';
    const RESULT_DEAD = 'dead';
    const RESULT_RETRY_LATER = 'retry-later';

    /**
     * @var string
     */
    protected $network;

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
