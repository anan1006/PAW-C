

<?php $__env->startSection('konten'); ?>
<div class="container">
    <form action="/editData/<?php echo e($mhs->id); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="container">
            <h2 class="mt-4">Edit Data Mahasiswa</h2>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="" class="mb-2 mt-3"><b>Nama</b></label>
                        <input name="nama_mhs" class="form-control" value="<?php echo e($mhs->nama_mhs); ?>">
                        <div class="text-danger">
                            <?php $__errorArgs = ['nama_mhs'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="" class="mb-2 mt-3"><b>NIM</b></label>
                        <input name="nim" class="form-control" value="<?php echo e($mhs->nim); ?>">
                        <div class="text-danger">
                            <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="" class="mb-2 mt-3"><b>Email</b></label>
                        <input name="email" class="form-control" value="<?php echo e($mhs->email); ?>">
                        <div class="text-danger">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="" class="mb-2 mt-3"><b>Alamat</b></label>
                        <input name="alamat" class="form-control" value="<?php echo e($mhs->alamat); ?>">
                        <div class="text-danger">
                            <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <button class="btn btn-sm mt-4" style="background-color:coral;color:white;">Simpan</button>
                    </div>
                
            </div>
        </div>
        
        
        
    </form>
</div>
<?php echo $__env->make('part.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.halaman', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\modul7\resources\views/editmhs.blade.php ENDPATH**/ ?>