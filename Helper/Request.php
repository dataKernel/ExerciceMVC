<?php
namespace Helper;


/**
 * Class Request
 * @package Helper
 * @author Yann Le Scouarnec <yann.le-scouarnec@hetic.net>
 */
class Request
{
    /**
     * @var array
     */
    public $HTTP;
    /**
     * @var string
     */
    public $URI;
    /**
     * @var array
     */
    public $GET;
    /**
     * @var array
     */
    public $POST;
    /**
     * @var array
     */
    public $COOKIE;
    /**
     * @var string
     */
    public $IP;
    /**
     * @var string
     */
    public $USER_AGENT;

    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->COOKIE = $_COOKIE;
        $this->GET = $_GET;
        $this->POST = $_POST;
        $this->URI = $_SERVER['REQUEST_URI'];
        $this->HTTP = [];
        // reference OPTIONS GET HEAD POST PUT DELETE TRACE CONNECT PATCH
        $this->HTTP['method'] = $_SERVER['REQUEST_METHOD'];
        $this->IP = $_SERVER['REMOTE_ADDR'];
        $this->USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
    }
}
