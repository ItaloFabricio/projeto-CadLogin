<?php $flash = Flash::get(); ?>
<?php if ($flash): ?>
    <div class="flash flash-<?= htmlspecialchars($flash['type']) ?>" role="alert">
        <span><?= htmlspecialchars($flash['message']) ?></span>
        <button type="button" class="flash-close" aria-label="Fechar">&times;</button>
    </div>
    <script>
        (function () {
            const el = document.querySelector('.flash');
            const close = () => {
                el.classList.add('hide');
                setTimeout(() => el.remove(), 300);
            };
            el.querySelector('.flash-close').addEventListener('click', close);
            setTimeout(close, 4000);
        })();
    </script>
<?php endif; ?>