<?php include "../includes/header.php" ?>
<?php include "../includes/sidebar.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Devotion</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Devotion</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-primary">


                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="devotionTitle">Devotion title</label>
                                        <input type="text" class="form-control form-control-md" id="devotionTitle" placeholder="Enter devotion title">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="devotionWriter">Devotion writer</label>
                                        <input type="text" class="form-control form-control-md" id="devotionWriter" placeholder="Enter devotion writer">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Message date</label>
                                        <div class="input-group date" id="devotionDate" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#devotionDate" />
                                            <div class="input-group-append" data-target="#devotionDate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="bibleVerse">Bible verse</label>
                                        <input type="text" class="form-control form-control-md" id="bibleVerse" placeholder="Enter Bible verse">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card card-outline card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Bible verse message
                                            </h3>
                                        </div>
                                        <div class="card-body">
                                            <textarea id="bibleVerseMessage"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card card-outline card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Devotion message
                                            </h3>
                                        </div>
                                        <div class="card-body">
                                            <textarea id="devotionMessage"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card card-outline card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Devotion prayer
                                            </h3>
                                        </div>
                                        <div class="card-body">
                                            <textarea id="devotionPrayer"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="btn btn-success">Save devotion</button>
                            </div>
                        </form>
                    </div>

                </div>


                <div class="row"></div>

            </div>
    </section>

</div>

<?php include "../includes/footer.php" ?>
</div>

<?php include "../includes/scripts.php" ?>
<script>
    $(function() {


        $('#devotionDate').datetimepicker({
            icons: {
                time: 'far fa-clock'
            }
        });
        $('#bibleVerseMessage').summernote();
        $('#devotionMessage').summernote();
        $('#devotionPrayer').summernote();

    })
</script>
</body>

</html>