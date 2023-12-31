<?php

namespace AlibabaCloud\Tea\Exception;

use RuntimeException;

/**
 * Class TeaError.
 */
class TeaError extends RuntimeException
{
    public $message = '';
    public $code    = 0;
    public $data;
    public $name    = '';
    private $errorInfo;

    /**
     * TeaError constructor.
     *
     * @param array           $errorInfo
     * @param string          $message
     * @param int             $code
     * @param null|\Throwable $previous
     */
    public function __construct($errorInfo = [], $message = '', $code = 0, $previous = null)
    {
        parent::__construct((string) $message, (int) $code, $previous);
        $this->errorInfo = $errorInfo;
        if (!empty($errorInfo)) {
            $properties = ['name', 'message', 'code', 'data'];
            foreach ($properties as $property) {
                if (isset($errorInfo[$property])) {
                    $this->{$property} = $errorInfo[$property];
                }
            }
        }
    }

    /**
     * @return array
     */
    public function getErrorInfo()
    {
        return $this->errorInfo;
    }
}
