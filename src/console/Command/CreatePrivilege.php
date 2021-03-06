<?php
use Core\Service\Meta\Privilege as MetaPrivilegeService;

/**
 * @author QiangYu
 *
 *  创建权限组
 *
 */

class CreatePrivilege implements \Clip\Command
{

    public function run(array $params)
    {

        printLog('Begin CreatePrivilege', 'CreatePrivilege');

        $metaPrivilegeService = new MetaPrivilegeService();

        // 商品管理权限
        $privilegeGroup = $metaPrivilegeService->savePrivilegeGroup('manage_goods', '商品管理', '管理网站的所有商品');
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_goods_create',
            '新建商品',
            '创建一个新商品'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_goods_search',
            '查看商品列表',
            '查看商品列表'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_goods_edit_edit_get',
            '商品编辑-查看',
            '查看商品编辑的内容'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_goods_edit_edit_post',
            '商品编辑-保存',
            '保存商品编辑的内容'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_goods_attrgroup_listattrgroup',
            '查看商品类型列表',
            '查看商品类型列表'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_goods_attrgroup_create',
            '新建商品类型',
            '新建商品类型'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_goods_attrgroup_edit',
            '编辑商品类型',
            '编辑商品类型'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_goods_category_edit',
            '编辑商品分类',
            '编辑商品分类'
        );

        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_goods_comment_listcomment',
            '查看用户评价列表',
            '查看用户评价列表'
        );

        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_goods_comment_edit',
            '编辑用户评价',
            '编辑用户评价'
        );

        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_goods_comment_create',
            '新建用户评价',
            '新建用户评价'
        );

        // 订单管理权限
        $privilegeGroup = $metaPrivilegeService->savePrivilegeGroup('manage_order', '订单管理', '管理网站的订单');
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_order_search',
            '查看订单列表',
            '查看订单列表'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_order_detail',
            '查看订单详情',
            '查看订单详情'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_order_markpay',
            '订单标记付款',
            '手动设置订单状态为已经付款'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_goods_search',
            '查看售出商品列表',
            '查看售出商品列表'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_goods_detail',
            '查看售出商品详情',
            '查看售出商品详情'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_goods_update_set_extra_discount',
            '商品额外优惠',
            '售出商品给顾客额外优惠'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_goods_update_set_suppliers_price',
            '商品修改供货价',
            '售出商品订单单独修改供货价'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_goods_update_set_shipping_no',
            '设置快递信息',
            '设置售出商品的快递信息'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_goods_update_set_memo',
            '售出商品备注',
            '对售出商品增加备注信息'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_goods_update_set_refund',
            '商品申请退款',
            '对售出商品申请退款'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_goods_update_set_extra_refund',
            '商品额外退款',
            '对售出商品操作额外退款'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_refund_search',
            '查看商品退款',
            '查看商品退款列表'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_refund_confirm',
            '确认商品退款',
            '确认商品退款'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_excel_download',
            '批量下载订单',
            '批量下载订单'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_excel_upload',
            '批量上传快递',
            '批量上传快递单号'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_statistics_listgoods',
            '查看商品销售排行',
            '查看商品的销售排行'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_settle',
            '订单结算',
            '对订单做结算操作'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_settle_listsettle',
            '查看结算历史',
            '查看订单结算历史'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_settle_listordergoods',
            '查看结算明细',
            '查看订单结算明细'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_settle_ajaxdetail',
            '查看结算详情',
            '查看订单结算详情'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_order_settle_update',
            '修改结算详情',
            '修改订单结算详情'
        );

        // 文章管理
        $privilegeGroup = $metaPrivilegeService->savePrivilegeGroup('manage_article', '文章管理', '管理网站的文章');
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_article_article_edit',
            '编辑文章',
            '编辑文章内容'
        );

        // 账号管理权限
        $privilegeGroup = $metaPrivilegeService->savePrivilegeGroup('manage_account', '账号管理', '管理网站的各种账号');
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_supplier_create',
            '新建供货商',
            '新建供货商账号'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_supplier_listuser',
            '查看供货商列表',
            '查看供货商列表'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_supplier_edit_get',
            '查看供货商详情',
            '查看供货商详情'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_supplier_edit_post',
            '修改供货商详情',
            '修改供货商详情'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_supplier_edit_change_account_password',
            '修改供货商密码',
            '修改供货商的登陆账号、登陆密码'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_admin_create',
            '新建管理员',
            '新建管理员账号'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_admin_listuser',
            '查看管理员列表',
            '查看管理员列表'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_admin_edit_get',
            '查看管理员详情',
            '查看管理员详情'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_admin_edit_post',
            '修改管理员详情',
            '修改管理员详情'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_admin_edit_change_account_password',
            '修改管理员密码',
            '修改管理员的登陆账号、登陆密码'
        );

        // 用户管理权限
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_user_search',
            '查看用户列表',
            '查看用户列表'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_user_charge',
            '给用户充值',
            '给用户充值'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_user_money',
            '查看用户资金',
            '查看用户资金变动明细'
        );

        // 给其它用户授权的权限
        $privilegeGroup = $metaPrivilegeService->savePrivilegeGroup('manage_privilege_grant', '用户授权', '给其他用户授权');
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_admin_privilege_get',
            '查看管理员权限',
            '查看管理员拥有的权限'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_admin_privilege_post',
            '修改管理员权限',
            '修改管理员拥有的权限'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_role_listrole',
            '查看角色列表',
            '查看角色列表'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_role_create',
            '创建角色',
            '创建角色，比如客服角色'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_role_edit_get',
            '查询角色详情',
            '查询角色详情'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_role_edit_post',
            '修改角色详情',
            '修改角色详情'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_role_privilege_get',
            '查看角色权限',
            '查看用户角色拥有的权限'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_account_role_privilege_post',
            '修改角色权限',
            '修改用户角色拥有的权限'
        );

        // 杂项设置
        $privilegeGroup = $metaPrivilegeService->savePrivilegeGroup('manage_misc', '杂项设置', '网站杂七杂八的其它设置');
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_misc_cache',
            '缓存管理',
            '管理系统的各种缓存数据'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_misc_express_edit',
            '编辑快递公司',
            '编辑快递公司的信息'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_misc_cron',
            '定时任务',
            '管理系统的定时任务'
        );

        // 数据统计
        $privilegeGroup = $metaPrivilegeService->savePrivilegeGroup('manage_stat', '数据统计', '网站的各种数据统计');
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_stat_order_refer_get',
            '来源渠道统计',
            '订单来源渠道的利润统计'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_stat_order_refer_download',
            '来源渠道订单下载',
            '根据来源渠道下载订单'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_stat_kaohe_kefu',
            '查看客服考核',
            '查看所有客服的考核业绩'
        );

        // 插件管理
        $privilegeGroup = $metaPrivilegeService->savePrivilegeGroup('manage_plugin', '插件主题', '插件和系统主题的管理');
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_plugin_plugin_installplugin',
            '插件安装',
            '给系统安装新的插件'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_plugin_plugin_uninstallplugin',
            '插件卸载',
            '卸载系统已经安装的插件'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_plugin_plugin_activateplugin',
            '启用插件',
            '启用系统已经安装的插件'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_plugin_plugin_deactivateplugin',
            '停用插件',
            '停用系统已经安装的插件'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_plugin_plugin_configure',
            '配置插件',
            '调用插件的配置功能'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_plugin_theme_installtheme',
            '主题安装',
            '给系统安装新的主题'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_plugin_theme_uninstalltheme',
            '主题卸载',
            '卸载系统已经安装的主题'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_plugin_theme_activatetheme',
            '启用主题',
            '启用系统已经安装的主题'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_plugin_theme_configure',
            '配置主题',
            '调用主题的配置功能'
        );
        $metaPrivilegeService->savePrivilegeItem(
            $privilegeGroup['meta_id'],
            'manage_plugin_theme_adv_configure',
            '广告设置',
            '设置主题的广告位置'
        );

        printLog('Finish CreatePrivilege', 'CreatePrivilege');
    }

    public function help()
    {
        echo "Create Privilege Data\r\n";
    }
}
