<?php
    $footerItemList = [
        'Instagram',
        'Twitter',
        'YouTube',
        'Tiktok',
    ];
    $footerNavList = [
        'Column',
        'Contact',
        'Company',
        'Privacy Policy',
    ];
?>

<footer>
    <div class="footerInner">
        <img src="./img/footer/infinyty_energy_footer_1x.png" alt="Infinity Energy Footer">
        <div class="footerNavigationWrap">
            <ul class="footerItemList">
                <?php foreach ($footerItemList as $footerItem) : ?>
                    <li class="footerItem"><a href="#"><?php echo $footerItem; ?></a></li>
                <?php endforeach; ?>
            </ul>
            <ul class="footerNavList">
                <?php foreach ($footerNavList as $footerNav) : ?>
                    <li class="footerNav"><a href="#"><?php echo $footerNav; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <p class="footerCopy">&copy;INFINITY ENERGY, All Rights Reserved.</p>
    </div>
</footer>
