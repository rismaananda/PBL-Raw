<?php $pager->setSurroundCount(2) ?>

<div class="page-btn">
    <?php if ($pager->hasPrevious()) : ?>

        <a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
            <span aria-hidden="true"><?= lang('Pager.first') ?></span>
        </a>

    <?php endif ?>

    <?php foreach ($pager->links() as $link) : ?>
        <a <?= $link['active'] ? 'class="active"' : '' ?>></a>
        <a class="page-link" href="<?= $link['uri'] ?>">
            <?= $link['title'] ?>
        </a>

    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>


        <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
            <span aria-hidden="true"><?= lang('Pager.last') ?></span>
        </a>

    <?php endif ?>
</div>