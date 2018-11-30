
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        BOOKING
    </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">


        <div class="row">
            <div class="col-sm-offset-4 col-sm-4">
                <form method="post">
                    <div class="form-group">
                        <label for="validate-text">Validate Text</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="validate-text" id="validate-text" placeholder="Validate Text" required>
                            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validate-optional">Optional</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="validate-optional" id="validate-optional" placeholder="Optional">
                            <span class="input-group-addon info"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validate-optional">Already Validated!</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="validate-text" id="validate-text" placeholder="Validate Text" value="Validated!" required>
                            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validate-email">Validate Email</label>
                        <div class="input-group" data-validate="email">
                            <input type="text" class="form-control" name="validate-email" id="validate-email" placeholder="Validate Email" required>
                            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validate-phone">Validate Phone</label>
                        <div class="input-group" data-validate="phone">
                            <input type="text" class="form-control" name="validate-phone" id="validate-phone" placeholder="(814) 555-1234" required>
                            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validate-length">Minimum Length</label>
                        <div class="input-group" data-validate="length" data-length="5">
                            <textarea type="text" class="form-control" name="validate-length" id="validate-length" placeholder="Validate Length" required></textarea>
                            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validate-select">Validate Select</label>
                        <div class="input-group">
                            <select class="form-control" name="validate-select" id="validate-select" placeholder="Validate Select" required>
                                <option value="">Select an item</option>
                                <option value="item_1">Item 1</option>
                                <option value="item_2">Item 2</option>
                                <option value="item_3">Item 3</option>
                            </select>
                            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validate-number">Validate Number</label>
                        <div class="input-group" data-validate="number">
                            <input type="text" class="form-control" name="validate-number" id="validate-number" placeholder="Validate Number" required>
                            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary col-xs-12" disabled>Submit</button>
                </form>
            </div>
        </div>


</section>



<style>
    .input-group-addon.primary {
        color: rgb(255, 255, 255);
        background-color: rgb(50, 118, 177);
        border-color: rgb(40, 94, 142);
    }
    .input-group-addon.success {
        color: rgb(255, 255, 255);
        background-color: rgb(92, 184, 92);
        border-color: rgb(76, 174, 76);
    }
    .input-group-addon.info {
        color: rgb(255, 255, 255);
        background-color: rgb(57, 179, 215);
        border-color: rgb(38, 154, 188);
    }
    .input-group-addon.warning {
        color: rgb(255, 255, 255);
        background-color: rgb(240, 173, 78);
        border-color: rgb(238, 162, 54);
    }
    .input-group-addon.danger {
        color: rgb(255, 255, 255);
        background-color: rgb(217, 83, 79);
        border-color: rgb(212, 63, 58);
    }
</style>

<script>
    $(document).ready(function() {
        $('.input-group input[required], .input-group textarea[required], .input-group select[required]').on('keyup change', function() {
            var $form = $(this).closest('form'),
                $group = $(this).closest('.input-group'),
                $addon = $group.find('.input-group-addon'),
                $icon = $addon.find('span'),
                state = false;

            if (!$group.data('validate')) {
                state = $(this).val() ? true : false;
            }else if ($group.data('validate') == "email") {
                state = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($(this).val())
            }else if($group.data('validate') == 'phone') {
                state = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/.test($(this).val())
            }else if ($group.data('validate') == "length") {
                state = $(this).val().length >= $group.data('length') ? true : false;
            }else if ($group.data('validate') == "number") {
                state = !isNaN(parseFloat($(this).val())) && isFinite($(this).val());
            }

            if (state) {
                $addon.removeClass('danger');
                $addon.addClass('success');
                $icon.attr('class', 'glyphicon glyphicon-ok');
            }else{
                $addon.removeClass('success');
                $addon.addClass('danger');
                $icon.attr('class', 'glyphicon glyphicon-remove');
            }

            if ($form.find('.input-group-addon.danger').length == 0) {
                $form.find('[type="submit"]').prop('disabled', false);
            }else{
                $form.find('[type="submit"]').prop('disabled', true);
            }
        });

        $('.input-group input[required], .input-group textarea[required], .input-group select[required]').trigger('change');
    });
</script>