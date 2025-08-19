<div id="menu" class="menu">
    <ul>
        {@li}
    </ul>
</div>

<script>
    const menu = document.getElementById('menu');
    const nav = document.querySelectorAll('.menu ul li');

    nav.forEach(el => {
        el.addEventListener('click', (e) => {
            e.preventDefault();

            el.children[1].classList.toggle('show');
        })
    });

</script>