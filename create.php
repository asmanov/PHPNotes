<?php
include_once ('controler/noteControler.php');
$notesController = new NoteController();

echo '<form method="POST" style="margin: 20px">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
        <label>Note text</label>
        <input type="text" class="form-control" placeholder="Enter your note" name="body">
    </div>
    <button type="submit" class="btn btn-success" name="create">Create note</button>
    <button type="reset" class="btn btn-success" >Reset</button>
</form>';

if (isset($_POST['create']))
{
    $notesController->addNote($_POST['title'], $_POST['body']);
    echo "Note created successfully!";

    // Отладочная информация
    echo '<pre>';
    print_r($notesController->getNotes());
    echo '</pre>';
}
