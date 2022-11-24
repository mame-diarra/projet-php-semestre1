<?php
    function find_rayonons(array $rayon):array{
        $rayon=[];
        foreach ($rayons as $key => $value) {
            
            $rayon[]=[
                            
            ];
        }
        return $rayons;
    }

    function find_auteurs_by_id(int $id ):array | null{
        foreach ($auteurs as $key => $value) {
           if($value["id"]==$id){
                return $value;
           }
        }
        return null;
    }
    function find_demandes_by_id(int $id ):array | null{
        foreach ($demandes as $key => $value) {
           if($value["id"]==$id){
                return $value;
           }
        }
        return null;
    }

    
?>