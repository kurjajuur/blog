<h1>User '<?= $user['username'] ?>'</h1>
<table class="table table-bordered">
    <tr>
        <th>Username</th>
        <td><?= $user['username'] ?></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><?= $user['password'] ?></td>
    </tr>
    
</table>
<!-- EDIT BUTTON -->
<form action="users/edit/<?= $user['username'] ?>">
    <button class="btn btn-default">
        Edit <?= $user['username'] ?>
    </button>
</form>