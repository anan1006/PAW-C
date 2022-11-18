

<?php $__env->startSection('konten'); ?>
<div class="container">
    <h1 class="mt-4">Data Mahasiswa</h1>
    <?php if(session('pesan')): ?>
        <div class="alert alert-success alert-dismissible">
          <h4><i class="icon fa fa-check"></i>Success!</h4>
          <?php echo e(session('pesan')); ?>

        </div>
    <?php endif; ?>
    <table class="table table-striped text-center mt-5">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor = 1; ?>
            <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($nomor++); ?></td>
                    <td><?php echo e($item->nama_mhs); ?></td>
                    <td><?php echo e($item->nim); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <td><?php echo e($item->alamat); ?></td>
                    <td>
                      <a href="/edit/<?php echo e($item->id); ?>" class="btn btn-sm btn-success">Edit</a> | 
                      <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo e($item->id); ?>">
                        Delete
                      </button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
        </tbody>
      </table>
    </div>
<?php $__env->stopSection(); ?>

<?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="modal fade" id="delete<?php echo e($item->id); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Peringatan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Yakin mau hapus data <?php echo e($item->nama_mhs); ?>?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Maap Gajadi</button>
          <a href="/hapus/<?php echo e($item->id); ?>" class="btn btn-danger">Nggih</a>
        </div>
      </div>
    </div>
  </div>
  <?php echo $__env->make('part.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('layout.halaman', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\modul7\resources\views/home.blade.php ENDPATH**/ ?>