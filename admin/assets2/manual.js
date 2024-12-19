/*------------Start Current Tab Active---------*/
$(document).ready(function(){

    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
    } 

    
    /*------------Start Flash Message SCRIPT---------*/
	
    $(window).bind("load", function() {
        window.setTimeout(function() {
            $(".admin-msg").fadeTo(2000, 0).slideUp(2000, function(){
                $(this).remove();
            });
        }, 1000);
    });

    /*--- Get State List ---*/
    $(".country_id").on("change", function(){
        var country_id = $(this).val();
        var base_url = $(this).attr("url");
        $.ajax({
            method:"POST",
            url:base_url+"city/get_state",
            data:{country_id:country_id},
            dataType:"json",
            success:function(data){
                if(data.state!=''){
                    var i=0;
                    var prHtm='';
                    prHtm +='<option value="">Select State</option>';
                    for(var key in data.state){
                        prHtm +='<option value='+data.state[i].id+'>'+data.state[i].name+'</option>';
                        i++;
                    }
                    
                    $(".state_id").html(prHtm);
                    $(".state_id").attr('disabled',false);
                    $(".cityname").attr('readonly',false);
                    $("#btnAddCity").attr('disabled', false);
                }else{
                    $(".state_id").html("No Record Found!.");
                    $(".state_id").attr('disabled',true);
                    $(".cityname").attr('readonly',true);
                    $("#btnAddCity").attr('disabled', true);
                }
            }
        });
    });

    /*--- UPDATE MEMBERS STATUS ---*/
    $(".btnApproved").click(function(){
        var memberId=$(this).attr("profileid");
        var site_url=$("#site_url").val();
        var currentUrl=$("#current_url").val();
        var activityValue=$(this).attr("activity");
        $.ajax({
            method:'POST',
            url:site_url+'members/verifyMember',
            data:{memberId:memberId,activityValue:activityValue},
            beforeSend:function(){
                $(".btnApproved").html('wait..');
            },
            success:function(response){
                if(response=="done"){
                    window.location.href=currentUrl;
                }else{
                    window.location.href=currentUrl;
                }
            }
        });
    });
    $(".btnSuspended").click(function(){
        var memberId=$(this).attr("profileid");
        var site_url=$("#site_url").val();
        var currentUrl=$("#current_url").val();
        var activityValue=$(this).attr("activity");
        $.ajax({
            method:'POST',
            url:site_url+'members/verifyMember',
            data:{memberId:memberId,activityValue:activityValue},
            beforeSend:function(){
                $(".btnSuspended").html('wait..');
            },
            success:function(response){
                if(response=="done"){
                    window.location.href=currentUrl;
                }else{
                    window.location.href=currentUrl;
                }
            }
        });
    });
    $(".btnBlocked").click(function(){
        var memberId=$(this).attr("profileid");
        var site_url=$("#site_url").val();
        var currentUrl=$("#current_url").val();
        var activityValue=$(this).attr("activity");
        $.ajax({
            method:'POST',
            url:site_url+'members/verifyMember',
            data:{memberId:memberId,activityValue:activityValue},
            beforeSend:function(){
                $(".btnBlocked").html('wait..');
            },
            success:function(response){
                if(response=="done"){
                    window.location.href=currentUrl;
                }else{
                    window.location.href=currentUrl;
                }
            }
        });
    });

});

/*------------Start Slug Url SCRIPT---------*/
function slug_url(get,id)
{
    var  data=$.trim(get);
    var string = data.replace(/[^A-Z0-9]/ig, '-')
                    .replace(/\s+/g, '-') // collapse whitespace and replace by -
                    .replace(/-+/g, '-'); // collapse dashes;
    var finalvalue=string.toLowerCase();
    document.getElementById(id).value=finalvalue;
}

/*------------Start Model PopUp  SCRIPT---------*/
function showMyModalSetTitle(type,url,id) {

    var popup = '<div class="modal fade"id="exampleModal-2"tabindex="-1"role="dialog"aria-labelledby="exampleModalLabel-2"aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"id="exampleModalLabel-2">Do You Want To '+type+' ?</h5><button type="button"class="close"data-dismiss="modal"aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><p>Are you sure you want to '+type+' this ?</p></div><div class="modal-footer"><a href="'+url+id+'" class="btn btn-success">Yes</a><button type="button"class="btn btn-light"data-dismiss="modal">Cancel</button></div></div></div></div>';
     
    $(popup).modal('show');
}