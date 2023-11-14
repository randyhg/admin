  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vendor List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vendor List</li>
            </ol>
          </div>
        </div>
      </div> /.container-fluid -->
    <!-- </section>  -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
    
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Vendors</h3>
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
                    <td class="text-lg text-boldcol-md-1"><?= $i++; ?></td>
                    <td class="text-lg text-bold"><?= $vendor['name']; ?></td>
                    <td class="text-lg text-bold"><?= $vendor['address']; ?></td>
                    <td class="col-md-2">
                      <div class="d-flex flex-row justify-content-end align-items-center gap-2">
                        <a href="/edit/<?= $vendor['id']; ?>" type="button" class="btn btn-block btn-danger mx-2 py-2 px-3 flex">Edit
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="inline-text h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg> -->
                        </a>
                        <form action="/delete/<?= $vendor['id']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-warning" onclick="return confirm('sure?');">Delete</button>
                        </form>
                        <!-- <a href="/delete/<?= $vendor['id']; ?>" type="button" class="btn btn-block btn-warning mx-2 py-2 px-3 flex mt-0">Delete
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-text h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                            </svg>
                        </a> -->
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  </tfoot>
                </table>
              </div>
      </div>


    </div>
    </section>
  </div>

  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    </div>
  <!-- /.content-wrapper -->