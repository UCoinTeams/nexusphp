<?php

return [
    'name' => 'Name',
    'email' => 'Email',
    'image' => 'Image',
    'expire_at' => 'Expire at',
    'username' => 'User',
    'status' => 'Status',
    'enabled' => 'Enabled',
    'disabled' => 'Disabled',
    'created_at' => 'Created at',
    'updated_at' => 'Updated at',
    'begin' => 'Begin time',
    'end' => 'End time',
    'uploaded' => 'Uploaded',
    'downloaded' => 'Downloaded',
    'ratio' => 'Share ratio',
    'seed_time_required' => 'Seed time required',
    'inspect_time_left' => 'Inspect time left',
    'added' => 'Add time',
    'last_access' => 'Last access time',
    'priority' => 'Priority',
    'comment' => 'Comment',
    'duration' => 'Duration',
    'description' => 'Description',
    'price' => 'Price',
    'setting' => [
        'nav_text' => 'Setting',
        'backup' => [
            'tab_header' => 'Backup',
            'enabled' => 'Enabled',
            'enabled_help' => 'Enable backup or not',
            'frequency' => 'Frequency',
            'frequency_help' => 'Backup frequency',
            'hour' => 'Hour',
            'hour_help' => 'Do backup at this hour',
            'minute' => 'Minute',
            'minute_help' => "The backup is performed at the minute of the previous hour. If the frequency is pressed 'hourly', this value will be ignored",
            'google_drive_client_id' => 'Google Drive client ID',
            'google_drive_client_secret' => 'Google Drive client secret',
            'google_drive_refresh_token' => 'Google Drive refresh token',
            'google_drive_folder_id' => 'Google Drive folder ID',
            'via_ftp' => 'Backup via FTP',
            'via_ftp_help' => 'Whether to save via FTP. If so, add the configuration information to the .env file, refer to <a href="https://laravel.com/docs/master/filesystem#ftp-driver-configuration">Laravel doc</a>',
            'via_sftp' => 'Backup via SFTP',
            'via_sftp_help' => 'Whether to save via FTP. If so, add the configuration information to the .env file, refer to <a href="https://laravel.com/docs/master/filesystem#sftp-driver-configuration">Laravel doc</a>',
        ],
        'hr' => [
            'tab_header' => 'H&R',
            'mode' => 'Mode',
            'inspect_time' => 'Inspect time',
            'inspect_time_help' => 'The duration of the examination is calculated from the completion of the download, in hours',
            'seed_time_minimum' => 'Seed time minimum',
            'seed_time_minimum_help' => 'The shortest time to do the seeds to meet the standard, in hours, must be less than the length of the expedition',
            'ignore_when_ratio_reach' => 'Achievement Sharing Rate',
            'ignore_when_ratio_reach_help' => 'The minimum sharing rate to meet the standard',
            'ban_user_when_counts_reach' => 'H&R counts limit',
            'ban_user_when_counts_reach_help' => 'The number of H&R reaches this value and the account will be disabled',
        ]
    ],
    'user' => [
        'label' => 'User',
        'uploaded' => 'Uploaded',
        'downloaded' => 'Downloaded',
        'invites' => 'Invites',
        'seedbonus' => 'Bonus',
        'attendance_card' => 'Attendance ard',
        'class' => 'Class',
        'status' => 'Status',
        'enabled' => 'Enabled',
        'username' => 'Username',
        'invite_by' => 'Inviter',
        'two_step_authentication' => 'Two-step authentication',
        'seed_points' => 'Seed points',
    ],
    'medal' => [
        'label' => 'Medal',
        'image_large' => 'Image large',
        'image_small' => 'Image small',
        'get_type' => 'Get type',
        'duration' => 'Duration',
        'duration_help' => 'Unit: days. If left blank, the user has permanent possession',
    ],
    'exam' => [
        'label' => 'Exam',
        'is_done' => 'Is done',
        'is_discovered' => 'Discovered',
        'register_time_range' => [
            'begin' => 'Register time begin',
            'end' => 'Register time end',
        ],
        'donated' => 'Donated',
        'index_formatted' => 'Exam indexes',
        'filter_formatted' => 'Target users',
        'section_base_info' => 'Base info',
        'priority_help' => 'The higher the value, the higher the priority, and when multiple exam match the same user, the one with the highest priority is assigned.',
        'section_time' => 'Time',
        'duration_help' => 'Unit: days. When assign to user, begin and end are used if they are specified. Otherwise begin time is the time at assignment, and the end time is the time at assignment plus the duration.',
        'section_target_user' => 'Target user',
        'index_required_value' => 'Require value',
        'index_required_label' => 'Index',
        'index_placeholder' => 'Upload/Download increment in GB and seed time average in hour',
        'index_current_value' => 'Current value',
        'index_result' => 'Result',
    ],
    'exam_user' => [
        'is_done' => 'Is done',
    ],
    'torrent' => [
        'label' => 'Torrent',
        'owner' => 'Owner',
        'size' => 'Size',
        'ttl' => 'TTL',
        'seeders' => 'Seeders',
        'leechers' => 'Leechers',
        'times_completed' => 'Complete',
        'category' => 'Category',
        'approval_status' => 'Approval status',
        'pos_state' => 'Pos state',
        'sp_state' => 'Promotion',
    ],
    'hit_and_run' => [

    ],
    'tag' => [
        'label' => 'Tag',
        'color' => 'Background color',
        'font_color' => 'Font color',
        'font_size' => 'Font size',
        'margin' => 'Margin',
        'padding' => 'Padding',
        'border_radius' => 'Border radius',
    ],
    'agent_allow' => [
        'family' => 'Family',
        'start_name' => 'Start name',
        'peer_id_start' => 'Peer ID start',
        'peer_id_pattern' => 'Peer ID pattern',
        'peer_id_matchtype' => 'Peer ID match type',
        'peer_id_match_num' => 'Peer ID match num',
        'agent_start' => 'Agent start',
        'agent_pattern' => 'Agent pattern',
        'agent_matchtype' => 'Agent match type',
        'agent_match_num' => 'Agent match num',
        'exception' => 'Exception',
        'allowhttps' => 'Allow https',
    ],
    'agent_deny' => [
        'peer_id' => 'Peer ID',
        'agent' => 'Agent',
    ],
    'claim' => [
        'last_settle_at' => 'Last settle at',
        'seed_time_this_month' => 'St. this month',
        'uploaded_this_month' => 'Up. this month',
        'is_reached_this_month' => 'Reached',
    ],
];
