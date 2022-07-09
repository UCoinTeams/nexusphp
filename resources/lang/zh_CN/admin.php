<?php

return [
    'sidebar' => [
        'exam_users' => '用户考核',
        'hit_and_runs' => '用户 H&R',
        'users_list' => '用户列表',
        'tags_list' => '标签',
        'agent_allows' => '允许客户端',
        'agent_denies' => '拒绝客户端',
        'exams_list' => '考核',
        'medals_list' => '勋章',
        'settings' => '设置',
        'users_medals' => '用户勋章',
        'claims' => '用户认领',
        'torrent_list' => '种子',
        'torrent_state' => '全站优惠',
    ],
    'resources' => [
        'agent_allow' => [
            'check_modal_btn' => '检测',
            'check_modal_header' => '检测客户端是否被允许',
            'check_pass_msg' => '恭喜，此客户端被规则 :id 通过！',
        ],
        'user' => [
            'actions' => [
                'enable_modal_btn' => '启用',
                'enable_modal_title' => '启用用户',
                'enable_disable_reason' => '原因',
                'enable_disable_reason_placeholder' => '可选',
                'disable_modal_btn' => '禁用',
                'disable_modal_title' => '禁用用户',
                'disable_two_step_authentication' => '取消两步登录验证',
                'change_bonus_etc_btn' => '修改上传量等',
                'change_bonus_etc_action_increment' => '增加',
                'change_bonus_etc_action_decrement' => '减少',
                'change_bonus_etc_field_label' => '类别',
                'change_bonus_etc_action_label' => '动作',
                'change_bonus_etc_value_label' => '数量',
                'change_bonus_etc_value_help' => '如果类别是上传量/下载量，单位为：GB',
                'change_bonus_etc_reason_label' => '原因',
                'reset_password_btn' => '重置密码',
                'reset_password_label' => '新密码',
                'reset_password_confirmation_label' => '确认新密码',
                'assign_exam_btn' => '分配考核',
                'assign_exam_exam_label' => '选择考核',
                'assign_exam_begin_label' => '开始时间',
                'assign_exam_end_label' => '结束时间',
                'assign_exam_end_help' => '如果不指定开始/结束时间，将使用考核本身设定的时间范围',
                'grant_medal_btn' => '授予勋章',
                'grant_medal_medal_label' => '选择勋章',
                'grant_medal_duration_label' => '有效时长',
                'grant_medal_duration_help' => '单位：天。如果留空，用户永久拥有',
                'confirm_btn' => '确认',
            ]
        ],
        'exam_user' => [
            'bulk_action_avoid_label' => '批量免除',
            'action_avoid' => '免除',
            'result_passed' => '通过！',
            'result_not_passed' => '未通过！',
        ],
        'exam' => [
            'index_duplicate' => '指标：:index 重复！',
        ],
        'hit_and_run' => [
            'bulk_action_pardon' => '批量免罪',
            'action_pardon' => '免罪',
        ],
        'torrent' => [
            'bulk_action_pos_state' => '置顶',
            'bulk_action_remove_tag' => '清除标签',
            'bulk_action_attach_tag' => '设置标签',
            'action_approval' => '审核',
        ],
    ]
];
