<div class="col-4 bg-white">
	<p class="box__title">ایجاد دسته بندی جدید</p>
	@include('admin.layouts.error')
	<form action="{{route('category.store')}}" method="post" class="padding-30">
		@csrf
		<input type="text" placeholder="نام دسته بندی" class="text" name="title_fa">
		<input type="text" placeholder="نام انگلیسی دسته بندی" class="text" name="title_en">
		<p class="box__title margin-bottom-15">انتخاب دسته پدر</p>
		<select name="category_id" id="">
			<option  selected value>ندارد</option>
			@foreach($categories as $parent)
				<option value="{{$parent->id}}">{{$parent->title_fa}}</option>
			@endforeach
		</select>
		<button class="btn btn-brand">اضافه کردن</button>
	</form>
</div>