<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Operator</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> ADD</a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Hasil query Operator AND</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Negara</th>
                                            <th>Negara Bagian</th>
                                            <th>Limit Credit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($customerAND as $row):?>
                                            <tr>
                                                <td><?= $row->customername;?></td>
                                                <td><?= $row->country;?></td>
                                                <td><?= $row->state;?></td>
                                                <td><?= $row->creditlimit;?></td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h6 class="m-0 font-weight-bold text-primary">Dengan query</h6>
                            <br><br>$builder = $this->db->table('customers');
                            <br>$builder->select('customername, country, state, creditlimit');  
                            <br>$builder->where("country = 'USA' AND state = 'CA' AND creditlimit > 100000;");
                            <br>return $builder->get();        
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Hasil query Operator OR</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Negara</th>
                                            <th>Negara Bagian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($customerOR as $row):?>
                                            <tr>
                                                <td><?= $row->customername;?></td>
                                                <td><?= $row->country;?></td>
                                                <td><?= $row->state;?></td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h6 class="m-0 font-weight-bold text-primary">Dengan query</h6>
                            <br><br>$builder = $this->db->table('customers');
                            <br>$builder->select('customername, country, state');  
                            <br>$builder->where("country = 'USA' OR country = 'France';");    
                            <br>return $builder->get();        
                        </div>
                    </div>

                                       <!-- DataTales Example -->
                                       <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Hasil query Operator IN</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Kantor</th>
                                            <th>Kota</th>
                                            <th>No HP</th>
                                            <th>Negara</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($customerIN as $row):?>
                                            <tr>
                                                <td><?= $row->officeCode;?></td>
                                                <td><?= $row->city;?></td>
                                                <td><?= $row->phone;?></td>
                                                <td><?= $row->country;?></td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h6 class="m-0 font-weight-bold text-primary">Dengan query</h6>
                            <br><br>$builder = $this->db->table('offices');
                            <br>$builder->select('officeCode, city, phone, country');  
                            <br>$builder->where("country IN ('USA' , 'France');");              
                            <br>return $builder->get();        
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<?= $this->endSection() ?>