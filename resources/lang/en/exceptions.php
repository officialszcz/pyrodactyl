<?php

return [
    'daemon_connection_failed' => 'Podczas próby komunikacji z demonem wystąpił wyjątek, który spowodował odpowiedź HTTP/:code. Ten wyjątek został zarejestrowany.',
    'node' => [
        'servers_attached' => 'Aby usunąć węzeł, nie może on mieć przypisanych żadnych serwerów.',
        'daemon_off_config_updated' => 'Konfiguracja demona <strong>została zaktualizowana</strong>, jednak wystąpił błąd podczas próby automatycznej aktualizacji pliku konfiguracyjnego na demonie. Musisz ręcznie zaktualizować plik konfiguracyjny (config.yml), aby demon zastosował te zmiany.',
    ],
    'allocations' => [
        'server_using' => 'Serwer jest obecnie przypisany do tej alokacji. Alokację można usunąć tylko wtedy, gdy nie jest do niej przypisany żaden serwer.',
        'too_many_ports' => 'Dodanie więcej niż 1000 portów w jednym zakresie na raz nie jest obsługiwane.',
        'invalid_mapping' => 'Przypisanie dla :port było nieprawidłowe i nie mogło zostać przetworzone.',
        'cidr_out_of_range' => 'Notacja CIDR pozwala tylko na maski pomiędzy /25 a /32.',
        'port_out_of_range' => 'Porty w alokacji muszą być większe niż 1024 i mniejsze lub równe 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Gniazda z aktywnymi serwerami nie można usunąć z Panelu.',
        'egg' => [
            'delete_has_servers' => 'Jajka z aktywnymi serwerami nie można usunąć z Panelu.',
            'invalid_copy_id' => 'Wybrane jajko do skopiowania skryptu albo nie istnieje, albo samo kopiuje skrypt.',
            'must_be_child' => 'Dyrektywa "Skopiuj ustawienia z" dla tego jajka musi być opcją podrzędną dla wybranego gniazda.',
            'has_children' => 'To jajko jest nadrzędne wobec jednego lub więcej innych jajek. Usuń te jajka, zanim usuniesz to jajko.',
        ],
        'variables' => [
            'env_not_unique' => 'Zmienna środowiskowa :name musi być unikalna dla tego jajka.',
            'reserved_name' => 'Zmienna środowiskowa :name jest zarezerwowana i nie może być przypisana do zmiennej.',
            'bad_validation_rule' => 'Zasada walidacji ":rule" nie jest prawidłową zasadą dla tej aplikacji.',
        ],
        'importer' => [
            'json_error' => 'Wystąpił błąd podczas próby parsowania pliku JSON: :error.',
            'file_error' => 'Podany plik JSON nie był prawidłowy.',
            'invalid_json_provided' => 'Podany plik JSON nie jest w formacie, który można rozpoznać.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Edytowanie własnego konta subużytkownika nie jest dozwolone.',
        'user_is_owner' => 'Nie możesz dodać właściciela serwera jako subużytkownika dla tego serwera.',
        'subuser_exists' => 'Użytkownik z tym adresem e-mail jest już przypisany jako subużytkownik dla tego serwera.',
    ],
    'databases' => [
        'delete_has_databases' => 'Nie można usunąć hosta bazy danych, który ma przypisane aktywne bazy danych.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Maksymalny czas interwału dla powiązanego zadania to 15 minut.',
    ],
    'locations' => [
        'has_nodes' => 'Nie można usunąć lokalizacji, która ma przypisane aktywne węzły.',
    ],
    'users' => [
        'node_revocation_failed' => 'Nie udało się cofnąć kluczy na <a href=":link">Węźle #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Nie znaleziono węzłów spełniających wymagania określone dla automatycznego wdrażania.',
        'no_viable_allocations' => 'Nie znaleziono alokacji spełniających wymagania dla automatycznego wdrażania.',
    ],
    'api' => [
        'resource_not_found' => 'Żądany zasób nie istnieje na tym serwerze.',
    ],
];
