<?php $__env->startSection('content'); ?>
    <div class="dashboard-wrapper2">
            <div class="container-fluid">
                <div class="main-content container-fluid p-0">
                    <div class="email-head">
                        <div class="email-head-title">Contactez-nous<span class="icon mdi mdi-edit"></span></div>
                    </div>
                    <div class="email-compose-fields">
                        <div class="to">
                            <div class="form-group row pt-0">
                                <label class="col-md-1 control-label">To:</label>
                                <div class="col-md-11">
                                    <select class="js-example-basic-multiple" multiple="multiple">
                                        <option value="contact" selected="selected">Airlife-contact</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="to cc">
                            <div class="form-group row pt-2">
                                <label class="col-md-1 control-label">Cc</label>
                                <div class="col-md-11">
                                    <select class="js-example-basic-multiple" multiple="multiple">                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="subject">
                            <div class="form-group row pt-2">
                                <label class="col-md-1 control-label">Objet</label>
                                <div class="col-md-11">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="email editor">
                        <div class="col-md-12 p-0">
                            <div class="form-group">
                                <label class="control-label sr-only" for="summernote">Description </label>
                                <textarea class="form-control" id="summernote" name="editordata" rows="6" placeholder="Write Descriptions"></textarea>
                            </div>
                        </div>
                        <div class="email action-send">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-space" type="submit"><i class="icon s7-mail"></i> Envoyer</button>
                                    <button class="btn btn-secondary btn-space" type="button"><i class="icon s7-close"></i> Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({ tags: true });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300

        });
    });
    </script>
    
    <script src="css\vendor\jquery\jquery-3.3.1.min.js"></script>
    <script src="css\vendor\bootstrap\js\bootstrap.bundle.js"></script>
    <script src="css\vendor\slimscroll\jquery.slimscroll.js"></script>
    <script src="css\vendor\select2\js\select2.min.js"></script>
    <script src="css\vendor\summernote\js\summernote-bs4.js"></script>
    <script src="css\libs\js\main-js.js"></script>
    <script>
            
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>