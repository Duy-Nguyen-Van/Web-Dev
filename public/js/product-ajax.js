var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;


manageData();


/* manage data list */
function manageData() {
    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data){


    	total_page = data.last_page;
    	current_page = data.current_page;


    	$('#pagination').twbsPagination({
	        totalPages: total_page,
	        visiblePages: current_page,
	        onPageClick: function (event, pageL) {
	        	page = pageL;
                if(is_ajax_fire != 0){
	        	  getPageData();
                }
	        }
	    });


    	manageRow(data.data);
        is_ajax_fire = 1;
    });
}


$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});


/* Get Page Data*/
function getPageData() {
	$.ajax({
    	dataType: 'json',
    	url: url,
    	data: {page:page}
	}).done(function(data){
		manageRow(data.data);
	});
}


/* Add new product table row */
function manageRow(data) {
	var	rows = '';
	$.each( data, function( key, value ) {
	  	rows = rows + '<tr>';
	  	rows = rows + '<td>'+value.name+'</td>';
	  	rows = rows + '<td>'+value.category+'</td>';
        rows = rows + '<td>'+value.price+'</td>';
        rows = rows + '<td>'+value.image_url+'</td>';
	  	rows = rows + '<td data-id="'+value.id+'">';
                rows = rows + '<button data-toggle="modal" data-target="#edit-product" class="btn btn-primary edit-product">Edit</button> ';
                rows = rows + '<button class="btn btn-danger remove-product">Delete</button>';
                rows = rows + '</td>';
	  	rows = rows + '</tr>';
	});


	$("tbody").html(rows);
}


/* Create new product */
$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-product").find("form").attr("action");
    var name = $("#create-product").find("input[name='name']").val();
    var category = $("#create-product").find("input[name='category']").val();
    var price = $("#create-product").find("input[name='price']").val();
    var image_url = $("#create-product").find("input[name='image_url']").val();

    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data:{name:name, category:category, price:price, image_url:image_url}
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('product Created Successfully.', 'Success Alert', {timeOut: 5000});
    });


});


/* Remove product */
$("body").on("click",".remove-product",function(){
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");
    $.ajax({
        dataType: 'json',
        type:'delete',
        url: url + '/' + id,
    }).done(function(data){
        c_obj.remove();
        toastr.success('Product Deleted Successfully.', 'Success Alert', {timeOut: 5000});
        getPageData();
    });
});


/* Edit product */
$("body").on("click",".edit-product",function(){
    var id = $(this).parent("td").data('id');
    var name = $(this).parent("td").prev("td").prev("td").text();
    var category = $(this).parent("td").prev("td").text();
    var price = $(this).parent("td").prev("td").prev("td").text();
    var image_url = $(this).parent("td").prev("td").prev("td").text();
    $("#edit-product").find("input[name='name']").val(name);
    $("#edit-product").find("input[name='category']").val(category);
    $("#edit-product").find("input[name='price']").val(price);
    $("#edit-product").find("input[name='image_url']").val(image_url);
    $("#edit-product").find("form").attr("action",url + '/' + id);
});


/* Updated new product */
$(".crud-submit-edit").click(function(e){
    e.preventDefault();
    var form_action = $("#edit-product").find("form").attr("action");
    var name = $("#edit-product").find("input[name='name']").val();
    var category = $("#edit-product").find("input[name='category']").val();
    var price = $("#edit-product").find("input[name='price']").val();
    var image_url = $("#edit-product").find("input[name='image_url']").val();
    $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:{name:name, category:category, price:price, image_url:image_url}
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('product Updated Successfully.', 'Success Alert', {timeOut: 5000});
    });
});