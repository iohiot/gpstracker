<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Panic
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>/vehicle">Vehicle</a></li>
                    <li class="breadcrumb-item active">Panic</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form method="post" id="form-panic" class="card">
            <input type="hidden" value="0" id="panicinput" name="panicinput">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-3">&nbsp;</div>
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-block btn-primary" id="btn-new">New Location</button>
                    </div>
                    <div class="col-sm-3">&nbsp;</div>
                    <div class="col-sm-12">
                        <button type="button" id="btn-panic" class="btn btn-block btn-danger">Panic</button>
                    </div>
                    <div class="col-sm-3">&nbsp;</div>
                    <div class="col-sm-3">&nbsp;</div>
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-block btn-primary" id="btn-man">Man Down</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- /.content -->

<script>
    $("#btn-new").on("click", function(event) {
        $("#panicinput").val(0)
        $("#form-panic").submit()
    });

    $("#btn-panic").on("click", function(event) {
        $("#panicinput").val(1)
        $("#form-panic").submit()
    });

    $("#btn-man").on("click", function(event) {
        $("#panicinput").val(2)
        $("#form-panic").submit()
    });
</script>