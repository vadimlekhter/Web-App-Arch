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
     * @var mixed
     */
    public $data;

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
     * @param IObserver $obj
     */
    public function addObserver(IObserver $obj)
    {
        $this->observers [] = $obj;
    }

    /**
     * @param IObserver $obj
     */
    public function removeObserver(IObserver $obj)
    {
        unset($this->observers[array_search($obj, $this->observers)]);
    }


    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->handleEvent($this);
        }
    }

}