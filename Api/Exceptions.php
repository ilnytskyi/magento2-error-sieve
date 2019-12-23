<?php

namespace Fsw\ErrorSieve\Api;

use Fsw\ErrorSieve\Model\Status;

class Exceptions
{
    /** @var Status */
    protected $status;

    /**
     * Exceptions constructor.
     * @param Status $status
     */
    public function __construct(Status $status)
    {
        $this->status = $status;
    }

    /**
     * @return array
     */
    public function getStatus()
    {
        return $this->status->getStatus();
    }
}