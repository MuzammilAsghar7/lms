<?php $__env->startSection('page-title',''); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <?php echo $__env->make('admin.partials.crumb',[
    'crumbs'=>[
            route('admin.dashboard')=>__('default.dashboard'),
            route('admin.survey.index')=>__lang('surveys'),
            '#'=>isset($pageTitle)?$pageTitle:''
        ]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
    <div >
        <div class="card">

            <div class="card-body">

                <form method="post" action="<?php echo e(adminUrl(array('controller'=>'survey','action'=>$action,'id'=>$id))); ?>">
<?php echo csrf_field(); ?>

                <div class="form-group">
                    <?php echo e(formLabel($form->get('name'))); ?>

                    <?php echo e(formElement($form->get('name'))); ?>   <p class="help-block"><?php echo e(formElementErrors($form->get('name'))); ?></p>

                </div>
                <div class="form-group">
                    <?php echo e(formLabel($form->get('description'))); ?>

                    <?php echo e(formElement($form->get('description'))); ?>   <p class="help-block"><?php echo e(formElementErrors($form->get('description'))); ?></p>

                </div>


                <div class="form-group">
                    <?php echo e(formLabel($form->get('enabled'))); ?>

                    <?php echo e(formElement($form->get('enabled'))); ?>   <p class="help-block"><?php echo e(formElementErrors($form->get('enabled'))); ?></p>

                </div>

                <div class="form-group">
                    <?php echo e(formLabel($form->get('private'))); ?>

                    <?php echo e(formElement($form->get('private'))); ?>   <p class="help-block"><?php echo e(formElementErrors($form->get('private'))); ?></p>

                    <p class="help-block"><?php echo e(__lang('private-survey-msg')); ?></p>
                </div>




                <div class="form-footer">
                    <button type="submit" class="btn btn-primary"><?php echo e(__lang('save-changes')); ?></button>
                </div>
                 </form>
            </div>
        </div><!--end .box -->
    </div><!--end .col-lg-12 -->
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <script type="text/javascript" src="<?php echo e(asset('client/vendor/ckeditor/ckeditor.js')); ?>"></script>
    <script type="text/javascript">

        CKEDITOR.replace('description', {
            filebrowserBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager',
            filebrowserImageBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager',
            filebrowserFlashBrowseUrl: '<?php echo e(basePath()); ?>/admin/filemanager'
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Muzammil\laravel\codecanyon-19457888-traineasy-training-management-registration-system\Resources\views/admin/survey/add.blade.php ENDPATH**/ ?>