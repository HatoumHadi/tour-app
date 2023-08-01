<?php

namespace Database\Seeders;

use App\Models\LanguageLine;
use Illuminate\Database\Seeder;

class LanguageLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LanguageLine::create([
            'group' => '',
            'key' => '',
            'text' => [
                'en' => '',
                'ar' => ''
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'home',
            'text' => [
                'en' => 'Home',
                'ar' => 'الصفحة الرئيسية'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'services',
            'text' => [
                'en' => 'Services',
                'ar' => 'خدمات'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'packages',
            'text' => [
                'en' => 'Packages',
                'ar' => 'رزم'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'adventures',
            'text' => [
                'en' => 'Adventures',
                'ar' => 'مغامرات'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'contact-us',
            'text' => [
                'en' => 'Contact us',
                'ar' => 'اتصل بنا'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'about-us',
            'text' => [
                'en' => 'About us',
                'ar' => 'معلومات عنا'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'login',
            'text' => [
                'en' => 'Login',
                'ar' => 'تسجيل الدخول'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'register',
            'text' => [
                'en' => 'Sign up',
                'ar' => 'إنشاء حساب'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'my-account',
            'text' => [
                'en' => 'My Account',
                'ar' => 'حسابي'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'profile',
            'text' => [
                'en' => 'Profile',
                'ar' => 'حساب تعريفي'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'logout',
            'text' => [
                'en' => 'Logout',
                'ar' => 'تسجيل خروج'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'requests.flight',
            'text' => [
                'en' => 'Flight request',
                'ar' => 'طلب رحلة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'requests.hotel-reservation',
            'text' => [
                'en' => 'Hotel reservation request',
                'ar' => 'طلب حجز فندقي'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'requests.visa',
            'text' => [
                'en' => 'Visa application request',
                'ar' => 'طلب تأشيرة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'requests.travel-insurance',
            'text' => [
                'en' => 'Travel insurance request',
                'ar' => 'طلب تأمين السفر'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'requests.travel-insurance',
            'text' => [
                'en' => 'Travel insurance request',
                'ar' => 'طلب تأمين السفر'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'title',
            'text' => [
                'en' => 'Explore the world together',
                'ar' => 'لنستكشف العالم معًا'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'subtitle',
            'text' => [
                'en' => 'Find awesome flights, hotel, tour, car, and packages',
                'ar' => 'ابحث عن رحلات طيران رائعة وفندق وجولة وسيارة وباقات'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'adventures-carousel-title',
            'text' => [
                'en' => 'Popular adventures',
                'ar' => 'مغامرات مشهورة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'view-package',
            'text' => [
                'en' => 'View package',
                'ar' => 'عرض الحزمة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'view-all',
            'text' => [
                'en' => 'View all',
                'ar' => 'عرض الكل'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'packages-carousel-title',
            'text' => [
                'en' => 'Featured packages',
                'ar' => 'حزم مميزة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'copyrights',
            'text' => [
                'en' => 'Copyright © 2023 All Rights Reserved',
                'ar' => 'حقوق الطبع والنشر © 2023 جميع الحقوق محفوظة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'footer.first-column.title',
            'text' => [
                'en' => 'Need any help?',
                'ar' => 'هل تحتاج الى مساعدة؟'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'footer.second-column.title',
            'text' => [
                'en' => 'Company',
                'ar' => 'شركة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'footer.third-column.title',
            'text' => [
                'en' => 'Support',
                'ar' => 'مساعدة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'footer.forth-column.title',
            'text' => [
                'en' => 'Top cities',
                'ar' => 'أفضل المدن'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'footer.first-column.first-label',
            'text' => [
                'en' => 'Call 24/7 for any help',
                'ar' => 'اتصل على مدار الساعة طوال أيام الأسبوع للحصول على أي مساعدة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'footer.first-column.second-label',
            'text' => [
                'en' => 'Mail to our support team',
                'ar' => 'أرسل بريدًا إلى فريق الدعم لدينا'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'footer.first-column.third-label',
            'text' => [
                'en' => 'Follow us on',
                'ar' => 'تابعنا على'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'footer.forth-column.first-label',
            'text' => [
                'en' => 'Chicago',
                'ar' => 'شيكاغو'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'footer.forth-column.second-label',
            'text' => [
                'en' => 'New York',
                'ar' => 'نيويورك'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'footer.forth-column.third-label',
            'text' => [
                'en' => 'San Francisco',
                'ar' => 'سان فرانسيسكو'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'footer.forth-column.forth-label',
            'text' => [
                'en' => 'California',
                'ar' => 'كاليفورنيا'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'footer.forth-column.fifth-label',
            'text' => [
                'en' => 'Ohio',
                'ar' => 'أوهايو'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'footer.forth-column.sixth-label',
            'text' => [
                'en' => 'Alaska',
                'ar' => 'ألاسكا'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'flights',
            'text' => [
                'en' => 'Flights',
                'ar' => 'الرحلات الجوية'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'hotel-reservation',
            'text' => [
                'en' => 'Hotel reservation',
                'ar' => 'حجز فندقي'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'visa',
            'text' => [
                'en' => 'Visa',
                'ar' => 'تأشيرة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'travel-insurance',
            'text' => [
                'en' => 'Travel insurance',
                'ar' => 'تأمين السفر'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'from',
            'text' => [
                'en' => 'From',
                'ar' => 'من'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'to',
            'text' => [
                'en' => 'To',
                'ar' => 'إلى'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'departure-time',
            'text' => [
                'en' => 'Departure time',
                'ar' => 'وقت المغادرة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'arrival-time',
            'text' => [
                'en' => 'Arrival time',
                'ar' => 'وقت الوصول'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'status',
            'text' => [
                'en' => 'Status',
                'ar' => 'الحالة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'select-status',
            'text' => [
                'en' => 'Select status',
                'ar' => 'حدد الحالة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'scheduled',
            'text' => [
                'en' => 'Scheduled',
                'ar' => 'مقرر'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'delayed',
            'text' => [
                'en' => 'Delayed',
                'ar' => 'متأخر'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'departed',
            'text' => [
                'en' => 'Departed',
                'ar' => 'غادرت'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'in-air',
            'text' => [
                'en' => 'In air',
                'ar' => 'في الجو'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'landed',
            'text' => [
                'en' => 'Landed',
                'ar' => 'هبطت'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'arrived',
            'text' => [
                'en' => 'Arrived',
                'ar' => 'وصل'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'cancelled',
            'text' => [
                'en' => 'Cancelled',
                'ar' => 'ألغيت'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'submit-request',
            'text' => [
                'en' => 'Submit request',
                'ar' => 'تقديم الطلب'
            ]
        ]);
        LanguageLine::create([
            'group' => 'validation',
            'key' => 'required',
            'text' => [
                'en' => 'The :attribute field is required.',
                'ar' => 'حقل :attribute مطلوب.'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'hotel-name',
            'text' => [
                'en' => 'Hotel name',
                'ar' => 'اسم الفندق'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'check-in',
            'text' => [
                'en' => 'Check in',
                'ar' => 'نزل في الفندق'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'check-in',
            'text' => [
                'en' => 'Check in',
                'ar' => 'نزل في الفندق'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'check-out',
            'text' => [
                'en' => 'Check out',
                'ar' => 'دفع ويغادر الفندق'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'number-of-guests',
            'text' => [
                'en' => '# Guests',
                'ar' => 'عدد الضيوف'
            ]
        ]);
        LanguageLine::create([
            'group' => 'validation',
            'key' => 'date',
            'text' => [
                'en' => 'The :attribute field must be a valid date.',
                'ar' => 'يجب أن يكون حقل :attribute تاريخًا صالحًا.'
            ]
        ]);
        LanguageLine::create([
            'group' => 'validation',
            'key' => 'enum',
            'text' => [
                'en' => 'The selected :attribute is invalid.',
                'ar' => ':attribute المحدد/ة غير صالح/ة.'
            ]
        ]);
        LanguageLine::create([
            'group' => 'validation',
            'key' => 'before',
            'text' => [
                'en' => 'The :attribute field must be a date before :date.',
                'ar' => 'يجب أن يكون حقل :attribute تاريخًا قبل :date.'
            ]
        ]);
        LanguageLine::create([
            'group' => 'validation',
            'key' => 'after',
            'text' => [
                'en' => 'The :attribute field must be a date after :date.',
                'ar' => 'يجب أن يكون حقل :attribute تاريخًا بعد :date.'
            ]
        ]);
        LanguageLine::create([
            'group' => 'validation',
            'key' => 'numeric',
            'text' => [
                'en' => 'The :attribute field must be a number.',
                'ar' => 'يجب أن يكون حقل :attribute رقمًا.'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'passport-number',
            'text' => [
                'en' => 'Passport no.',
                'ar' => 'رقم جواز السفر'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'visa-country',
            'text' => [
                'en' => 'Visa country',
                'ar' => 'بلد التأشيرة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'nationality-country',
            'text' => [
                'en' => 'Nationality country',
                'ar' => 'بلد الجنسية'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'application-date',
            'text' => [
                'en' => 'Application date',
                'ar' => 'تاريخ التقديم'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'select-country',
            'text' => [
                'en' => 'Select country',
                'ar' => 'حدد الدولة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'wait-list',
            'text' => [
                'en' => 'Wait list',
                'ar' => 'قائمة الانتظار'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'confirmed',
            'text' => [
                'en' => 'Confirmed',
                'ar' => 'مؤكد'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'valid',
            'text' => [
                'en' => 'Valid',
                'ar' => 'صالح'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'approved',
            'text' => [
                'en' => 'Approved',
                'ar' => 'موافق'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'expired',
            'text' => [
                'en' => 'Expired',
                'ar' => 'منتهي الصلاحية'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'denied',
            'text' => [
                'en' => 'Denied',
                'ar' => 'مرفوض'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'overstay',
            'text' => [
                'en' => 'Overstay',
                'ar' => 'تجاوز'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'pending',
            'text' => [
                'en' => 'Pending',
                'ar' => 'قيد الانتظار'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'revoked',
            'text' => [
                'en' => 'Revoked',
                'ar' => 'منقوض'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'plan-name',
            'text' => [
                'en' => 'Plan name',
                'ar' => 'إسم البرنامج'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'policy-number',
            'text' => [
                'en' => 'Policy number',
                'ar' => 'رقم البوليصة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'coverage-start-date',
            'text' => [
                'en' => 'Coverage start date',
                'ar' => 'تاريخ بدء التغطية'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'coverage-end-date',
            'text' => [
                'en' => 'Coverage end date',
                'ar' => 'تاريخ انتهاء التغطية'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'insurance-company',
            'text' => [
                'en' => 'Insurance company',
                'ar' => 'شركة تأمين'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'contact-us-title',
            'text' => [
                'en' => 'Do you have any query? Contact with us to get any support.',
                'ar' => 'هل لديك أي استفسار؟ تواصل معنا للحصول على أي دعم.'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'contact-us-subtitle',
            'text' => [
                'en' => 'Leave us a message',
                'ar' => 'اترك لنا رسالة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'first-name',
            'text' => [
                'en' => 'First name',
                'ar' => 'الاسم الأول'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'last-name',
            'text' => [
                'en' => 'Last name',
                'ar' => 'اسم العائلة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'email',
            'text' => [
                'en' => 'Email',
                'ar' => 'بريد إلكتروني'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'optional',
            'text' => [
                'en' => 'Optional',
                'ar' => 'بريد إلكتروني'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'mobile-number',
            'text' => [
                'en' => 'Mobile number',
                'ar' => 'رقم الهاتف المحمول'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'message',
            'text' => [
                'en' => 'Message',
                'ar' => 'رسالة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'send-message',
            'text' => [
                'en' => 'Send message',
                'ar' => 'إرسال رسالة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'contact-details',
            'text' => [
                'en' => 'Contact details',
                'ar' => 'تفاصيل الاتصال'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'help-line',
            'text' => [
                'en' => 'Help line',
                'ar' => 'خط المساعدة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'support-mail',
            'text' => [
                'en' => 'Support mail',
                'ar' => 'دعم البريد'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'contact-hours',
            'text' => [
                'en' => 'Contact hours',
                'ar' => 'ساعات الاتصال'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'contact-hours-value',
            'text' => [
                'en' => 'Mon-Sun : 24 hours',
                'ar' => 'من الإثنين إلى الأحد: 24 ساعة'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'flight-request-successful',
            'text' => [
                'en' => 'Flight request submitted successfully',
                'ar' => 'تم تقديم طلب الطيران بنجاح'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'submitted-successfully',
            'text' => [
                'en' => 'Submitted successfully',
                'ar' => 'تم تقديم طلب الطيران بنجاح'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'hotel-reservation-request-successful',
            'text' => [
                'en' => 'Hotel reservation request submitted successfully',
                'ar' => 'تم إرسال طلب حجز الفندق بنجاح'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'travel-insurance-request-successful',
            'text' => [
                'en' => 'Travel insurance request submitted successfully',
                'ar' => 'تم تقديم طلب تأمين السفر بنجاح'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'visa-request-successful',
            'text' => [
                'en' => 'Visa application request submitted successfully',
                'ar' => 'تم تقديم طلب التأشيرة بنجاح'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'please-register',
            'text' => [
                'en' => 'Please register to submit request',
                'ar' => 'الرجاء التسجيل لتقديم الطلب'
            ]
        ]);
        LanguageLine::create([
            'group' => 'translations',
            'key' => 'please-choose-valid-language',
            'text' => [
                'en' => 'Please change to a known language.',
                'ar' => 'الرجاء التغيير إلى لغة معروفة.'
            ]
        ]);

    }
}
