<?php

declare(strict_types=1);

namespace OOP\DDD\ValueObject;

use OOP\DDD\Exceptions\CurrencyNotAvailableException;
use OOP\DDD\Exceptions\PriceLessThanZeroException;

final class Price
{
    private const EUR = 'EUR';

    private const USD = 'USD';

    private const PLN = 'PLN';

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    public function __construct(float $amount, string $currency)
    {
        if($this->amount < 0) {
            throw new PriceLessThanZeroException('Price cannot be less than zero.');
        }

        if(!in_array($currency, $this->getAvailableCurrencies())) {
            throw new CurrencyNotAvailableException('Currency: ' . $currency . ' isn\'t available.');
        }

        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function isEqualsTo(Price $price): bool
    {
        return $this->amount === $price->getAmount() && $this->currency === $price->getCurrency();
    }

    private function getAvailableCurrencies(): array
    {
        return [self::EUR, self::USD, self::PLN];
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
}