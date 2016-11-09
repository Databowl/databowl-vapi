<?php
namespace Databowl\Vapi\Traits;

trait ArrayObjectHydrator
{
    /**
     * @param array $data
     */
    public function hydrateFromArray(array $data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
}
