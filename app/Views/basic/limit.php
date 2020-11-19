<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Limit</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> ADD</a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Hasil query Limit teratas</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No Customer</th>
                                            <th>Nama</th>
                                            <th>Limit Kredit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($limit1 as $row):?>
                                            <tr>
                                                <td><?= $row->customerNumber;?></td>
                                                <td><?= $row->customerName;?></td>
                                                <td><?= $row->creditLimit;?></td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h6 class="m-0 font-weight-bold text-primary">Dengan query</h6>
                            <br><br>$builder = $this->db->table('customers');
                            <br>$builder->select('customerNumber, customerName, creditLimit');   
                            <br>$builder->orderBy('creditLimit','DESC');         
                            <br>$builder->limit(5);    
                            <br>return $builder->get();
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Hasil query Limit terbawah</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No Customer</th>
                                            <th>Nama</th>
                                            <th>Limit Kredit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($limit2 as $row):?>
                                            <tr>
                                                <td><?= $row->customerNumber;?></td>
                                                <td><?= $row->customerName;?></td>
                                                <td><?= $row->creditLimit;?></td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h6 class="m-0 font-weight-bold text-primary">Dengan query</h6>
                            <br><br>$builder = $this->db->table('customers');
                            <br>$builder->select('customerNumber, customerName, creditLimit');  
                            <br>$builder->orderBy('creditLimit','ASC');            
                            <br>$builder->limit(5); 
                            <br>return $builder->get();
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?= $this->endSection() ?>