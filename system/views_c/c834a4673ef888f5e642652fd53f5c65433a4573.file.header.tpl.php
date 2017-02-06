<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 13:26:17
         compiled from "C:\xampp\htdocs\Travel\system\views\shared\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:805358986b691f6e49-99245239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c834a4673ef888f5e642652fd53f5c65433a4573' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Travel\\system\\views\\shared\\header.tpl',
      1 => 1486257720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '805358986b691f6e49-99245239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ss_d' => 0,
    'cdn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58986b692016e3_07258803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58986b692016e3_07258803')) {function content_58986b692016e3_07258803($_smarty_tpl) {?><header class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default">
                    <div class="container-fluid nav-bar">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="travel-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['ss_d']->value;?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
img/travel_logo.png" alt="Travel Planner" class="logo">
                            </a>
                        </div>
                            <div class="collapse navbar-collapse" id="travel-navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#features">Features</a></li>
                                </ul>
                            </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header><?php }} ?>
