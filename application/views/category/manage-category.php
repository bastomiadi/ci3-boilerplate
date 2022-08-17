<div class="box">
  <div class="box-header">
    <h2>List Categories</h2>
    <div class="float-right">
      <a href="<?php echo site_url(); ?>add-Category">Add Category</a>
    </div>
  </div>
  
  <div class="table-responsive">
  <table id="item-list" class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    var table = $('#item-list').DataTable({
      responsive: true,
      //processing: true, //Feature control the processing indicator.
      //serverSide: true, //Feature control DataTables' server-side processing mode.
      ajax: {
          url: `<?= base_url() . "get_items" ?>`,
          type: "GET"
      },
    columns :[
          { data: 'id' },
          { data: 'category_name' },
          { data: null, render: function ( data, type, row ) {
            // console.log(row.id);
              return `
              <button type="button" class="btn btn-primary">
                <a href="<?php echo site_url()?>change-status-category/`+ row.id +`" >` + data.status == 0 ? 'Activate' : 'Deactivate' + `</a>
              </button>
              <button type="button" class="btn btn-primary"><a href="<?php echo site_url()?>edit-Category/`+ row.id +`" >Edit</a></button>
              <button type="button" class="btn btn-danger"><a href="<?php echo site_url()?>delete-Category/`+ row.id +`" onclick="return confirm('are you sure to delete')">Delete</a></button>
              `;
            }
          }
        ],
    });

});
</script>