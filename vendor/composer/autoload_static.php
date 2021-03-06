<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcafc142c70bc3be54c46272ec35402b3
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'src\\gracestore\\config\\Config' => __DIR__ . '/../..' . '/src/gracestore/config/config.php',
        'src\\gracestore\\controller\\Admin' => __DIR__ . '/../..' . '/src/gracestore/controller/Admin.php',
        'src\\gracestore\\controller\\Auth' => __DIR__ . '/../..' . '/src/gracestore/controller/api/Auth.php',
        'src\\gracestore\\controller\\Home' => __DIR__ . '/../..' . '/src/gracestore/controller/Home.php',
        'src\\gracestore\\controller\\Store' => __DIR__ . '/../..' . '/src/gracestore/controller/Store.php',
        'src\\gracestore\\controller\\StoreAdminReq' => __DIR__ . '/../..' . '/src/gracestore/controller/api/StoreAdminReq.php',
        'src\\gracestore\\controller\\StoreUserReq' => __DIR__ . '/../..' . '/src/gracestore/controller/api/StoreUserReq.php',
        'src\\gracestore\\middleware\\ValidateStoreDashboardPerimeter' => __DIR__ . '/../..' . '/src/gracestore/middleware/ValidateStoreDashboardPerimeter.php',
        'src\\gracestore\\middleware\\ValidateUserAsAdmin' => __DIR__ . '/../..' . '/src/gracestore/middleware/ValidateUserAsAdmin.php',
        'src\\gracestore\\migration\\add_desc_field_to_product' => __DIR__ . '/../..' . '/src/gracestore/migration/2020-01-22-1579661952$add_desc_field_to_product.php',
        'src\\gracestore\\migration\\add_fields_to_product' => __DIR__ . '/../..' . '/src/gracestore/migration/2020-01-22-1579661793$add_fields_to_product.php',
        'src\\gracestore\\migration\\add_is_admin_field_to_user' => __DIR__ . '/../..' . '/src/gracestore/migration/2020-01-19-1579450993$add_is_admin_field_to_user.php',
        'src\\gracestore\\migration\\add_netprice_field_to_cart' => __DIR__ . '/../..' . '/src/gracestore/migration/2020-01-22-1579667890$add_netprice_field_to_cart.php',
        'src\\gracestore\\migration\\create_category_table' => __DIR__ . '/../..' . '/src/gracestore/migration/2020-01-18-1579353829$create_category_table.php',
        'src\\gracestore\\migration\\create_salessheet_table' => __DIR__ . '/../..' . '/src/gracestore/migration/2020-01-18-1579354422$create_salessheet_table.php',
        'src\\gracestore\\migration\\create_table_table' => __DIR__ . '/../..' . '/src/gracestore/migration/2020-01-18-1579353839$create_table_table.php',
        'src\\gracestore\\migration\\create_user_table' => __DIR__ . '/../..' . '/src/gracestore/migration/2020-01-18-1579353800$create_user_table.php',
        'src\\gracestore\\migration\\rename_order_tab_to_cart' => __DIR__ . '/../..' . '/src/gracestore/migration/2020-01-22-1579666696$rename_order_tab_to_cart.php',
        'src\\gracestore\\model\\Cart' => __DIR__ . '/../..' . '/src/gracestore/model/Cart.php',
        'src\\gracestore\\model\\Category' => __DIR__ . '/../..' . '/src/gracestore/model/Category.php',
        'src\\gracestore\\model\\Product' => __DIR__ . '/../..' . '/src/gracestore/model/Product.php',
        'src\\gracestore\\model\\User' => __DIR__ . '/../..' . '/src/gracestore/model/User.php',
        'src\\gracestore\\route\\Api' => __DIR__ . '/../..' . '/src/gracestore/route/Api.php',
        'src\\gracestore\\route\\Web' => __DIR__ . '/../..' . '/src/gracestore/route/Web.php',
        'src\\gracestore\\service\\TemplateDataProvider' => __DIR__ . '/../..' . '/src/gracestore/service/TemplateDataProvider.php',
        'src\\gracestore\\service\\UserAuthSvc' => __DIR__ . '/../..' . '/src/gracestore/service/UserAuthSvc.php',
        'src\\gracestore\\service\\UserNotification' => __DIR__ . '/../..' . '/src/gracestore/service/UserNotification.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcafc142c70bc3be54c46272ec35402b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcafc142c70bc3be54c46272ec35402b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcafc142c70bc3be54c46272ec35402b3::$classMap;

        }, null, ClassLoader::class);
    }
}
