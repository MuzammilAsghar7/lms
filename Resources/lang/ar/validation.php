<?php 

return [
    'alpha' => 'قد تحتوي السمة على أحرف فقط.',
    'array' => 'يجب أن تكون السمة مصفوفة.',
    'between' => [
        'numeric' => 'يجب أن تكون السمة: بين: min و: max.',
        'file' => 'يجب أن تكون السمة: بين: min و: max كيلوبايت.',
        'string' => 'يجب أن تكون السمة: بين: min و: max من الأحرف.',
        'array' => 'يجب أن تحتوي السمة: على ما بين: min و: max items.',
    ],
    'confirmed' => 'تأكيد السمة غير مطابق.',
    'dimensions' => 'السمة لها أبعاد صورة غير صالحة.',
    'distinct' => 'يحتوي حقل السمة على قيمة مكررة.',
    'email' => 'يجب أن تكون السمة عنوان بريد إلكتروني صالحًا.',
    'filled' => 'يجب أن يحتوي حقل السمة على قيمة.',
    'gt' => [
        'numeric' => 'يجب أن تكون السمة: أكبر من: القيمة.',
        'file' => 'يجب أن تكون السمة: أكبر من: القيمة كيلوبايت.',
        'string' => 'يجب أن تكون السمة: أكبر من: أحرف القيمة.',
        'array' => 'يجب أن تحتوي السمة: على أكثر من: عناصر القيمة.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون السمة: أكبر من أو تساوي: القيمة.',
        'file' => 'يجب أن تكون السمة: أكبر من أو تساوي: القيمة كيلوبايت.',
        'string' => 'يجب أن تكون السمة: أكبر من أو تساوي: أحرف القيمة.',
        'array' => 'يجب أن تحتوي السمة: على عناصر قيمة أو أكثر.',
    ],
    'image' => 'يجب أن تكون السمة صورة.',
    'integer' => 'يجب أن تكون السمة عددًا صحيحًا.',
    'ipv4' => 'يجب أن تكون السمة عنوان IPv4 صالحًا.',
    'ipv6' => 'يجب أن تكون السمة عنوان IPv6 صالحًا.',
    'lt' => [
        'numeric' => 'يجب أن تكون السمة: أقل من: القيمة.',
        'file' => 'يجب أن تكون السمة: أقل من: value كيلوبايت.',
        'string' => 'يجب أن تكون السمة: أقل من: أحرف القيمة.',
        'array' => 'يجب أن تحتوي السمة: على أقل من: عناصر القيمة.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون السمة: أقل من أو تساوي: القيمة.',
        'file' => 'يجب أن تكون السمة: أقل من أو تساوي: value كيلوبايت.',
        'string' => 'يجب أن تكون السمة: أقل من أو تساوي: أحرف القيمة.',
        'array' => 'يجب ألا تحتوي السمة: على أكثر من: عناصر القيمة.',
    ],
    'max' => [
        'numeric' => 'لا يجوز أن تكون السمة: أكبر من: max.',
        'file' => 'لا يجوز أن تكون السمة: أكبر من: max كيلوبايت.',
        'string' => 'لا يجوز أن تكون السمة: أكبر من: max حرفًا.',
        'array' => 'لا يجوز أن تحتوي السمة: على أكثر من: max items.',
    ],
    'min' => [
        'numeric' => 'يجب أن تكون السمة: min.',
        'file' => 'يجب أن تكون السمة: على الأقل: دقيقة كيلوبايت.',
        'string' => 'يجب ألا تقل السمة: عن: min حرفًا.',
        'array' => 'يجب أن تحتوي السمة: على الأقل على: min من العناصر.',
    ],
    'numeric' => 'يجب أن تكون السمة رقمًا.',
    'password' => 'كلمة المرور غير صحيحة.',
    'present' => 'يجب أن يكون حقل السمة موجودًا.',
    'size' => [
        'numeric' => 'يجب أن تكون السمة: الحجم.',
        'file' => 'يجب أن تكون السمة: الحجم كيلوبايت.',
        'string' => 'يجب أن تكون السمة: حجم الأحرف.',
        'array' => 'يجب أن تحتوي السمة على: حجم العناصر.',
    ],
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'رسالة مخصصة',
        ],
    ],
    'attributes' => '',
    'captcha' => 'تم توفير رمز captcha غير صالح',
    'accepted' => 'يجب قبول السمة:attribute',
    'active_url' => 'السمة: ليست عنوان URL صالحًا.',
    'after' => 'يجب أن تكون السمة تاريخًا بعد: التاريخ.',
    'after_or_equal' => 'يجب أن تكون السمة تاريخًا بعد: التاريخ أو مساويًا له.',
    'alpha_dash' => 'لا يجوز أن تحتوي السمة: إلا على أحرف وأرقام وشرطات وشرطات سفلية.',
    'alpha_num' => 'لا يجوز أن تحتوي السمة: إلا على أحرف وأرقام.',
    'before' => 'يجب أن تكون السمة تاريخًا قبل: التاريخ.',
    'before_or_equal' => 'يجب أن تكون السمة تاريخًا يسبق: التاريخ أو مساويًا له.',
    'boolean' => 'يجب أن يكون حقل السمة: صح أو خطأ.',
    'date' => 'السمة: ليست تاريخًا صالحًا.',
    'date_equals' => 'يجب أن تكون السمة تاريخًا مساويًا لـ: التاريخ.',
    'date_format' => 'السمة: لا تطابق التنسيق: format.',
    'different' => 'يجب أن يكون: السمة و: الآخر مختلفين.',
    'digits' => 'يجب أن تكون السمة: أرقامًا وأرقامًا.',
    'digits_between' => 'يجب أن تكون السمة: بين: min و: max digits.',
    'ends_with' => 'يجب أن تنتهي السمة: بأحد القيم التالية:',
    'exists' => 'السمة المحددة: غير صالحة.',
    'file' => 'يجب أن تكون السمة: ملفًا.',
    'in' => 'السمة المحددة: غير صالحة.',
    'in_array' => 'حقل السمة: غير موجود في: أخرى.',
    'ip' => 'يجب أن تكون السمة: عنوان IP صالحًا.',
    'json' => 'يجب أن تكون السمة: سلسلة JSON صالحة.',
    'mimes' => 'يجب أن تكون السمة: ملفًا من النوع: القيم.',
    'mimetypes' => 'يجب أن تكون السمة: ملفًا من النوع: القيم.',
    'not_in' => 'السمة المحددة: غير صالحة.',
    'not_regex' => 'تنسيق السمة: غير صالح.',
    'regex' => 'تنسيق السمة: غير صالح.',
    'required' => ': حقل السمة مطلوب.',
    'required_if' => 'يكون حقل السمة مطلوبًا عندما: الآخر هو: القيمة.',
    'required_unless' => 'حقل السمة مطلوب إلا إذا كان الآخر في: قيم.',
    'required_with' => 'يكون حقل السمة مطلوبًا عندما تكون: القيم موجودة.',
    'required_with_all' => 'يكون حقل السمة مطلوبًا عندما تكون: القيم موجودة.',
    'required_without' => 'يكون حقل السمة مطلوبًا عندما: القيم غير موجودة.',
    'required_without_all' => 'يكون حقل السمة مطلوبًا في حالة عدم وجود أي من قيم:attribute',
    'same' => 'يجب أن يتطابق السمة: و: الآخر.',
    'starts_with' => 'يجب أن تبدأ السمة: بأحد القيم التالية:',
    'string' => 'يجب أن تكون السمة: سلسلة.',
    'timezone' => 'يجب أن تكون السمة: منطقة صالحة.',
    'unique' => 'تم استخدام السمة: بالفعل.',
    'uploaded' => 'فشل تحميل السمة:attribute',
    'url' => 'تنسيق السمة: غير صالح.',
    'uuid' => 'يجب أن تكون السمة: UUID صالحًا.',
];