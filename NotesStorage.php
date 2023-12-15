<?php

// notesStorage.php
class NotesStorage implements JsonSerializable {
    public $notes = [];
    private $filePath = 'notes.json';
//    public function __construct($fp) {
//        $this->filePath = $fp;
//        $myFile = fopen($this->filePath, "r+") or die("Unable to open file!");
//        while (!feof($myFile)) {
//            $data = fgets($myFile);
//            $this->notes = json_decode($data, true);
//            var_dump($this->notes);
//        }
//        fclose($myFile);
//        //$this->notes[] = json_decode($this->filePath, true);
//        // По умолчанию добавим несколько записок
////        $this->notes[] = new Card('Title 1', 'Body 1');
////        $this->notes[] = new Card('Title 2', 'Body 2');
//        // Добавьте другие по желанию
//    }

    public function getNotes(): array {
        $jsonNotes = file_get_contents("notes.json");
        foreach (json_decode($jsonNotes, true) as $key => $value)
        {
            $this->notes[] = new Card($value['title'], $value['body']);
        }
        return $this->notes;
    }

    public function addNote($title, $body) {
        $jsonNotes = file_get_contents("notes.json");
        $this->notes = json_decode($jsonNotes, true);
        if ($title == '' & $body == '') $this->notes[] = new Card();
        else if ($title == '' & $body != '') $this->notes[] = new Card($b = $body);
        else if ($title != '' & $body == '') $this->notes[] = new Card($t = $title);
        else $this->notes[] = new Card($title, $body);
        $res = json_encode($this->notes);
        var_dump($res);
        $myFile = fopen($this->filePath, "w") or die("Unable to open file!");
        fwrite($myFile, $res.PHP_EOL);
        fclose($myFile);

    }
    public function jsonSerialize() : array
    {
        return get_object_vars($this);
    }

}
