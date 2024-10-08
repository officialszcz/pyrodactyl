<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Linie językowe walidacji
    |--------------------------------------------------------------------------
    |
    | Poniższe linie językowe zawierają domyślne komunikaty o błędach używane przez
    | klasę walidatora. Niektóre z tych reguł mają wiele wersji, takich jak
    | reguły dotyczące rozmiaru. Możesz dostosować każdą z tych wiadomości tutaj.
    |
    */

    'accepted' => ':attribute musi być zaakceptowane.',
    'active_url' => ':attribute nie jest prawidłowym adresem URL.',
    'after' => ':attribute musi być datą po :date.',
    'after_or_equal' => ':attribute musi być datą po lub równą :date.',
    'alpha' => ':attribute może zawierać tylko litery.',
    'alpha_dash' => ':attribute może zawierać tylko litery, cyfry i myślniki.',
    'alpha_num' => ':attribute może zawierać tylko litery i cyfry.',
    'array' => ':attribute musi być tablicą.',
    'before' => ':attribute musi być datą przed :date.',
    'before_or_equal' => ':attribute musi być datą przed lub równą :date.',
    'between' => [
        'numeric' => ':attribute musi być między :min a :max.',
        'file' => ':attribute musi mieć od :min do :max kilobajtów.',
        'string' => ':attribute musi mieć od :min do :max znaków.',
        'array' => ':attribute musi mieć od :min do :max elementów.',
    ],
    'boolean' => 'Pole :attribute musi być prawdziwe lub fałszywe.',
    'confirmed' => 'Potwierdzenie :attribute nie pasuje.',
    'date' => ':attribute nie jest prawidłową datą.',
    'date_format' => ':attribute nie pasuje do formatu :format.',
    'different' => ':attribute i :other muszą być różne.',
    'digits' => ':attribute musi mieć :digits cyfr.',
    'digits_between' => ':attribute musi mieć od :min do :max cyfr.',
    'dimensions' => ':attribute ma nieprawidłowe wymiary obrazu.',
    'distinct' => 'Pole :attribute ma powtarzającą się wartość.',
    'email' => ':attribute musi być prawidłowym adresem e-mail.',
    'exists' => 'Wybrane :attribute jest nieprawidłowe.',
    'file' => ':attribute musi być plikiem.',
    'filled' => 'Pole :attribute jest wymagane.',
    'image' => ':attribute musi być obrazem.',
    'in' => 'Wybrane :attribute jest nieprawidłowe.',
    'in_array' => 'Pole :attribute nie istnieje w :other.',
    'integer' => ':attribute musi być liczbą całkowitą.',
    'ip' => ':attribute musi być prawidłowym adresem IP.',
    'json' => ':attribute musi być prawidłowym ciągiem JSON.',
    'max' => [
        'numeric' => ':attribute nie może być większe niż :max.',
        'file' => ':attribute nie może być większe niż :max kilobajtów.',
        'string' => ':attribute nie może być większe niż :max znaków.',
        'array' => ':attribute nie może mieć więcej niż :max elementów.',
    ],
    'mimes' => ':attribute musi być plikiem typu: :values.',
    'mimetypes' => ':attribute musi być plikiem typu: :values.',
    'min' => [
        'numeric' => ':attribute musi być co najmniej :min.',
        'file' => ':attribute musi mieć co najmniej :min kilobajtów.',
        'string' => ':attribute musi mieć co najmniej :min znaków.',
        'array' => ':attribute musi mieć co najmniej :min elementów.',
    ],
    'not_in' => 'Wybrane :attribute jest nieprawidłowe.',
    'numeric' => ':attribute musi być liczbą.',
    'present' => 'Pole :attribute musi być obecne.',
    'regex' => 'Format :attribute jest nieprawidłowy.',
    'required' => 'Pole :attribute jest wymagane.',
    'required_if' => 'Pole :attribute jest wymagane, gdy :other jest :value.',
    'required_unless' => 'Pole :attribute jest wymagane, chyba że :other jest w :values.',
    'required_with' => 'Pole :attribute jest wymagane, gdy :values jest obecne.',
    'required_with_all' => 'Pole :attribute jest wymagane, gdy :values jest obecne.',
    'required_without' => 'Pole :attribute jest wymagane, gdy :values nie jest obecne.',
    'required_without_all' => 'Pole :attribute jest wymagane, gdy żadne z :values nie jest obecne.',
    'same' => ':attribute i :other muszą pasować.',
    'size' => [
        'numeric' => ':attribute musi mieć :size.',
        'file' => ':attribute musi mieć :size kilobajtów.',
        'string' => ':attribute musi mieć :size znaków.',
        'array' => ':attribute musi zawierać :size elementów.',
    ],
    'string' => ':attribute musi być ciągiem.',
    'timezone' => ':attribute musi być prawidłową strefą.',
    'unique' => ':attribute zostało już zajęte.',
    'uploaded' => ':attribute nie udało się przesłać.',
    'url' => 'Format :attribute jest nieprawidłowy.',

    /*
    |--------------------------------------------------------------------------
    | Niestandardowe atrybuty walidacji
    |--------------------------------------------------------------------------
    |
    | Poniższe linie językowe są używane do zamiany miejsc
    | atrybutów na coś bardziej przyjaznego dla użytkownika, takiego jak
    | Adres e-mail zamiast "email". Pomaga to w uproszczeniu komunikatów.
    |
    */

    'attributes' => [],

    // Wewnętrzna logika walidacji dla Pterodactyla
    'internal' => [
        'variable_value' => ':env zmienna',
        'invalid_password' => 'Podane hasło jest nieprawidłowe dla tego konta.',
    ],
];
