<?php

return [
    'accepted'                       => ':attribute ต้องได้รับการยอมรับ',
    'active_url'                     => ':attribute ไม่ใช่ URL ที่ถูกต้อง',
    'after'                          => ':attribute ต้องเป็นวันที่หลังจาก :date',
    'after_or_equal'                 => ':attribute ต้องเป็นวันที่หลังจากหรือเท่ากับ :date',
    'alpha'                          => ':attribute ต้องเป็นตัวหนังสือเท่านั้น',
    'alpha_dash'                     => ':attribute ต้องเป็นตัวหนังสือ, ตัวเลข, และเครื่องหมายขีดคั่นเท่านั้น',
    'alpha_num'                      => ':attribute ต้องเป็นตัวอักษรและตัวเลขเท่านั้น',
    'latin'                          => ':attribute สามารถประกอบด้วยตัวอักษร ISO basic Latin เท่านั้น',
    'latin_dash_space'               => 'The :attribute may only contain ISO basic Latin alphabet letters, numbers, dashes, hyphens and spaces.',
    'array'                          => ':attribute ต้องเป็นการจัดเรียงตามลำดับ',
    'before'                         => ':attribute ต้องเป็นวันที่ก่อน :date',
    'before_or_equal'                => ':attribute ต้องเป็นวันที่ก่อนหรือเท่ากับ :date',
    'between'                        => [
        'numeric' => ':attribute ต้องอยู่ระหว่าง :min และ :max',
        'file'    => ':attribute ต้องอยู่ระหว่าง :min และ :max กิโลไบต์',
        'string'  => ':attribute ต้องอยู่ระหว่าง :min และ :max ตัวอักษร',
        'array'   => ':attribute ต้องอยู่ระหว่างไอเทม :min และ :max',
    ],
    'boolean'                        => 'ช่อง :attribute ต้องเป็นถูกหรือผิด',
    'confirmed'                      => 'การยืนยัน :attribute ไม่ตรงกัน',
    'date'                           => ':attribute ไม่ใช่วันที่ที่ถูกต้อง',
    'date_equals'                    => 'The :attribute must be a date equal to :date.',
    'date_format'                    => ':attribute ไม่ตรงกับฟอร์แมท :format',
    'different'                      => ':attribute และ :other ต้องแตกต่างกัน',
    'digits'                         => ':attribute ต้องมี :digits หลัก',
    'digits_between'                 => ':attribute ต้องอยู่ระหว่าง :min และ :max หลัก',
    'dimensions'                     => ':attribute มีขนาดรูปภาพไม่ถูกต้อง',
    'distinct'                       => ':attribute มีข้อมูลซ้ำกัน',
    'email'                          => ':attribute ต้องเป็นอีเมลที่ถูกต้อง',
    'ends_with'                      => 'The :attribute must end with one of the following: :values.',
    'exists'                         => ':attribute ที่เลือกไม่ถูกต้อง',
    'file'                           => ':attribute ต้องเป็นไฟล์',
    'filled'                         => 'ช่อง :attribute ต้องมีข้อมูล',
    'gt'                             => [
        'numeric' => ':attribute ต้องมีค่ามากกว่า :value',
        'file'    => ':attribute ต้องมีค่ามากกกว่า :value กิโลไบต์',
        'string'  => ':attribute ต้องมีค่ามากกว่า :value ตัวอักษร',
        'array'   => ':attribute ต้องมีค่ามากกว่า :value ไอเทม',
    ],
    'gte'                            => [
        'numeric' => ':attribute ต้องมากกว่าหรือเท่ากับ :value',
        'file'    => ':attribute ต้องมากกว่าหรือเท่ากับ :value กิโลไบต์',
        'string'  => ':attribute ต้องมากกว่าหรือเท่ากับ :value ตัวอักษร',
        'array'   => ':attribute ต้องมี :value ไอเทม หรือมากกว่า',
    ],
    'image'                          => ':attribute ต้องเป็นรูปภาพ',
    'in'                             => ':attribute ที่เลือกไม่ถูกต้อง',
    'in_array'                       => ':attribute ไม่พบใน :other',
    'integer'                        => ':attribute ต้องเป็นจำนวนเต็ม',
    'ip'                             => ':attribute ต้องเป็น IP address ที่ถูกต้อง',
    'ipv4'                           => ':attribute ต้องเป็น IPv4 address ที่ถูกต้อง',
    'ipv6'                           => ':attribute 9hองเป็น  IPv6 address ที่ถูกต้อง',
    'json'                           => ':attribute ต้องเป็น JSON string ที่ถูกต้อง',
    'lt'                             => [
        'numeric' => ':attribute ต้องมีค่าน้อยกว่า :value',
        'file'    => ':attribute ต้องมีค่าน้อยกว่า :value กิโลไบต์',
        'string'  => ':attribute ต้องมีค่าน้อยกว่า :value ตัวอักษร',
        'array'   => ':attribute ต้องมีค่าน้อยกว่า :value ไอเทม',
    ],
    'lte'                            => [
        'numeric' => ':attribute ต้องน้อยกว่าหรือเท่ากับ :value',
        'file'    => ':attribute ต้องน้อยกว่าหรือเท่ากับ :value กิโลไบต์',
        'string'  => ':attribute ต้องน้อยกว่าหรือเท่ากับ :value ตัวอักษร',
        'array'   => ':attribute ต้องไม่มีมากกว่า :value ไอเทม',
    ],
    'max'                            => [
        'numeric' => ':attribute ต้องไม่มากกว่า :max',
        'file'    => ':attribute ต้องไม่มากกว่า :max กิโลไบต์',
        'string'  => ':attribute ต้องไม่มากกว่า :max ตัวอักษร',
        'array'   => ':attribute ต้องไม่มีมากกว่า :max ไอเทม',
    ],
    'mimes'                          => ':attribute ต้องเป็นไฟล์ประเภท: :value',
    'mimetypes'                      => ':attribute ต้องเป็นไฟล์ประเภท: :value',
    'min'                            => [
        'numeric' => ':attribute ต้องมีอย่างน้อย :min',
        'file'    => ':attribute ต้องมีอย่างน้อย :min กิโลไบต์',
        'string'  => ':attribute ต้องมีอย่างน้อย :min ตัวอักษร',
        'array'   => ':attribute ต้องมีอย่างน้อย :min ไอเทม',
    ],
    'not_in'                         => ':attribute ที่เลือกไม่ถูกต้อง',
    'not_regex'                      => ':attribute ฟอร์แมทไม่ถูกต้อง',
    'numeric'                        => ':attribute ต้องเป็นตัวเลข',
    'password'                       => 'The password is incorrect.',
    'present'                        => 'ช่อง :attribute ต้องเป็นปัจจุบัน',
    'regex'                          => ':attribute ฟอร์แมทไม่ถูกต้อง',
    'required'                       => 'ช่อง :attribute ต้องมีข้อมูล',
    'required_if'                    => 'ช่อง :attribute ต้องมีข้อมูลเมื่อ :other มีค่าเป็น :value',
    'required_unless'                => ':attribute ต้องมีข้อมูลนอกจาก :other มีค่าเป็น :value',
    'required_with'                  => ':attribute ต้องมีข้อมูลเมื่อ :value เป็นปัจจุบัน',
    'required_with_all'              => ':attribute ต้องมีข้อมูลเมื่อ :value เป็นปัจจุบัน',
    'required_without'               => ':attribute ต้องมีข้อมูลเมื่อ :value ไม่เป็นปัจจุบัน',
    'required_without_all'           => ':attribute ต้องมีข้อมูลเมื่อไม่มี :value ใดเป็นปัจจุบัน',
    'same'                           => ':attribute และ :other ต้องตรงกัน',
    'size'                           => [
        'numeric' => ':attribute ต้องเป็น :size',
        'file'    => ':attribute ต้องเป็น :size กิโลไบต์',
        'string'  => ':attribute ต้องเป็น :size ตัวอักษร',
        'array'   => ':attribute ต้องประกอลด้วย :size ไอเทม',
    ],
    'starts_with'                    => 'The :attribute must start with one of the following: :values.',
    'string'                         => ':attribute ต้องจัดเรียงเป็นแถว',
    'timezone'                       => ':attribute ต้องเป็นโซนที่ถูกต้อง',
    'unique'                         => ':attribute ถูกเลือกไปแล้ว',
    'uploaded'                       => ':attribute อัพโหลดไม่สำเร็จ',
    'url'                            => ':attribute ฟอร์แมทไม่ถูกต้อง',
    'uuid'                           => 'The :attribute must be a valid UUID.',
    'custom'                         => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => ':attribute ประกอบด้วยคำลิขสิทธิ์',
    'dont_allow_first_letter_number' => 'ช่อง \":input\" ไม่สามารถมีอักษรตัวแรกเป็นตัวเลขได้',
    'exceeds_maximum_number'         => ':attribute เกินขนาดความยาวที่กำหนด',
    'db_column'                      => 'The :attribute may only contain ISO basic Latin alphabet letters, numbers, dash and cannot start with number.',
    'attributes'                     => [],
];
