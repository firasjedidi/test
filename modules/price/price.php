<?php

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
if (!defined('_PS_VERSION_')) {
    exit;
}

class Price extends Module implements WidgetInterface
{
    
    public function __construct()
    {
        $this->name = 'price';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'firas';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.0.0',
            'max' => '8.99.99',
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('price');
        $this->description = $this->l('price');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MYMODULE_NAME')) {
            $this->warning = $this->l('No name provided');
        }
       
    }
    public $product_price = "";
    public function install()
    {
        return parent::install() && 
        $this->registerHook('registerGDPRConsent') && 
        $this->dbInstall() ;
    }
    public function uninstall()
    {
        return parent::uninstall();
    }
    public function dbInstall()
    {
       return true;
    }
    // public function hookdisplayFooter($params)
    // {
    //     return $this->display(__FILE__, 'views/templates/hook/footer.tpl');
    // }
    public function renderWidget($hookName = null, array $configuration = []){
        $this->context->smarty->assign($this->getWidgetVariables($hookName,$configuration));
        return $this->fetch('module:price/views/templates/hook/footer.tpl');
    }

    public function getWidgetVariables($hookName = null, array $configuration = []){
        return;
    }
    public function getContent()
    {
        $output = null;
        if (Tools::isSubmit('submit'.$this->name)) {
            if(!empty( Tools::getValue('product_id')) && !empty(Tools::getValue('product_price'))){
                $demo_product_id = (int) Tools::getValue('product_id');
                $newPrice = (float)Tools::getValue('product_price');
                $product = new Product($demo_product_id, false, $this->context->language->id, $this->context->shop->id);
                $product->price = $newPrice;
                $product->save();
                $output .= $this->displayConfirmation($this->l('Updated'));
            }
          
        }
        return   $output.$this->form();
    }
    public function form()
    {
        
        $id_lang=(int)Context::getContext()->language->id;
        $start=0;
        $limit=100;
        $order_by='id_product';
        $order_way='ASC';
        $id_category = false; 
        $only_active =true;
        $context = null;
        $all_products = Product::getProducts($id_lang, $start, $limit, $order_by, $order_way, $id_category,$only_active , $context);
        $options = array();

        foreach ( $all_products as $product) {
            $options[]  = array(
                'id' => $product['id_product'],
                'name' => $product['name'],
                'price' =>  $product['price']
            );
        
        }
       $this->product_price =  $options[0]['price'] ;
        $fields_form[0]['form'] = [
            'legend' => [
                'title' => $this->trans('update price'),
                'icon'  => 'icon-cogs',
            ],
            'input' => [
                'product_select' => [
                    'type' => 'select',
                    'label' => $this->l('Demo Products'),
                    'name' => 'id_product',
                    'options' =>  [
                        'query' => $options,
                        'id' => 'id',
                        'name' => 'name',
                    ],
                    'desc' => $this->l('Please select a product'),
                    'required' => true,
                ],
                'product_price' => array(
                    'type' => 'text',
                    'label' => $this->l('Product Price'),
                    'name' => 'product_price',
                    'size' => 20,
                    'required' => true,
                    'desc' => $this->l('Enter the new price for the selected product'),
                )
            ],
            'submit' => [
                'title' => $this->trans('Save'),
                'class' => 'btn btn-primary pull-right',
            ],
        ];
        $helper = new HelperForm();
        $helper->module = $this;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->name_controller = $this->name;
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
        $helper->module = $this;
        
        $lang = Configuration::get('PS_LANG_DEFAULT');
        $helper->default_form_language = $lang;
        $helper->allow_employee_form_lang =$lang;
        
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll= true;
        $helper->submit_action = 'submit' .  $this->name;
        $helper->toolbar_btn = [
            'save' =>[
               'desc' =>$this->l('Save'),
                'href'=> AdminController::$currentIndex . '&configure=' . $this->name .'&save'.$this->name.
                 '&token=' . Tools::getAdminTokenLite('AdminModules')
            ],
            'back' =>[
                'desc' =>$this->l('back'),
                'href'=> AdminController::$currentIndex . '&token=' . Tools::getAdminTokenLite('AdminModules')
            ]
        ];

        $product = new Product(isset($_POST['product_price']) && $_POST['product_price']);
        $this->product_price = $product->price;
        $helper->fields_value['product_price'] =   $this->product_price  ;
        $helper->fields_value['id_product'] = $options; 
        return $helper->generateForm($fields_form);
    }
}
