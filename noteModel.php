<?php
include_once ('cardTitle.php');
class Card extends cardTitle
{
    public $body ;
    public $noteDate;

    public function __construct($t = 'Title', $b = 'Place for your note')
    {
        parent::__construct($t);
        $this->body = $b;
        $this->noteDate =  (date_create('now')->format("Y-m-d H:i:s P"));
    }

    /**
     * @return mixed|string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getNoteDate()
    {
        return $this->noteDate;
    }

    /**
     * @param mixed|string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }
    public function __toString() : string
    {

        return '<div style="margin: 10px">'.parent::__toString().
            '<div class="card bg-success text-white" style="width:300px; ">
                    <div class="card-body">
                        <p class="card-text">'.$this->body.'</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">'.$this->noteDate.'</p>
                    </div>
                </div></div>';
    }
    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
}

