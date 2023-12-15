<?php
    include_once ('controler/noteControler.php');
    $notesController = new NoteController('notes.json');
    $notes = $notesController->getNotes();

//echo '<pre>';
//print_r($notes);
//echo '</pre>';

//    echo '<div style="margin: 20px; display: grid; grid-template-columns: 1fr 1fr 1fr 1fr 1fr;">';
//    foreach ($notes as $key => $value)
//    {
//        //print_r($value);
//        echo '<div class="card bg-success text-white" style="width:auto; margin: 5px">
//    <div class="card-body">
//        <h4 class="card-title">'.$value->getTitle().'</h4>
//        <p class="card-text">'.$value->getBody().'</p>
//        <p class="card-text">'.$value->getNoteDate().'</p>
//    </div>
//</div>';
//    }
//    echo '</div>';
echo '<div style="margin: 20px; display: grid; grid-template-columns: 1fr 1fr 1fr 1fr;">';
foreach ($notes as $key => $value)
{
    //print_r($value);
    echo $value;
}
echo '</div>';