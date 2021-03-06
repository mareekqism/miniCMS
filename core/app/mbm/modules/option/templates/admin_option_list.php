<?php if (has_flash()): ?>
    <div class="col-lg-12">
        <?php echo render_flash(); ?>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-lg-6">
        <header class="panel-heading">
            <?php echo __("Options"); ?>
        </header>
    </div>
    <div class="col-lg-6 text-right">
        <button type="button" class="btn btn-round btn-success" onclick="window.location = '<?php echo get_url('admin_option_new'); ?>'">
            <i class="fa fa-plus-circle"></i> <?php echo __('Add option'); ?>
        </button>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="contentList">
                        <thead>
                            <tr>
                                <th><?php echo __('ID'); ?></th>
                                <th><?php echo __('Code'); ?></th>
                                <th><?php echo __('Option title'); ?></th>
                                <th><?php echo __('Option type'); ?></th>
                                <th><?php echo __('Form tag'); ?></th>
                                <th><?php echo __('Module'); ?></th>
                                <th><?php echo __('Username'); ?></th>
                                <th><?php echo __('Status'); ?></th>
                                <th><?php echo __('Created date'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($options as $option): ?>
                                <tr>
                                    <td><?php echo $option->id; ?>.</td>
                                    <td><?php echo $option->code; ?></td>
                                    <td>
                                        <strong><?php echo $option->title; ?></strong>
                                        <p><?php echo $option->descr; ?></p>
                                    </td>
                                    <td><?php echo $option->group_name; ?></td>
                                    <td><?php echo $option->form_tag; ?></td>
                                    <td><?php echo $option->module; ?></td>
                                    <td><?php echo \User::getById($option->user_id)->username; ?></td>
                                    <td><?php echo printSt($option->st); ?></td>
                                    <td><?php echo icon_date('createdDate', $option->date_created) . ' ' . $option->date_created; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th><?php echo __('Code'); ?></th>
                                <th><?php echo __('Option title'); ?></th>
                                <th><?php echo __('Option type'); ?></th>
                                <th><?php echo __('Form tag'); ?></th>
                                <th><?php echo __('Module'); ?></th>
                                <th><?php echo __('Username'); ?></th>
                                <th><?php echo __('Status'); ?></th>
                                <th><?php echo __('Created date'); ?></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

<script type="text/javascript" charset="utf-8">
    jQuery(document).ready(function() {
        $('#contentList').dataTable({
            'bSort': false
        });
    });
</script>