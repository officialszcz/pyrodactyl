<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Podany FQDN lub adres IP nie rozwiązuje się do ważnego adresu IP.',
        'fqdn_required_for_ssl' => 'Wymagany jest w pełni kwalifikowany nazwa domeny, która rozwiązuje się do publicznego adresu IP, aby móc używać SSL dla tego węzła.',
    ],
    'notices' => [
        'allocations_added' => 'Przydziały zostały pomyślnie dodane do tego węzła.',
        'node_deleted' => 'Węzeł został pomyślnie usunięty z panelu.',
        'location_required' => 'Musisz mieć skonfigurowaną przynajmniej jedną lokalizację, zanim dodasz węzeł do tego panelu.',
        'node_created' => 'Pomyślnie utworzono nowy węzeł. Możesz automatycznie skonfigurować demon na tej maszynie, odwiedzając zakładkę \'Konfiguracja\'. <strong>Przed dodaniem jakichkolwiek serwerów musisz najpierw przydzielić przynajmniej jeden adres IP i port.</strong>',
        'node_updated' => 'Informacje o węźle zostały zaktualizowane. Jeśli zmieniono jakiekolwiek ustawienia demona, będziesz musiał go zrestartować, aby zmiany mogły wejść w życie.',
        'unallocated_deleted' => 'Usunięto wszystkie nieprzydzielone porty dla <code>:ip</code>.',
    ],
];
