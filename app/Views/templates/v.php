<!-- app/Views/templates/v_sidebar.php -->
<?php
$menus = get_sidebar_menu();
?>

<ul>
    <?php foreach ($menus as $menu): ?>
        <li><a href="<?= base_url($menu['url']) ?>"><?= $menu['label'] ?></a></li>
    <?php endforeach; ?>
</ul>
