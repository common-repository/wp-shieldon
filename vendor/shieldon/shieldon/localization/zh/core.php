<?php
// phpcs:disable Generic.Files.LineLength

return [
    'deny_title' => '禁止連線',
    'deny_heading' => '禁止連線',
    'deny_message' => '您的IP位址已被封鎖。',
    'limit_title' => '請排隊',
    'limit_heading' => '請排隊',
    'limit_message' => '這個網站正限制在線瀏覽人數。請稍候。',
    'stop_title' => '請解決 CAPTCHA 驗證',
    'stop_heading' => '偵測到不尋常的行為',
    'stop_message' => '請完成 CAPTCHA 驗證確認您是人類。',
    'stop_submit' => '送出',
    'credit' => '這個網站由 {0} 開源專案防護。',
    'lineup_info' => '排在您之前的人數：{0}',
    'online_info' => '線上人數：{0}',
    'keepalive_info' => '在進入後，每位使用者有 {0} 秒鐘的時間可以檢視這個頁面。',

    // @since 0.1.7
    'messenger_text_ip' => 'IP',
    'messenger_text_rdns' => 'RDNS',
    'messenger_text_time' => '時間',
    'messenger_text_timezone' => '時區',
    'messenger_text_cpu' => 'CPU 使用量',
    'messenger_text_memory' => '記憶體使用量',
    'messenger_text_reason' => '理由',
    'messenger_text_system' => '系統狀態',
    'messenger_text_reason_code_1' => '太多工作階段。',
    'messenger_text_reason_code_2' => '太多連線。',
    'messenger_text_reason_code_3' => '無法建立 JS Cookie。',
    'messenger_text_reason_code_4' => '空的來源網址。',
    'messenger_text_reason_code_11' => '達到每日限制。',
    'messenger_text_reason_code_12' => '達到每小時限制。',
    'messenger_text_reason_code_13' => '達到每分限制。',
    'messenger_text_reason_code_14' => '達到每秒限制。',
    'messenger_text_handle' => '處置',
    'messenger_text_handle_type_1' => '這個 IP 已經在當前的資料週期被永久封鎖，直到重設資料週期為止。',
    'messenger_text_handle_type_2' => '這個 IP 已經被放到 iptables 防火牆的 DROP 列表，直到伺服器重開機為止。',
];
