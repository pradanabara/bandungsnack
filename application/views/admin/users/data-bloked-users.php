 <div id="page-content">
                    <!-- Datatables Header -->
                     <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="gi gi-user"></i>Bloked <?=$label['parent']?><br>
                            </h1>
                        </div>
                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li><?=$label['home']?></li>
                        <li><a href="<?=base_url($label['link_parent'])?>"><?=$label['parent']?></a></li>
                    </ul>
                    <!-- END Datatables Header -->

                    <!-- Datatables Content -->
                    <div class="block full">
                        <div class="block-title">
                        <h2><strong><?=$label['parent']?></strong></h2>
                        </div>
                        <div class="table-responsive">
                            <table id="example-datatable" class="table table-vcenter table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Users ID</th>
                                        <th>Username</th>
                                        <th>Full name</th>
                                        <th>Akses</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Datatables Content -->
                </div>