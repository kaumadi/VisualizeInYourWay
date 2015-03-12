<div class="page-title">	
    <h3><?php echo $heading; ?></h3>		
</div>



<div>


<script src="<?php echo base_url(); ?>application_resources/js/CSVParser.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>application_resources/js/DataGridRenderer.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>application_resources/js/converter.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>application_resources/js/Controller.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>application_resources/js/jquery.js" type="text/javascript"></script>




  <div id='base'>
    <div id='header'>
      
      <div id='settings'>
<!--        <h3>Settings</h3>-->
        <form id='settingsForm'>
           <p>Delimiter:

             <label><input class="settingsElement" type="radio" name="delimiter" id='delimiterAuto'   value="auto" checked/> Auto</label>
             <label><input class="settingsElement" type="radio" name="delimiter" id='delimiterComma'  value="comma" /> Comma</label>
             <label><input class="settingsElement" type="radio" name="delimiter" id='delimiterTab'    value="tab" /> Tab</label>
            </p>
          <p>Decimal Sign:

             <label><input class="settingsElement" type="radio" name="decimal" id='decimalDot'   value="dot" checked/> Dot</label>
             <label><input class="settingsElement" type="radio" name="decimal" id='decimalComma'  value="comma" /> Comma</label>
            </p>
          <p><label><input class="settingsElement" type="checkbox" name="" value="" id="headersProvidedCB" checked /> First row is the header</label></p>
          <div class="settingsGroup">
            <p>Transform: <label><input class="settingsElement" type="radio" name="headerModifications" value="downcase" id='headersDowncase' /> downcase</label>
            <label><input class="settingsElement" type="radio" name="headerModifications" id='headersUpcase' value="upcase" /> upcase</label>
            <label><input class="settingsElement" type="radio" name="headerModifications" id='headersNoTransform' value="none" checked /> none</label></p>
          </div>

          <p><label><input class="settingsElement" type="checkbox" name="some_name" value="" id="includeWhiteSpaceCB" checked /> Include white space in output</label></p>
          <div class="settingsGroup">
            <p>Indent with: <label><input class="settingsElement" type="radio" name="indentType" value="tabs" id='includeWhiteSpaceTabs'/> tabs</label> <label><input class="settingsElement" type="radio" name="indentType" value="spaces" id='includeWhiteSpaceSpaces' checked/> spaces</label></p>
          </div>


        </form>


      </div>
    </div>



    <div id='converter' class=''>

    </div>
</div>


<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-title">
                <h4>Advance <span class="semi-bold">Options</span></h4>
                <div class="tools"> <a href="javascript:;" class="collapse"></a>  <a href="javascript:;" class="reload"></a></div>
            </div>
            <div class="grid-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form id="add_data_set_form" name="add_data_set_form">
                            <div class="form-group">
                                <label class="form-label">File</label>
                                <span style="color: red">*</span>                       

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <select name="data_set_type_id" id="data_set_type_id" class="select2 form-control" style="width: 30%" >
                                        <option value="">-- Select File --</option>
                                        <?php foreach ($data_types as $data_set_type) {
                                            ?> 
                                            <option value="<?php echo $data_set_type->data_set_type_id; ?>"><?php echo $data_set_type->data_set_type_name; ?></option>
                                        <?php } ?>
                                    </select>                            
                                </div>
                            </div>

                            <div class="form-group">

                                <label class="form-label">Data Sets</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <select name="data_set_id" id="data_set_id" class="select2 form-control" style="width: 30%" >
                                        <option value="">-- Select Data Set --</option>

                                    </select>   
                                </div>
                            </div>


                        

                            <div id="add_file_type_msg" class="form-row"> </div>

                            <div class="modal-footer">
                                <button class="btn btn-primary btn-cons" type="submit">
                                    <i class="icon-ok"></i>
                                    Save
                                </button>
                                <a href="<?php echo site_url(); ?>/data_set_type/data_set_type_controller/manage_data_set_type" class="btn btn-white btn-cons" type="button">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#select_data_type_parent_menu').addClass('active open');
</script>



