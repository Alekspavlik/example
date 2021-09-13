<?php

declare(strict_types=1);

namespace App;

class Currency
{
    private string $code;

    private array $codes = ["USD", "EUR"];

    /**
     * @param string $code
     */
    public function __construct($code)
    {
        $this->setCode($code);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    private function setCode($code)
    {
        $code = mb_strtoupper($code);
        if (!in_array($code, $this->codes)) {
            exit("Wrong");
        }
        $this->code = $code;
    }
    public function equals(Currency $currency)
    {
        return $this->getCode() === $currency->getCode();
    }
}
