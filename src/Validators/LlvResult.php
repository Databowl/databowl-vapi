<?php
namespace Databowl\Vapi\Validators;

use Databowl\Vapi\AbstractResult;

class LlvResult extends AbstractResult
{
    const RESULT_LIVE = 'live';
    const RESULT_DEAD = 'dead';
    const RESULT_RETRY_LATER = 'retry-later';
}
