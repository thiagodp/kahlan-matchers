<?php

// Exception

Kahlan\Matcher::register(
    'toThrowAnExceptionWithCode',
    'phputil\kahlan\ToThrowAnExceptionWithCode'
);

Kahlan\Matcher::register(
    'toThrowAnExceptionThatMatches',
    'phputil\kahlan\ToThrowAnExceptionThatMatches'
);

// String

Kahlan\Matcher::register(
    'toHaveStringLength',
    'phputil\kahlan\ToHaveStringLength'
);

?>