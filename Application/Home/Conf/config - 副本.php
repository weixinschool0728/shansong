<?php

return array(
//'配置项'=>'配置值'
//URL配置

    'URL_CASE_INSENSITIVE' => true, // 默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL' => 1, // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE 模式); 3 (兼容模式) 默认为PATHINFO 模式
    'URL_PATHINFO_DEPR' => '/', // PATHINFO模式下，各参数之间的分割符号
    'URL_PATHINFO_FETCH' => 'ORIG_PATH_INFO,REDIRECT_PATH_INFO,REDIRECT_URL', // 用于兼容判断PATH_INFO 参数的SERVER替代变量列表
    'URL_REQUEST_URI' => 'REQUEST_URI', // 获取当前页面地址的系统变量 默认为REQUEST_URI'URL_HTML_SUFFIX' => 'html', // URL伪静态后缀设置
    'URL_DENY_SUFFIX' => 'ico|png|gif|jpg', // URL禁止访问的后缀设置
    'URL_PARAMS_BIND' => true, // URL变量绑定到Action方法参数
    'URL_PARAMS_BIND_TYPE' => 0, // URL变量绑定的类型 0 按变量名绑定 1 按变量顺序绑定
    'URL_404_REDIRECT' => '', // 404 跳转页面 部署模式有效
    'URL_ROUTER_ON' => false, // 是否开启URL路由
    'URL_ROUTE_RULES' => array(), // 默认路由规则 针对模块
    'URL_MAP_RULES' => array(), // URL映射定义规则
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'model_init', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => 'asd123321', // 密码
    'DB_PORT' => '3306', // 端口
    'DB_PREFIX' => 'm_', // 数据库表前缀
//模板文件配置

'TMPL_CONTENT_TYPE' => 'text/html', // 默认模板输出类型
'TMPL_ACTION_ERROR' => THINK_PATH.'Tpl/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
'TMPL_ACTION_SUCCESS' => THINK_PATH.'Tpl/dispatch_jump.tpl', // 默认成功跳转对应的模板文件
'TMPL_EXCEPTION_FILE' => THINK_PATH.'Tpl/think_exception.tpl',// 异常页面的模板文件
'TMPL_DETECT_THEME' => TRUE, // 自动侦测模板主题 默认false 
    'DEFAULT_THEME'  => 'default',//模板路径
'TMPL_TEMPLATE_SUFFIX' => '.html', // 默认模板文件后缀
'TMPL_FILE_DEPR' => '/', //模板文件CONTROLLER_NAME与ACTION_NAME之间的分割符
'TMPL_ENGINE_TYPE' => 'Think', // 默认模板引擎 以下设置仅对使用Think模板引擎有效
'TMPL_CACHFILE_SUFFIX' => '.php', // 默认模板缓存后缀
'TMPL_DENY_FUNC_LIST' => 'echo,exit', // 模板引擎禁用函数
'TMPL_DENY_PHP' => false, // 默认模板引擎是否禁用PHP原生代码
'TMPL_L_DELIM' => '<{', // 模板引擎普通标签开始标记
'TMPL_R_DELIM' => '}>', // 模板引擎普通标签结束标记
'TMPL_VAR_IDENTIFY' => 'array', // 模板变量识别。留空自动判断,参数为'obj'则表示对象
'TMPL_STRIP_SPACE' => true, // 是否去除模板文件里面的html空格与换行
'TMPL_CACHE_ON' => true, // 是否开启模板编译缓存,设为false则每次都会重新编译
'TMPL_CACHE_PREFIX' => 'de', // 模板缓存前缀标识，可以动态改变 
'TMPL_CACHE_TIME' => 0, // 模板缓存有效期 0 为永久，(以数字为值，单位:秒)
'TMPL_LAYOUT_ITEM' => '{__CONTENT__}', // 布局模板的内容替换标识
'LAYOUT_ON' => false, // 是否启用布局
'LAYOUT_NAME' => 'layout', // 当前布局名称 默认为layout
    
    
    
    
    
    
    //采用Smarty模板
//    'TMPL_ENGINE_TYPE' => 'Smarty',
//    'TMPL_ENGINE_CONFIG' => array(
//        'plugins_dir' => './ThinkPHP/Library/Vendor/Smarty/Plugins/',
//    ),
    //data CACHE
    'DATA_CACHE_TIME' => 30, // 数据缓存有效期 0表示永久缓存
    'DATA_CACHE_COMPDATA_CACHE_CHECKRESS' => false, // 数据缓存是否压缩缓存
    'DATA_CACHE_CHECK' => false, // 数据缓存是否校验缓存
    'DATA_CACHE_PREFIX' => '', // 缓存前缀
    'DATA_CACHE_TYPE' => 'File', // 数据缓存类型,支持:File|Db|Apc|Memcache|Shmop|Sqlite|Xcache|Apachenote|Eaccelerator
    'DATA_CACHE_PATH' => TEMP_PATH, // 缓存路径设置 (仅对File方式缓存有效)
    'DATA_CACHE_SUBDIR' => false, // 使用子目录缓存 (自动根据缓存标识的哈希创建子目录)
    'DATA_PATH_LEVEL' => 1, // 子目录缓存级别
    'TMPL_PARSE_STRING' => array(//添加自己的模板变量规则
        "__PUBLIC_HOME__" => "/Public/Home",
        "__PUBLIC_ADMIN__" => "/Public/Admin",
        "__PUBLIC_COMMON__" => "/Public/Common",
    ),
//    "__HOME_CSS__"=>"./Public/Home/Css",
);
