<?php

declare(strict_types=1);

namespace App;

class Money
{
    private int|float $amount;

    private Currency $currency;

    /**
     * @param float|int $amount
     * @param Currency $currency
     */
    public function __construct($amount, Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    /**
     * @return float|int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float|int $amount
     */
    private function setAmount($amount)
    {
        if ($amount <= 0) {
            exit("Wrong");
        }
        $this->amount = $amount;
    }

    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param Currency $currency
     */
    private function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function equals(Money $money)
    {
        return $this->getCurrency()->equals($money->getCurrency()) && $this->getAmount() === $money->getAmount();
    }
    public function add(Money $money)
    {
        if (!$this->getCurrency()->equals($money->getCurrency())) {
            exit("Wrong");
        }
        return new self($this->getAmount() + $money->getAmount(), $this->getCurrency());
    }
}
