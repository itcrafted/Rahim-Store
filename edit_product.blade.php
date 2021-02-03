@extends('layouts.app')
@section('indexcontent')

<!---------------start------------------->
<div class="page_title">
		<span class="title_icon"><span class="computer_imac"></span></span>
		<h3>Dashboard</h3>
		<div class="top_search">
			<form action="#" method="post">
				<ul id="search_box">
					<li>
					<input name="" type="text" class="search_input" id="suggest1" placeholder="Search...">
					</li>
					<li>
					<input name="" type="submit" value="" class="search_btn">
					</li>
				</ul>
			</form>
		</div>
	</div>
<!---------------end------------------->


	
	<!---------------srart-------------------->

			<div class="grid_12">
						<div class="">
				<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list_image"></span>
						<h6>Edit Product</h6>
					</div>
					<div class="widget_content">
						
      <form action="{{ route('rahim.update',$edit_product->id)}}" name="rahim" method="POST" class="form_container" enctype="multipart/form-data">
								@csrf
							<ul>
								<li>
								<div class="form_grid_12">
									<div class="form_input">
										<div class="form_grid_4 alpha">
										<span class=" label_intro">Name <span class="required">* </span>@error('name'){{ $message }}@enderror</span>
											<input name="name" type="text" id="name" value="{{$edit_product->name}}"/>
										</div>
										<div class="form_grid_4">
										<span class=" label_intro">Price <span class="required">*</span></span>
											<input name="price" type="text" id="price" value="{{$edit_product->price}}"/>
										</div>
										<div class="form_grid_4">
										<span class=" label_intro">Expiry Date <span class="required">*</span></span>
											<input name="expiry_date" type="text" id="expiry_date" value="{{$edit_product->expiry_date}}"/>
										</div>
								</div>
        <span class="clear"></span><br>
								</li> 
								<div class="form_grid_12">
									<div class="form_input">
										<button type="submit" class="btn_small btn_blue"><span>Update</span></button>
									</div>
								</li>
							</ul>
						</form>
						
					</div>
				</div>
  </div>
		</div>
   <!--start-- -------------->
					</div>
				</div>
			</div>
			<span class="clear"></span>
		</div>
		<span class="clear"></span>
	</div>
	<!---------------end------------------->

<script type="text/javascript">
$(function() {
  $("form[name='rahim']").validate({
    rules: {
      name: "required",
						price: "required",
						expiry_date: "required",
    },
    messages: {
      name: "Please Enter Name",
						price: "Please Enter Product Price",
						expiry_date: "Please enter valid Expire Date",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
@endsection