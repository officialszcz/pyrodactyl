<?php

return [
    'sign_in' => 'Zaloguj się',
    'go_to_login' => 'Przejdź do logowania',
    'failed' => 'Nie znaleziono konta pasującego do tych danych logowania.',

    'forgot_password' => [
        'label' => 'Zapomniałeś hasła?',
        'label_help' => 'Wprowadź adres e-mail swojego konta, aby otrzymać instrukcje dotyczące resetowania hasła.',
        'button' => 'Odzyskaj konto',
    ],

    'reset_password' => [
        'button' => 'Zresetuj i zaloguj się',
    ],

    'two_factor' => [
        'label' => 'Token dwuskładnikowy',
        'label_help' => 'To konto wymaga drugiej warstwy uwierzytelniania, aby kontynuować. Wprowadź kod wygenerowany przez swoje urządzenie, aby zakończyć logowanie.',
        'checkpoint_failed' => 'Token uwierzytelniania dwuskładnikowego był nieprawidłowy.',
    ],

    'throttle' => 'Zbyt wiele prób logowania. Spróbuj ponownie za :seconds sekund.',
    'password_requirements' => 'Hasło musi mieć co najmniej 8 znaków i powinno być unikalne dla tej strony.',
    '2fa_must_be_enabled' => 'Administrator wymaga, aby dla twojego konta było włączone dwuskładnikowe uwierzytelnianie, aby korzystać z panelu.',
];
