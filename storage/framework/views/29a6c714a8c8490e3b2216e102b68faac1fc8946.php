<?php $__env->startSection('title', trans('messages.add').' '.trans('messages.mainapp.menu.department')); ?>

<?php $__env->startSection('content'); ?>
    <div id="breadcrumbs-wrapper">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title col s5" style="margin:.82rem 0 .656rem"><?php echo e(trans('messages.add')); ?> <?php echo e(trans('messages.mainapp.menu.department')); ?></h5>
                    <ol class="breadcrumbs col s7 right-align">
                        <li><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(trans('messages.mainapp.menu.dashboard')); ?></a></li>
                        <li><a href="<?php echo e(route('departments.index')); ?>"><?php echo e(trans('messages.mainapp.menu.department')); ?></a></li>
                        <li class="active"><?php echo e(trans('messages.add')); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3" style="padding-top:10px;padding-bottom:10px">
                <a class="btn-floating waves-effect waves-light orange tooltipped right" href="<?php echo e(route('departments.index')); ?>" data-position="top" data-tooltip="<?php echo e(trans('messages.cancel')); ?>"><i class="mdi-navigation-arrow-back"></i></a>
                <form id="add" action="<?php echo e(route('departments.store')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

					
					<div class="row">
                        <div class="input-field col s12">
                            <label for="name" class="active"><?php echo e(trans('messages.mainapp.menu.parent_department')); ?></label>
                            <select id="pid" class="browser-default" name="pid" data-error=".pid">
							<option value=""><?php echo e(trans('messages.select')); ?> <?php echo e(trans('messages.mainapp.menu.parent_department')); ?></option>
							<?php $__currentLoopData = $pdepartment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							</select>
                            <div class="name">
                                <?php if($errors->has('pid')): ?><div class="error"><?php echo e($errors->first('pid')); ?></div><?php endif; ?>
                            </div>
                        </div>
                    </div>
					
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="name"><?php echo e(trans('messages.name')); ?></label>
                            <input id="name" type="text" name="name" placeholder="<?php echo e(trans('messages.mainapp.menu.department')); ?> <?php echo e(trans('messages.name')); ?>" value="<?php echo e(old('name')); ?>" data-error=".name">
                            <div class="name">
                                <?php if($errors->has('name')): ?><div class="error"><?php echo e($errors->first('name')); ?></div><?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <label for="regcode">Registration Code</label>
                            <input id="regcode" type="text" name="regcode" placeholder="Registration Code" value="<?php echo e(old('regcode')); ?>" data-error=".regcode">
                            <div class="regcode">
                                <?php if($errors->has('regcode')): ?><div class="error"><?php echo e($errors->first('regcode')); ?></div><?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <label for="letter"><?php echo e(trans('messages.department.letter')); ?></label>
                            <input id="letter" type="text" name="letter" placeholder="<?php echo e(trans('messages.department.letter')); ?>" value="<?php echo e(old('letter')); ?>" data-error=".letter">
                            <div class="letter">
                                <?php if($errors->has('letter')): ?><div class="error"><?php echo e($errors->first('letter')); ?></div><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="start"><?php echo e(trans('messages.department.start')); ?></label>
                            <input id="start" type="text" name="start" placeholder="<?php echo e(trans('messages.department.start')); ?>" value="<?php echo e(old('start')); ?>" data-error=".start">
                            <div class="start">
                                <?php if($errors->has('start')): ?><div class="error"><?php echo e($errors->first('start')); ?></div><?php endif; ?>
                            </div>
                        </div>
                    </div>
					
					<div class="row">
                        <div class="input-field col s12">
                            <label for="name" class="active"><?php echo e(trans('messages.mainapp.menu.uhid_required')); ?></label>
                            <select id="is_uhid_required" class="browser-default" name="is_uhid_required" data-error=".is_uhid_required">
							<option value=""><?php echo e(trans('messages.select')); ?> <?php echo e(trans('messages.mainapp.menu.uhid_required')); ?></option>
							<?php $__currentLoopData = $uhids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ukey=>$uvalue): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<option value="<?php echo e($ukey); ?>"><?php echo e($uvalue); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							</select>
                            <div class="name">
                                <?php if($errors->has('is_uhid_required')): ?><div class="error"><?php echo e($errors->first('is_uhid_required')); ?></div><?php endif; ?>
                            </div>
                        </div>
                    </div>
					
					
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light right" type="submit">
                                <?php echo e(trans('messages.save')); ?><i class="mdi-content-save left"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $("#add").validate({
            rules: {
                name: {
                    required: true
                },
                regcode: {
                    required: true
                },
                start: {
                    required: true,
                    digits: true
                },
            },
            errorElement : 'div',
            errorPlacement: function(error, element) {
                var placement = $(element).data('error');
                if (placement) {
                    $(placement).append(error)
                } else {
                    error.insertAfter(element);
                }
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>