  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">

          <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title align-items-center"><b>Vendor list</b></h3>
                <button type="button" class="btn btn-primary btn-lg ml-auto" data-toggle="modal" data-target="#modal-xl-add">
                  Add vendor
                </button>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Website</th>
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
                    <td><?= $vendor['name']; ?></td>
                    <td><?= $vendor['address']; ?></td>
                    <td><?= $vendor['phone']; ?></td>
                    <td><?= $vendor['email']; ?></td>
                    <td><?= $vendor['website']; ?></td>
                    <td class="text-center">
                      <div class="row">
                      <!-- <div class="d-flex flex-row justify-content-end align-items-center gap-2"> -->
                      <div class="col-md-6">
                        <div class="btn-group" role="group" aria-label="Action Buttons">
                        <!-- edit -->
                        <a href="" type="button" class="btn btn-block btn-warning btn-md mr-3" data-toggle="modal" data-target="#modal-xl-<?= $i ?>">
                        <i class="fas fa-edit mr-1"></i>
                        </a>
                        <!-- delete -->
                        <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#deleteModal-<?= $i?>">
                        <i class="fas fa-trash-alt mr-1"></i>
                        </button>
                        </div>
                      </div>
                      </div>
                    </td>
                  </tr>
                   <!-- Edit modal open -->
                   <div class="modal fade" id="modal-xl-<?= $i ?>">
                          <div class="modal-dialog modal-xs">
                            <div class="modal-content">
                              <div class="modal-header bg-warning">
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
                                <div class="form-group">
                                    <label for="inputPhone">Phone</label>
                                    <input type="number" name="vendor_phone" id="vendor_phone" value="<?= $vendor['phone']; ?>" class="form-control">
                                  </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" name="vendor_email" id="vendor_email" value="<?= $vendor['email']; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputWebsite">Website</label>
                                    <input type="text" name="vendor_website" id="vendor_website" value="<?= $vendor['website']; ?>" class="form-control">
                                </div>
                              </div>
                              <!-- /.card-body -->
                              <div class="modal-footer justify-content-between">
                                <button type="submit" class="btn btn-warning ml-auto">Save changes</button>
                              </div>
                              </form>
                            </div>
                          </div>
                    </div>
                    <!-- Modal close -->

                    <!-- Delete modal -->
                    <div class="modal fade" id="deleteModal-<?= $i++ ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <input type="hidden" id="deleteRecord" name="deleteRecord" value="-" />
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="/delete/<?= $vendor['id']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <div class="modal-body" id="deleteBody">
                                Delete <i><b><?= $vendor['name']; ?></b></i> record?
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" id="deleteButton" onclick="deleteSite();">Delete Record</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- Close modal -->
                  <?php endforeach; ?>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

    <!-- Add modal open -->
    <div class="modal fade" id="modal-xl-add">
      <div class="modal-dialog modal-xs">
        <div class="modal-content">
          <div class="modal-header bg-primary">
                <h3>Add vendor</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color: white">&times;</span>
                </button>
          </div>
          <div class="modal-body">
              <div class="form-group">
              <form action="<?= base_url('inputVendor') ?>" method="POST">
                <label for="inputName">Name</label>
                <input type="text" name="vendor_name" id="vendor_name"  class="form-control" required="true">
              </div>
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" name="vendor_address" id="vendor_address"  class="form-control" required="true">
              </div>
              <div class="form-group">
                <label for="inputPhone">Phone</label>
                <input type="number" name="vendor_phone" id="vendor_phone"  class="form-control" required="true">
              </div>
              <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" name="vendor_email" id="vendor_email" class="form-control" required="true">
              </div>
              <div class="form-group">
                <label for="inputWebsite">Website</label>
                <input type="text" name="vendor_website" id="vendor_website" class="form-control" required="true">
              </div>
          </div>
          <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-primary ml-auto">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal close -->

  </section>
</div>