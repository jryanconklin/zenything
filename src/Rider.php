<?php

    class Rider
    {
        private $name;
        private $id;

        function __construct($name, $id=null)
        {
            $this->name = $name;
            $this->id = $id;
        }
//Getter and Setter Methods
        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }
        function getName()
        {
            return $this->name;
        }

        function setId($new_id)
        {
            $this->id = (string) $new_id;
        }
        function getId()
        {
            return $this->id;
        }
//Regular Methods







//Static Methods






//End Class
    }
?>
