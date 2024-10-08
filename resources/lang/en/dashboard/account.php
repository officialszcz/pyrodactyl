<?php

return [
    'email' => [
        'title' => 'Zaktualizuj swój e-mail',
        'updated' => 'Twój adres e-mail został zaktualizowany.',
    ],
    'password' => [
        'title' => 'Zmień swoje hasło',
        'requirements' => 'Twoje nowe hasło powinno mieć co najmniej 8 znaków.',
        'updated' => 'Twoje hasło zostało zaktualizowane.',
    ],
    'two_factor' => [
        'button' => 'Skonfiguruj uwierzytelnianie dwuskładnikowe',
        'disabled' => 'Uwierzytelnianie dwuskładnikowe zostało wyłączone na Twoim koncie. Nie będziesz już musiał podawać tokenu podczas logowania.',
        'enabled' => 'Uwierzytelnianie dwuskładnikowe zostało włączone na Twoim koncie! Od teraz, podczas logowania, będziesz musiał podać kod generowany przez Twoje urządzenie.',
        'invalid' => 'Podany token jest nieprawidłowy.',
        'setup' => [
            'title' => 'Skonfiguruj uwierzytelnianie dwuskładnikowe',
            'help' => 'Nie możesz zeskanować kodu? Wprowadź poniższy kod w swojej aplikacji:',
            'field' => 'Wprowadź token',
        ],
        'disable' => [
            'title' => 'Wyłącz uwierzytelnianie dwuskładnikowe',
            'field' => 'Wprowadź token',
        ],
    ],
];
