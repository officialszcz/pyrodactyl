<?php

return [
    'location' => [
        'no_location_found' => 'Nie znaleziono rekordu pasującego do podanego kodu krótcego.',
        'ask_short' => 'Krótki kod lokalizacji',
        'ask_long' => 'Opis lokalizacji',
        'created' => 'Pomyślnie utworzono nową lokalizację (:name) z ID :id.',
        'deleted' => 'Pomyślnie usunięto żądaną lokalizację.',
    ],
    'user' => [
        'search_users' => 'Wprowadź nazwę użytkownika, ID użytkownika lub adres e-mail',
        'select_search_user' => 'ID użytkownika do usunięcia (Wprowadź \'0\' aby ponownie przeszukać)',
        'deleted' => 'Użytkownik został pomyślnie usunięty z panelu.',
        'confirm_delete' => 'Czy na pewno chcesz usunąć tego użytkownika z panelu?',
        'no_users_found' => 'Nie znaleziono użytkowników dla podanego hasła.',
        'multiple_found' => 'Znaleziono wiele kont dla podanego użytkownika, nie można usunąć użytkownika z powodu flagi --no-interaction.',
        'ask_admin' => 'Czy ten użytkownik jest administratorem?',
        'ask_email' => 'Adres e-mail',
        'ask_username' => 'Nazwa użytkownika',
        'ask_name_first' => 'Imię',
        'ask_name_last' => 'Nazwisko',
        'ask_password' => 'Hasło',
        'ask_password_tip' => 'Jeśli chcesz utworzyć konto z losowym hasłem wysłanym do użytkownika, ponownie uruchom to polecenie (CTRL+C) i użyj flagi `--no-password`.',
        'ask_password_help' => 'Hasła muszą mieć co najmniej 8 znaków i zawierać przynajmniej jedną dużą literę i cyfrę.',
        '2fa_help_text' => [
            'To polecenie wyłączy uwierzytelnianie dwuetapowe dla konta użytkownika, jeśli jest ono włączone. Powinno być używane tylko jako polecenie odzyskiwania konta, jeśli użytkownik nie ma dostępu do swojego konta.',
            'Jeśli to nie jest to, co chciałeś zrobić, naciśnij CTRL+C, aby zakończyć ten proces.',
        ],
        '2fa_disabled' => 'Uwierzytelnianie dwuetapowe zostało wyłączone dla :email.',
    ],
    'schedule' => [
        'output_line' => 'Wysyłanie zadania dla pierwszego zadania w `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Usuwanie pliku kopii zapasowej usługi :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Żądanie odbudowy dla ":name" (#:id) na węźle ":node" nie powiodło się z błędem: :message',
        'reinstall' => [
            'failed' => 'Żądanie ponownej instalacji dla ":name" (#:id) na węźle ":node" nie powiodło się z błędem: :message',
            'confirm' => 'Zaraz ponownie zainstalujesz na grupie serwerów. Czy chcesz kontynuować?',
        ],
        'power' => [
            'confirm' => 'Zaraz wykonasz :action na :count serwerach. Czy chcesz kontynuować?',
            'action_failed' => 'Żądanie akcji zasilania dla ":name" (#:id) na węźle ":node" nie powiodło się z błędem: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'Host SMTP (np. smtp.gmail.com)',
            'ask_smtp_port' => 'Port SMTP',
            'ask_smtp_username' => 'Nazwa użytkownika SMTP',
            'ask_smtp_password' => 'Hasło SMTP',
            'ask_mailgun_domain' => 'Domena Mailgun',
            'ask_mailgun_endpoint' => 'Punkt końcowy Mailgun',
            'ask_mailgun_secret' => 'Sekret Mailgun',
            'ask_mandrill_secret' => 'Sekret Mandrill',
            'ask_postmark_username' => 'Klucz API Postmark',
            'ask_driver' => 'Jaki driver powinien być używany do wysyłania e-maili?',
            'ask_mail_from' => 'Adres e-mail, z którego powinny pochodzić e-maile',
            'ask_mail_name' => 'Nazwa, która powinna się pojawić w e-mailach',
            'ask_encryption' => 'Metoda szyfrowania do użycia',
        ],
    ],
];
