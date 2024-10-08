<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Próbujesz usunąć domyślny przydział dla tego serwera, ale nie ma dostępnego przydziału zapasowego.',
        'marked_as_failed' => 'Ten serwer został oznaczony jako mający problemy z poprzednią instalacją. Obecny status nie może być zmieniany w tym stanie.',
        'bad_variable' => 'Wystąpił błąd walidacji zmiennej :name.',
        'daemon_exception' => 'Wystąpił wyjątek podczas próby komunikacji z demonem, co spowodowało odpowiedź HTTP/:code. Ten wyjątek został zapisany w dzienniku. (id żądania: :request_id)',
        'default_allocation_not_found' => 'Żądany domyślny przydział nie został znaleziony w przydziałach tego serwera.',
    ],
    'alerts' => [
        'startup_changed' => 'Konfiguracja uruchamiania dla tego serwera została zaktualizowana. Jeśli zmieniono gniazdo lub jajko tego serwera, nastąpi teraz reinstalacja.',
        'server_deleted' => 'Serwer został pomyślnie usunięty z systemu.',
        'server_created' => 'Serwer został pomyślnie utworzony w panelu. Proszę poczekać kilka minut, aby demon całkowicie zainstalował ten serwer.',
        'build_updated' => 'Szczegóły budowy tego serwera zostały zaktualizowane. Niektóre zmiany mogą wymagać restartu, aby weszły w życie.',
        'suspension_toggled' => 'Status zawieszenia serwera został zmieniony na :status.',
        'rebuild_on_boot' => 'Ten serwer został oznaczony jako wymagający odbudowy kontenera Docker. Zdarzy się to następnym razem, gdy serwer zostanie uruchomiony.',
        'install_toggled' => 'Status instalacji tego serwera został zmieniony.',
        'server_reinstalled' => 'Ten serwer został zaplanowany do reinstalacji, która rozpocznie się teraz.',
        'details_updated' => 'Szczegóły serwera zostały pomyślnie zaktualizowane.',
        'docker_image_updated' => 'Pomyślnie zmieniono domyślny obraz Docker używany dla tego serwera. Wymagany jest restart, aby zastosować tę zmianę.',
        'node_required' => 'Musisz mieć skonfigurowany przynajmniej jeden węzeł, zanim dodasz serwer do tego panelu.',
        'transfer_nodes_required' => 'Musisz mieć skonfigurowane przynajmniej dwa węzły, zanim będziesz mógł przenieść serwery.',
        'transfer_started' => 'Transfer serwera został rozpoczęty.',
        'transfer_not_viable' => 'Wybrany przez Ciebie węzeł nie ma wystarczającej przestrzeni dyskowej ani pamięci, aby pomieścić ten serwer.',
    ],
];
