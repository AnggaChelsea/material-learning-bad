<?php 

class Book {
    public $title;
    public $tutor;
    public $lecturer;

    public function __construct($title, $tutor, $lecturer){
        $this->title = $title;
        $this->tutor = $tutor;
        $this->lecturer = $lecturer;
    }
}

?>