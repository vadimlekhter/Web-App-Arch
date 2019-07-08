<?php


class ConcreteObservable implements IObservable
{
    /**
     * @var array
     */
    private $observers = [];
    /**
     * @var null|self
     */
    private static $instance = null;
    /**
     * @var
     */
    private $data;

    private function __construct()
    {
    }

    private function __wakeup()
    {
    }

    private function __clone()
    {
    }

    /**
     * @return ConcreteObservable
     */
    static function getInstance()
    {
        if (self::$instance == null) {
            return self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
        $this->notifyObservers();
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }


    /**
     * @param IObserver $obj
     */
    public function addObserver($obj)
    {
        $this->observers [] = $obj;
    }


    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->handleEvent($this->getData());
        }
    }

}