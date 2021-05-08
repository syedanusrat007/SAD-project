
	
    var next = 0;
    $("#add").click(function(e){
        e.preventDefault();
        var addto = "#fiel" + next;
        var addRemove = "#fiel" + (next);
        next = next + 1;
        var newIn = ' <div id="fiel'+ next +'" name="fiel'+ next +'"><div class="form-group"><label class="col-md-4 control-label" for="action_id">Year of publish</label> <div class="col-md-5"> <input id="action_id" name="action_id" type="date" placeholder="" class="form-control input-md"> </div></div><br><br> <!-- Text input--><div class="form-group"> <label class="col-md-4 control-label" for="action_name">Name Of paper</label> <div class="col-md-5"> <input id="action_name" name="action_name" type="text" placeholder="" class="form-control input-md"> </div></div><br><br><!-- File Button --><div class="form-group">  <label class="col-md-5 control-label" for="action_name">Name of Conference</label>  <div class="col-md-5"><input id="action_name" name="action_name" type="text" placeholder="" class="form-control input-md"> </div></div></div>';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="fiel">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#fiel" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#fiel" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });


