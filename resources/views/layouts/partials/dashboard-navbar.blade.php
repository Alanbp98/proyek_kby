<!-- begin::navbar -->
<nav>
    <div class="logo">
        <img src="../assets/img/Logo KBY.png" alt="">
    </div>
    <ul>
        <li>
            <img src="../assets/img/profile.png" alt="">
            <p>{{ auth()->user()->name }}</p>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="post" id="form-logout">
            <a href="#" onclick="document.querySelector('#form-logout').submit()">
                <img src="../assets/img/logout.png" alt="">
                Keluar
            </a>
            @csrf
            </form>
        </li>
    </ul>
</nav>
<!-- end::navbar -->
</body>
</html>