<?php

use App\Services\CurrencyService;

test('convert usd to eur successful', function () {
    $convertedCurrency = (new CurrencyService())->convert(100, 'usd', 'eur');

    expect($convertedCurrency)
        ->toBeFloat()
        ->toEqual(98.0);
});
