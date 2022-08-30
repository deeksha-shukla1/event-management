@extends('.layouts.app')

@section('content')
<div class="container-fluid">
	{{-- Content --}}
	<form method="POST" class="form" enctype="multipart/form-data" id="publishing-form">
	@csrf
		<div class="row">
			{{-- Editor Content --}}
			<div class="col-xl-10 col-lg-9 col-md-8 col-12">
			
				<!--begin::Title-->
				<div class="pb-13 pt-lg-0 pt-5 text-center">
					<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Add Event</h3>
				</div>
				<!--begin::Title-->
				<!--begin::Form group-->
				<div class="form-group col-8 ">
					<label class="font-size-h6 font-weight-bolder text-dark">Event Name</label>
					<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="text" name="event_name" autocomplete="off" />
				</div>
				<div class="form-group col-8 ">
					<label for="event_description">Event Description:</label>
					<textarea class="form-control" rows="5" id="event_description"></textarea>
				</div>
				<div class="form-group col-xl-10 col-lg-4 col-md-8 col-12">
					<label class="font-size-h6 font-weight-bolder text-dark">Start Date</label>
					<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="date" name="event_description" autocomplete="off" />
				</div>
				<div class="form-group col-xl-10 col-lg-4 col-md-8 col-12">
					<label class="font-size-h6 font-weight-bolder text-dark">End Date</label>
					<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="date" name="event_description" autocomplete="off" />
				</div>
				<div class="form-group col-8 ">
					<label class="font-size-h6 font-weight-bolder text-dark">Organizer Name:</label>
					<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="text" name="organizer_name" autocomplete="off" />
				</div>
				<!--end::Form group-->
				
				<!--begin::Action-->
				<div class="pb-lg-0 pb-5">
					<button type="submit"  class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Save Event</button>
				</div>
				<!--end::Action-->
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>
@endsection
