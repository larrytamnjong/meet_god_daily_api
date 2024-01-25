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
                                    <div class="form-group col-md-6 form-outline">
                                        <label for="devotionTitle">Devotion title</label>
                                        <input type="text" class="form-control form-control-md" id="devotionTitle" placeholder="Enter devotion title" required>
                                    </div>
                                    <div class="form-group col-md-6 form-outline">
                                        <label for="devotionWriter">Devotion writer</label>
                                        <input type="text" class="form-control form-control-md" id="devotionWriter" placeholder="Enter devotion writer" required>
                                    </div>
                                    <div class="form-group col-md-6 form-outline">
                                        <label>Message date</label>
                                        <div class="input-group date" data-target-input="nearest">
                                            <input id="messageDate" type="text" class="form-control datetimepicker-input" data-target="#messageDate" required />
                                            <div class="input-group-append" data-target="#messageDate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 form-outline">
                                        <label for="bibleVerse">Bible verse</label>
                                        <input type="text" class="form-control form-control-md" id="bibleVerse" placeholder="Enter Bible verse" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-12 form-outline">
                                    <label class="form-label" for="bibleVerseMessage">Bible verse message</label>
                                    <textarea class="form-control" id="bibleVerseMessage" rows="5" placeholder="Bible verse message ..." required></textarea>
                                </div>

                                <div class="form-group col-md-12 form-outline">
                                    <label class="form-label" for="devotionMessage">Devotion message</label>
                                    <textarea class="form-control" id="devotionMessage" rows="5" placeholder="Devotion message ..." required></textarea>
                                </div>

                                <div class="form-group col-md-12 form-outline">
                                    <label class="form-label" for="devotionPrayer"> Devotion prayer</label>
                                    <textarea class="form-control" id="devotionPrayer" rows="5" placeholder="Devotion prayer ..." required></textarea>
                                </div>


                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button type="button" class="btn btn-success" id="submitButton">Save devotion</button>
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
    $(document).ready(function() {
        $(function() {

            $('#messageDate').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });


        });

        function areFieldsNull() {
            var fields = [
                $('#devotionTitle').val(),
                $('#devotionWriter').val(),
                $('#messageDate').val(),
                $('#bibleVerse').val(),
                $('#bibleVerseMessage').val(),
                $('#devotionMessage').val(),
                $('#devotionPrayer').val()
            ];

            return fields.some(function(field) {
                return field === null || field === "";
            });
        }

        function resetFields() {
            $('#devotionTitle').val("");
            $('#devotionWriter').val("");
            $('#messageDate').val("");
            $('#bibleVerse').val("");
            $('#bibleVerseMessage').val("");
            $('#devotionMessage').val("");
            $('#devotionPrayer').val("");
        }



        $('#submitButton').click(function() {

            if (areFieldsNull()) {
                alert('Please fill in all the fields.');
                return;
            }
            console.log($('#devotionPrayer').val());
            $.ajax({
                url: 'add_devotion_action.php',
                type: 'POST',
                data: {
                    devotionTitle: $('#devotionTitle').val(),
                    devotionWriter: $('#devotionWriter').val(),
                    messageDate: $('#messageDate').val(),
                    bibleVerse: $('#bibleVerse').val(),
                    bibleVerseMessage: $('#bibleVerseMessage').val(),
                    devotionMessage: $('#devotionMessage').val(),
                    devotionPrayer: $('#devotionPrayer').val()

                },
                success: function(response) {
                    if (response == true) {
                        alert(response);
                        resetFields();
                    } else {
                        alert(response);

                    }
                },
                error: function(xhr, status, error) {
                    alert("An error occurred while saving the devotion. Please try again.");
                    console.log(xhr.responseText);
                }
            });
        });

    });
</script>
</body>

</html>