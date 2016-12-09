<?php
/**
 *
 */
class Arac_Model extends CI_Model
{

    public function __construct()
    {
       $this->em = $this->doctrine->em;
    }

    protected $em;

    public function findByCritOrderByDate($criterion, $value)
    {
        $smtm = $this->em->getConnection()
                       ->prepare('SELECT a.dosya_no AS dosyano FROM arac a WHERE a.'.$criterion.' LIKE \'%'.$value.'%\'');
       $smtm->execute();
       return $smtm->fetchAll();
    }

}

 ?>
