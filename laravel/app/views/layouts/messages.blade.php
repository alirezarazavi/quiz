@if(Session::has('message-info'))
	<div class="callout primary message-box" data-closable>
		<h6>{{ Session::get('message-info') }}</h6>
		<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

@elseif(Session::has('message-error'))
	<div class="callout alert message-box" data-closable>
		<h6>{{ Session::get('message-error') }}</h6>
		<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

@elseif(Session::has('message-success'))
	<div class="callout success message-box" data-closable>
		<h6>{{ Session::get('message-success') }}</h6>
		<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

@elseif($errors->has())
	<div class="callout secondary message-box {{ Session::get('alert-class', 'message-error') }}" data-closable>
		@foreach ($errors->all() as $error)
			<h6>{{ $error }}</h6>
		@endforeach
		<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

@endif