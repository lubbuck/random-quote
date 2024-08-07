<?php

use Lubbuck\RandomQuote\RandomQuote;

test('should return a Stephen Hawking quote', function () {
    $fakeClient = getResponseClient();

    $quoteClass = new RandomQuote($fakeClient);

    $quote = $quoteClass->from('Stephen Hawking');

    expect($quote)->toBe('Look up at the stars and not down at your feet. Try to make sense of what you see, and wonder about what makes the universe exist. Be curious. by Stephen Hawking');
});
