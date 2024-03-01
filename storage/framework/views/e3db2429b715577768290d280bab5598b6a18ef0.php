<?php $__env->startSection('content'); ?>



        <div style="margin-bottom: 10px;" class="row">

            <div class="col-lg-12">

                <a class="btn btn-success" href="<?php echo e(route('finger_device.create')); ?>">

                    <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.finger_device.title_singular')); ?>


                </a>

                

                <a class="btn btn-primary"

                   href="<?php echo e(route('finger_device.clear.attendance')); ?>">

                    <i class="fas fa-cog"></i>

                    Clear device attendance

                </a>

            </div>

        </div>


    <div class="card">

        <div class="card-header">

            <?php echo e(trans('cruds.finger_device.title_singular')); ?> <?php echo e(trans('global.list')); ?>


        </div>



        <div class="card-body">

            <div class="table-rep-plugin">
                <div class="table-responsive mb-0" data-pattern="priority-columns">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            
                    <thead class="thead-dark">

                    <tr>

                       

                        <th>

                            <?php echo e(trans('cruds.finger_device.fields.id')); ?>


                        </th>

                        <th>

                            <?php echo e(trans('cruds.finger_device.fields.name')); ?>


                        </th>

                        <th>

                            <?php echo e(trans('cruds.finger_device.fields.ip')); ?>


                        </th>

                        <th>

                            <?php echo e(trans('cruds.finger_device.fields.serialNumber')); ?>


                        </th>

                        <th>

                            Status

                        </th>

                        <th>
                            Actions

                        </th>

                    </tr>

                    </thead>

                    <?php

                        $helper = new \App\Helpers\FingerHelper();

                    ?>

                    <tbody>

                    <?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $finger_device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr data-entry-id="<?php echo e($finger_device->id); ?>">

                          

                            <td>

                                <?php echo e($finger_device->id ?? ''); ?>


                            </td>

                            <td>

                                <?php echo e($finger_device->name ?? ''); ?>


                            </td>

                            <td>

                                <?php echo e($finger_device->ip ?? ''); ?>


                            </td>

                            <td>

                                <?php echo e($finger_device->serialNumber ?? ''); ?>


                            </td>

                            <td>

                                <?php

                                    $device = $helper->init($finger_device->ip);

                                ?>

                                <?php if($helper->getStatus($device)): ?>

                                    <div class="badge badge-success">

                                        Active

                                    </div>

                                <?php else: ?>

                                    <div class="badge badge-danger">

                                        Deactivate

                                    </div>

                                <?php endif; ?>

                                

                                    <a class="btn btn-xs btn-outline-success"

                                       href="<?php echo e(route('finger_device.add.employee', $finger_device->id)); ?>">

                                        <i class="fas fa-plus"></i>

                                        Add Employee

                                    </a>
                                    
                                    <a class="btn btn-xs btn-outline-success"

                                       href="<?php echo e(route('finger_device.get.attendance', $finger_device->id)); ?>">

                                        <i class="fas fa-plus"></i>

                                        Get Attendance

                                    </a>

                                

                            </td>

                            <td>

                            
                                    <a class="btn btn-xs btn-primary"

                                       href="<?php echo e(route('finger_device.show', $finger_device->id)); ?>">

                                        <?php echo e(trans('global.view')); ?>


                                    </a>

                            



                              

                                    <a class="btn btn-xs btn-info"

                                       href="<?php echo e(route('finger_device.edit', $finger_device->id)); ?>">

                                        <?php echo e(trans('global.edit')); ?>


                                    </a>

                             



                              

                                    <form action="<?php echo e(route('finger_device.destroy', $finger_device->id)); ?>"

                                          method="POST"

                                          onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');"

                                          style="display: inline-block;">

                                        <input type="hidden" name="_method" value="DELETE">

                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                                        <input type="submit" class="btn btn-xs btn-danger"

                                               value="<?php echo e(trans('global.delete')); ?>">

                                    </form>




                            </td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>

                </table>
                </div>
            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##

    

    <script>

        // window.livewire.on('userStore', () => {

        //     $('#exampleModal').modal('hide');

        // });

        $(function () {

            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('finger_device_delete')): ?>

            let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'

            let deleteButton = {

                text: deleteButtonTrans,

                url: "<?php echo e(route('admin.finger_device.massDestroy')); ?>",

                className: 'btn-danger',

                action: function (e, dt, node, config) {

                    var ids = $.map(dt.rows({selected: true}).nodes(), function (entry) {

                        return $(entry).data('entry-id')

                    });



                    if (ids.length === 0) {

                        alert('<?php echo e(trans('global.datatables.zero_selected')); ?>')



                        return

                    }



                    if (confirm('<?php echo e(trans('global.areYouSure')); ?>')) {

                        $.ajax({

                            headers: {'x-csrf-token': _token},

                            method: 'POST',

                            url: config.url,

                            data: {ids: ids, _method: 'DELETE'}

                        })

                            .done(function () {

                                location.reload()

                            })

                    }

                }

            }

            dtButtons.push(deleteButton)

            <?php endif; ?>



            $.extend(true, $.fn.dataTable.defaults, {

                orderCellsTop: true,

                order: [[1, 'desc']],

                pageLength: 100,

            });

            let table = $('.datatable-finger_device:not(.ajaxTable)').DataTable({buttons: dtButtons})

            $('a[data-toggle="tab"]').on('shown.bs.tab click', function (e) {

                $($.fn.dataTable.tables(true)).DataTable()

                    .columns.adjust();

            });



        })



    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\codeastro\Laravel\01 PUBLISHED CONTENT\AttendanceMS-Laravel\resources\views/admin/fingerDevices/index.blade.php ENDPATH**/ ?>