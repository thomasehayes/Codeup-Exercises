<?php  

class Superhero extends Person
{
    public $pseudonym;
    public $capeColor;

    public function alterEgo()
    {
        return 'Top Secret Alternate Ego: ' . $this->fullName();
    }

    public function hasCape()
    {
        if(!empty($this->capeColor)) {
            return $this->capeColor;
    }
}

?>
