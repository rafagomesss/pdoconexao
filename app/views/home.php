<table class="table table-inverse">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th colspan="2" class="text-center">Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user): ?>
		<tr>
			<td><?=$user->id?></td>
			<td><?=$user->name?></td>
			<td class="text-center">
				<a href="/user_edit?id=<?=$user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="/user_destroy?id=<?=$user->id;?>" class="btn btn-danger btn-xs">Excluir</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>