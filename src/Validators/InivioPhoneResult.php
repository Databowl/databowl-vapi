<?php
namespace Databowl\Vapi\Validators;

use Databowl\Vapi\AbstractResult;

class InivioPhoneResult extends AbstractResult
{
    const RESULT_VALID = 'live';
    const RESULT_DEAD = 'dead';
    const RESULT_RETRY_LATER = 'retry-later';
}
