<?php
namespace Databowl\Vapi\Lookups;

use Databowl\Vapi\AbstractResult;

class PafResult extends AbstractResult
{
    const RESULT_VALID = true;

    /**
     * @var string
     */
    protected $address1;

    /**
     * @var string
     */
    protected $address2;

    /**
     * @var string
     */
    protected $address3;

    /**
     * @var string
     */
    protected $address4;

    /**
     * @var string
     */
    protected $town;

    /**
     * @var string
     */
    protected $county;

    /**
     * @var string
     */
    protected $postcode;

    /**
     * @var array
     */
    protected $premises;

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @return string
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * @param string $address3
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;
    }

    /**
     * @return string
     */
    public function getAddress4()
    {
        return $this->address4;
    }

    /**
     * @param string $address4
     */
    public function setAddress4($address4)
    {
        $this->address4 = $address4;
    }

    /**
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param string $town
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param string $county
     */
    public function setCounty($county)
    {
        $this->county = $county;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * @return array
     */
    public function getPremises()
    {
        return $this->premises;
    }

    /**
     * @param array $premises
     */
    public function setPremises($premises)
    {
        $this->premises = $premises;
    }

    /**
     * @param array $data
     */
    public function hydrateFromArray(array $data)
    {
        if (!isset($data['pafAddress']) || !is_array($data['pafAddress'])) {
            return;
        }

        foreach ($data['pafAddress'] as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
}
