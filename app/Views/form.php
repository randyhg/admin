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
      <div class="position-absolute top-50 start-50 mt-4 card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add Vendor</h3>
        </div>
        <form action="<?= base_url('inputVendor') ?>" method="POST">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="vendor_name" id="vendor_name" placeholder="Vendor's name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Address</label>
              <input type="text" class="form-control" name="vendor_address" id="vendor_address" placeholder="Vendor's address">
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Submit</button>
          </div>
        </form>
      </div>

      <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
              <form action="<?= base_url('inputVendor') ?>" method="POST">
                <label for="inputName">Project Name</label>
                <input type="text" name="vendor_name" id="vendor_name" placeholder="Vendor's name" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Address</label>
                <input id="inputDescription" name="vendor_address" id="vendor_address" placeholder="Vendor's address" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" name="vendor_description" id="vendor_description" placeholder="Vendor's description" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Client Company</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Project Leader</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
              <div class="row">
                <div class="col-12">
                  <a href="#" class="btn btn-secondary">Cancel</a>
                  <input type="submit" value="Create new Project" class="btn btn-success float-right">
                </div>
              </div>
              </form>
            </div>

    </div>


      <!-- <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div> -->
        <!-- /.card-body -->
        <!-- <div class="card-footer"> -->
          <!-- Footer -->
        <!-- </div>  -->
         <!-- /.card-footer -->
      <!-- </div> -->
      <!-- /.card -->

    </section>
  </div>
  <!-- /.content-wrapper -->