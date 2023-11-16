  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">

    <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title align-items-center">Vendors</h3>
                <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#modal-xl-add">
                  Add vendor
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $i = 1;
                  foreach ($data as $vendor) : 
                  ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td class=""><?= $vendor['name']; ?></td>
                    <td class=""><?= $vendor['address']; ?></td>
                    <td class="col-md-2">
                      <div class="d-flex flex-row justify-content-end align-items-center gap-2">
                        <a href="" type="button" class="btn btn-block btn-danger mx-2 py-2 px-3 flex" data-toggle="modal" data-target="#modal-xl-<?= $i ?>">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="inline-text h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg> -->
                        Edit
                        </a>
                        <!-- <form action="/delete/<?= $vendor['id']; ?>" method="post"> -->
                            <!-- <?= csrf_field(); ?> -->
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="button" class="btn btn-warning mx-2 py-2 px-3 flex" data-toggle="modal" data-target="#modal-danger-<?= $i?>" /*onclick="return confirm('sure?');"*/>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="inline-text h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                            </svg> -->
                            Delete
                        </button>
                        <!-- </form> -->
                      </div>
                    </td>
                  </tr>

                   <!-- Edit modal open -->
                   <div class="modal fade" id="modal-xl-<?= $i ?>">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Edit data</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="/update/<?= $vendor['id']; ?>" method="POST">
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control" name="vendor_name" id="vendor_name" placeholder="Vendor's name" value="<?= $vendor['name']; ?>">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Address</label>
                                  <input type="text" class="form-control" name="vendor_address" id="vendor_address" placeholder="Vendor's address" value="<?= $vendor['address']; ?>">
                                </div>
                              </div>
                              <!-- /.card-body -->
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                              </form>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                    </div>
                    <!-- Modal close -->

                    <!-- Delete modal -->
                    <div class="modal fade" id="modal-danger-<?= $i++ ?>">
                        <div class="modal-dialog">
                        <div class="modal-content bg-danger">
                            <div class="modal-header">
                            <h4 class="modal-title">Danger Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                            <form action="/delete/<?= $vendor['id']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-outline-light">Save changes</button>
                            </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- Modal close -->

                  <?php endforeach; ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

    <!-- Add modal open -->
    <div class="modal fade" id="modal-xl-add">
        <div class="modal-dialog modal-xl">
        
            

        </div>
    </div>
    <!-- Modal close -->


    


    </section>
</div>