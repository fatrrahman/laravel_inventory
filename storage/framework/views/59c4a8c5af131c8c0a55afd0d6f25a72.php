

<?php $__env->startSection('content'); ?>

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
           
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Laporan Barang Terjual Bulan Ini</h4>
                                <button class="btn btn-dark btn-round ml-auto" data-toggle="modal" data-target="#modalCreate">
                                    <i class="fa fa-plus"></i>
                                    Tambah Data
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsiPOve">
                                <table id="add-row" class="display table ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>ID Barang</th>
                                            <th>Taggal Terjual</th>
                                            <th>Qty Terjual</th>
                                            <th>Total Terjual</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1 ?>
                                        <?php $__currentLoopData = $data_barangterjual; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($no++); ?></td>
                                            <td><?php echo e($row->nama_barang); ?></td>
                                            <td><?php echo e($row->no_transaksi_terjual); ?></td>
                                            <td><?php echo e($row->tgl_terjual); ?></td>
                                            <td><?php echo e($row->qty_terjual); ?></td>
                                            <td>Rp. <?php echo e(number_format($row->total_terjual)); ?></td>
                                            <td>
                                                <a href="#modalEdit<?php echo e($row->id); ?>" data-toggle="modal" class="btn btn-xs btn-primary"> <i class="fa fa-edit"> Edit</i></a>
                                                <a href="#modalHapus<?php echo e($row->id); ?>" data-toggle="modal" class="btn btn-xs btn-danger"> <i class="fa fa-trash"> Hapus</i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        Tambah Barang</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/barangterjual/store" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body">

                    <input type="hidden" name="stok" value="0" required>

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang ..." required>
                    </div>

                    <div class="form-group">
                        <label>ID Barang</label>
                        <input type="text" class="form-control" name="no_transaksi_terjual" placeholder="ID Barang ..." required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Terjual</label>
                        <input type="date" class="form-control" name="tgl_terjual" placeholder="Tanggal terjual ..." required>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Barang</label>
                        <input type="number" class="form-control" name="qty_terjual" placeholder="Jumlah Terjual ..." required>
                    </div>

                    <div class="form-group">
                        <div class="input-group nb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                            </div>
                            <input type="number" class="form-control" placeholder="Total Harga ..." name="total_terjual" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php $__currentLoopData = $data_barangterjual; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modalEdit<?php echo e($g->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        Edit Barang</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/barangterjual/update/<?php echo e($g->id); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body">

                    <input type="hidden" name="stok" value="0" required>

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" value="<?php echo e($g->nama_barang); ?>" name="nama_barang" placeholder="Nama Barang ..." required>
                    </div>

                    <div class="form-group">
                        <label>Nomor Transaksi Terjual</label>
                        <input type="text" class="form-control" value="<?php echo e($g->no_transaksi_terjual); ?>" name="no_transaksi_terjual" placeholder="Nomor Transaksi ..." required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Terjual</label>
                        <input type="date" class="form-control" value="<?php echo e($g->tgl_terjual); ?>" name="tgl_terjual" placeholder="Tanggal Terjual ..." required>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Barang</label>
                        <input type="number" class="form-control" value="<?php echo e($g->qty_terjual); ?>" name="qty_terjual" placeholder="Jumlah Terjual ..." required>
                    </div>

                    <div class="form-group">
                        <div class="input-group nb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                            </div>
                            <input type="number" class="form-control" value="<?php echo e($g->total_terjual); ?>" placeholder="Total Harga ..." name="total_terjual" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-undo"></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php $__currentLoopData = $data_barangterjual; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modalHapus<?php echo e($u->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        Hapus</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="GET" action="/barangterjual/destroy/<?php echo e($u->id); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
                <div class="modal-body">

                    <div class="form-group">
                        <h4>Apakah Data ini ingin dihapus?</h4>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel_inventory\resources\views/admin/barangterjual.blade.php ENDPATH**/ ?>