<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Is Null</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> ADD</a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Hasil query IS NULL</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Customer</th>
                                            <th>Negara</th>
                                            <th>Nomer penjualan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($customerIsNull as $row):?>
                                            <tr>
                                                <td><?= $row->customerName;?></td>
                                                <td><?= $row->country;?></td>
                                                <td><?= $row->salesrepemployeenumber;?></td>

                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h6 class="m-0 font-weight-bold text-primary">Dengan query</h6>
                            <br><br>$builder = $this->db->table('customers');
                            <br>$builder->select('customerName, country, salesrepemployeenumber');  
                            <br>$builder->where("salesrepemployeenumber IS NULL");
                            <br>$builder->orderBy('customerName');   
                            <br>return $builder->get();                                      
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Hasil query IS NOT NULL</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Customer</th>
                                            <th>Negara</th>
                                            <th>Nomer penjualan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($customerIsNotNull as $row):?>
                                            <tr>
                                                <td><?= $row->customerName;?></td>
                                                <td><?= $row->country;?></td>
                                                <td><?= $row->salesrepemployeenumber;?></td>

                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h6 class="m-0 font-weight-bold text-primary">Dengan query</h6>
                            <br><br>$builder = $this->db->table('customers');
                            <br>$builder->select('customerName, country, salesrepemployeenumber');  
                            <br>$builder->where("salesrepemployeenumber IS NOT NULL");
                            <br>$builder->orderBy('customerName');   
                            <br>return $builder->get();  
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?= $this->endSection() ?>