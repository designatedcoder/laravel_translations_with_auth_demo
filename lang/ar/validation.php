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

    'accepted' => 'يجب قبول حقل :attribute.',
    'accepted_if' => 'يجب قبول حقل :attribute عندما يكون :other هو :value.',
    'active_url' => 'يجب أن يكون حقل السمة: عنوان URL صالحًا.',
    'after' => 'يجب أن يحتوي حقل :attribute على تاريخ بعد :date.',
    'after_or_equal' => 'يجب أن يكون حقل السمة: تاريخًا بعد أو يساوي:date.',
    'alpha' => 'يجب أن يحتوي حقل :attribute على أحرف فقط.',
    'alpha_dash' => 'يجب أن يحتوي حقل :attribute فقط على أحرف وأرقام وشرطات وشرطات سفلية.',
    'alpha_num' => 'يجب أن يحتوي حقل :attribute على أحرف وأرقام فقط.',
    'array' => 'يجب أن يكون حقل السمة: مصفوفة.',
    'ascii' => 'يجب أن يحتوي حقل :attribute فقط على أحرف ورموز أبجدية رقمية أحادية البايت.',
    'before' => 'يجب أن يحتوي حقل :attribute على تاريخ قبل :date.',
    'before_or_equal' => 'يجب أن يكون حقل السمة: تاريخًا قبل أو يساوي:date.',
    'between' => [
        'array' => 'يجب أن يحتوي حقل :attribute على ما بين :min و:max من العناصر.',
        'file' => 'يجب أن يكون حقل :attribute بين :min و:max كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute بين :min و :max.',
        'string' => 'يجب أن يكون حقل :attribute بين :min و:max من الأحرف.',
    ],
    'boolean' => 'يجب أن يكون حقل :attribute صحيحًا أو خطأ.',
    'can' => 'يحتوي الحقل :attribute على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد حقل السمة غير متطابق.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'يجب أن يكون حقل :attribute تاريخًا صالحًا.',
    'date_equals' => 'يجب أن يكون حقل :attribute تاريخًا يساوي :date.',
    'date_format' => 'يجب أن يتطابق حقل :attribute مع التنسيق :format.',
    'decimal' => 'يجب أن يحتوي حقل :attribute على منازل عشرية :decimal.',
    'declined' => 'يجب رفض حقل :attribute.',
    'declined_if' => 'يجب رفض حقل :attribute عندما يكون :other هو :value.',
    'different' => 'يجب أن يكون الحقل :attribute و :other مختلفين.',
    'digits' => 'يجب أن يكون حقل :attribute هو :digits digits.',
    'digits_between' => 'يجب أن يكون حقل :attribute بين :min و:max digit.',
    'dimensions' => 'يحتوي الحقل :attribute على أبعاد صورة غير صالحة.',
    'distinct' => 'يحتوي الحقل :attribute على قيمة مكررة.',
    'doesnt_end_with' => 'يجب ألا ينتهي حقل :attribute بأحد القيم التالية: :values.',
    'doesnt_start_with' => 'يجب ألا يبدأ حقل :attribute بأحد العناصر التالية: :values.',
    'email' => 'يجب أن يكون الحقل :attribute عنوان بريد إلكتروني صالحًا.',
    'ends_with' => 'يجب أن ينتهي حقل :attribute بأحد القيم التالية: :values.',
    'enum' => 'السمة :المحددة غير صالحة.',
    'exists' => 'السمة المحددة غير صالحة.',
    'file' => 'يجب أن يكون الحقل :attribute ملفًا.',
    'filled' => 'يجب أن يحتوي الحقل :attribute على قيمة.',
    'gt' => [
        'array' => 'يجب أن يحتوي حقل :attribute على أكثر من :عناصر قيمة.',
        'file' => 'يجب أن يكون حقل السمة أكبر من القيمة بالكيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أكبر من :value.',
        'string' => 'يجب أن يكون حقل السمة أكبر من أحرف القيمة :',
    ],
    'gte' => [
        'array' => 'يجب أن يحتوي حقل :attribute على عناصر قيمة :أو أكثر.',
        'file' => 'يجب أن يكون حقل السمة أكبر من أو يساوي القيمة بالكيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أكبر من أو يساوي :value.',
        'string' => 'يجب أن يكون حقل السمة أكبر من أو يساوي أحرف القيمة.',
    ],
    'image' => 'يجب أن يكون حقل :attribute صورة.',
    'in' => 'السمة المحددة غير صالحة.',
    'in_array' => 'يجب أن يكون حقل :attribute موجودًا في :other.',
    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون الحقل:attribute عنوان IP صالحًا.',
    'ipv4' => 'يجب أن يكون حقل :attribute عنوان IPv4 صالحًا.',
    'ipv6' => 'يجب أن يكون الحقل :attribute عنوان IPv6 صالحًا.',
    'json' => 'يجب أن يكون الحقل:attribute عبارة عن سلسلة JSON صالحة.',
    'lowercase' => 'يجب أن يكون حقل :attribute صغيرًا.',
    'lt' => [
        'array' => 'يجب أن يحتوي حقل :attribute على عناصر أقل من :value.',
        'file' => 'يجب أن يكون حقل السمة: أقل من القيمة بالكيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أقل من :value.',
        'string' => 'يجب أن يكون حقل :attribute أقل من :value أحرف.',
    ],
    'lte' => [
        'array' => 'يجب ألا يحتوي حقل :attribute على أكثر من :عناصر قيمة.',
        'file' => 'يجب أن يكون حقل :attribute أقل من أو يساوي: القيمة بالكيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أقل من أو يساوي :value.',
        'string' => 'يجب أن يكون حقل السمة: أقل من أو يساوي أحرف القيمة:.',
    ],
    'mac_address' => 'يجب أن يكون الحقل:attribute عنوان MAC صالحًا.',
    'max' => [
        "array" =>'يجب ألا يحتوي حقل :attribute على أكثر من :max من العناصر.',
        'file' => 'يجب ألا يكون حقل السمة أكبر من : الحد الأقصى للكيلوبايت.',
        'numeric' => 'يجب ألا يكون حقل :attribute أكبر من :max.',
        'string' => 'يجب ألا يزيد حقل السمة : عن الحد الأقصى لعدد الأحرف.',
    ],
    'max_digits' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max digits.',
    'mimes' => 'يجب أن يكون حقل :attribute ملفًا من النوع: :values.',
    'mimetypes' => 'يجب أن يكون حقل :attribute ملفًا من النوع: :values.',
    'min' => [
        'array' => 'يجب أن يحتوي حقل :attribute على عناصر :min على الأقل.',
        'file' => 'يجب أن يكون حقل :attribute على الأقل: دقيقة كيلو بايت.',
        'numeric' => 'يجب أن يكون حقل السمة :min على الأقل.',
        'string' => 'يجب أن يحتوي حقل :attribute على الأقل على :min من الأحرف.',
    ],
    'min_digits' => 'يجب أن يحتوي حقل :attribute على الأقل:min digits.',
    'missing' => 'يجب أن يكون حقل :attribute مفقودًا.',
    'missing_if' => 'يجب أن يكون الحقل :attribute مفقودًا عندما يكون :other هو :value.',
    'missing_unless' => 'يجب أن يكون الحقل :attribute مفقودًا ما لم يكن :other هو :value.',
    'missing_with' => 'يجب أن يكون حقل :attribute مفقودًا عند وجود :values.',
    'missing_with_all' => 'يجب أن يكون حقل السمة : مفقودًا عند وجود القيم :.',
    'multiple_of' => 'يجب أن يكون الحقل :attribute من مضاعفات :value.',
    'not_in' => 'السمة المحددة غير صالحة.',
    'not_regex' => 'تنسيق حقل السمة: غير صالح.',
    'numeric' => 'يجب أن يكون حقل السمة رقمًا.',
    'password' => [
        'letters' => 'يجب أن يحتوي حقل :attribute على حرف واحد على الأقل.',
        'mixed' => 'يجب أن يحتوي حقل :attribute على حرف كبير واحد وحرف صغير واحد على الأقل.',
        'numbers' => 'يجب أن يحتوي حقل :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب أن يحتوي حقل :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'ظهرت السمة المحددة في تسرب البيانات. الرجاء اختيار سمة مختلفة.',
    ],
    'present' => 'يجب أن يكون حقل :attribute موجودًا.',
    'prohibited' => 'حقل :attribute محظور.',
    'prohibited_if' => 'يُمنع الحقل :attribute عندما تكون القيمة :other هي :value.',
    'prohibited_unless' => 'الحقل :attribute محظور ما لم يكن :other موجودًا في :values.',
    'prohibits' => 'يمنع الحقل :attribute :other من التواجد.',
    'regex' => 'تنسيق حقل السمة غير صالح.',
    'required' => 'الحقل :attribute مطلوب.',
    'required_array_keys' => 'يجب أن يحتوي حقل :attribute على إدخالات لـ: :values.',
    'required_if' => 'يكون الحقل :attribute مطلوبًا عندما يكون :other هو :value.',
    'required_if_accepted' => 'الحقل :attribute مطلوب عند قبول :other.',
    'required_unless' => 'الحقل :attribute مطلوب ما لم يكن :other موجودًا في :values.',
    'required_with' => 'الحقل :attribute مطلوب عند وجود :values.',
    'required_with_all' => 'الحقل :attribute مطلوب عند وجود القيم :.',
    'required_without' => 'الحقل:attribute مطلوب عندما لا تكون القيم: موجودة.',
    'required_without_all' => 'الحقل :attribute مطلوب في حالة عدم وجود أي من :القيم.',
    'same' => 'يجب أن يتطابق حقل :attribute مع :other.',
    'size' => [
        'array' => 'يجب أن يحتوي حقل :attribute على عناصر :size.',
        'file' => 'يجب أن يكون حقل السمة: بالحجم بالكيلوبايت.',
        'numeric' => 'يجب أن يكون حقل السمة :size.',
        'string' => 'يجب أن يكون حقل السمة :أحرف بالحجم.',
    ],
    'starts_with' => 'يجب أن يبدأ حقل :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون الحقل:attribute عبارة عن سلسلة.',
    'timezone' => 'يجب أن يكون الحقل :attribute منطقة زمنية صالحة.',
    'unique' => 'لقد تم أخذ السمة : بالفعل.',
    'uploaded' => 'فشل تحميل السمة:',
    'uppercase' => 'يجب أن يكون حقل :attribute كبيرًا.',
    'url' => 'يجب أن يكون حقل السمة: عنوان URL صالحًا.',
    'ulid' => 'يجب أن يكون حقل السمة: ULID صالحًا.',
    'uuid' => 'يجب أن يكون حقل السمة: UUID صالحًا.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
