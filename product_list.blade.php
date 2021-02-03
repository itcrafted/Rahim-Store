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
	<div id="content">
		<div class="grid_container">
			<span class="clear"></span>
			<div class="grid_12">
				<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon blocks_images"></span>
						<h6>Product</h6>
						<div id="widget_tab">
        <div class="btn_30_light" id="btnShow">
            <a><span class="icon add_co"></span></a>
        </div>
						</div>
					</div>
					<div class="widget_content">
						
						<div id="action_tbl_wrapper" class="dataTables_wrapper" role="grid"><div class="table_content"><div id="action_tbl_wrapper" class="dataTables_wrapper" role="grid"><div class="table_content"><table class="display dataTable" id="action_tbl">
						<thead>
						<tr role="row" class="selected"><th class="center sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 32px;" aria-label="
								<input name=&quot;checkbox&quot; type=&quot;checkbox&quot; value=&quot;&quot; class=&quot;checkall&quot;>
							">
								<input name="checkbox" type="checkbox" value="" class="checkall">
							</th><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="action_tbl" rowspan="1" colspan="1" style="width: 27px;" aria-sort="ascending" aria-label="
								 Id
							: activate to sort column descending">
								 Id
							</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="action_tbl" rowspan="1" colspan="1" style="width: 120px;" aria-label="
								 Task
							: activate to sort column ascending">
								 Name
							</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="action_tbl" rowspan="1" colspan="1" style="width: 109px;" aria-label="
								 Dead Line
							: activate to sort column ascending">
								 Price
							</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="action_tbl" rowspan="1" colspan="1" style="width: 99px;" aria-label="
								 Priority
							: activate to sort column ascending">
								 Enty Date
							</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="action_tbl" rowspan="1" colspan="1" style="width: 107px;" aria-label="
								 Status
							: activate to sort column ascending">
         Expiry Date
							</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="action_tbl" rowspan="1" colspan="1" style="width: 127px;" aria-label="
								 Complete Date
							: activate to sort column ascending">
								 Stored At
							</th><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 115px;" aria-label="
								 Action
							">
								 Action
							</th></tr>
						</thead>
						<tbody role="alert" aria-live="polite" aria-relevant="all">
						@foreach ($products as $key => $product)
						<tr class="odd">
							<td class="center tr_select   ">
								<input name="checkbox" type="checkbox" value="">
							</td>
							<td class="  sorting_1">
								<a href="#">{{ $key+1 }}</a>
							</td>
							<td class="name_bold">
								<a href="" class="text">{{ $product->name }}</a>
							</td>
							<td class="sdate center  ">
								 {{ $product->price }}
							</td>
							<td class="center  ">
								<span class="">{{ $product->created_at }}</span>
							</td>
							<td class="center  ">
								{{ $product->expiry_date }}
							</td>
							<td class="center sdate  ">
							@if ($product->created_at==NULL)
							NO time Set
							@else
							{{ $product->created_at->diffForHumans()}}   
							@endif
							</td>

							<td class="center  ">
								<span><a class="action-icons c-edit" href="{{route('rahim.edit', $product->id )}}" original-title="Edit">Edit</a></span>
								<span><a class="action-icons c-delete" href="{{route('rahim.delete', $product->id )}}" original-title="delete">Delete</a></span>
							</td>
						</tr>
						@endforeach
						</tbody>
						</table></div></div></div></div>
					</div>
				</div>
			</div>
	<!---------------srart-------------------->

			<div class="grid_12">
						<div class="dialog" style="display: none">
				<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list_image"></span>
						<h6>Add Product</h6>
					</div>
					<div class="widget_content">
						
      <form action="{{ route('rahim.submit') }}" name="rahim" method="POST" class="form_container" enctype="multipart/form-data">
								@csrf
							<ul>
								<li>
								<div class="form_grid_12">
									<div class="form_input">
										<div class="form_grid_4 alpha">
										<span class=" label_intro">Name <span class="required">* </span>@error('name'){{ $message }}@enderror</span>
											<input name="name" type="text" id="name" placeholder="Please enter Name Hare" value="{{ old ('name')}}"/>
										</div>
										<div class="form_grid_4">
										<span class=" label_intro">Price <span class="required">*</span></span>
											<input name="price" type="text" id="price" value="{{ old ('price')}}"/>
										</div>
										<div class="form_grid_4">
										<span class=" label_intro">Expiry Date <span class="required">*</span></span>
											<input name="expiry_date" type="text" id="date" value="{{ old ('expiry_date')}}"/>
										</div>
								</div>
        <span class="clear"></span><br>
								</li> 
								<div class="form_grid_12">
									<div class="form_input">
										<button type="submit" class="btn_small btn_blue"><span>Submit</span></button>
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