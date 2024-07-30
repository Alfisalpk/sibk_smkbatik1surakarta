<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Role Selection</title>
</head>
<body>
    <h1>Role List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Role Name</th>
                <th>Role Description</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($roles) && is_array($roles)): ?>
                <?php foreach ($roles as $role): ?>
                    <tr>
                        <td><?= esc($role['id']); ?></td>
                        <td><?= esc($role['role_name']); ?></td>
                        <td><?= esc($role['role_description']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No roles available</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
