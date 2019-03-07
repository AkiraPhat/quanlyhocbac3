{{ csrf_field() }}
<div class="form-group m-form__group row">
	<input type="hidden" name="id" value="{{$hocsinhs->id}}">
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Tên học sinh:
	</label>
	<div class="col-lg-6">
		<input type="text" class="form-control m-input" name="tenhs" placeholder="Tên học sinh" value="{{old('practicerooms_name', $practiceroom->practicerooms_name)}}">
		@if(count($errors) > 0)
			<span class="text-danger">{{$errors->first('tenhs')}}</span>
		@endif
	</div>
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Ngày sinh:
	</label>
	<div class="col-lg-6">
		<input type="text" class="form-control m-input" name="birthday" placeholder="Ngày sinh" value="{{old('practicerooms_computer_numbers', $practiceroom->practicerooms_computer_numbers)}}">
		@if(count($errors) > 0)
			<span class="text-danger">{{$errors->first('ngaysinh')}}</span>
		@endif
	</div>
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Giới tính:
	</label>
	<div class="col-lg-6">
		<input type="text" class="form-control m-input" name="gioitinh" placeholder="Giới tính" value="{{old('practicerooms_name', $practiceroom->practicerooms_name)}}">
		@if(count($errors) > 0)
			<span class="text-danger">{{$errors->first('gioitinh')}}</span>
		@endif
	</div>
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Dân tộc:
	</label>
	<div class="col-lg-6">
		<input type="text" class="form-control m-input" name="dantoc" placeholder="Dân tộc" value="{{old('practicerooms_name', $practiceroom->practicerooms_name)}}">
		@if(count($errors) > 0)
			<span class="text-danger">{{$errors->first('tenhs')}}</span>
		@endif
	</div>
</div>
<div class="form-group m-form__group row">
	<label class="col-lg-2 col-form-label">
		Quê quán:
	</label>
	<div class="col-lg-6">
		<input type="text" class="form-control m-input" name="quequan" placeholder="Quê quán" value="{{old('practicerooms_name', $practiceroom->practicerooms_name)}}">
		@if(count($errors) > 0)
			<span class="text-danger">{{$errors->first('quequan')}}</span>
		@endif
	</div>
</div>
<div class="m-portlet__foot m-portlet__foot--fit">
	<div class="m-form__actions">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-10">
				<button type="submit" class="btn btn-success">
					Lưu lại
				</button>
				<button type="reset" class="btn btn-secondary">
					Hủy bỏ
				</button>
			</div>
		</div>
	</div>
</div>
<br>
