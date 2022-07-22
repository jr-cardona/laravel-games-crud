<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute debe ser aceptado.',
    'active_url' => ':attribute no es una URL válida.',
    'after' => ':attribute debe ser superior a :date.',
    'alpha' => ':attribute solo puede contener letras.',
    'alpha_dash' => ':attribute solo puede contener letas, números y may only contain letters, numbers.',
    'alpha_num' => ':attribute solo puede contener letras y números.',
    'array' => ':attribute debe ser un arreglo.',
    'before' => ':attribute debe ser anterior a :date.',
    'between' => [
        'numeric' => ':attribute debe estar entre :min y :max.',
        'file' => ':attribute debe estar entre :min y :max kilobytes.',
        'string' => ':attribute debe estar entre :min y :max carácteres.',
        'array' => ':attribute debe tener entre :min y :max items.',
    ],
    'boolean' => ':attribute debe ser verdadero o falso.',
    'confirmed' => 'Confirmación de :attribute no coincide.',
    'date' => ':attribute no es una fecha válida.',
    'date_format' => ':attribute no coincide con el formato :format.',
    'different' => ':attribute y :other deben ser diferentes.',
    'digits' => ':attribute debe ser :digits digitos.',
    'digits_between' => ':attribute debe estar entre :min y :max digitos.',
    'dimensions' => ':attribute tiene dimensiones no validas.',
    'distinct' => ':attribute tiene un valor duplicado.',
    'email' => ':attribute debe ser un correo eléctronico válido.',
    'exists' => ':attribute es no válido.',
    'file' => ':attribute debe ser un archivo.',
    'filled' => ':attribute es obligatorio.',
    'gt' => [
        'numeric' => ':attribute debe ser mayor a :value.',
        'file' => ':attribute debe ser mayor a :value kilobytes.',
        'string' => ':attribute debe ser mayor a :value characters.',
        'array' => ':attribute debe tener más de :value items.',
    ],
    'gte' => [
        'numeric' => ':attribute debe ser mayor o igual a :value.',
        'file' => ':attribute debe ser mayor o igual a :value kilobytes.',
        'string' => ':attribute debe ser mayor o igual a :value characters.',
        'array' => ':attribute debe tener :value items o más.',
    ],
    'image' => ':attribute debe ser una imagen.',
    'in' => ':attribute no es válida.',
    'in_array' => ':attribute no existe en :other.',
    'integer' => ':attribute debe ser entero.',
    'ip' => ':attribute debe ser una dirección IP válida.',
    'json' => ':attribute debe ser un JSON válido.',
    'lt' => [
        'numeric' => ':attribute debe ser menor a :value.',
        'file' => ':attribute debe ser menor a :value kilobytes.',
        'string' => ':attribute debe ser menor a :value characters.',
        'array' => ':attribute debe tener menos de :value items.',
    ],
    'lte' => [
        'numeric' => ':attribute debe ser menor o igual a :value.',
        'file' => ':attribute debe ser menor o igual a :value kilobytes.',
        'string' => ':attribute debe ser menor o igual a :value characters.',
        'array' => ':attribute no debe tener mas de :value items.',
    ],
    'max' => [
        'numeric' => ':attribute no debe ser más grande que :max.',
        'file' => ':attribute no debe ser más grande de :max kilobytes.',
        'string' => ':attribute no debe tener más de :max carácteres.',
        'array' => ':attribute no debe tener más de :max items.',
    ],
    'mimes' => ':attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => ':attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => ':attribute debe ser como mínimo :min.',
        'file' => ':attribute debe ser como mínimo :min kilobytes.',
        'string' => ':attribute debe tener al menos :min carácteres.',
        'array' => ':attribute debe tener al menos :min items.',
    ],
    'not_in' => ':attribute no es válida.',
    'not_regex' => ':attribute no tiene formato válido.',
    'numeric' => ':attribute debe ser númerico.',
    'present' => 'Campo :attribute debe existir.',
    'regex' => 'Formato para :attribute no es válido.',
    'required' => ':attribute es obligatorio.',
    'required_if' => ':attribute es obligatorio cuando :other es :value.',
    'required_unless' => ':attribute es obligatorio a menos que :other este en :values.',
    'required_with' => ':attribute es obligatorio cuando :values está presente.',
    'required_with_all' => ':attribute es obligatorio cuando :values está presente.',
    'required_without' => ':attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => ':attribute es obligatorio cuando ninguno de estos valores existe :values.',
    'same' => ':attribute y :other deben coincidir.',
    'size' => [
        'numeric' => ':attribute debe tener :size.',
        'file' => ':attribute debe tener :size kilobytes.',
        'string' => ':attribute debe tener :size carácteres.',
        'array' => ':attribute debe contener :size items.',
    ],
    'string' => ':attribute debe ser una cadena de carácteres.',
    'timezone' => ':attribute debe ser una zona válida.',
    'unique' => ':attribute ya existe.',
    'uploaded' => ':attribute falló al cargar.',
    'url' => ':attribute url no es válida.',

    'alpha_spaces' => ':attribute solo puede contener letras y espacios.',
    'alpha_num_spaces' => ':attribute solo puede contener letras, números y espacios.',

    'validatorMessages' => [
        'required' => 'Este campo es obligatorio',
        'document' => 'Este campo no es válido',
        'remote' => 'Arregla este campo',
        'email' => 'Por favor ingresa un correo electrónico válido.',
        'url' => 'Por favor ingresa una URL válida.',
        'date' => 'Por favor ingresa una fecha válida.',
        'dateISO' => 'Por favor ingresa una fecha válida ( ISO ).',
        'number' => 'Por favor ingresa un número válido.',
        'digits' => 'Por favor ingresa solo números.',
        'creditcard' => 'Por favor ingresa un número de tarjeta válido.',
        'equalTo' => 'Por favor ingresa el mismo valor.',
        'maxlength' => 'Por favor ingresa no más de {0} caracteres.',
        'minlength' => 'Por favor ingresa al menos {0} caracteres.',
        'rangelength' => 'Por favor ingresa un valor entre {0} y {1} caracteres.',
        'range' => 'Por favor ingresa un valor entre {0} and {1}.',
        'max' => 'Por favor ingresa un valor menor o igual a {0}.',
        'min' => 'Por favor ingresa un valor mayor o igual a {0}.',
        'radio-group-required' => 'Por favor seleccione una opción.',
        'between' => 'El rango no es válido.',
    ],
];
