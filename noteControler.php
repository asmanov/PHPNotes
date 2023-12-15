<?php

include_once ('model/noteModel.php');
include_once ('model/NotesStorage.php');
class NoteController {

    public $notesStorage;

    public function __construct() {
        $this->notesStorage = new \NotesStorage();
    }

    public function getNotes(): array {
        return $this->notesStorage->getNotes();
    }

    public function addNote($title, $body) {
        $this->notesStorage->addNote($title, $body);
    }
}