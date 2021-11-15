<?php
class Database extends PDO
{
    public function __construct()
    {
        //Create a PDO instance
        parent::__construct(DSN, DB_USER, DB_PASSWORD);
        
        //Set PDO attributes
        foreach(PDO_ATTRS as $attr => $value){
            $this->setAttribute($attr, $value);
        }
    }
}
