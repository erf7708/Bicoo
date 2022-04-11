@extends('admin.layouts.main')


@section('content')
	
	<div class="col-12 bg-white">
		<p class="box__title">ویرایش دسته بندی <b>{{$category->title_fa}}</b></p>
		@if ($errors->any())
			<div class="text-error text ">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<form action="{{route('category.update',$category->id)}}" method="post" class="padding-30">
			@csrf
			@method('PATCH')
			<input type="text" placeholder="نام دسته بندی" class="text" name="title_fa" value="{{$category->title_fa}}">
			<input type="text" placeholder="نام انگلیسی دسته بندی" class="text" name="title_en" value="{{$category->title_en}}">
			<p class="box__title margin-bottom-15">انتخاب دسته پدر</p>
			<select name="category_id" id="">
				<option  selected>ندارد</option>
				
				@foreach($categories as $parent)
					@if($parent->id == $category->id)
						selected
						@endif
					<option @if($parent->id == $category->id)
					selected
							@endif value="{{$parent->id}}">{{$parent->title_fa}}</option>
				@endforeach
			</select>
			<button class="btn btn-brand">ویرایش کردن</button>
		</form>
	</div>
	@endsection