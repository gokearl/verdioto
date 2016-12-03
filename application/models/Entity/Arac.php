<?php
// src/Musteri.php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
* @Entity
* @Table(name="musteri")
*/

class Arac
{

	/**
	* @Id
	* @Column(type="uuid")
	* @GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	* @var string $dosyaNo
	* @Column(name="dosya_no", type="string")
	*/

	protected $dosyaNo;

	/**
	* @var string $adSoyad
	* @Column(name="ad_soyad", type="string")
	*/

	protected $adSoyad;

	/**
	* @var integer $tcNo
	* @Column(name="tc_no", type="bigint")
	*/

	protected $tcNo;

	/**
	* @var integer $adres
	* @Column(name="adres", type="string")
	*/

	protected $adres;

  /**
  * @var integer $adres2
  * @Column(name="adres_2", type="string")
  */

  protected $adres2;

  /**
  * @var integer $adres3
  * @Column(name="adres_3", type="string")
  */

  protected $adres3;

	/**
	* @var integer $marka
	* @Column(name="marka", type="string")
	*/

	protected $marka;

	/**
	* @var integer $tip
	* @Column(name="tip", type="string")
	*/

	protected $tip;

  /**
  * @var integer $model
  * @Column(name="model", type="string")
  */

  protected $model;

  /**
  * @var integer $telefon
  * @Column(name="telefon", type="string")
  */

  protected $telefon;



    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Dosya No
     *
     * @return string $dosyaNo
     */
    public function getDosyaNo()
    {
        return $this->dosyaNo;
    }

    /**
     * Set the value of Dosya No
     *
     * @param string $dosyaNo dosyaNo
     *
     * @return self
     */
    public function setDosyaNo($dosyaNo)
    {
        $this->dosyaNo = $dosyaNo;

        return $this;
    }

    /**
     * Get the value of Ad Soyad
     *
     * @return string $adSoyad
     */
    public function getAdSoyad()
    {
        return $this->adSoyad;
    }

    /**
     * Set the value of Ad Soyad
     *
     * @param string $adSoyad adSoyad
     *
     * @return self
     */
    public function setAdSoyad($adSoyad)
    {
        $this->adSoyad = $adSoyad;

        return $this;
    }

    /**
     * Get the value of Tc No
     *
     * @return integer $tcNo
     */
    public function getTcNo()
    {
        return $this->tcNo;
    }

    /**
     * Set the value of Tc No
     *
     * @param integer $tcNo tcNo
     *
     * @return self
     */
    public function setTcNo($tcNo)
    {
        $this->tcNo = $tcNo;

        return $this;
    }

    /**
     * Get the value of Adres
     *
     * @return integer $adres
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set the value of Adres
     *
     * @param integer $adres adres
     *
     * @return self
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get the value of Adres
     *
     * @return integer $adres2
     */
    public function getAdres2()
    {
        return $this->adres2;
    }

    /**
     * Set the value of Adres
     *
     * @param integer $adres2 adres2
     *
     * @return self
     */
    public function setAdres2($adres2)
    {
        $this->adres2 = $adres2;

        return $this;
    }

    /**
     * Get the value of Adres
     *
     * @return integer $adres3
     */
    public function getAdres3()
    {
        return $this->adres3;
    }

    /**
     * Set the value of Adres
     *
     * @param integer $adres3 adres3
     *
     * @return self
     */
    public function setAdres3($adres3)
    {
        $this->adres3 = $adres3;

        return $this;
    }

    /**
     * Get the value of Marka
     *
     * @return integer $marka
     */
    public function getMarka()
    {
        return $this->marka;
    }

    /**
     * Set the value of Marka
     *
     * @param integer $marka marka
     *
     * @return self
     */
    public function setMarka($marka)
    {
        $this->marka = $marka;

        return $this;
    }

    /**
     * Get the value of Tip
     *
     * @return integer $tip
     */
    public function getTip()
    {
        return $this->tip;
    }

    /**
     * Set the value of Tip
     *
     * @param integer $tip tip
     *
     * @return self
     */
    public function setTip($tip)
    {
        $this->tip = $tip;

        return $this;
    }

    /**
     * Get the value of Model
     *
     * @return integer $model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of Model
     *
     * @param integer $model model
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of Telefon
     *
     * @return integer $telefon
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set the value of Telefon
     *
     * @param integer $telefon telefon
     *
     * @return self
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    public function __toString()
  	{
  		return $this->ad . ' '. $this->soyad. ' '. $this->telefon. ' '. $this->adres. ' '. $this->siparis
  		. ' '. $this->notlar;
  	}

}
 ?>
