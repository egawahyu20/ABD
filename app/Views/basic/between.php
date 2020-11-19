<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Between</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> ADD</a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Hasil query between</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($between as $row):?>
                                            <tr>
                                                <td><?= $row->productCode;?></td>
                                                <td><?= $row->productName;?></td>
                                                <td><?= $row->buyPrice;?></td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h6 class="m-0 font-weight-bold text-primary">Dengan query</h6>
                            <br><br>$builder = $this->db->table('products');
                            <br>$builder->select('productCode, productName, buyPrice');  
                            <br>$builder->where("buyPrice BETWEEN 90 AND 100;");       
                            <br>return $builder->get();
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?= $this->endSection() ?>