<?php

return [
    'notices' => [
        'created' => 'Nowe gniazdo, :name, zostało pomyślnie utworzone.',
        'deleted' => 'Pomyślnie usunięto żądane gniazdo z Panelu.',
        'updated' => 'Pomyślnie zaktualizowano opcje konfiguracyjne gniazda.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Pomyślnie zaimportowano to Jajo i jego powiązane zmienne.',
            'updated_via_import' => 'To Jajo zostało zaktualizowane przy użyciu podanego pliku.',
            'deleted' => 'Pomyślnie usunięto żądane jajo z Panelu.',
            'updated' => 'Konfiguracja jaja została pomyślnie zaktualizowana.',
            'script_updated' => 'Skrypt instalacyjny jaja został zaktualizowany i będzie uruchamiany za każdym razem, gdy serwery będą instalowane.',
            'egg_created' => 'Nowe jajo zostało pomyślnie złożone. Należy ponownie uruchomić wszystkie działające demony, aby zastosować to nowe jajo.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Zmienna ":variable" została usunięta i nie będzie już dostępna dla serwerów po odbudowie.',
            'variable_updated' => 'Zmienna ":variable" została zaktualizowana. Należy odbudować wszystkie serwery używające tej zmiennej, aby zastosować zmiany.',
            'variable_created' => 'Nowa zmienna została pomyślnie utworzona i przypisana do tego jaja.',
        ],
    ],
];
