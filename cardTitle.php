<?php
class cardTitle implements JsonSerializable
{
    public $title;

    public function __construct($tit = 'Title')
    {
        $this->title = $tit;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function __toString() : string
    {
        return '<div class="card bg-success text-white" style="width:300px">
                    <div class="card-header">
                        <h4 class="card-title">'.$this->title.'</h4>
                    </div>
                </div>';
    }
    public function jsonSerialize() : mixed
    {
        return get_object_vars($this);
    }
}
