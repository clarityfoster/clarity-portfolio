<nav class="nav-bar">
    <a class="logo" href="{{ route('index') }}">Clarity</a>
    <div class="nav-menu">
        <a class="nav-items essence-nav" href="">
            <li>
                <span class="nav-icon"><i class="fa-solid fa-user-tie me-2"></i></span>
                Essence
            </li>
        </a>
        <a class="nav-items" href="">
            <li>
                <span class="nav-icon"><i class="fa-solid fa-lightbulb me-2"></i></i></span>
                Abilities
            </li>
        </a>
        <a class="nav-items" href="">
            <li>
                <span class="nav-icon"><i class="fa-solid fa-clipboard-check me-2"></i></span>
                Projects
            </li>
        </a>
        <a class="nav-items" href="">
            <li>
                <span class="nav-icon"><i class="fa-solid fa-paper-plane me-2"></i></span>Contact
            </li>
        </a>
    </div>
    <a href="#" id="toggle" class="toggle main-brown fs-4">
        <i class="bi bi-grid"></i>
    </a>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.getElementById('toggle');
        const navMenu = document.querySelector('.nav-menu');
        toggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });
        console.log( toggle, navMenu)
    })
</script>