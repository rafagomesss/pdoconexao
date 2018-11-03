<h2>Atualizar User</h2>

<form action="/user_update" method="POST" role="form">
	<legend>Form title</legend>

	<div class="form-group">
		<label for="">
			Nome
			<input type="text" name="name" class="form-control" value="<?=$userEncontrado->name?>">
		</label>
	</div>

	<div class="form-group">
		<label for="">
			Email
			<input type="email" name="email" class="form-control" value="<?=$userEncontrado->email?>">
		</label>
	</div>

	<div class="form-group">
		<label for="">
			Password
			<input type="password" name="password" class="form-control" value="<?=$userEncontrado->password?>">
		</label>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>