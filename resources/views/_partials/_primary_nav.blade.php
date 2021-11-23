<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav mr-auto p-2">
        <li class="nav-item">
            <a style="margin-left: .5em; margin-right: .5em" href="/home">
                <img src="{{asset('/img/icons/candle.svg')}}" width="50" height="50" alt="">
            </a>
        </li>
        <li class="nav-item">
            <a href="/home" class="nav-link"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
            <a href="/batch" class="nav-link"><i class="fas fa-vials"></i> Batch</a>
        </li>
        <li class="nav-item">
            <a href="/candle" class="nav-link"><i class="fas fa-vial"></i> Candle</a>
        </li>
        <li class="nav-item">
            <a href="/fragrance" class="nav-link"><i class="fas fa-tint"></i> Fragrance</a>
        </li>
        <li class="nav-item">
            <a href="/scent" class="nav-link"><i class="fas fa-tint"></i> Scent</a>
        </li>
        <li class="nav-item">
            <a href="/process" class="nav-link"><i class="fas fa-magic"></i> Process</a>
        </li>
        <li class="nav-item">
            <a href="/test" class="nav-link"><i class="fas fa-tasks"></i> Test</a>
        </li>
        <li class="nav-item">
            <a href="/jar" class="nav-link"><i class="fas fa-glass-whiskey"></i> Jar</a>
        </li>
        <li class="nav-item">
            <a href="/wick" class="nav-link"><i class="fas fa-broom fa-rotate-180"></i> Wick</a>
        </li>
        <li class="nav-item">
            <a href="/wax" class="nav-link"><i class="fas fa-fill-drip"></i> Wax</a>
        </li>
    </ul>
</nav>

<script>
    document.querySelector("darkmode-button").onclick = function(e){
        darkmode.toggleDarkMode();
    }
</script>
