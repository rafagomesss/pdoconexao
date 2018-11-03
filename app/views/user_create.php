<h2>Cadastrar User</h2>

<form action="/user_store" method="POST" role="form">
	<legend>Form title</legend>

	<div class="form-group">
		<label for="">
			Nome
			<input type="text" name="name" class="form-control">
		</label>
	</div>

	<div class="form-group">
		<label for="">
			Email
			<input type="email" name="email" class="form-control">
		</label>
	</div>

	<div class="form-group">
		<label for="">
			Password
			<input type="password" name="password" class="form-control">
		</label>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>