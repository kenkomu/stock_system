<?php require_once 'includes/header.php'; ?>

<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb">
            <li><a href="dashboard.php">Home</a></li>
            <li class="active">Brand</li>
        </ol>
        <div class="panel panel-default">
            <div class="panel-heading"> <i class="glyphicon glyphicon-edit"></i>Manage Brand</div>
            <div class="panel-body">
                <div class="remove-messages"></div>

                <div class="div-action pull pull-right" style="padding-botton:20px;">
                    <button class="btn btn-default" data-toggle="modal" data-target="#addBrandModal"> <i class="glyphicon glyphicon-plus-sign"></i> Add Brand </button>

                </div><!-- /div-action-->
                <table class="table" id="manageBrandTable">
                    <thead>
                        <tr>
                            <th>Brand Name</th>
                            <th>Status</th>
                            <th style="width:15%;">Options</th>
                        </tr>
                    </thead>
                </table>
                </div>
            </div>
        </div>

    </div><!--/col-md-12 -->
</div><!-- /row -->

<div class="modal fade" tabindex="-1" role="dialog" id="addBrandModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title"> <i class="fa fa-plus"></i>Add Brand</h3>
      </div>

      <form class="form-horizontal" id="submitBrandForm" action="php_action/createBrand.php" method="POST">

      <div class="modal-body">

      <div id="add-brand-messages"></div>

        <div class="form-group">
            <label for="brandName" class="col-sm-3 control-label">Brand Name :</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="brandName" name="brandName" placeholder="Brand Name" autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <label for="brandStatus" class="col-sm-3 control-label">Status : </label>
            <div class="col-sm-9">
                <select name="form-control" id="brandStatus" name="brandStatus">
                    <option value="">~~SELECT~~</option>
                    <option value="1">Available</option>
                    <option value="2">Not Available</option>

                </select>
            </div>
        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="createBrandBtn" data-loading-text="Loading...">Save changes</button>
      </div>

      </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="editBrandModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-plus"></i>Edit Brand</h4>
      </div>

      <form class="form-horizontal" id="editBrandForm" action="php_action/editBrand.php" method="POST">

      <div class="modal-body">
      <div class="form-group">
            <label for="editbrandName" class="col-sm-3 control-label">Brand Name :</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="editbrandName" name="editbrandName" placeholder="Brand Name" autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <label for="editbrandStatus" class="col-sm-3 control-label">Status : </label>
            <div class="col-sm-9">
                <select name="form-control" id="editbrandStatus" name="editbrandStatus">
                    <option value="">~~SELECT~~</option>
                    <option value="1">Available</option>
                    <option value="2">Not Available</option>

                </select>
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="removeBrandModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"> <i class="glyphicon glyphicon-trash"></i>Remove Brand</h4>
      </div>
      <div class="modal-body">
        <p>Do you reall want to remove ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove-sign"></i>Close</button>
        <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok-sign"></i>Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript" src="custom/js/brand.js"></script>

<?php require_once 'includes/footer.php'; ?>
