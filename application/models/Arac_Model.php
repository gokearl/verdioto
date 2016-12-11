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

    public function find($id)
    {
        $result = $this->em->getRepository('Entity\Arac')->find($id);
        return $result;
    }

    public function findByCritOrderByDate($criterion, $value)
    {
        $smtm = $this->em->getConnection()
                       ->prepare('SELECT a.id AS id, a.marka AS marka, a.plaka AS plaka, a.il_ilce AS ilce, a.musteri_no AS musterino FROM arac a WHERE CAST(a.'.$criterion.' AS TEXT) LIKE \'%'.$value.'%\'');
       $smtm->execute();
       return $smtm->fetchAll();
    }

}

 ?>
