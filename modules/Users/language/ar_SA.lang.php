<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:	Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_ASSIGN_PRIVATE_TEAM'			=> '(جارٍ حفظ فريق خاص)',
	'LBL_ASSIGN_TEAM'					=> 'تعيين لفريق',
	'LBL_DEFAULT_TEAM_TEXT'				=> 'الفرق المتاحة للظهور افتراضيًا في السجلات هي الفرق التي تكون عضوًا فيها.',
	'LBL_DEFAULT_TEAM'					=> 'الفرق الافتراضية',
    'LBL_DEFAULT_PRIMARY_TEAM'          => 'الفريق الأساسي الافتراضي',
	'LBL_LIST_DESCRIPTION'				=> 'الوصف',
	'LBL_MY_TEAMS'						=> 'الفرق الخاصة بي',
	'LBL_PRIVATE_TEAM_FOR'				=> 'فريق خاص لـ',
	'LNK_EDIT_TABS'						=> 'تحرير علامات التبويب',
	'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION'	=> 'هل تريد بالتأكيد حذف عضوية هذا المستخدم؟',
	'LBL_TEAMS'							=> 'الفرق',
	'LBL_TEAM_UPLINE'					=> 'مشرف العضو',
	'LBL_TEAM_UPLINE_EXPLICIT'			=> 'العضو',
    'LBL_TEAM_MEMBERSHIP'               => 'عضوية الفريق',
    'LBL_TEAM_SET'                      => 'ضبط الفريق',
    'LBL_DELETE_USER_CONFIRM'           => 'When the User record is deleted, the corresponding Employee record will also be deleted. After the user is deleted, any workflow definitions and reports involving the user might need to be updated.<br/><br/>'.
                                                'Deleting a User record cannot be undone.',
	'LBL_DELETE_GROUP_CONFIRM'          => 'هل تريد بالتأكيد حذف \\"مستخدم المجموعة\\" هذا؟ انقر فوق موافق لحذف سجل المستخدم.<br/>بعد النقر فوق \\"موافق\\"، سيمكنك إعادة تعيين السجلات المخصصة لمستخدم المجموعة لمستخدم آخر.',
	'LBL_DELETE_PORTAL_CONFIRM'         => 'هل تريد بالتأكيد حذف مستخدم واجهة برمجة تطبيقات (API) البوابة هذا؟ انقر فوق \\"موافق\\" لحذف سجل \\"المستخدم\\".',

	'LNK_IMPORT_USERS'                 => 'استيراد مستخدمين',
	'ERR_DELETE_RECORD'					=> 'يجب تحديد رقم السجل لحذف الحساب.',
	'ERR_EMAIL_INCORRECT'				=> 'قم بإدخال عنوان بريد إلكتروني صالح لإنشاء كلمة المرور وإرسالها.',
	'ERR_EMAIL_NO_OPTS'					=> 'يتعذر العثور على الإعدادات المثالية للبريد الإلكتروني الوارد.',
	'ERR_ENTER_CONFIRMATION_PASSWORD'	=> 'يُرجى إدخال تأكيد كلمة المرور الخاصة بك.',
	'ERR_ENTER_NEW_PASSWORD'			=> 'يُرجى إدخال كلمة مرور جديدة.',
	'ERR_ENTER_OLD_PASSWORD'			=> 'يُرجى إدخال كلمة المرور الحالية.',
	'ERR_IE_FAILURE1'					=> '[انقر هنا للرجوع]',
	'ERR_IE_FAILURE2'					=> 'ثمة مشكلة في الاتصال بحساب البريد الإلكتروني.  يُرجى التحقق من إعداداتك والمحاولة ثانية.',
	'ERR_IE_MISSING_REQUIRED'			=> "إعدادات البريد الوارد تفتقد معلومات مطلوبة.<br />يُرجى التحقق من إعداداتك والمحاولة ثانية.<br /><br />إذا لم تكن تقوم بإعداد البريد الإلكتروني الداخلي، فيُرجى مسح جميع الحقول الموجودة في هذا القسم.",
	'ERR_INVALID_PASSWORD'				=> 'يجب تحديد اسم مستخدم وكلمة مرور صحيحين.',
	'ERR_NO_LOGIN_MOBILE'				=> 'يجب استكمال تسجيل الدخول لأول مرة لهذا التطبيق بمستعرض غير مخصص للأجهزة المحمولة، أو في الوضع العادي. يُرجى الرجوع بمستعرض كامل، أو انقر فوق الارتباط العادي التالي. نعتذر عن أي إزعاج.',
	'ERR_LAST_ADMIN_1'					=> 'اسم المستخدم \\"',
	'ERR_LAST_ADMIN_2'					=> '\\"هو المستخدم الأخير الذي يتمتع بميزة الوصول إلى المسؤول.	 يجب أن يلعب مستخدم واحد على الأقل دور المسؤول.',
	'ERR_PASSWORD_CHANGE_FAILED_1'		=> 'فشل تغيير كلمة المرور للمستخدم لـ',
	'ERR_PASSWORD_CHANGE_FAILED_2'		=> 'فشل.	 يجب تعيين كلمة مرور جديدة.',
	'ERR_PASSWORD_CHANGE_FAILED_3'		=> '.	كلمة المرور الجديدة غير صالحة.',
	'ERR_PASSWORD_INCORRECT_OLD_1'		=> 'كلمة المرور الحالية غير صحيحة للمستخدم',
	'ERR_PASSWORD_INCORRECT_OLD_2'		=> '. أعد إدخال معلومات كلمة المرور.',
	'ERR_PASSWORD_MISMATCH'				=> 'كلمات المرور غير متطابقة.',
	'ERR_PASSWORD_USERNAME_MISSMATCH'   => 'يجب تحديد اسم مستخدم وعنوان بريد إلكتروني صحيحين.',
	'ERR_PASSWORD_LINK_EXPIRED'         => 'انتهت صلاحية الارتباط الخاص بك، يُرجى إنشاء ارتباط جديد',
	'ERR_REENTER_PASSWORDS'				=> 'القيم الخاصة بكلمة المرور الجديدة وتأكيد كلمة المرور غير متطابقة.',
	'ERR_REPORT_LOOP'					=> 'اكتشف النظام وجود تكرار حلقي لتقرير. لا يمكن للمستخدم تقديم تقارير لنفسه، ولا يستطيع أي من المديرين المختصين بهم تقديم تقارير لهم.',
	'ERR_RULES_NOT_MET'                 => 'كلمة المرور التي أدخلتها لا تلبي متطلبات كلمة المرور.  يُرجى المحاولة مرة أخرى.',
	'ERR_USER_INFO_NOT_FOUND'			=> 'معلومات المستخدم ليست موجودة',
    'ERR_USER_NAME_EXISTS'              => 'اسم المستخدم {0} موجود بالفعل. غير مسموح بأسماء المستخدم المتكررة. قم بتغيير اسم المستخدم لكي يصبح فريدًا من نوعه.',
	'ERR_USER_IS_LOCKED_OUT'			=> 'تم حظر هذا المستخدم من استخدام تطبيق Sugar ويتعذر تسجيل الدخول باستخدام كلمة مروره/ مرورها الحالية.',

	'LBL_PASSWORD_SENT'                => 'تم تحديث كلمة المرور',
	'LBL_CANNOT_SEND_PASSWORD'         => 'لا يمكن إرسال كلمة المرور',
	'ERR_EMAIL_NOT_SENT_ADMIN'			=> 'النظام غير قادر على معالجة طلبك. يُرجى اختيار:',
	'ERR_SMTP_URL_SMTP_PORT'			=> 'عنوان URL لخادم SMTP والمنفذ',
	'ERR_SMTP_USERNAME_SMTP_PASSWORD'	=> 'اسم مستخدم SMTP وكلمة مرور SMTP',
	'ERR_RECIPIENT_EMAIL'				=> 'عنوان البريد الإلكتروني للمستلم',
	'ERR_SERVER_STATUS'					=> 'حالة خادمك',
	'ERR_SERVER_SMTP_EMPTY'				=> 'النظام غير قادر على إرسال بريد إلكتروني للمستخدم. يُرجى التحقق من تكوين البريد الصادر في <a href="index.php?module=EmailMan&action=config">إعدادات البريد الإلكتروني</a>.',

    'LBL_EMAIL_ADDRESS'                 => 'عنوان البريد الإلكتروني',

	'LBL_ADDRESS_CITY'					=> 'المدينة بالعنوان',
	'LBL_ADDRESS_COUNTRY'				=> 'البلد بالعنوان',
	'LBL_ADDRESS_INFORMATION'			=> 'بيانات العنوان',
	'LBL_ADDRESS_POSTALCODE'			=> 'الرمز البريدي بالعنوان',
	'LBL_ADDRESS_STATE'					=> 'الولاية بالعنوان',
	'LBL_ADDRESS_STREET'				=> 'الشارع بالعنوان',
	'LBL_ADDRESS_STREET_2'				=> 'الشارع بالعنوان 2',
	'LBL_ADDRESS_STREET_3'				=> 'الشارع بالعنوان 3',
	'LBL_ADDRESS'						=> 'العنوان',
	'LBL_ADMIN_USER'					=> 'المستخدم مسؤول النظام',

	'LBL_ADMIN_DESC'					=> 'يمكن للمستخدم الوصول إلى جميع السجلات بصفحة الإدارة، بغض النظر عن أمان الفريق.',
	'LBL_REGULAR_DESC'					=> 'يمكن للمستخدم الوصول إلى الوحدات والسجلات وفقًا للأدوار وأمان الفريق.',
	'LBL_ADMIN'							=> 'مسؤول النظام',
	'LBL_ADVANCED'                     => 'خيارات متقدمة',
    'LBL_ANY_ADDRESS'                  => 'أي عنوان:',
	'LBL_ANY_EMAIL'						=> 'البريد الإلكتروني',
	'LBL_ANY_PHONE'						=> 'أي هاتف',
	'LBL_BUTTON_CREATE'					=> 'إنشاء',
	'LBL_BUTTON_EDIT'					=> 'تحرير',
	'LBL_CALENDAR_OPTIONS'				=> 'خيارات التقويم',
	'LBL_CHANGE_PASSWORD'               => 'تغيير كلمة المرور التي تم إنشاؤها',
	'LBL_CHANGE_SYSTEM_PASSWORD'		=> 'يُرجى إدخال كلمة مرور جديدة.',
	'LBL_CHANGE_PASSWORD_TITLE'         => 'كلمة المرور',
    'LBL_CHOOSE_A_KEY'					=> 'اختر مفتاحاً لمنع النشر غير المصرح به للتقويم الخاص بك',
    'LBL_NO_KEY'                        => 'لم يتم تعيين المفتاح. يُرجى تعيين مفتاح لتمكين النشر.',
	'LBL_CHOOSE_WHICH'					=> 'حدد الوحدات التي يمكن الوصول إليها في شريط التنقل العلوي. حدد الترتيب الذي ترغب في ظهور الوحدات به.',
	'LBL_CITY'							=> 'المدينة',

	'LBL_CLEAR_BUTTON_TITLE'			=> 'مسح',


	'LBL_CONFIRM_PASSWORD'				=> 'تأكيد كلمة المرور',
	'LBL_CONFIRM_REGULAR_USER'			=> 'لقد قمت بتغيير نوع المستخدم من مستخدم مسؤول النظام إلى مستخدم معتاد.  بعد حفظ هذا التغيير، لن يظل المستخدم يتمتع بامتيازات مسؤول النظام. \n\nانقر فوق \\"موافق\\" للمتابعة.\n انقر فوق \\"إلغاء\\" للرجوع إلى السجل.',
	'LBL_COUNTRY'						=> 'البلد',
	'LBL_CURRENCY_TEXT'					=> 'هذه هي العملة المستخدمة في القائمة وطرق عرض السجل، إذا تم تمكين \\"عرض العملة المفضلة\\". هذه أيضًا هي العملة الافتراضية للسجلات الجديدة.',
	'LBL_CURRENCY'						=> 'العملة المفضلة',
	'LBL_CURRENCY_EXAMPLE'				=> 'مثال عرض العملة',
	'LBL_SYSTEM_SIG_DIGITS'				=> 'الأرقام البارزة للنظام',
	'LBL_SYSTEM_SIG_DIGITS_DESC' 		=> 'عدد الأرقام العشرية التي يتم عرضها للأرقام العشرية والطفو من خلال النظام، مثل العملة والمتوسط في التقارير.',
    'LBL_CURRENCY_SHOW_PREFERRED'       => 'عرض العملة المفضلة',
    'LBL_CURRENCY_SHOW_PREFERRED_TEXT'  => 'تحويل العملة الأساسية للعملة المفضلة من قبل المستخدم في القائمة وعرض السجل',
	'LBL_NUMBER_GROUPING_SEP'			=> 'فاصل الآلاف',
	'LBL_NUMBER_GROUPING_SEP_TEXT'		=> 'الحرف المستخدم لفصل الآلاف',
	'LBL_DECIMAL_SEP'					=> 'رمز العلامة العشرية',
	'LBL_DECIMAL_SEP_TEXT'				=> 'الحرف المستخدم لفصل الجزء العشري',
	'LBL_FDOW'					=> 'أول يوم في الأسبوع',
	'LBL_FDOW_TEXT'				=> 'أول يوم يتم عرضه في طرق عرض الأسبوع، والشهر، والسنة',
	'LBL_DATE_FORMAT_TEXT'				=> 'قم بتعيين تنسيق عرض طوابع التاريخ',
	'LBL_DATE_FORMAT'					=> 'تنسيق التاريخ',
	'LBL_DEFAULT_SUBPANEL_TITLE'		=> 'المستخدمون',
	'LBL_DEPARTMENT'					=> 'القسم',
	'LBL_DESCRIPTION'					=> 'الوصف',
	'LBL_DISPLAY_TABS'					=> 'عرض الوحدات',
	'LBL_DOWNLOADS'                    => 'التنزيلات',
	'LBL_DST_INSTRUCTIONS'				=> '(+DST) تشير إلى ملاحظة التوقيت الصيفي',
	'LBL_EDIT_TABS'						=> 'حدد الوحدات الخاصة بشريط التنقل',
	'LBL_EDIT'							=> 'تحرير',
	'LBL_USER_HASH'						=> 'كلمة المرور',
	'LBL_AUTHENTICATE_ID'				=> 'معرّف المصادقة',
	'LBL_ACCOUNT_NAME'					=> 'اسم الحساب',
	'LBL_USER_PREFERENCES'				=> 'تفضيلات المستخدم',
	'LBL_EXT_AUTHENTICATE'				=> 'مصادقة خارجية',
	'LBL_EMAIL_OTHER'					=> 'البريد الإلكتروني 2',
	'LBL_EMAIL'							=> 'عنوان البريد الإلكتروني',
	'LBL_EMAIL_CHARSET'					=> 'مجموعة حروف الصادرة',
	'LBL_EMAIL_EDITOR_OPTION'			=> 'تنسيق الإنشاء',
	'LBL_EMAIL_GMAIL_DEFAULTS'			=> 'ملء مسبق Gmail&#153 الافتراضيات',
	'LBL_EMAIL_LINK_TYPE'				=> 'عميل البريد الإلكتروني',

    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>عميل بريد Sugar:</b> قم بإرسال رسائل البريد الإلكتروني باستخدام عميل البريد الإلكتروني في تطبيق Sugar.<br>يكون هذا الخيار متاحًا فقط في حالة ضبط إعدادات البريد الإلكتروني للنظام بشكل صحيح بواسطة المسؤول.<br><b>عميل البريد الخارجي:</b> قم بإرسال بريد إلكتروني باستخدام عميل بريد إلكتروني خارج تطبيق Sugar، مثل Microsoft Outlook.',

    'LBL_EMAIL_NOT_SENT'                => 'النظام غير قادر على معالجة طلبك. يُرجى الاتصال بمسؤول النظام.',
    'LBL_EMAIL_PROVIDER'               => 'موفر البريد الإلكتروني',
	'LBL_EMAIL_SHOW_COUNTS'				=> 'هل تريد إظهار عدادات البريد الإلكتروني؟',
	'LBL_EMAIL_SIGNATURE_ERROR1'		=> 'يحتاج هذا التوقيع إلى اسم.',
    'LBL_EMAIL_SMTP_SSL'				=> 'تمكين SMTP عبر SSL',
    'LBL_EMAIL_TEMPLATE_MISSING'            => 'لم يتم تحديد قالب بريد إلكتروني للبريد الإلكتروني الذي يحتوي على كلمة المرور التي سيتم إرسالها للمستخدم.  يُرجى تحديد قالب بريد إلكتروني في الصفحة \\"إدارة كلمة المرور\\".',
    'LBL_EMPLOYEE_STATUS'				=> 'حالة الموظف',
    'LBL_EMPLOYEE_INFORMATION'         => 'بيانات الموظف',
	'LBL_ERROR'							=> 'خطأ',
	'LBL_EXPORT_CHARSET'				=> 'استيراد/ تصدير مجموعة الحروف',
	'LBL_EXPORT_CHARSET_DESC'			=> 'اختر مجموعة الحروف المستخدمة في إعداداتك المحلية.  سيتم استخدام هذه الخاصية لعمليات استيراد البيانات، وعمليات تصدير csv، ولإنشاء vCard.',
	'LBL_EXPORT_DELIMITER'				=> 'محدد التصدير',
	'LBL_EXPORT_DELIMITER_DESC'			=> 'حدد الحرف (الأحرف) المستخدمة لتحديد البيانات التي تم تصديرها.',
	'LBL_FAX_PHONE'						=> 'الفاكس',
	'LBL_FAX'							=> 'الفاكس',
	'LBL_FIRST_NAME'					=> 'الاسم الأول',
    'LBL_GENERATE_PASSWORD_BUTTON_KEY'  => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD'     =>'كلمة المرور التي أنشأها النظام',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL'   => 'إعادة تعيين كلمة المرور',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE'   => 'إعادة تعيين كلمة المرور',
    'LBL_GENERATE_PASSWORD'             => 'إعادة تعيين كلمة المرور',
	'LBL_GROUP_DESC'					=> 'يتم استخدامها لتعيين العناصر لمجموعة (مثال: البريد الإلكتروني الداخلي).  يتعذر على هذا النوع تسجيل الدخول من خلال واجهة ويب لـ Sugar.',
	'LBL_GROUP_USER_STATUS'				=> 'مستخدم المجموعة',
	'LBL_GROUP_USER'					=> 'مستخدم المجموعة',
	'LBL_HIDE_TABS'						=> 'إخفاء الوحدات',
	'LBL_HOME_PHONE'					=> 'هاتف المنزل',
	'LBL_INBOUND_TITLE'					=> 'معلومات الحساب',
	'LBL_IS_ADMIN'						=> 'هو مسؤول',
	'LBL_LANGUAGE'						=> 'اللغة',
	'LBL_LAST_NAME'						=> 'الاسم الأخير',
    'LBL_LAST_NAME_SLASH_NAME'			=> 'الاسم الأخير/ الاسم',
    'LBL_LAYOUT_OPTIONS'                => 'خيارات التخطيط',
	'LBL_LDAP'							=> 'LDAP',
	'LBL_LDAP_AUTHENTICATION'			=> 'مصادقة LDAP',
	'LBL_LIST_ACCEPT_STATUS'			=> 'قبول الحالة',
	'LBL_LIST_ADMIN'					=> 'مسؤول',
	'LBL_LIST_DEPARTMENT'				=> 'القسم',
	'LBL_LIST_EMAIL'					=> 'البريد الإلكتروني',
	'LBL_LIST_FORM_TITLE'				=> 'المستخدمون',
	'LBL_LIST_GROUP'					=> 'مجموعة',
	'LBL_LIST_LAST_NAME'				=> 'الاسم الأخير',
	'LBL_LIST_MEMBERSHIP'				=> 'العضوية',
	'LBL_LIST_NAME'						=> 'الاسم',
	'LBL_LIST_PRIMARY_PHONE'			=> 'الهاتف الأساسي',
	'LBL_LIST_PASSWORD'					=> 'كلمة المرور',
	'LBL_LIST_STATUS'					=> 'الحالة',
	'LBL_LIST_TITLE'					=> 'العنوان',
	'LBL_LIST_USER_NAME'				=> 'اسم المستخدم',
	'LBL_LOCALE_DEFAULT_NAME_FORMAT'	=> 'تنسيق عرض الاسم',
	'LBL_LOCALE_DESC_FIRST'				=> '[الأول]',
	'LBL_LOCALE_DESC_LAST'				=> '[الأخير]',
	'LBL_LOCALE_DESC_SALUTATION'		=> '[التحية]',
	'LBL_LOCALE_DESC_TITLE'				=> '[اللقب]',
	'LBL_PICTURE_FILE'					=> 'أفاتار',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT'	=> 'مثال',
	'LBL_LOCALE_NAME_FORMAT_DESC'		=> 'تعيين طريقة عرض الأسماء.',
	'LBL_LOCALE_NAME_FORMAT_DESC_2'	=> '<i>\\"ت\\" التحية<br>\\"أ\\" الاسم الأول<br>\\"خ\\" الاسم الأخير</i>',
    'LBL_SAVED_SEARCH'                  => 'البحث والمخطط المحفوظ',
	// LOGIN PAGE STRINGS
	'LBL_LOGIN_BUTTON_KEY'				=> 'L',
	'LBL_LOGIN_BUTTON_LABEL'			=> 'تسجيل الدخول',
	'LBL_LOGIN_BUTTON_TITLE'			=> 'تسجيل الدخول',
	'LBL_LOGIN_WELCOME_TO'				=> 'مرحبًا بك في',
	'LBL_LOGIN_OPTIONS'					=> 'خيارات',
    'LBL_LOGIN_FORGOT_PASSWORD'         => 'نسيت كلمة المرور؟',
    'LBL_LOGIN_SUBMIT'      		    => 'إرسال',
    'LBL_LOGIN_ATTEMPTS_OVERRUN'        => 'محاولات تسجيل دخول فاشلة كثيرة للغاية.',
    'LBL_LOGIN_LOGIN_TIME_ALLOWED'      => 'يمكنك محاولة تسجيل الدخول ثانية خلال',
    'LBL_LOGIN_LOGIN_TIME_DAYS'     	=> 'يوماً.',
    'LBL_LOGIN_LOGIN_TIME_HOURS'    	=> 'س',
    'LBL_LOGIN_LOGIN_TIME_MINUTES'      => 'دق',
   	'LBL_LOGIN_LOGIN_TIME_SECONDS'      => 'ث',
    'LBL_LOGIN_ADMIN_CALL'              => 'يُرجى الاتصال بمسؤول النظام.',
	// END LOGIN PAGE STRINGS
    'LBL_LOGGED_OUT_1' => 'لقد تم تسجيل خروجك. لتسجيل الدخول ثانية انقر',
    'LBL_LOGGED_OUT_2' => 'هنا',
    'LBL_LOGGED_OUT_3' => '.',
	'LBL_MAIL_FROMADDRESS'				=> 'عنوان "الرد على"',
	'LBL_MAIL_FROMNAME'					=> 'اسم "الرد على"',
	'LBL_MAIL_OPTIONS_TITLE'			=> 'إعدادات البريد الإلكتروني',
	'LBL_MAIL_SENDTYPE'					=> 'عامل نقل البريد',
	'LBL_MAILMERGE_TEXT'				=> 'تمكين دمج البريد (يجب أيضًا تمكين دمج البريد بواسطة مسؤول النظام في إعدادات التهيئة)',
	'LBL_MAILMERGE'						=> 'دمج البريد',
	'LBL_MAX_TAB'						=> 'الحد الأقصى لعدد الوحدات',
    'LBL_MAX_TAB_DESCRIPTION'           => 'حدد الحد الأقصى لعدد الوحدات التي يمكن عرضها في شريط التنقل. يعتمد عدد الوحدات التي سيتم عرضها على عرض المستعرض. تظهر الوحدات التي لا يتم عرضها في قائمة \\"المزيد\\".',
    'LBL_MAX_SUBTAB'                    => 'عدد علامات التبويب الفرعية',
    'LBL_MAX_SUBTAB_DESCRIPTION'        => 'عدد علامات التبويب الفرعية التي ستظهر حسب علامة التبويب قبل ظهور قائمة سير العمل.',
	'LBL_MESSENGER_ID'					=> 'اسم الرسالة الفورية (IM)',
	'LBL_MESSENGER_TYPE'				=> 'نوع الرسالة الفورية (IM)',
	'LBL_MOBILE_PHONE'					=> 'المحمول',
	'LBL_MODIFIED_BY'                  =>'تم التعديل بواسطة',
	'LBL_CREATED_BY_NAME' => 'تم الإنشاء بواسطة', //bug 48978
    'LBL_MODIFIED_BY_ID'               =>'تم التعديل بواسطة المعرّف',
    'LBL_MODULE_NAME'					=> 'المستخدمون',
    'LBL_MODULE_NAME_SINGULAR'				=> 'المستخدم',
	'LBL_MODULE_TITLE'					=> 'المستخدمون: الصفحة الرئيسية',
    'LBL_NAME'							=> 'الاسم بالكامل',
    'LBL_SIGNATURE_NAME'                                        =>  'الاسم',
    'LBL_NAVIGATION_PARADIGM'           => 'التنقل',
    'LBL_USE_GROUP_TABS'                => 'عوامل تصفية قائمة الوحدة',
	'LBL_NEW_FORM_TITLE'				=> 'مستخدم جديد',
	'LBL_NEW_PASSWORD'					=> 'كلمة مرور جديدة',
	'LBL_NEW_PASSWORD1'					=> 'كلمة المرور',
	'LBL_NEW_PASSWORD2'					=> 'تأكيد كلمة المرور',
	'LBL_NEW_USER_PASSWORD_1'			=> 'تم تغيير كلمة المرور بنجاح.',
	'LBL_NEW_USER_PASSWORD_2'			=> 'تم إرسال بريد إلكتروني للمستخدم يحتوي على كلمة مرور تم إنشاؤها بمعرفة النظام.',
	'LBL_NEW_USER_PASSWORD_3'			=> 'تم إنشاء كلمة المرور بنجاح.',
	'LBL_NEW_USER_BUTTON_KEY'			=> 'N',
	'LBL_NEW_USER_BUTTON_LABEL'			=> 'مستخدم جديد',
	'LBL_NEW_USER_BUTTON_TITLE'			=> 'مستخدم جديد',
	'LBL_NORMAL_LOGIN'					=> 'الانتقال إلى العرض العادي',
	'LBL_NOTES'							=> 'ملاحظات',
	'LBL_OFFICE_PHONE'					=> 'هاتف المكتب',
	'LBL_OLD_PASSWORD'					=> 'كلمة المرور الحالية',
	'LBL_OTHER_EMAIL'					=> 'عنوان بريد إلكتروني آخر',
	'LBL_OTHER_PHONE'					=> 'هاتف آخر',
	'LBL_OTHER'							=> 'أخرى',
	'LBL_PASSWORD'						=> 'كلمة المرور',
    'LBL_PASSWORD_GENERATED'            => 'تم إنشاء كلمة مرور جديدة',
    'LBL_PASSWORD_EXPIRATION_LOGIN'     => 'انتهت صلاحية كلمة المرور. يُرجى إدخال كلمة مرور جديدة.',
    'LBL_PASSWORD_EXPIRATION_GENERATED' => 'تم إنشاء كلمة المرور بواسطة النظام',
    'LBL_PASSWORD_EXPIRATION_TIME'      => 'انتهت صلاحية كلمة المرور. يُرجى إدخال كلمة مرور جديدة.',

	'LBL_PSW_MODIFIED'                  => 'آخر تغيير لكلمة المرور',
    'LBL_PHONE'							=> 'الهاتف',
	'LBL_PICK_TZ_WELCOME'				=> 'مرحبًا بك في تطبيق Sugar.',
	'LBL_PICK_TZ_DESCRIPTION'           => 'قبل المتابعة، يُرجى تأكيد منطقتك الزمنية.  حدد المنطقة الزمنية المناسبة قبل القائمة التالية، وانقر فوق \\"حفظ\\" للمتابعة. يمكن تغيير المنطقة الزمنية في أي وقت في إعدادات المستخدم.',
	'LBL_PORTAL_ONLY_DESC'				=> 'استخدام واجهة برمجة تطبيقات (API) المدخل. يتعذر على هذا النوع تسجيل الدخول من خلال واجهة ويب لـ Sugar.',
	'LBL_PORTAL_ONLY_USER'					=> 'مستخدم مدخل واجهة برمجة التطبيقات (API)',
	'LBL_POSTAL_CODE'					=> 'الرمز البريدي',
	'LBL_PRIMARY_ADDRESS'				=> 'العنوان الرئيسي',
	'LBL_PROMPT_TIMEZONE_TEXT'			=> 'حدد لكي تجعل المستخدمين الجدد يتنقلون من خلال معالج مستخدم جديد عقب تسجيل الدخول لأول مرة.',
	'LBL_PROMPT_TIMEZONE'				=> 'موجه معالج المستخدم',
	'LBL_PROVIDE_USERNAME_AND_EMAIL' 	=> 'يجب إدخال اسم مستخدم وعنوان بريد إلكتروني صحيحين.',
    'LBL_FORGOTPASSORD_NOT_ENABLED' 	=> 'هذا الخيار غير ممكن في الوقت الحالي. يُرجى الاتصال بالمسؤول الخاص بك.',
	'LBL_PUBLISH_KEY'					=> 'نشر المفتاح',

    'LBL_QUOTAS'                        => 'الحصص النسبية',
    'LBL_FORECASTS'                     => 'التوقعات',
    'LBL_WORKSHEETS'                    => 'أوراق الأعمال',
	'LBL_RECAPTCHA_NEW_CAPTCHA'         => 'الحصول على CAPTCHA آخر',
	'LBL_RECAPTCHA_SOUND'				=> 'الانتقال إلى الصوت',
	'LBL_RECAPTCHA_IMAGE'				=> 'الانتقال إلى الصورة',
	'LBL_RECAPTCHA_INSTRUCTION'         => 'أدخل الكلمتين بالأسفل',
	'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE'=> 'أدخل الكلمتين جهة اليمين',
	'LBL_RECAPTCHA_FILL_FIELD'			=> 'أدخل النص الذي يظهر في الصورة.',
	'LBL_RECAPTCHA_INVALID_PRIVATE_KEY'	=> 'مفتاح Recaptcha الخاص غير صالح',
	'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE'=> 'معلمة الارتياب الخاصة بالبرنامج النصي لـ Recaptcha للتحقق غير صحيحة.',
	'LBL_RECAPTCHA_UNKNOWN'				=> 'خطأ Recaptcha غير معروف',

	'LBL_RECEIVE_NOTIFICATIONS_TEXT'	=> 'استلام إخطار بالبريد الإلكتروني عند تعيين سجل لك.',
	'LBL_RECEIVE_NOTIFICATIONS'			=> 'الإعلام عند التعيين',
	'LBL_REGISTER'                      => 'هل أنت مستخدم جديد؟ يرجى التسجيل',
	'LBL_REGULAR_USER'                  => 'مستخدم عادي',
	'LBL_REMINDER_TEXT'					=> 'أدخل قيمة افتراضية لتذكيرات المكالمات والاجتماعات. تظهر الإخطارات المنبثقة لجميع المدعوين باستخدام Sugar. يتم إرسال تذكيرات البريد الإلكتروني لجميع المدعوين.',
	'LBL_REMINDER'						=> 'التذكيرات',
	'LBL_REMINDER_POPUP' => 'منبثق',
	'LBL_REMINDER_EMAIL' => 'البريد الإلكتروني',
    'LBL_REMINDER_EMAIL_ALL_INVITEES'   => 'إرسال بريد إلكتروني لجميع المدعوين',
	'LBL_REMOVED_TABS'					=> 'علامة تبويب إزالة المسؤول',
	'LBL_REPORTS_TO_NAME'				=> 'تقارير إلى',
	'LBL_REPORTS_TO'					=> 'تقارير إلى',
    'LBL_REPORTS_TO_ID'                => 'تقارير إلى معرّف:',
	'LBL_REQUEST_SUBMIT'				=> 'تم إرسال طلبك.',
	'LBL_RESET_TO_DEFAULT'				=> 'إعادة التعيين إلى الافتراضي',
	'LBL_RESET_PREFERENCES'				=> 'إعادة تعيين تفضيلات المستخدم',
    'LBL_RESET_PREFERENCES_WARNING'     => 'هل تريد بالتأكيد إعادة تعيين تفضيلات المستخدم؟ تحذير: سيؤدي هذا أيضاً إلى الخروج من التطبيق.',
    'LBL_RESET_PREFERENCES_WARNING_USER' => 'هل تريد بالتأكيد إعادة تعيين جميع التفضيلات لهذا المستخدم؟',
    'LBL_RESET_DASHBOARD'               => 'إعادة تعيين لوحة المعلومات',
	'LBL_SALUTATION'                    => 'التحية',
    'LBL_ROLES_SUBPANEL_TITLE'			=> 'الأدوار',
	'LBL_SEARCH_FORM_TITLE'				=> 'البحث عن المستخدم',
	'LBL_SEARCH_URL'					=> 'البحث عن الموقع',
	'LBL_SELECT_CHECKED_BUTTON_LABEL'	=> 'حدد المستخدمين المحددين',
	'LBL_SELECT_CHECKED_BUTTON_TITLE'	=> 'حدد المستخدمين المحددين',
	'LBL_SETTINGS_URL_DESC'				=> 'استخدم URL عند إنشاء إعدادات تسجيل الدخول للمكون الإضافي الخاص بـ Sugar لـMicrosoft&reg; Outlook&reg والمكون الإضافي الخاص بـ Sugar لـMicrosoft&reg; Word&reg.',
	'LBL_SETTINGS_URL'					=> 'عنوان URL',
	'LBL_SIGNATURE'						=> 'التوقيع',
	'LBL_SIGNATURE_HTML'				=> 'توقيع HTML ',
	'LBL_SIGNATURE_DEFAULT'				=> 'استخدام توقيع؟',
	'LBL_SIGNATURE_PREPEND'				=> 'هل تريد التوقيع على الرد السابق؟',
	'LBL_SIGNATURES'					=> 'التوقيعات',
	'LBL_STATE'							=> 'الولاية',
	'LBL_STATUS'						=> 'الحالة',
    'LBL_SUBPANEL_LINKS'                => 'ارتباطات اللوحة الفرعية',
    'LBL_SUBPANEL_LINKS_DESCRIPTION'    => 'العروض التفصيلية، عرض صف من الارتباطات المختصرة للوحة الفرعية.',
    'LBL_SUGAR_LOGIN'					=> 'هو مستخدم Sugar',
    'LBL_SUPPORTED_THEME_ONLY'          => 'يؤثر فقط على السمات التي تدعم هذا الخيار.',
    'LBL_SWAP_LAST_VIEWED_DESCRIPTION'  => 'عرض آخر الأشرطة المعروضة على الجانب في حالة اختيارها.  وإلا فسينتقل إلى الأعلى.',
    'LBL_SWAP_SHORTCUT_DESCRIPTION'     => 'عرض شريط الاختصارات بالأعلى في حالة اختياره.  وإلا فسينتقل إلى الجانب.',
    'LBL_SWAP_LAST_VIEWED_POSITION'     => 'آخر الأشرطة المعروضة على الجانب',
    'LBL_SWAP_SHORTCUT_POSITION'        => 'الاختصارات بالأعلى',
	'LBL_TAB_TITLE_EMAIL'				=> 'إعدادات البريد الإلكتروني',
	'LBL_TAB_TITLE_USER'				=> 'إعدادات المستخدم',
	'LBL_THEME'							=> 'السمات',
	'LBL_THEME_COLOR'					=> 'اللون',
	'LBL_THEME_FONT'					=> 'الخط',
	'LBL_TIME_FORMAT_TEXT'				=> 'تعيين تنسيق عرض أختام التاريخ',
	'LBL_TIME_FORMAT'					=> 'تنسيق الوقت',
	'LBL_TIMEZONE_DST_TEXT'				=> 'ملاحظة التوقيت الصيفي',
	'LBL_TIMEZONE_DST'					=> 'التوقيت الصيفي',
	'LBL_TIMEZONE_TEXT'					=> 'تعيين المنطقة الزمنية الحالية',
	'LBL_TIMEZONE'						=> 'المنطقة الزمنية',
	'LBL_TITLE'							=> 'العنوان',
	'LBL_USE_REAL_NAMES'				=> 'إظهار الأسماء كاملة',
	'LBL_USE_REAL_NAMES_DESC'			=> 'عرض الأسماء الكاملة للمستخدمين بدلاً من أسماء المستخدمين في حقول المهمة.',
	'LBL_USER_INFORMATION'				=> 'ملف تعريف المستخدم',
	'LBL_USER_LOCALE'					=> 'الإعدادات المحلية',
	'LBL_USER_NAME'						=> 'اسم المستخدم',
	'LBL_USER_SETTINGS'					=> 'إعدادات المستخدم',
	'LBL_USER_TYPE'		   			    => 'نوع المستخدم',
	'LBL_USER_ACCESS'                  => 'إمكانية الوصول',
	'LBL_USER'							=> 'المستخدمون',
	'LBL_WORK_PHONE'					=> 'هاتف العمل',
	'LBL_YOUR_PUBLISH_URL'				=> 'النشر في موقعي',
    'LBL_ICAL_PUB_URL'                  => 'عنوان URL الخاص بتكامل iCal ',
    'LBL_ICAL_PUB_URL_HELP'             => 'استخدم عنوان URL للاشتراك في تقويم Sugar في iCal.',
	'LBL_YOUR_QUERY_URL'				=> 'عنوان URL للاستعلام الخاص بك',
	'LNK_NEW_USER'						=> 'إنشاء مستخدم جديد',
	'LNK_NEW_PORTAL_USER'				=> 'إنشاء مستخدم لواجهة برمجة تطبيقات (API) البوابة',
	'LNK_NEW_GROUP_USER'				=> 'إنشاء مستخدم مجموعة',
	'LNK_USER_LIST'						=> 'عرض المستخدمين',
	'LNK_REASSIGN_RECORDS'				=> 'إعادة تعيين السجلات',
    'LBL_PROSPECT_LIST'                 => 'قائمة العملاء المتوقعين',
    'LBL_EMAILS'                        => 'رسائل البريد الإلكتروني',
    'LBL_PROCESSING'                    => 'المعالجة',
    'LBL_UPDATE_FINISH'                 => 'اكتمل التحديث',
    'LBL_AFFECTED'                      => 'متأثر',

    'LBL_USER_NAME_FOR_ROLE'            =>'المستخدمون/الفرق/الأدوار',
    'LBL_SESSION_EXPIRED'               => 'لقد قمت بتسجيل الخروج نظرًا لانتهاء جلستك.',

    'LBL_TOO_MANY_CONCURRENT'           => 'انتهت هذه الجلسة نظرًا لبدء جلسة أخرى باسم المستخدم ذاته.',
// MASS REASSIGNMENT SCRIPT STRINGS
	'LBL_REASS_SCRIPT_TITLE'			=> 'إعادة تعيين السجلات',
	'LBL_REASS_DESC_PART1'				=> 'حدد الوحدات التي تحتوي على السجلات لإعادة التعيين من مستخدم محدد لمستخدم آخر. <br/><br/>                                                            
انقر فوق \\"التالي\\" لعرض عدد السجلات التي سيتم تحديثها في كل دورة محددة.
                                                            انقرفوق \\"إلغاء\\" للخروج من الصفحة دون إعادة تعيين أي سجلات.',
        'LBL_REASS_DESC_PART2'=>                    'حدد الوحدات التي سيتم إجراء عمليات سير العمل مقابلها، وأرسل إخطارات التعيين، وقم بتتبع التدقيق أثناء إعادة التعيين. انقر فوق \\"التالي\\" للمتابعة وإعادة تعيين السجلات. انقر فوق \\"إعادة التشغيل\\" لبدء التشغيل ثانية.',
	'LBL_REASS_STEP2_TITLE'				=> 'إعادة تعيين الفريق',
	'LBL_REASS_STEP2_DESC'				=> 'الفرق المدرجة بالأسفل كانت متاحة في فريق المستخدم لمرسل، وليست متاحة في فريق المستخدم المرسل إليه. لن تظهر جميع السجلات في فريق المستخدم المرسل في فريق المستخدم المرسل إليه ما لم يتم تعيين قيم الفريق. ',
	'LBL_REASS_USER_FROM_TEAM'			=> 'فريق من مستخدم:',
	'LBL_REASS_USER_TO_TEAM'			=> 'فريق إلى مستخدم:',
	'LBL_REASS_USER_FROM'				=> 'من مستخدم:',
	'LBL_REASS_USER_TO'					=> 'إلى مستخدم:',
	'LBL_REASS_TEAM_TO'					=> 'تعيين الفرق لـ:',
	'LBL_REASS_TEAMS_GOOD_MSG'			=> 'يتوفر للمستخدم المرسل إليه إمكانية الوصول إلى جميع فرق من مستخدم. لا يلزم إجراء تعيين. إعادة التوجيه للصفحة التالية في غضون 5 ثوانٍ.',
	'LBL_REASS_TEAM_NO_CHANGE'			=> '-- لا يوجد تغيير --',
	'LBL_REASS_NOT_PROCESSED' 			=> 'تعذرت معالجتها:',
	'LBL_REASS_MOD_REASSIGN' 			=> 'الوحدات التي يتعين تضمينها في إعادة التعيين:',
	'LBL_REASS_FILTERS'					=> 'عوامل التصفية',
	'LBL_REASS_NOTES_TITLE'				=> 'ملاحظات:',
	'LBL_REASS_NOTES_THREE'				=> 'لن يؤدي تعيين السجلات لك إلى إرسال إشعارات التعيين.',
	'LBL_REASS_NOTES_ONE'				=> 'يؤدي إجراء عمليات سير العمل إلى انخفاض سرعة عملية إعادة التعيين انخفاضًا ملحوظًا.',
	'LBL_REASS_NOTES_TWO'				=> 'على الرغم من أنك لم تحدد تتبع التدقيق، فسيظل تحديث حقل \\"تاريخ التعديل\\" و\\"تم التعديل بواسطة\\" وفقاً لذلك.',
	'LBL_REASS_VERBOSE_OUTPUT'			=> 'ناتج مطول',
        'LBL_REASS_VERBOSE_HELP'                     =>  'حدد هذا الخيار لعرض المعلومات التفصيلية الخاصة بمهام إعادة التعيين التي تتضمن عمليات سير العمل.',
	'LBL_REASS_ASSESSING'				=> 'التقييم',
	'LBL_REASS_RECORDS_FROM'			=> 'سيتم تحديث',
	'LBL_REASS_WILL_BE_UPDATED'			=> 'السجلات من.',
	'LBL_REASS_WORK_NOTIF_AUDIT' => 'تتضمن سير العمل/ الإشعارات/ التدقيق (بطيئة بصورة ملحوظة)',
	'LBL_REASS_SUCCESS_ASSIGN'			=> 'معين بنجاح',
	'LBL_REASS_FROM'					=> 'من',
	'LBL_REASS_TO'						=> 'إلى',
	'LBL_REASS_TEAM_SET_TO'				=> 'وتم تعيين الفرق لـ',
	'LBL_REASS_FAILED_SAVE'				=> 'فشل الحفظ للسجل',
	'LBL_REASS_THE_FOLLOWING'			=> 'تم تحديث ',
	'LBL_REASS_HAVE_BEEN_UPDATED'		=> 'التالي:',
    'LBL_REASS_CANNOT_PROCESS'		    => 'تعذرت معالجتها:',
	'LBL_REASS_NONE'					=> 'بلا',
	'LBL_REASS_UPDATE_COMPLETE'			=> 'اكتمل التحديث',
	'LBL_REASS_SUCCESSFUL'				=> 'ناجح',
	'LBL_REASS_FAILED'					=> 'فشل',
	'LBL_REASS_BUTTON_SUBMIT' 			=> 'إرسال',
	'LBL_REASS_BUTTON_CLEAR' 			=> 'مسح',
	'LBL_REASS_BUTTON_CONTINUE'			=> 'التالي >',
    'LBL_REASS_BUTTON_REASSIGN'         => 'إعادة تعيين',
	'LBL_REASS_BUTTON_GO_BACK' 			=> '< السابق',
	'LBL_REASS_BUTTON_RESTART' 			=> 'إعادة التشغيل',
	'LBL_REASS_BUTTON_RETURN' 			=> 'رجوع',
	// js
	'LBL_REASS_CONFIRM_REASSIGN'		=> 'هل ترغب في إعادة تعيين جميع سجلات هذا المستخدم؟',
  'LBL_REASS_CONFIRM_REASSIGN_YES' => 'نعم',
  'LBL_REASS_CONFIRM_REASSIGN_NO'    => 'لا',
  'LBL_REASS_CONFIRM_REASSIGN_TITLE'    => 'إعادة التعيين',
	// end js
	'ERR_REASS_SELECT_MODULE'			=> 'يرجى الرجوع وتحديد وحدة واحدة على الأقل.',
	'ERR_REASS_DIFF_USERS'				=> 'يرجى تحديد مستخدم مرسل إليه آخر يختلف عن \\"من مستخدم\\".',
// END MASS REASSIGNMENT SCRIPT STRINGS

// INBOUND EMAIL STRINGS
	'LBL_APPLY_OPTIMUMS'				=> 'تطبيق الحدود المثالية',
	'LBL_ASSIGN_TO_USER'				=> 'تعيين إلى مستخدم',
	'LBL_BASIC'							=> 'إعداد الداخلي',
	'LBL_CERT_DESC'						=> 'فرض التحقق من صحة شهادة أمان خادم البريد - لا يُستخدم في حالة التوقيع الذاتي.',
	'LBL_CERT'							=> 'التحقق من صحة الشهادة',
	'LBL_FIND_OPTIMUM_KEY'				=> 'f',
	'LBL_FIND_OPTIMUM_MSG'				=> '<br>البحث عن متغيرات الاتصال المثالية.',
	'LBL_FIND_OPTIMUM_TITLE'			=> 'البحث عن التكوين المثالي',
	'LBL_FORCE'							=> 'فرض مفتاح سلبي',
	'LBL_FORCE_DESC'					=> 'تتطلب بعض خوادم IMAP/POP3 مفاتيح خاصة. تحقق لفرض مفتاح سلبي عند الاتصال (أي/notls)',
	'LBL_FOUND_OPTIMUM_MSG'				=> '<br>الإعدادات المثلى الموجودة.	 اضغط على الزر أدناه لتطبيقها على صندوق البريد الخاص بك.',
	'LBL_EMAIL_INBOUND_TITLE'			=> 'إعدادات البريد الإلكتروني الداخلي',
	'LBL_EMAIL_OUTBOUND_TITLE'			=> 'إعدادات البريد الإلكتروني الصادر',
	'LBL_LOGIN'							=> 'اسم المستخدم',
	'LBL_MAILBOX_DEFAULT'				=> 'علبة الوارد',
	'LBL_MAILBOX_SSL_DESC'				=> 'استخدم SSL عند الاتصال. إذا لم يعمل هذا، فتحقق من تضمين تثبيت PHP "--with-imap-ssl" في التهيئة.',
	'LBL_MAILBOX'						=> 'المجلد المراقب',
	'LBL_MAILBOX_TYPE'					=> 'الإجراءات المحتملة',
	'LBL_MARK_READ_NO'					=> 'بريد إلكتروني مميز كمحذوف بعد الاستيراد',
	'LBL_MARK_READ_YES'					=> 'بريد إلكتروني متروك على الخادم بعد الاستيراد',
	'LBL_MARK_READ_DESC'				=> 'استيراد وتمييز قراءة الرسائل بخادم البريد؛ لا تحذف.',
	'LBL_MARK_READ'						=> 'ترك الرسائل على الخادم',
	'LBL_ONLY_SINCE_NO'					=> 'لا. ضع علامة أمام جميع رسائل البريد الإلكتروني الموجودة على خادم البريد.',
	'LBL_ONLY_SINCE_YES'				=> 'نعم.',
	'LBL_ONLY_SINCE_DESC'				=> 'لا يتسنى لـ PHP تمييز رسائل جديدة من الرسائل غير المقروءة باستخدام POP3.	 اختر هذه العلامة لفحص الرسائل منذ آخر مرة تم خلالها استقصاء حساب البريد.	 سيؤدي هذا إلى تحسين الأداء بصورة كبيرة إذا لم يدعم خادم البريد IMAP.',
	'LBL_ONLY_SINCE'					=> 'الاستيراد فقط منذ آخر فحص',
	'LBL_PORT'							=> 'منفذ خادم البريد',
	'LBL_SERVER_OPTIONS'				=> 'إعداد متقدم',
	'LBL_SERVER_TYPE'					=> 'بروتوكول خادم البريد',
	'LBL_SERVER_URL'					=> 'عنوان خادم البريد',
	'LBL_SSL'							=> 'استخدام SSL',
	'LBL_SSL_DESC'						=> 'استخدم \\"طبقة المآخذ الآمنة\\" عند الاتصال بخادم البريد الخاص بك.',
	'LBL_TEST_BUTTON_KEY'				=> 't',
	'LBL_TEST_BUTTON_TITLE'				=> 'اختبار',
	'LBL_TEST_SETTINGS'					=> 'اختبار الإعدادات',
	'LBL_TEST_SUCCESSFUL'				=> 'تم إكمال الاتصال بنجاح.',
	'LBL_TLS_DESC'						=> 'استخدم \\"أمان طبقة النقل\\" عند الاتصال بخادم البريد - استخدم هذا فقط إذا كان خادم البريد يدعم هذا البروتوكول.',
	'LBL_TLS'							=> 'استخدام TLS',
	'LBL_TOGGLE_ADV'					=> 'عرض الخيارات المتقدمة',
    'LBL_OWN_OPPS'                      => 'لا توجد فرص',
	'LBL_EXTERNAL_AUTH_ONLY'			=> 'مصادقة هذا المستخدم فقط من خلال',
	'LBL_ONLY'							=> 'فقط',
    'LBL_OWN_OPPS_DESC'                 => 'حدد إذا لم يكن سيتم تعيين فرص للمستخدم. استخدم هذا الإعداد للمستخدمين المديرين غير المتضمنين في أنشطة المبيعات. يستخدم هذا الإعداد لوحدة التوقع.',
// END INBOUND EMAIL STRINGS
	'LBL_LDAP_ERROR' => 'خطأ LDAP: يرجى الاتصال بمسؤول',
	'LBL_LDAP_EXTENSION_ERROR' => 'خطأ LDAP: الامتدادات ليست محملة',

// PROJECT RESOURCES STRINGS
	'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'إجازات المستخدمين',
	'LBL_RESOURCE_NAME' => 'الاسم',
	'LBL_RESOURCE_TYPE' => 'النوع',

	'LBL_PDF_SETTINGS'  =>  'ضبط PDF',
	'LBL_PDF_PAGE_FORMAT'  =>  'تنسيق الصفحة',
	'LBL_PDF_PAGE_FORMAT_TEXT'  =>  'التنسيق المستخدم للصفحات',
	'LBL_PDF_PAGE_ORIENTATION'  =>  'اتجاه الصفحة',
	'LBL_PDF_PAGE_ORIENTATION_TEXT'  =>  '',
	'LBL_PDF_PAGE_ORIENTATION_P'  =>  'عمودي',
	'LBL_PDF_PAGE_ORIENTATION_L'  =>  'أفقي',
	'LBL_PDF_MARGIN_HEADER'  =>  'هامش رأس الصفحة',
	'LBL_PDF_MARGIN_HEADER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_FOOTER'  =>  'هامش تذييل الصفحة',
	'LBL_PDF_MARGIN_FOOTER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_TOP'  =>  'الهامش العلوي',
	'LBL_PDF_MARGIN_TOP_TEXT'  =>  '',
	'LBL_PDF_MARGIN_BOTTOM'  =>  'الهامش السفلي',
	'LBL_PDF_MARGIN_BOTTOM_TEXT'  =>  '',
	'LBL_PDF_MARGIN_LEFT'  =>  'الهامش الأيسر',
	'LBL_PDF_MARGIN_LEFT_TEXT'  =>  '',
	'LBL_PDF_MARGIN_RIGHT'  =>  'الهامش الأيمن',
	'LBL_PDF_MARGIN_RIGHT_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_MAIN'  =>  'خط العنوان والنص الأساسي',
	'LBL_PDF_FONT_NAME_MAIN_TEXT'  =>  'سيتم تطبيق الخط المحدد على النص في العنوان وفي النص الأساسي لمستند PDF.',
	'LBL_PDF_FONT_SIZE_MAIN'  =>  'حجم الخط الرئيسي',
	'LBL_PDF_FONT_SIZE_MAIN_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_DATA'  =>  'خط التذييل',
	'LBL_PDF_FONT_NAME_DATA_TEXT'  =>  'سيتم تطبيق الخط المحدد على النص في تذييل مستند PDF.',
	'LBL_PDF_FONT_SIZE_DATA'  =>  'حجم خط البيانات',
	'LBL_PDF_FONT_SIZE_DATA_TEXT'  =>  '',
	'LBL_LAST_ADMIN_NOTICE' => 'لقد حددت الخاص بك. يتعذر تغيير \\"نوع المستخدم\\" أو \\"الحالة\\" الخاصة بك.',
	'LBL_SMTP_SERVER_HELP' => 'يمكن استخدام خادم بريد SMTP للبريد الصادر. قم بتوفير اسم مستخدم وكلمة مرور لحساب البريد الإلكتروني الخاص بك لاستخدام خادم البريد.',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'لم يقم المسؤول بتكوين الحساب الافتراضي الصادر بعد.  تعذر إرسال رسالة بريد إلكتروني كاختبار.',
    'LBL_MAIL_SMTPAUTH_REQ'				=> 'هل تريد استخدام مصادقة SMTP؟',
	'LBL_MAIL_SMTPPASS'					=> 'كلمة مرور SMTP:',
	'LBL_MAIL_SMTPPORT'					=> 'منفذ SMTP:',
	'LBL_MAIL_SMTPSERVER'				=> 'خادم SMTP:',
	'LBL_MAIL_SMTPUSER'					=> 'اسم مستخدم SMTP:',
	'LBL_MAIL_SMTPTYPE'                => 'نوع خادم SMTP:',
	'LBL_MAIL_SMTP_SETTINGS'           => 'مواصفات خادم SMTP',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'اختر موفر البريد الإلكتروني الخاص بك:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! كلمة مرور البريد:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! معرّف البريد الإلكتروني:',
	'LBL_GMAIL_SMTPPASS'					=> 'كلمة مرور Gmail:',
	'LBL_GMAIL_SMTPUSER'					=> 'عنوان البريد الإلكتروني على Gmail:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'كلمة مرور Exchange:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'اسم مستخدم Exchange:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'منفذ خادم Exchange:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'خادم Exchange:',
        'LBL_OK'   =>'موافق',
        'LBL_CANCEL'    => 'إلغاء',
        'LBL_DELETE_USER' => 'حذف مستخدم',
	// Wizard
	'LBL_WIZARD_TITLE' => 'معالج المستخدم',
    'LBL_WIZARD_WELCOME_TAB' => 'مرحبًا',
    'LBL_WIZARD_WELCOME_TITLE' => 'مرحبًا بك في Sugar!',
    'LBL_WIZARD_WELCOME' => 'انقر فوق <b>التالي</b> لتهيئة إعدادات أساسية لاستخدام تطبيق Sugar.',
    'LBL_WIZARD_WELCOME_NOSMTP' => 'انقر فوق <b>التالي</b> لتهيئة إعدادات أساسية لاستخدام تطبيق Sugar.',
    'LBL_WIZARD_NEXT_BUTTON' => 'التالي >',
    'LBL_WIZARD_BACK_BUTTON' => '< السابق',
    'LBL_WIZARD_SKIP_BUTTON' => 'تخطي',
    'LBL_WIZARD_FINISH_BUTTON' => 'إنهاء',
    'LBL_WIZARD_FINISH_TAB' => 'إنهاء',
    'LBL_WIZARD_FINISH_TITLE' => 'أنت مستعد لاستخدام Sugar!',

    'LBL_WIZARD_FINISH' => 'انقر فوق <b>إنهاء</b> بالأسفل لحفظ إعداداتك وبدء استخدام تطبيق Sugar. للمزيد من المعلومات عن استخدام تطبيق Sugar:<br /><br />
<table cellpadding=0 cellspacing=0>
<tr><td><!--not_in_theme!--><img src=include/images/university.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/university" target="_blank"><b>جامعة Sugar </b></a><br>تدريب المستخدم النهائي ومسؤول النظام والمصادر </td></tr>
<tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><!--not_in_theme!--><img src=include/images/docs.png style="margin-right: 5px;"></td><td><a href="http://docs.sugarcrm.com/" target="_blank"><b>الوثائق</b></a><br>أدلة المنتج وملاحظات الإصدار</td></tr>
<tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><!--not_in_theme!--><img src=include/images/kb.png style="margin-right: 5px;"></td><td><a href="http://kb.sugarcrm.com/" target="_blank"><b>القاعدة المعرفية</b></a><br>نصائح من فرق دعم SugarCRM لتنفيذ المهام المشتركة وعمليات المعالجة في Sugar</td></tr>
<tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><!--not_in_theme!--><img src=include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/forums" target="_blank"><b>المنتديات</b></a><br>المنتديات المخصصة لمجتمع Sugar لمناقشة الموضوعات ذات الاهتمام المشترك مع بعضنا البعض ومع مطوري SugarCRM </td></tr>
</table>',

    'LBL_WIZARD_FINISH1' => 'ما الذي ترغب في فعله لاحقاً؟',
    'LBL_WIZARD_FINISH2' => 'بدء استخدام Sugar',
    'LBL_WIZARD_FINISH3' => 'استيراد البيانات ',
    'LBL_WIZARD_FINISH4' => 'استيراد البيانات من مصادر خارجية إلى داخل التطبيق.',
    'LBL_WIZARD_FINISH5' => 'إنشاء مستخدمين',
    'LBL_WIZARD_FINISH6' => 'إنشاء حسابات مستخدم جديد لكي يتسنى للأشخاص استخدامها للوصول إلى التطبيق.',
    'LBL_WIZARD_FINISH7' => 'عرض ضبط التطبيق وإدارته',
    'LBL_WIZARD_FINISH8' => 'إدارة الضبط المتقدمة بما في ذلك ضبط التطبيق الافتراضي.',
    'LBL_WIZARD_FINISH9' => 'تهيئة التطبيق ',
    'LBL_WIZARD_FINISH10' => 'استخدم "الأستوديو" لإنشاء حقول ومخططات التطبيق وإدارتها.',
    'LBL_WIZARD_FINISH11' => 'قم بزيارة جامعة Sugar  ',
    'LBL_WIZARD_FINISH12' => 'ابحث عن مواد التدريب والدورات الدراسية التي ستساعدك على البدء كمسؤول للنظام أو كمستخدم نهائي للتطبيق.',
    'LBL_WIZARD_FINISH14' => 'الوثائق ',
    'LBL_WIZARD_FINISH15' => 'أدلة المنتج وملاحظات الإصدار ',
    'LBL_WIZARD_FINISH16' => 'قاعدة المعارف ',
    'LBL_WIZARD_FINISH17' => 'نصائح من فريق دعم SugarCRM لتنفيذ المهام المشتركة وعمليات المعالجة في تطبيق Sugar ',
    'LBL_WIZARD_FINISH18' => 'المنتديات ',
    'LBL_WIZARD_FINISH19' => 'المنتديات المخصصة لمجتمع Sugar لمناقشة الموضوعات ذات الاهتمام المشترك مع بعضنا البعض ومع مطوري SugarCRM. ',
    'LBL_WIZARD_FINISH2DESC' => 'الانتقال مباشرة للصفحة الرئيسية للتطبيق.',
    'LBL_WIZARD_PERSONALINFO' => 'معلوماتك',
    'LBL_WIZARD_LOCALE' => 'إعداداتك المحلية',
    'LBL_WIZARD_SMTP' => 'حساب بريدك الإلكتروني',
    'LBL_WIZARD_PERSONALINFO_DESC' => 'أدخل معلومات عن نفسك. سيتم عرض المعلومات التي أدخلتها عن نفسك لمستخدمين آخرين لتطبيق Sugar .<br />الحقول المميزة بـ <span class="required">*</span> مطلوبة.',
    'LBL_WIZARD_LOCALE_DESC' => 'حدد المنطقة الزمنية والطريقة المفضلة لظهور التواريخ، والعملات، والأسماء في Sugar.',
    'LBL_WIZARD_SMTP_DESC' => 'أدخل اسم مستخدم وكلمة مرور حساب بريدك الإلكتروني لخادم البريد الإلكتروني الصادر الافتراضي.',
	'LBL_EAPM_SUBPANEL_TITLE' => 'الحسابات الخارجية',

	'LBL_EDITLAYOUT' => 'تعديل المخطط' /*for 508 compliance fix*/,
	'LBL_HELP' => 'تعليمات' /*for 508 compliance fix*/,
	'LBL_CHECKMARK' => 'علامة اختيار' /*for 508 compliance fix*/,
	'LBL_THEMEPREVIEW' => 'معاينة' /*for 508 compliance fix*/,

    'LBL_OAUTH_TOKENS' => 'رموز OAuth',
    'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => "رموز الوصول إلى OAuth",

    //For export labels
    'LBL_MODIFIED_USER_ID' => 'معرّف المستخدم المعدل',
    'LBL_PHONE_HOME' => 'هاتف المنزل',
    'LBL_PHONE_MOBILE' => 'الهاتف المحمول',
    'LBL_PHONE_WORK' => 'هاتف العمل',
    'LBL_PHONE_OTHER' => 'هاتف آخر',
    'LBL_PHONE_FAX' => 'هاتف الفاكس',
    'LBL_PORTAL_ONLY' => 'البوابة فقط',
    'LBL_SHOW_ON_EMPLOYEES' => 'عرض سجل الموظف',
    'LBL_IS_GROUP' => 'هي مجموعة',
    'LBL_EXPORT_CREATED_BY' => 'تم الإنشاء بواسطة المعرّف',

    'LBL_DATE_MODIFIED' => 'تاريخ التعديل',
    'LBL_DATE_ENTERED' => 'تاريخ الإدخال',
    'LBL_DELETED' => 'تم الحذف',
    'LBL_HIDEOPTIONS' => 'إخفاء الخيارات',
    'LBL_SHOWOPTIONS' => 'عرض الخيارات',

    'LBL_FILTER_USERS_REPORTS' => 'تقارير المستخدمين',
    'LBL_CONTACTS_SYNC' => 'جهات الاتصال',

); // END STRINGS DEFS

?>
