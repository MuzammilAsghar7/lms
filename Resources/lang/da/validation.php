<?php 

return [
    'between' => [
        'numeric' => ':attribute skal være mellem :min og :max.',
        'file' => ':attribute skal være mellem :min og :max kilobyte.',
        'string' => ':attribute skal være mellem :min og :max tegn.',
        'array' => ':attribute skal have mellem :min og :max elementer.',
    ],
    'confirmed' => 'Attributbekræftelsen stemmer ikke overens.',
    'gt' => [
        'numeric' => ':attribute skal være større end :value.',
        'file' => ':attribute skal være større end :value kilobytes.',
        'string' => ':attribute skal være større end :value',
        'array' => ':attribute skal have mere end :value elementer.',
    ],
    'gte' => [
        'numeric' => ':attribute skal være større end eller lig med :value.',
        'file' => ':attribute skal være større end eller lig med :value kilobytes.',
        'string' => ':attribute skal være større end eller lig med :value',
        'array' => ':attribute skal have :value eller flere.',
    ],
    'lt' => [
        'numeric' => ':attribute skal være mindre end :value.',
        'file' => ':attribute skal være mindre end :value kilobytes.',
        'string' => ':attribute skal være mindre end :value',
        'array' => ':attribute skal have mindre end :value',
    ],
    'lte' => [
        'numeric' => ':attribute skal være mindre end eller lig med :value.',
        'file' => ':attribute skal være mindre end eller lig med :value kilobytes.',
        'string' => ':attribute skal være mindre end eller lig med :value',
        'array' => ':attribute må ikke have mere end :value elementer.',
    ],
    'max' => [
        'numeric' => ':attribute må ikke være større end :max.',
        'file' => ':attribute må ikke være større end :max kilobytes.',
        'string' => ':attribute må ikke være større end :max tegn.',
        'array' => ':attribute må ikke have mere end :max elementer.',
    ],
    'min' => [
        'numeric' => ':attribute skal være mindst :min.',
        'file' => ':attribute skal være mindst :min kilobyte.',
        'string' => ':attribute skal være mindst :min tegn.',
        'array' => ':attribute skal have mindst :min elementer.',
    ],
    'password' => 'Adgangskoden er forkert.',
    'size' => [
        'numeric' => ':attribute skal være :size.',
        'file' => ':attribute skal være :size kilobytes.',
        'string' => ':attribute skal være :size',
        'array' => ':attribute skal indeholde :size elementer.',
    ],
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'brugerdefineret besked',
        ],
    ],
    'attributes' => '',
    'captcha' => 'Ugyldig captcha-kode leveret',
    'accepted' => 'Attributten : skal accepteres.',
    'active_url' => ':attribute er ikke en gyldig URL.',
    'after' => ':attribute skal være en dato efter :date.',
    'after_or_equal' => ':attribute skal være en dato efter eller lig med :date.',
    'alpha' => 'Attributten : må kun indeholde bogstaver.',
    'alpha_dash' => 'Attributten : må kun indeholde bogstaver, tal, bindestreger og understregninger.',
    'alpha_num' => 'Attributten : må kun indeholde bogstaver og tal.',
    'array' => 'Attributten : skal være en matrix.',
    'before' => ':attribute skal være en dato før :date.',
    'before_or_equal' => ':attribute skal være en dato før eller lig med :date.',
    'boolean' => 'Feltet :attribute skal være sandt eller falsk.',
    'date' => 'Attributten : er ikke en gyldig dato.',
    'date_equals' => ':attribute skal være en dato lig med :date.',
    'date_format' => ':attribute matcher ikke formatet :format.',
    'different' => ':attribute og :other skal være forskellige.',
    'digits' => ':attribute skal være :digits',
    'digits_between' => ':attribute skal være mellem :min og :max cifre.',
    'dimensions' => 'Attributten : har ugyldige billeddimensioner.',
    'distinct' => 'Feltet :attribute har en dubletværdi.',
    'email' => ':attribute skal være en gyldig e-mailadresse.',
    'ends_with' => 'Attributten : skal slutte med en af ​​følgende: :attribute',
    'exists' => 'Den valgte :attribute er ugyldig.',
    'file' => ':attribute skal være en fil.',
    'filled' => 'Feltet :attribute skal have en værdi.',
    'image' => 'Attributten : skal være et billede.',
    'in' => 'Den valgte :attribute er ugyldig.',
    'in_array' => 'Feltet :attribute findes ikke i :other.',
    'integer' => 'Attributten : skal være et heltal.',
    'ip' => ':attribute skal være en gyldig IP-adresse.',
    'ipv4' => 'Attributten : skal være en gyldig IPv4-adresse.',
    'ipv6' => 'Attributten : skal være en gyldig IPv6-adresse.',
    'json' => 'Attributten : skal være en gyldig JSON-streng.',
    'mimes' => ':attribute skal være en fil af typen: :values.',
    'mimetypes' => ':attribute skal være en fil af typen: :values.',
    'not_in' => 'Den valgte :attribute er ugyldig.',
    'not_regex' => ':attribute er ugyldigt.',
    'numeric' => 'Attributten : skal være et tal.',
    'present' => 'Feltet :attribute skal være til stede.',
    'regex' => ':attribute er ugyldigt.',
    'required' => 'Feltet :attribute er påkrævet.',
    'required_if' => 'Feltet :attribute er påkrævet, når :other er :value.',
    'required_unless' => 'Feltet :attribute er påkrævet, medmindre :other er i :values.',
    'required_with' => 'Feltet :attribute er påkrævet, når :values ​​er til stede.',
    'required_with_all' => 'Feltet :attribute er påkrævet, når :values er til stede.',
    'required_without' => 'Feltet :attribute er påkrævet, når :values ​​ikke er til stede.',
    'required_without_all' => 'Feltet :attribute er påkrævet, når ingen af ​​:values er til stede.',
    'same' => ':attribute og :other skal matche.',
    'starts_with' => 'Attributten : skal starte med en af ​​følgende: :attribute',
    'string' => 'Attributten : skal være en streng.',
    'timezone' => 'Attributten : skal være en gyldig zone.',
    'unique' => ':attribute er allerede taget.',
    'uploaded' => ':attribute kunne ikke uploades.',
    'url' => ':attribute er ugyldigt.',
    'uuid' => 'Attributten : skal være et gyldigt UUID.',
];