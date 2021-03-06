<?php

/** 
 * This file is part of the miniCMS package.
 * (c) since 2005 SARUULBAT Amarsaikhan <a.saruulbat@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

js_set_loadfile('/assets/flatlab/admin/assets/fuelux/js/spinner.min.js', 91);
js_set_loadfile('/assets/flatlab/admin/assets/bootstrap-fileupload/bootstrap-fileupload.js', 92);
js_set_loadfile('/assets/flatlab/admin/assets/jquery-multi-select/js/jquery.multi-select.js', 93);
js_set_loadfile('/assets/flatlab/admin/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js', 94);
//js_set_loadfile('/assets/flatlab/admin/js/advanced-form-components.js', 94);

css_set_loadfile('/assets/flatlab/admin/assets/jquery-multi-select/css/multi-select.css', 91);
css_set_loadfile('/assets/flatlab/admin/assets/bootstrap-fileupload/bootstrap-fileupload.css', 92);
css_set_loadfile('/assets/flatlab/admin/assets/bootstrap-datetimepicker/css/datetimepicker.css', 93);
//js_set_loadfile('/assets/flatlab/admin/');
$form = new F\Form\OptionForm('option', array(
    'action' => get_url('admin_option_save'),
    'class' => 'form-horizontal',
    'role' => 'form',
    'method' => 'post',
    'enctype' => 'multipart/form-data'
        ));

$template->set('form', $form->form);
$session->clearKey('option');