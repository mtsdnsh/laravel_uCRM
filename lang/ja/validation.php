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

    'accepted' => 'この :attribute を承認する必要があります。',
    'accepted_if' => 'この :attribute は :other が :value の場合に承認する必要があります。',
    'active_url' => 'この :attribute は有効なURLではありません。',
    'after' => 'この :attribute は :date の後の日付である必要があります。',
    'after_or_equal' => 'この :attribute は :date と同じかそれ以降の日付である必要があります。',
    'alpha' => 'この :attribute には文字のみを含める必要があります。',
    'alpha_dash' => 'この :attribute には文字、数字、ダッシュ、アンダースコアのみを含める必要があります。',
    'alpha_num' => 'この :attribute には文字と数字のみを含める必要があります。',
    'array' => 'この :attribute には配列を指定する必要があります。',
    'ascii' => 'この :attribute には単一バイトの英数字と記号のみを含める必要があります。',
    'before' => 'この :attribute は :date の前の日付である必要があります。',
    'before_or_equal' => 'この :attribute は :date と同じかそれ以前の日付である必要があります。',
    'between' => [
        'array' => 'この :attribute には :min から :max の間のアイテムを含める必要があります。',
        'file' => 'この :attribute には :min から :max キロバイトの間のファイルを含める必要があります。',
        'numeric' => 'この :attribute には :min から :max の間の数値を含める必要があります。',
        'string' => 'この :attribute には :min から :max の間の文字を含める必要があります。',
    ],
    'boolean' => 'この :attribute フィールドは true または false である必要があります。',
    'confirmed' => 'この :attribute 確認が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => 'この :attribute は有効な日付ではありません。',
    'date_equals' => 'この :attribute は :date と同じ日付である必要があります。',
    'date_format' => 'この :attribute は :format という形式と一致しません。',
    'decimal' => 'この :attribute には :decimal 桁の小数点以下の数字が必要です。',
    'declined' => 'この :attribute は拒否される必要があります。',
    'declined_if' => 'この :attribute は :other が :value の場合に拒否される必要があります。',
    'different' => 'この :attribute と :other は異なる必要があります。',
    'digits' => 'この :attribute は :digits 桁である必要があります。',
    'digits_between' => 'この :attribute は :min から :max の間の桁数である必要があります。',
    'dimensions' => 'この :attribute は無効な画像の寸法を持っています。',
    'distinct' => 'この :attribute フィールドには重複した値があります。',
    'doesnt_end_with' => 'この :attribute は次のいずれかで終わることはできません: :values。',
    'doesnt_start_with' => 'この :attribute は次のいずれかで始まることはできません: :values。',
    'email' => 'この :attribute は有効なメールアドレスである必要があります。',
    'ends_with' => 'この :attribute は次のいずれかで終わる必要があります: :values。',
    'enum' => '選択された :attribute は無効です。',
    'exists' => '選択された :attribute は無効です。',
    'file' => 'この :attribute はファイルである必要があります。',
    'filled' => 'この :attribute フィールドには値が必要です。',
    'gt' => [
        'array' => 'この :attribute には :value 個以上のアイテムが必要です。',
        'file' => 'この :attribute には :value キロバイトより大きい必要があります。',
        'numeric' => 'この :attribute には :value より大きい必要があります。',
        'string' => 'この :attribute には :value 文字より大きい必要があります。',
    ],
    'gte' => [
        'array' => 'この :attribute には :value 個以上のアイテムが必要です。',
        'file' => 'この :attribute には :value キロバイト以上である必要があります。',
        'numeric' => 'この :attribute には :value 以上である必要があります。',
        'string' => 'この :attribute には :value 文字以上である必要があります。',
    ],
    'image' => 'この :attribute は画像である必要があります。',
    'in' => '選択された :attribute は無効です。',
    'in_array' => 'この :attribute フィールドは :other に存在しません。',
    'integer' => 'この :attribute は整数である必要があります。',
    'ip' => 'この :attribute は有効なIPアドレスである必要があります。',
    'ipv4' => 'この :attribute は有効なIPv4アドレスである必要があります。',
    'ipv6' => 'この :attribute は有効なIPv6アドレスである必要があります。',
    'json' => 'この :attribute は有効なJSON文字列である必要があります。',
    'lowercase' => 'この :attribute は小文字である必要があります。',
    'lt' => [
        'array' => 'この :attribute には :value 個未満のアイテムが必要です。',
        'file' => 'この :attribute には :value キロバイト未満である必要があります。',
        'numeric' => 'この :attribute には :value 未満である必要があります。',
        'string' => 'この :attribute には :value 文字未満である必要があります。',
    ],
    'lte' => [
        'array' => 'この :attribute には :value 個以下のアイテムが必要です。',
        'file' => 'この :attribute には :value キロバイト以下である必要があります。',
        'numeric' => 'この :attribute には :value 以下である必要があります。',
        'string' => 'この :attribute には :value 文字以下である必要があります。',
    ],
    'mac_address' => 'この :attribute は有効なMACアドレスである必要があります。',
    'max' => [
        'array' => 'この :attribute には :max 個以下のアイテムが必要です。',
        'file' => 'この :attribute には :max キロバイト以下である必要があります。',
        'numeric' => 'この :attribute には :max 以下である必要があります。',
        'string' => 'この :attribute には :max 文字以下である必要があります。',
    ],
    'max_digits' => 'この :attribute には :max 桁以下である必要があります。',
    'mimes' => 'この :attribute は次のタイプのファイルである必要があります: :values。',
    'mimetypes' => 'この :attribute は次のタイプのファイルである必要があります: :values。',
    'min' => [
        'array' => 'The :attribute must have at least :min items.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'The :attribute must be at least :min.',
        'string' => 'この :attribute には :min 文字以上である必要があります。',
    ],
    'min_digits' => 'この :attribute には :min 桁以上である必要があります。',
    'missing' => 'この :attribute フィールドは存在しなければなりません。',
    'missing_if' => 'この :attribute フィールドは :other が :value のときに存在しなければなりません。',
    'missing_unless' => 'この :attribute フィールドは :other が :value でない限り存在しなければなりません。',
    'missing_with' => 'この :attribute フィールドは :values が存在するときに存在しなければなりません。',
    'missing_with_all' => 'この :attribute フィールドは :values が存在するときに存在しなければなりません。',
    'multiple_of' => 'この :attribute は :value の倍数である必要があります。',
    'not_in' => '選択された :attribute は無効です。',
    'not_regex' => 'この :attribute の形式は無効です。',
    'numeric' => 'この :attribute は数値である必要があります。',
    'password' => [
        'letters' => 'この :attribute には少なくとも1つの文字が含まれている必要があります。',
        'mixed' => 'この :attribute には少なくとも1つの大文字と1つの小文字が含まれている必要があります。',
        'numbers' => 'この :attribute には少なくとも1つの数字が含まれている必要があります。',
        'symbols' => 'この :attribute には少なくとも1つの記号が含まれている必要があります。',
        'uncompromised' => 'この :attribute はデータ漏洩に登場したことがあります。別の :attribute を選択してください。',
    ],
    'present' => 'この :attribute フィールドは存在しなければなりません。',
    'prohibited' => 'この :attribute フィールドは禁止されています。',
    'prohibited_if' => 'この :attribute フィールドは :other が :value のときに禁止されています。',
    'prohibited_unless' => 'この :attribute フィールドは :other が :values に含まれていない限り禁止されています。',
    'prohibits' => 'この :attribute フィールドは :other の存在を禁止します。',
    'regex' => 'この :attribute の形式は無効です。',
    'required' => 'この :attribute フィールドは必須です。',
    'required_array_keys' => 'この :attribute フィールドには次のエントリが含まれている必要があります: :values。',
    'required_if' => 'この :attribute フィールドは :other が :value のときに必須です。',
    'required_if_accepted' => 'この :attribute フィールドは :other が承認されたときに必須です。',
    'required_unless' => 'この :attribute フィールドは :other が :values に含まれていない限り必須です。',
    'required_with' => 'この :attribute フィールドは :values が存在するときに必須です。',
    'required_with_all' => 'この :attribute フィールドは :values が存在するときに必須です。',
    'required_without' => 'この :attribute フィールドは :values が存在しないときに必須です。',
    'required_without_all' => 'この :attribute フィールドは :values が存在しないときに必須です。',
    'same' => 'この :attribute と :other は一致する必要があります。',
    'size' => [
        'array' => 'この :attribute には :size 個のアイテムが含まれている必要があります。',
        'file' => 'この :attribute には :size キロバイトである必要があります。',
        'numeric' => 'この :attribute には :size である必要があります。',
        'string' => 'この :attribute には :size 文字である必要があります。',
    ],
    'starts_with' => 'この :attribute は次のいずれかで始まる必要があります: :values。',
    'string' => 'この :attribute は文字列である必要があります。',
    'timezone' => 'この :attribute は有効なタイムゾーンである必要があります。',
    'unique' => 'この :attribute はすでに使用されています。',
    'uploaded' => 'この :attribute のアップロードに失敗しました。',
    'uppercase' => 'この :attribute は大文字である必要があります。',
    'url' => 'この :attribute は有効なURLである必要があります。',
    'ulid' => 'この :attribute は有効なULIDである必要があります。',
    'uuid' => 'この :attribute は有効なUUIDである必要があります。',

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
