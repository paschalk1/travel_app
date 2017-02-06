<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 13:26:16
         compiled from "C:\xampp\htdocs\Travel\system\views\auth\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1971058986b68986bc0-92212431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c81ee768dda54b1b2d1e321549db62a725c49f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Travel\\system\\views\\auth\\main.tpl',
      1 => 1486298417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1971058986b68986bc0-92212431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
    'cdn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58986b68a0a616_98422052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58986b68a0a616_98422052')) {function content_58986b68a0a616_98422052($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("includes/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body>
    <?php echo $_smarty_tpl->getSubTemplate ("shared/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section class="banner" id="home">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 wow fadeInLeft animated">
                    <h3>Welcome to UN Travel Plan</h3>
                    <h1>Simply designed to make project creation and addition of travel plans seamless</h1>
                    <p></p>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['links']->value['auth']['user_login_page'];?>
" class="btn btn-primary btn-lg" style="width: 120px;">User</a>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['links']->value['auth']['super_login_page'];?>
" class="btn btn-primary btn-lg" style="width: 120px;">Supervisor</a>
                </div>
                <div class="col-xs-6 banner-img wow fadeInRight animated">
                    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
img/un_member_states.JPG" alt="UN LARGE IMAGE LOGO">
                    
                </div>
            </div>
        </div>
    </section>
    
    <!-- about data here -->
    <section class="features text-center" id="about">
        <div class="container">
            <div class="row">
                <h3>System Overview</h3>
                <p>
                    Lorem ipsum dolor sit amet, qui ad mundi dolorum contentiones, mea eu porro qualisque. Nostro ceteros eu qui, id habeo posse legimus nec, mel tantas platonem ad. Mel dicam nonumy ne, te ius vero quaeque torquatos. Sea et alii postea definitiones, assentior prodesset honestatis pro ne. Cum ei mucius labore concludaturque, quem soleat forensibus quo at. Clita facilis efficiendi ne pri, an nonumes invenire intellegebat eos.

Et vidit adhuc detraxit cum, pro duis atqui aperiri cu. Sit te aeque harum eruditi, sed ut meis commodo conceptam, id eius prima cum. Aliquando cotidieque pri ne. Eam ea modo idque.

Vel ne voluptua percipit deterruisset. Vide maiorum ancillae eu ius. Mea ea nostro qualisque percipitur. Maiorum urbanitas eu eos, quo hinc impedit eu, ius no vero equidem.

Mei ex accusam mediocrem persequeris. Graece omnium nam eu. Impetus rationibus vis ad. In possit menandri mel, ad senserit elaboraret cotidieque cum. Nobis vocent nec no, explicari consequuntur in eum. Vis vidisse delicata ei, mel at vocent commune accusamus, sed magna fabulas adipiscing ex.

Vix ei denique liberavisse, ne lucilius evertitur has. An has nisl fugit, pro erat vitae efficiantur eu, eam affert nemore repudiare ut. Dicunt utamur evertitur ea eam. Habeo libris viderer at vim, copiosae suscipiantur id quo. Usu noster fierent eu, ex cum periculis vituperata, quot deseruisse dissentiunt et quo.
                </p>
            </div>
        </div>
    </section>
    
    <section class="details text-center" id="features">
        <div class="container">
            <div class="row">
                <h3>Notable Features</h3>
                <p>
                   Lorem ipsum dolor sit amet, qui ad mundi dolorum contentiones, mea eu porro qualisque. Nostro ceteros eu qui, id habeo posse legimus nec, mel tantas platonem ad. Mel dicam nonumy ne, te ius vero quaeque torquatos. Sea et alii postea definitiones, assentior prodesset honestatis pro ne. Cum ei mucius labore concludaturque, quem soleat forensibus quo at. Clita facilis efficiendi ne pri, an nonumes invenire intellegebat eos.

Et vidit adhuc detraxit cum, pro duis atqui aperiri cu. Sit te aeque harum eruditi, sed ut meis commodo conceptam, id eius prima cum. Aliquando cotidieque pri ne. Eam ea modo idque.

Vel ne voluptua percipit deterruisset. Vide maiorum ancillae eu ius. Mea ea nostro qualisque percipitur. Maiorum urbanitas eu eos, quo hinc impedit eu, ius no vero equidem.

Mei ex accusam mediocrem persequeris. Graece omnium nam eu. Impetus rationibus vis ad. In possit menandri mel, ad senserit elaboraret cotidieque cum. Nobis vocent nec no, explicari consequuntur in eum. Vis vidisse delicata ei, mel at vocent commune accusamus, sed magna fabulas adipiscing ex.

Vix ei denique liberavisse, ne lucilius evertitur has. An has nisl fugit, pro erat vitae efficiantur eu, eam affert nemore repudiare ut. Dicunt utamur evertitur ea eam. Habeo libris viderer at vim, copiosae suscipiantur id quo. Usu noster fierent eu, ex cum periculis vituperata, quot deseruisse dissentiunt et quo.
                </p>
            </div>
        </div>
    </section>
    <?php echo $_smarty_tpl->getSubTemplate ("shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <?php echo $_smarty_tpl->getSubTemplate ("includes/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
