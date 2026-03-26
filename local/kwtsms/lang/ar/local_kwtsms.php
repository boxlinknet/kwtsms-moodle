<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Arabic language strings for local_kwtsms.
 *
 * @package    local_kwtsms
 * @copyright  2026 kwtSMS <support@kwtsms.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['active_coverage'] = 'التغطية النشطة';
$string['active_sender_id'] = 'معرّف المرسل النشط';
$string['admin_alerts'] = 'تنبيهات المشرفين';
$string['admin_phones'] = 'أرقام هواتف المشرفين';
$string['admin_phones_desc'] = 'أرقام هواتف لتنبيهات المشرفين. مفصولة بفواصل، بالصيغة الدولية (مثال: 96598765432).';
$string['api_password'] = 'كلمة مرور API';
$string['api_username'] = 'اسم مستخدم API';
$string['balance'] = 'الرصيد';
$string['connected'] = 'متصل';
$string['connected_as'] = 'متصل كـ: {$a}';
$string['credits'] = 'نقطة';
$string['debug_logging'] = 'تسجيل التصحيح';
$string['debug_logging_desc'] = 'تسجيل معلومات تصحيح مفصلة. عطّل في بيئة الإنتاج.';
$string['default_country_code'] = 'رمز الدولة الافتراضي';
$string['default_country_code_desc'] = 'رمز الدولة المضاف للأرقام المحلية التي تبدأ بـ 0.';
$string['default_language'] = 'لغة الرسائل الافتراضية';
$string['default_language_desc'] = 'اللغة الاحتياطية للرسائل عندما لا يكون لدى المستخدم لغة محددة في ملفه الشخصي.';
$string['disabled'] = 'معطّل';
$string['disconnected'] = 'غير متصل';
$string['enabled'] = 'مفعّل';
$string['error_invalid_sesskey'] = 'مفتاح الجلسة غير صالح. يرجى إعادة تحميل الصفحة والمحاولة مرة أخرى.';
$string['error_no_capability'] = 'ليس لديك صلاحية للوصول إلى هذه الصفحة.';
$string['event_assessable_uploaded'] = 'تقديم الواجب';
$string['event_assessable_uploaded_desc'] = 'إرسال رسالة عند تقديم ملف الواجب.';
$string['event_attempt_submitted'] = 'تقديم الاختبار';
$string['event_attempt_submitted_desc'] = 'إرسال رسالة عند تقديم محاولة اختبار.';
$string['event_course_completed'] = 'إكمال المقرر';
$string['event_course_completed_desc'] = 'إرسال رسالة عند إكمال المستخدم للمقرر.';
$string['event_low_balance_alert'] = 'تنبيه انخفاض الرصيد';
$string['event_user_created'] = 'تسجيل مستخدم جديد';
$string['event_user_created_desc'] = 'إرسال رسالة للمشرف عند تسجيل مستخدم جديد.';
$string['event_user_enrolment_created'] = 'تسجيل المستخدم';
$string['event_user_enrolment_created_desc'] = 'إرسال رسالة عند تسجيل مستخدم في مقرر.';
$string['event_user_enrolment_deleted'] = 'إلغاء تسجيل المستخدم';
$string['event_user_enrolment_deleted_desc'] = 'إرسال رسالة عند إلغاء تسجيل مستخدم من مقرر.';
$string['event_user_graded'] = 'نشر الدرجة';
$string['event_user_graded_desc'] = 'إرسال رسالة عند نشر درجة للمستخدم.';
$string['failed_count'] = 'فشلت';
$string['gateway_enabled'] = 'تفعيل البوابة';
$string['gateway_enabled_desc'] = 'مفتاح التشغيل/الإيقاف العام لإرسال الرسائل القصيرة.';
$string['gateway_settings'] = 'اتصال البوابة';
$string['gateway_status'] = 'حالة البوابة';
$string['help_getting_started'] = 'البدء';
$string['help_getting_started_text'] = 'لاستخدام هذا الإضافة، تحتاج إلى حساب kwtSMS. سجّل في <a href="https://www.kwtsms.com" target="_blank">kwtsms.com</a> للحصول على بيانات اعتماد API.';
$string['help_phone_format'] = 'صيغة رقم الهاتف';
$string['help_phone_format_text'] = 'يجب أن تكون أرقام الهواتف بالصيغة الدولية (مثال: 96598765432). الأرقام المحلية التي تبدأ بـ 0 سيُضاف إليها رمز الدولة الافتراضي تلقائياً.';
$string['help_placeholders'] = 'متغيرات القوالب';
$string['help_senderid'] = 'معرّف المرسل';
$string['help_senderid_text'] = 'KWT-SMS هو معرّف مرسل مشترك للاختبار. للاستخدام الإنتاجي، سجّل معرّف مرسل خاصاً من خلال حسابك في kwtSMS. معرّفات المرسل للمعاملات مطلوبة لرسائل OTP لتجاوز تصفية عدم الإزعاج.';
$string['help_setup_guide'] = 'دليل الإعداد';
$string['help_support'] = 'الدعم';
$string['help_support_text'] = 'لمشاكل حساب kwtSMS، تواصل مع <a href="https://www.kwtsms.com/support.html" target="_blank">دعم kwtSMS</a>. لمشاكل الإضافة، استخدم متتبع المشكلات في GitHub.';
$string['help_troubleshooting'] = 'استكشاف الأخطاء وإصلاحها';
$string['integrations_desc'] = 'تفعيل أو تعطيل إشعارات الرسائل القصيرة لكل حدث.';
$string['kwtsms:manage'] = 'إدارة إعدادات kwtSMS';
$string['kwtsms:viewlogs'] = 'عرض سجلات kwtSMS';
$string['last_synced'] = 'آخر مزامنة';
$string['log_api_response'] = 'استجابة API';
$string['log_clear'] = 'مسح السجلات';
$string['log_clear_confirm'] = 'حذف جميع السجلات في النطاق الزمني المحدد؟ لا يمكن التراجع عن هذا الإجراء.';
$string['log_cleared'] = 'تم مسح السجلات بنجاح.';
$string['log_credits'] = 'النقاط';
$string['log_date'] = 'التاريخ/الوقت';
$string['log_details'] = 'عرض التفاصيل';
$string['log_error_code'] = 'رمز الخطأ';
$string['log_event'] = 'الحدث';
$string['log_export'] = 'تصدير CSV';
$string['log_filter_all'] = 'الكل';
$string['log_filter_btn'] = 'تصفية';
$string['log_filter_event'] = 'نوع الحدث';
$string['log_filter_from'] = 'من';
$string['log_filter_search'] = 'بحث برقم الهاتف';
$string['log_filter_status'] = 'الحالة';
$string['log_filter_to'] = 'إلى';
$string['log_message'] = 'الرسالة';
$string['log_no_records'] = 'لا توجد سجلات رسائل قصيرة.';
$string['log_phone'] = 'رقم المستلم';
$string['log_reason'] = 'السبب';
$string['log_status'] = 'الحالة';
$string['log_template'] = 'القالب';
$string['log_test_mode'] = 'اختبار';
$string['login'] = 'تسجيل الدخول';
$string['login_failed'] = 'بيانات الاعتماد غير صحيحة. يرجى التحقق من اسم المستخدم وكلمة المرور.';
$string['login_success'] = 'تم الاتصال ببوابة kwtSMS بنجاح.';
$string['logout'] = 'تسجيل الخروج';
$string['logout_success'] = 'تم قطع الاتصال ببوابة kwtSMS.';
$string['low_balance_threshold'] = 'حد الرصيد المنخفض';
$string['low_balance_threshold_desc'] = 'إرسال تنبيه للمشرف عندما ينخفض الرصيد عن هذا الرقم. ضع 0 للتعطيل.';
$string['never_synced'] = 'أبداً';
$string['no_recent_activity'] = 'لا يوجد نشاط رسائل قصيرة حديث.';
$string['no_senderids'] = 'لا توجد معرّفات مرسل متاحة على هذا الحساب.';
$string['not_configured'] = 'غير مهيأ';
$string['pluginname'] = 'إشعارات kwtSMS';
$string['privacy:metadata:external'] = 'تُرسل أرقام الهواتف ومحتوى الرسائل إلى بوابة kwtSMS للتسليم.';
$string['privacy:metadata:external:message'] = 'محتوى الرسالة المرسل إلى البوابة.';
$string['privacy:metadata:external:phone'] = 'رقم هاتف المستلم المرسل إلى البوابة.';
$string['privacy:metadata:local_kwtsms_log'] = 'سجل الرسائل القصيرة المرسلة عبر بوابة kwtSMS.';
$string['privacy:metadata:local_kwtsms_log:message'] = 'محتوى الرسالة القصيرة.';
$string['privacy:metadata:local_kwtsms_log:recipient_phone'] = 'رقم الهاتف الذي أُرسلت إليه الرسالة.';
$string['privacy:metadata:local_kwtsms_log:timecreated'] = 'وقت إرسال الرسالة.';
$string['privacy:metadata:local_kwtsms_log:userid'] = 'معرّف المستخدم الذي أُرسلت إليه الرسالة.';
$string['recent_activity'] = 'النشاط الأخير';
$string['recipient_admin'] = 'مشرف';
$string['recipient_both'] = 'الاثنان';
$string['recipient_student'] = 'طالب';
$string['reload'] = 'تحديث';
$string['reload_success'] = 'تم تحديث بيانات البوابة بنجاح.';
$string['send_statistics'] = 'إحصائيات الإرسال';
$string['sender_id'] = 'معرّف المرسل';
$string['sent_month'] = 'أُرسلت هذا الشهر';
$string['sent_today'] = 'أُرسلت اليوم';
$string['sent_week'] = 'أُرسلت هذا الأسبوع';
$string['settings_general'] = 'الإعدادات العامة';
$string['settings_saved'] = 'تم حفظ الإعدادات بنجاح.';
$string['skip_country_not_covered'] = 'الدولة غير مغطاة';
$string['skip_empty_message'] = 'رسالة فارغة بعد التنظيف';
$string['skip_gateway_disabled'] = 'البوابة معطلة';
$string['skip_gateway_not_configured'] = 'البوابة غير مهيأة';
$string['skip_no_phone_number'] = 'لا يوجد رقم هاتف';
$string['skip_zero_balance'] = 'الرصيد صفر';
$string['status_failed'] = 'فشلت';
$string['status_queued'] = 'في الانتظار';
$string['status_sent'] = 'مُرسلة';
$string['status_skipped'] = 'تم تخطيها';
$string['student_notifications'] = 'إشعارات الطلاب';
$string['sync_now'] = 'مزامنة الآن';
$string['tab_dashboard'] = 'لوحة التحكم';
$string['tab_gateway'] = 'البوابة';
$string['tab_help'] = 'المساعدة';
$string['tab_integrations'] = 'التكاملات';
$string['tab_logs'] = 'السجلات';
$string['tab_settings'] = 'الإعدادات';
$string['tab_templates'] = 'القوالب';
$string['task_sync_gateway_data'] = 'مزامنة بيانات بوابة kwtSMS (الرصيد، معرّفات المرسل، التغطية)';
$string['template_actions'] = 'الإجراءات';
$string['template_char_count'] = 'الأحرف: {$a->chars} ({$a->pages} صفحة/صفحات رسالة)';
$string['template_edit'] = 'تعديل';
$string['template_event'] = 'الحدث';
$string['template_message_ar'] = 'الرسالة بالعربية';
$string['template_message_en'] = 'الرسالة بالإنجليزية';
$string['template_placeholders'] = 'المتغيرات المتاحة';
$string['template_preview'] = 'معاينة';
$string['template_recipient'] = 'المستلم';
$string['template_reset'] = 'إعادة تعيين للافتراضي';
$string['template_reset_confirm'] = 'إعادة تعيين هذا القالب للمحتوى الافتراضي؟ ستفقد تخصيصاتك.';
$string['template_reset_success'] = 'تمت إعادة تعيين القالب للافتراضي.';
$string['template_saved'] = 'تم حفظ القالب بنجاح.';
$string['test_mode'] = 'وضع الاختبار';
$string['test_mode_desc'] = 'عند التفعيل، تُرسل الرسائل إلى واجهة البرمجة مع test=1. لا تُسلّم الرسائل للهواتف. يمكن استرداد النقاط من قائمة الانتظار في kwtSMS.';
$string['test_mode_off'] = 'وضع الاختبار معطّل';
$string['test_mode_on'] = 'وضع الاختبار مفعّل';
