<div class="small-4 columns">
	<div class="callout success">
		<h6>لیست کاربرها</h6>
		<dl>
			@foreach($allUsers as $user)
				<dd><a href="admin/user?uid={{$user->id}}">{{$user->username}}</a></dd>
			@endforeach
		</dl>
	</div>
</div>