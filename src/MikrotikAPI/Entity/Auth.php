<?php

namespace MikrotikAPI\Entity;



/**
 * Class responsible for storing the connection variables
 *
 * @category Auth
 * @package  Entity
 * @author    Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 * @license  https://opensource.org/licenses/MIT The MIT License (MIT)
 * @link     https://github.com/nunenuh/mikrotik-api
 *
 */
class Auth
{

    /**
     * @var string
     */
    private $host;

    /**
     * @var int 
     */
    private $port = 8728;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string 
     */
    private $password;

    /**
     * @var boolean 
     */
    private $debug = false;

    /**
     * @var int
     */
    private $attempts = 5;

    /**
     * @var int
     */
    private $delay = 2;

    /**
     * @var int
     */
    private $timeout = 2;


    /**
     * @param string $host
     * @param string $username
     * @param string $password
     */
    function __construct($host = '', $username = '', $password = '')
    {

        $this->setHost($host);
        $this->setUsername($username);
        $this->setPassword($password);

        return $this;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * @return int
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * @return int
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * @return int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
php     * @param string $host
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * @param int $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @param bool $debug
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;

        return $this;
    }

    /**
     * @param string $attempts
     * @return $this
     */
    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;

        return $this;
    }

    /**
     * @param int $delay
     * @return $this
     */
    public function setDelay($delay)
    {
        $this->delay = $delay;

        return $this;
    }

    /**
     * @param int $timeout
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;

        return $this;
    }

}
