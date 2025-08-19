# QuickBox 仪表板翻译系统

本目录包含 QuickBox 仪表板模块化翻译系统的中文语言文件。本文档解释了翻译系统的结构、使用方法和贡献指南。

## 目录

- [QuickBox 仪表板翻译系统](#quickbox-仪表板翻译系统)
  - [目录](#目录)
  - [概述](#概述)
  - [目录结构](#目录结构)
  - [翻译文件](#翻译文件)
    - [文件结构](#文件结构)
    - [命名约定](#命名约定)
  - [添加新翻译](#添加新翻译)
  - [修改现有翻译](#修改现有翻译)
  - [翻译键](#翻译键)
    - [键结构](#键结构)
    - [键命名指南](#键命名指南)
  - [最佳实践](#最佳实践)
  - [贡献](#贡献)
    - [对于翻译者](#对于翻译者)
    - [对于开发者](#对于开发者)
  - [验证和测试](#验证和测试)
    - [验证脚本](#验证脚本)
    - [测试新翻译](#测试新翻译)
  - [故障排除](#故障排除)
    - [常见问题](#常见问题)
    - [获取帮助](#获取帮助)

## 概述

QuickBox 仪表板使用模块化翻译系统，将翻译按功能区域分离到逻辑文件中。这使得翻译系统比之前的整体方法更易于维护和使用。

## 目录结构

```bash
src/dashboard/lang/
├── zh-cn/                     # 英语语言文件
│   ├── buttons.php         # 按钮标签和操作
│   ├── dashboard.php       # 主仪表板界面元素
│   ├── errors.php          # 错误消息和验证
│   ├── help_manual.php     # 帮助文档和工具提示
│   ├── misc.php            # 杂项翻译
│   ├── navigation.php      # 导航菜单项
│   ├── pages.php           # 页面特定翻译
│   ├── popup.php           # 弹出对话框消息
│   ├── settings.php        # 设置页面翻译
│   ├── system.php          # 系统相关消息
│   ├── user_management.php # 用户管理界面
│   ├── widgets.php         # 仪表板小部件内容
│   └── README.md           # 此文件
├── __testing__/            # 测试和验证脚本
├── lang_zh-cn.php             # 主英语翻译
└── lang_zh-cn_override.php    # 翻译覆盖
```

## 翻译文件

### 文件结构

每个翻译文件应返回一个关联数组，其中：
- 键是翻译键（使用 UPPER_SNAKE_CASE）
- 值是翻译后的字符串

示例（`buttons.php`）：

```php
<?php
/**
 * 按钮标签和操作
 * 
 * 此文件包含整个仪表板中使用的按钮和操作元素的翻译。
 */

return [
    'SAVE' => '保存',
    'CANCEL' => '取消',
    'EDIT' => '编辑',
    'DELETE' => '删除',
    'SUBMIT' => '提交',
    'RESET' => '重置',
    'CLOSE' => '关闭',
    'BACK' => '返回',
    'NEXT' => '下一步',
    'CONFIRM' => '确认',
    'DISMISS' => '驳回',
    'ENABLE' => '启用',
    'DISABLE' => '禁用',
    'UPDATE' => '更新',
    'REMOVE' => '移除',
    'ADD' => '添加',
    'SEARCH' => '搜索',
    'FILTER' => '筛选',
    'SORT' => '排序',
    'MORE' => '更多',
    'LESS' => '更少',
    'APPLY' => '应用',
    'CLEAR' => '清除',
    'UPLOAD' => '上传',
    'DOWNLOAD' => '下载',
    'PREVIEW' => '预览',
    'SELECT' => '选择',
    'VIEW_DETAILS' => '查看详情',
    'MANAGE' => '管理',
    'CONFIGURE' => '配置',
    'SETTINGS' => '设置',
    'PREFERENCES' => '首选项',
    'ADVANCED' => '高级',
    'LOADING' => '加载中...',
    'PROCESSING' => '处理中...',
    'PLEASE_WAIT' => '请稍候...',
    'SUCCESS' => '成功！',
    'ERROR' => '错误！',
    'WARNING' => '警告！',
    'INFO' => '信息',
    'HELP' => '帮助'
];
```

### 命名约定

1. **文件名**：使用小写字母和下划线（例如：`user_management.php`）
2. **翻译键**：使用 UPPER_SNAKE_CASE（例如：`USERNAME_REQUIRED`）
3. **注释**：在每个文件顶部包含 PHPDoc 块，并为复杂翻译添加注释

## 添加新翻译

1. **选择适当的文件**基于翻译的目的
2. **添加新翻译**并带有描述性键
3. **添加注释**如果需要上下文
4. **更新 README**如果您要添加新类别

示例：

```php
// 在适当的文件中（例如：user_management.php）
return [
    // ... 现有翻译 ...
    'TWO_FACTOR_AUTH' => '双因素认证',
    'TWO_FACTOR_AUTH_DESCRIPTION' => '为您的账户添加额外的安全层',
];
```

## 修改现有翻译

1. **找到键**在适当的文件中
2. **更新值**同时保持相同的键
3. **更新任何相关文档**如果含义已更改

## 翻译键

### 键结构

翻译键遵循以下模式：

- `NOUN_VERB`：`USER_CREATED`、`PASSWORD_CHANGED`
- `NOUN_DESCRIPTION`：`ACCOUNT_SETTINGS_DESCRIPTION`
- `NOUN_LABEL`：`USERNAME_LABEL`
- `NOUN_PLACEHOLDER`：`SEARCH_PLACEHOLDER`
- `NOUN_TOOLTIP`：`API_KEY_TOOLTIP`
- `ERROR_NOUN_VERB`：`ERROR_USER_NOT_FOUND`
- `SUCCESS_NOUN_VERB`：`SUCCESS_USER_CREATED`

### 键命名指南

1. 描述性但要简洁
2. 将相关键分组在一起
3. 使用一致的术语
4. 避免缩写，除非被广泛理解

## 最佳实践

1. **一致性**：使用一致的术语和风格
2. **上下文**：为模糊术语提供上下文
3. **变量**：对动态内容使用 `{variable}` 语法
4. **HTML**：仅在必要时包含最少的 HTML
5. **长度**：保持翻译简洁
6. **注释**：为复杂或模糊的翻译添加注释

## 贡献

### 对于翻译者

1. **Fork** 仓库
2. **创建分支**用于您的翻译
3. **提交拉取请求**包含您的更改
4. **在您的 PR 中引用任何相关问题**

### 对于开发者

1. **将新翻译添加**到适当的模块
2. **更新测试**如果需要
3. **在提交 PR 之前运行验证**
4. **在 PR 描述中记录更改**

## 验证和测试

### 验证脚本

运行验证脚本检查问题：

```bash
php src/dashboard/lang/__testing__/validate_translations.php
```

### 测试新翻译

1. 如果启用了 opcache，请清除它
2. 测试所有受影响的 UI 元素
3. 验证动态内容替换
4. 检查正确的转义

## 故障排除

### 常见问题

1. **缺少翻译**：检查正确的文件和键
2. **损坏的 HTML**：验证所有标签都正确关闭
3. **变量不匹配**：确保所有 `{variables}` 在翻译之间匹配
4. **缓存问题**：清除浏览器缓存和 PHP opcache

### 获取帮助

如果您遇到问题：
1. 检查现有问题是否有类似问题
2. 查阅 QuickBox 文档
3. 打开新问题并详细描述问题

---

本文档是 QuickBox 仪表板翻译系统的一部分。
