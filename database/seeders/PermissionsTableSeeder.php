<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 24,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 25,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 26,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 27,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 28,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 29,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 30,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 31,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 32,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 33,
                'title' => 'asset_create',
            ],
            [
                'id'    => 34,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 35,
                'title' => 'asset_show',
            ],
            [
                'id'    => 36,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 37,
                'title' => 'asset_access',
            ],
            [
                'id'    => 38,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 39,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 40,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 41,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 42,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 43,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 44,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 45,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 46,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 47,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 48,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 49,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 50,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 51,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 52,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 53,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 54,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 55,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 56,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 57,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 58,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 59,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 60,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 61,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 62,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 63,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 64,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 65,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 66,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 67,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 68,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 69,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 70,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 71,
                'title' => 'product_create',
            ],
            [
                'id'    => 72,
                'title' => 'product_edit',
            ],
            [
                'id'    => 73,
                'title' => 'product_show',
            ],
            [
                'id'    => 74,
                'title' => 'product_delete',
            ],
            [
                'id'    => 75,
                'title' => 'product_access',
            ],
            [
                'id'    => 76,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 77,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 78,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 79,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 80,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 81,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 82,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 83,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 84,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 85,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 86,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 87,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 88,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 89,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 90,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 91,
                'title' => 'task_create',
            ],
            [
                'id'    => 92,
                'title' => 'task_edit',
            ],
            [
                'id'    => 93,
                'title' => 'task_show',
            ],
            [
                'id'    => 94,
                'title' => 'task_delete',
            ],
            [
                'id'    => 95,
                'title' => 'task_access',
            ],
            [
                'id'    => 96,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 97,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 98,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 99,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 100,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 101,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 102,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 103,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 104,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 105,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 106,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 107,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 108,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 109,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 110,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 111,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 112,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 113,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 114,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 115,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 116,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 117,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 118,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 119,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 120,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 121,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 122,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 123,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 124,
                'title' => 'expense_create',
            ],
            [
                'id'    => 125,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 126,
                'title' => 'expense_show',
            ],
            [
                'id'    => 127,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 128,
                'title' => 'expense_access',
            ],
            [
                'id'    => 129,
                'title' => 'income_create',
            ],
            [
                'id'    => 130,
                'title' => 'income_edit',
            ],
            [
                'id'    => 131,
                'title' => 'income_show',
            ],
            [
                'id'    => 132,
                'title' => 'income_delete',
            ],
            [
                'id'    => 133,
                'title' => 'income_access',
            ],
            [
                'id'    => 134,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 135,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 136,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 137,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 138,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 139,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 140,
                'title' => 'currency_create',
            ],
            [
                'id'    => 141,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 142,
                'title' => 'currency_show',
            ],
            [
                'id'    => 143,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 144,
                'title' => 'currency_access',
            ],
            [
                'id'    => 145,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 146,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 147,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 148,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 149,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 150,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 151,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 152,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 153,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 154,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 155,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 156,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 157,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 158,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 159,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 160,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 161,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 162,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 163,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 164,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 165,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 166,
                'title' => 'client_create',
            ],
            [
                'id'    => 167,
                'title' => 'client_edit',
            ],
            [
                'id'    => 168,
                'title' => 'client_show',
            ],
            [
                'id'    => 169,
                'title' => 'client_delete',
            ],
            [
                'id'    => 170,
                'title' => 'client_access',
            ],
            [
                'id'    => 171,
                'title' => 'project_create',
            ],
            [
                'id'    => 172,
                'title' => 'project_edit',
            ],
            [
                'id'    => 173,
                'title' => 'project_show',
            ],
            [
                'id'    => 174,
                'title' => 'project_delete',
            ],
            [
                'id'    => 175,
                'title' => 'project_access',
            ],
            [
                'id'    => 176,
                'title' => 'note_create',
            ],
            [
                'id'    => 177,
                'title' => 'note_edit',
            ],
            [
                'id'    => 178,
                'title' => 'note_show',
            ],
            [
                'id'    => 179,
                'title' => 'note_delete',
            ],
            [
                'id'    => 180,
                'title' => 'note_access',
            ],
            [
                'id'    => 181,
                'title' => 'document_create',
            ],
            [
                'id'    => 182,
                'title' => 'document_edit',
            ],
            [
                'id'    => 183,
                'title' => 'document_show',
            ],
            [
                'id'    => 184,
                'title' => 'document_delete',
            ],
            [
                'id'    => 185,
                'title' => 'document_access',
            ],
            [
                'id'    => 186,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 187,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 188,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 189,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 190,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 191,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 192,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 193,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 194,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 195,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 196,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 197,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 198,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 199,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 200,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 201,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 202,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 203,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 204,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 205,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 206,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 207,
                'title' => 'course_create',
            ],
            [
                'id'    => 208,
                'title' => 'course_edit',
            ],
            [
                'id'    => 209,
                'title' => 'course_show',
            ],
            [
                'id'    => 210,
                'title' => 'course_delete',
            ],
            [
                'id'    => 211,
                'title' => 'course_access',
            ],
            [
                'id'    => 212,
                'title' => 'lesson_create',
            ],
            [
                'id'    => 213,
                'title' => 'lesson_edit',
            ],
            [
                'id'    => 214,
                'title' => 'lesson_show',
            ],
            [
                'id'    => 215,
                'title' => 'lesson_delete',
            ],
            [
                'id'    => 216,
                'title' => 'lesson_access',
            ],
            [
                'id'    => 217,
                'title' => 'test_create',
            ],
            [
                'id'    => 218,
                'title' => 'test_edit',
            ],
            [
                'id'    => 219,
                'title' => 'test_show',
            ],
            [
                'id'    => 220,
                'title' => 'test_delete',
            ],
            [
                'id'    => 221,
                'title' => 'test_access',
            ],
            [
                'id'    => 222,
                'title' => 'question_create',
            ],
            [
                'id'    => 223,
                'title' => 'question_edit',
            ],
            [
                'id'    => 224,
                'title' => 'question_show',
            ],
            [
                'id'    => 225,
                'title' => 'question_delete',
            ],
            [
                'id'    => 226,
                'title' => 'question_access',
            ],
            [
                'id'    => 227,
                'title' => 'question_option_create',
            ],
            [
                'id'    => 228,
                'title' => 'question_option_edit',
            ],
            [
                'id'    => 229,
                'title' => 'question_option_show',
            ],
            [
                'id'    => 230,
                'title' => 'question_option_delete',
            ],
            [
                'id'    => 231,
                'title' => 'question_option_access',
            ],
            [
                'id'    => 232,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 233,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 234,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 235,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 236,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 237,
                'title' => 'test_answer_create',
            ],
            [
                'id'    => 238,
                'title' => 'test_answer_edit',
            ],
            [
                'id'    => 239,
                'title' => 'test_answer_show',
            ],
            [
                'id'    => 240,
                'title' => 'test_answer_delete',
            ],
            [
                'id'    => 241,
                'title' => 'test_answer_access',
            ],
            [
                'id'    => 242,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 243,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 244,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 245,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 246,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 247,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 248,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 249,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 250,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 251,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 252,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 253,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 254,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 255,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 256,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 257,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 258,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 259,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 260,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 261,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 262,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 263,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 264,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 265,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 266,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 267,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 268,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 269,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 270,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 271,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 272,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 273,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 274,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 275,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 276,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
