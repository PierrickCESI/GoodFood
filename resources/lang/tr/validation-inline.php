<?php

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

return [
    'accepted'             => 'Bu alan kabul edilmelidir.',
    'accepted_if'          => 'Bu alan, :other değeri :value ise kabul edilmelidir.',
    'active_url'           => 'URL geçerli değil.',
    'after'                => 'Bu :date\'den sonraki bir tarih olmalı.',
    'after_or_equal'       => 'Bu, :date\'den sonra veya ona eşit bir tarih olmalıdır.',
    'alpha'                => 'Bu alan yalnızca harf içerebilir.',
    'alpha_dash'           => 'Bu alan yalnızca harfler, sayılar, kısa çizgiler ve alt çizgiler içerebilir.',
    'alpha_num'            => 'Bu alan yalnızca harfler ve sayılar içerebilir.',
    'array'                => 'Bu alan bir dizi olmalı.',
    'before'               => 'Bu :date\'den önceki bir tarih olmalı.',
    'before_or_equal'      => 'Bu, :date\'ten önce veya ona eşit bir tarih olmalıdır.',
    'between'              => [
        'array'   => 'Bu içerik :min ve :max arasında olmalıdır.',
        'file'    => 'Bu dosya :min ve :max kilobayt arasında olmalıdır.',
        'numeric' => 'Bu değer :min ve :max arasında olmalıdır.',
        'string'  => 'Bu metin :min ve :max karakter aralığında olmalıdır.',
    ],
    'boolean'              => 'Bu alan doğru veya yanlış olmalıdır.',
    'confirmed'            => 'Onay eşleşmiyor.',
    'current_password'     => 'Parola hatalı.',
    'date'                 => 'Bu geçerli bir tarih değil.',
    'date_equals'          => 'Bu, :date\'a eşit bir tarih olmalıdır.',
    'date_format'          => 'Bu biçim :format eşleşmiyor.',
    'declined'             => 'Bu değer kabul edilmemektedir.',
    'declined_if'          => 'Bu değer, :other değeri :value olduğunda kabul edilmemektedir.',
    'different'            => 'Bu değer :other\'dan farklı olmalıdır.',
    'digits'               => 'Bu :digits basamak olmalıdır.',
    'digits_between'       => 'Bu :min ve :max basamak arasında olmalıdır.',
    'dimensions'           => 'Resim boyutları geçersiz.',
    'distinct'             => 'Bu alanın yinelenen bir değeri vardır.',
    'email'                => 'E-posta adresi geçerli değil.',
    'ends_with'            => 'Bu şunlardan biriyle bitmelidir: :values.',
    'enum'                 => 'Seçilen değer geçersiz.',
    'exists'               => 'Seçili değer geçersiz.',
    'file'                 => 'İçerik bir dosya olmalı.',
    'filled'               => 'Bu alanın bir değeri olmalıdır.',
    'gt'                   => [
        'array'   => 'Bu içerikte :value\'den fazla öge bulunmalıdır.',
        'file'    => 'Dosya boyutu :value kilobayt\'tan büyük olmalıdır.',
        'numeric' => 'Bu değer :value\'ten büyük olmalıdır.',
        'string'  => 'Bu metin :value karakterden uzun olmalıdır.',
    ],
    'gte'                  => [
        'array'   => 'Bu içerik :value veya daha fazla ögeye sahip olmalıdır.',
        'file'    => 'Dosya boyutu :value kilobayt\'a eşit ya da daha büyük olmalıdır.',
        'numeric' => 'Bu sayı :value sayısına eşit veya daha büyük olmalıdır.',
        'string'  => 'Bu metin :value veya daha uzun karakter olmalıdır.',
    ],
    'image'                => 'Bu bir resim olmalıdır.',
    'in'                   => 'Seçili değer geçersiz.',
    'in_array'             => 'Bu değer :other ögelerinin arasında yok.',
    'integer'              => 'Bu bir tam sayı olmalıdır.',
    'ip'                   => 'Bu geçerli bir IP adresi olmalıdır.',
    'ipv4'                 => 'Bu geçerli bir IPv4 adresi olmalıdır.',
    'ipv6'                 => 'Bu geçerli bir IPv6 adresi olmalıdır.',
    'json'                 => 'Bu geçerli bir json dizesi olmalıdır.',
    'lt'                   => [
        'array'   => 'Bu içerikte en fazla :value öge olabilir.',
        'file'    => 'Bu dosya :value kilobayt\'tan büyük olamaz.',
        'numeric' => 'Bu sayı en fazla :value olmalıdır.',
        'string'  => 'Bu metin :value karakterden kısa olmalıdır.',
    ],
    'lte'                  => [
        'array'   => 'Bu içerik :value\'den fazla öge içermemelidir.',
        'file'    => 'Bu dosya :value kilobayt\'a eşit veya daha küçük olmalıdır.',
        'numeric' => 'Bu sayı :value sayısına eşit veya daha küçük olmalıdır.',
        'string'  => 'Bu metin :value veya daha kısa karaktere olmalıdır.',
    ],
    'mac_address'          => 'Değer, geçerli bir MAC adresi olmalıdır.',
    'max'                  => [
        'array'   => 'Bu içerik en fazla :max öge içerebilir.',
        'file'    => 'Dosya boyutu :max kilobayt\'tan büyük olamaz.',
        'numeric' => 'Bu sayı :max sayısından büyük olamaz.',
        'string'  => 'Bu metin :max karakterden uzun olamaz.',
    ],
    'mimes'                => 'Bu tür bir dosya olmalıdır: :values.',
    'mimetypes'            => 'Bu tür bir dosya olmalıdır: :values.',
    'min'                  => [
        'array'   => 'Bu içerikte en az :min öge olmalıdır.',
        'file'    => 'Bu dosya minimum :min kilobayt olmalıdır.',
        'numeric' => 'Bu sayı minimum :min olmalıdır.',
        'string'  => 'Bu metin minimum :min karaktere sahip olmalıdır.',
    ],
    'multiple_of'          => 'Değer :value\'nin katları olmalıdır',
    'not_in'               => 'Seçili değer geçersiz.',
    'not_regex'            => 'Bu biçim geçersiz.',
    'numeric'              => 'Bu bir sayı olmalı.',
    'password'             => 'Parola yanlış.',
    'present'              => 'Bu alan mevcut olmalıdır.',
    'prohibited'           => 'Bu alan kısıtlanmıştır.',
    'prohibited_if'        => ':other alanının değeri :value ise bu alana veri girişi yapılamaz.',
    'prohibited_unless'    => ':other alanı :value değerlerinden birisi değilse bu alana veri girişi yapılamaz.',
    'prohibits'            => 'Bu alan :other alanının mevcut olmasını yasaklar.',
    'regex'                => 'Bu biçim geçersiz.',
    'required'             => 'Bu alan gereklidir.',
    'required_array_keys'  => 'Bu alan şu verileri içermelidir: :values',
    'required_if'          => 'Bu alan :other :value olduğunda gereklidir.',
    'required_unless'      => ':other :values\'de olmadığı sürece bu alan gereklidir.',
    'required_with'        => 'Bu alan :values olduğunda gereklidir.',
    'required_with_all'    => 'Bu alan :values olduğunda gereklidir.',
    'required_without'     => 'Bu alan :values olmadığında gereklidir.',
    'required_without_all' => ':values hiçbiri yoksa, bu alan gereklidir.',
    'same'                 => 'Bu alanın değeri :other ile aynı olmalıdır.',
    'size'                 => [
        'array'   => 'Bu içerik :size öge içermelidir.',
        'file'    => 'Bu dosya boyutu :size kilobayt olmalıdır.',
        'numeric' => 'Bu sayı :size olmalıdır.',
        'string'  => 'Bu metin :size karakter olmalıdır.',
    ],
    'starts_with'          => 'Bu alan şunlardan biriyle başlamalıdır: :values.',
    'string'               => 'Bu bir dize olmalı.',
    'timezone'             => 'Bu geçerli bir bölge olmalıdır.',
    'unique'               => 'Bu zaten mevcut.',
    'uploaded'             => 'Bu yüklenemedi.',
    'url'                  => 'Bu biçim geçersiz.',
    'uuid'                 => 'Bu geçerli bir UUID olmalıdır.',
    'custom'               => [
        'niteleyici-adi' => [
            'kural-adi' => 'Özel doğrulama mesajı',
        ],
    ],
];
