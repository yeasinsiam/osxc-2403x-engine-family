var refer_url = $("#site_url").val();

// Update the Category List
function getCategory(){
    $.post(refer_url+"category/all", function(data){
        $('#categoryData').html(data);
    });
}
// Send CRUD requests of category to the server-side script
function userAction(type, id){
    id = (typeof id == "undefined")?'':id;
    var userData = '', frmElement = '';
    if(type == 'add'){
        frmElement = $("#categoryAddEditModal");
        userData = frmElement.find('form').serialize();
    }else if (type == 'edit'){
        frmElement = $("#categoryAddEditModal");
        userData = frmElement.find('form').serialize();
    }else{
        frmElement = $(".row");
        userData = 'id='+id;
    }
    frmElement.find('.statusCategoryMsg').html('');
    $.ajax({
        type: 'POST',
        url: refer_url+'category/'+type,
        data: userData,
        dataType: 'JSON',
        beforeSend: function(){
            frmElement.find('form').css("opacity", "0.5");
        },
        success:function(response){
            frmElement.find('.statusCategoryMsg').html(response.msg);
            window.setTimeout(function() {
                $(".statusCategoryMsg").fadeTo(2000, 0).slideUp(1000, function(){
                    $(this).remove();
                });
            }, 1000);

            if(response.status == 1){
                if(type == 'add'){
                    frmElement.find('form')[0].reset();
                }
                getCategory();
            }
            frmElement.find('form').css("opacity", "");
        }
    });
}

// Fill the Category Data in the edit form
function editCategory(id){
    $.post(refer_url+"category/get_single_category", {id:id}, function(data){
        $('#cate_id').val(data.cate_id);
        $('#cate_name').val(data.cate_name);
        $('#cate_slug_url').val(data.cate_slug_url);
        $('#cate_font_icon').val(data.cate_font_icon);
        $("#cate_status option[value='"+data.cate_status+"']").prop('selected', true);
        //$('input:radio[name="gender"]').filter('[value="'+data.gender+'"]').attr('checked', true);
        //$('#country').val(data.country);
    }, "json");
}
// Actions on modal show and hidden events
$(function(){
    $('#categoryAddEditModal').on('show.bs.modal', function(e){
        var type = $(e.relatedTarget).attr('data-type');
        var userFunc = "userAction('add');";
        $('#hlabel').text('Add New Category');
        if(type == 'edit'){
            userFunc = "userAction('edit');";
            var rowId = $(e.relatedTarget).attr('rowID');
            editCategory(rowId);
            $('#hlabel').text('Edit Category');
        }
        $('#userSubmitCateData').attr("onclick", userFunc);
    });
    
    $('#categoryAddEditModal').on('hidden.bs.modal', function(){
        $('#userSubmitCateData').attr("onclick", "");
        $(this).find('form')[0].reset();
        $(this).find('.statusCategoryMsg').html('');
    });
});