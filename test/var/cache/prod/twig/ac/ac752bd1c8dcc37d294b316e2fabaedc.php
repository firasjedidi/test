<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__ef20eeb8422387cb439004053a98a910 */
class __TwigTemplate_49b824bdb2d74d6001c11e35ae91a42c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/test/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/test/img/app_icon.png\" />

<title>Positions • Test-Shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesPositions';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.0.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '58ee225d26d38de8f2976fb0cc8323dc';
    var token_admin_orders = tokenAdminOrders = '8485f432fccfef5650f4b62b9fdc6502';
    var token_admin_customers = '1bdce56de1f9b64c38482ec96e6d8612';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '33745aa61dfcec6db56273a0790e88e2';
    var currentIndex = 'index.php?controller=AdminModulesPositions';
    var employee_token = 'c36dd3351c32c2f0c2752e424cc0fceb';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/test/admin733iexp5jhh9rqu6fvd/index.php/improve/modules/manage?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q';
    var admin_notification_get_link = '/test/admin733iexp5jhh9rqu6fvd/index.php/common/notifications?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwuddu";
        // line 42
        echo "iDwbkiS4Q';
    var admin_notification_push_link = adminNotificationPushLink = '/test/admin733iexp5jhh9rqu6fvd/index.php/common/notifications/ack?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/test/admin733iexp5jhh9rqu6fvd/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/test/admin733iexp5jhh9rqu6fvd/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/test/admin733iexp5jhh9rqu6fvd/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/test\\/admin733iexp5jhh9rqu6fvd\\/\";
var baseDir = \"\\/test\\/\";
var changeFormLanguageUrl = \"\\/test\\/admin733iexp5jhh9rqu6fvd\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";";
        // line 69
        echo "\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/test/admin733iexp5jhh9rqu6fvd/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/test/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/test/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/test/js/admin.js?v=8.0.2\"></script>
<script type=\"text/javascript\" src=\"/test/admin733iexp5jhh9rqu6fvd/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/test/js/tools.js?v=8.0.2\"></script>
<script type=\"text/javascript\" src=\"/test/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/test/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/test/admin733iexp5jhh9rqu6fvd/themes/default/js/vendor/nv.d3.min.js\"></script>

  

";
        // line 87
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminmodulespositions\"
  data-base-url=\"/test/admin733iexp5jhh9rqu6fvd/index.php\"  data-token=\"oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminDashboard&amp;token=b64d23f078c4d0a813f03e283c750cc0\"></a>
      <span id=\"shop_version\">8.0.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3304736a5ee02c6b79172e0a47e5887a\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php/improve/modules/manage?token=fa4dc5bb069ffedc41448bcbc8662755\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php/sell/catalog/categories/new?token=fa4dc5bb069ffedc41448bcbc8662755\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php/sell/catalog/products/new?token=fa4dc5bb069ffedc41448bcbc8662755\"
                 data-item=\"New product\"
  ";
        // line 123
        echo "    >New product</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ae383606832df21edf03da4757693c46\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php/sell/orders?token=fa4dc5bb069ffedc41448bcbc8662755\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"120\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/modules/positions\"
        data-post-link=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminQuickAccesses&token=cee75148cfcb0645ad7a246f9ebf18db\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Positions - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminQuickAccesses&token=cee75148cfcb0645ad7a246f9ebf18db\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminSearch&amp;token=4c6c063a1dd06a5007f43a97137943a3\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
 ";
        // line 163
        echo "   <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value";
        // line 178
        echo "=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3304736a5ee02c6b79172e0a47e5887a\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php/improve/modules/manage?token=fa4dc5bb069ffedc41448bcbc8662755\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php/sell/catalog/categories/new?token=fa4dc5bb069ffedc41448bcbc8662755\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php/sell/catalog/products/new?token=fa4dc5bb069ffedc41448bcbc8662755\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ae383606832df21edf03da4757693c46\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
  ";
        // line 218
        echo "     href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php/sell/orders?token=fa4dc5bb069ffedc41448bcbc8662755\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"135\"
      data-icon=\"icon-AdminParentThemes\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/modules/positions\"
      data-post-link=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminQuickAccesses&token=cee75148cfcb0645ad7a246f9ebf18db\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Positions - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminQuickAccesses&token=cee75148cfcb0645ad7a246f9ebf18db\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/test/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my shop</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div c";
        // line 264
        echo "lass=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your &lt;strong&gt;&lt;a href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=01b279ba3b1c60ce3b8845252772b14d\"&gt;abandoned carts&lt;/a&gt;&lt;/strong&gt;?&lt;br&gt;Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
       ";
        // line 314
        echo "     <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/test/img/pr/default.jpg\" alt=\"Firas";
        // line 364
        echo "\" /></span>
        <span class=\"employee_profile\">Welcome back Firas</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/advanced/employees/1/edit?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminLogin&amp;logout=1&amp;token=887e7d4a1fccdc73d7f80eea10e9af1a\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/advanced/employees/toggle-navigation?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminDashboard&amp;token=b64d23f078c4d0a813f03e283c750cc0\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.2</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminDashboard&amp;token=b64d23f078c4d0a813f03e283c750cc0\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
          ";
        // line 412
        echo "            
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/orders/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/orders/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/test/admin733iexp5jhh9rq";
        // line 447
        echo "u6fvd/index.php/sell/orders/invoices/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/orders/credit-slips/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/orders/delivery-slips/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminCarts&amp;token=01b279ba3b1c60ce3b8845252772b14d\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
  ";
        // line 479
        echo "                                                    
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/catalog/products?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/catalog/products?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/catalog/categories?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
  ";
        // line 509
        echo "                            
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/catalog/monitoring/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminAttributesGroups&amp;token=7fcee09d5abf3e4a14c792b5dc2934f3\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/catalog/brands/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/attachments/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudd";
        // line 536
        echo "uiDwbkiS4Q\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminCartRules&amp;token=ae383606832df21edf03da4757693c46\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/stocks/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/customers/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                      ";
        // line 569
        echo "                                              keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/customers/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/addresses/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminCustomerThreads&amp;token=33745aa61dfcec6db56273a0790e88e2\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                    ";
        // line 598
        echo "  <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminCustomerThreads&amp;token=33745aa61dfcec6db56273a0790e88e2\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/sell/customer-service/order-messages/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminReturn&amp;token=5c5d6d85d8a51c226caf6d1d1e906e84\"";
        // line 626
        echo " class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminStats&amp;token=3304736a5ee02c6b79172e0a47e5887a\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/modules/manage?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
           ";
        // line 667
        echo "                                         <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/modules/manage?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/design/themes/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                          ";
        // line 695
        echo "  </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/design/themes/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/design/mail_theme/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/design/cms-pages/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
       ";
        // line 725
        echo "                         <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/design/modules/positions/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminImages&amp;token=4d32d564ea0d8ce277c28d99351e2ff2\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/modules/link-widget/list?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminCarriers&amp;token=1c6972f051e780a9f08398ece67ebf68\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
   ";
        // line 755
        echo "                   Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminCarriers&amp;token=1c6972f051e780a9f08398ece67ebf68\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/shipping/preferences/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/payment/payment_methods?_token=oN3JhWx4TF";
        // line 785
        echo "R37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/payment/payment_methods?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/payment/preferences?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-";
        // line 817
        echo "submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/international/localization/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/international/localization/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/international/zones/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                 ";
        // line 846
        echo "                           
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/international/taxes/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/international/translations/settings?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/shop/preferences/preferences?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"";
        // line 882
        echo "material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/shop/preferences/preferences?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/shop/order-preferences/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/shop/product-preferences/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Product Settings
                                </a>
                              </li>

                         ";
        // line 911
        echo "                                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/shop/customer-preferences/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/shop/contacts/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/shop/seo-urls/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index";
        // line 939
        echo ".php?controller=AdminSearchConf&amp;token=7bd5702c0ba331b84f240c9e0ebd0f12\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/advanced/system-information/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/advanced/system-information/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                        ";
        // line 970
        echo "                    
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/advanced/performance/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/advanced/administration/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/advanced/emails/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/advanced/import/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Import
                                </a>
                              ";
        // line 998
        echo "</li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/advanced/employees/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/advanced/sql-requests/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/advanced/logs/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/advanced";
        // line 1028
        echo "/webservice-keys/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/advanced/feature-flags/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/configure/advanced/security/?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Design</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/test/admin733iexp5jhh9rqu6fvd/index.php/improve/design/modules/positions/?_token=oN3JhW";
        // line 1068
        echo "x4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\" aria-current=\"page\">Positions</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Positions          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-save\"
                  href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminModulesPositions&amp;addToHook=&amp;token=58ee225d26d38de8f2976fb0cc8323dc\"                  title=\"Transplant a module\"                >
                                    Transplant a module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/test/admin733iexp5jhh9rqu6fvd/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModulesPositions%253Fversion%253D8.0.2%2526country%253Den/Help?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-conf";
        // line 1117
        echo "iguration-save\"
              href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminModulesPositions&amp;addToHook=&amp;token=58ee225d26d38de8f2976fb0cc8323dc\"              title=\"Transplant a module\"            >
              Transplant a module
                          </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/test/admin733iexp5jhh9rqu6fvd/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModulesPositions%253Fversion%253D8.0.2%2526country%253Den/Help?_token=oN3JhWx4TFR37rweNYZDgUuKzkXdgwudduiDwbkiS4Q\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1147
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/test/admin733iexp5jhh9rqu6fvd/index.php?controller=AdminDashboard&amp;token=b64d23f078c4d0a813f03e283c750cc0\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1181
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 87
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1147
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1181
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__ef20eeb8422387cb439004053a98a910";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1344 => 1181,  1323 => 1147,  1312 => 87,  1303 => 1181,  1263 => 1147,  1231 => 1117,  1180 => 1068,  1138 => 1028,  1106 => 998,  1076 => 970,  1043 => 939,  1013 => 911,  982 => 882,  944 => 846,  913 => 817,  879 => 785,  847 => 755,  815 => 725,  783 => 695,  753 => 667,  710 => 626,  680 => 598,  649 => 569,  614 => 536,  585 => 509,  553 => 479,  519 => 447,  482 => 412,  432 => 364,  380 => 314,  328 => 264,  280 => 218,  238 => 178,  221 => 163,  179 => 123,  138 => 87,  118 => 69,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ef20eeb8422387cb439004053a98a910", "");
    }
}
