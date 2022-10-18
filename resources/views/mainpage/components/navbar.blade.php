<!-- navigation -->
<header class="navigation fixed-top">
    <div class="container">
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <a class="navbar-brand order-1" href="/">
                Portal News
            </a>


            <div class="order-2 order-lg-5 d-flex align-items-center">
                <div class="container">
                    <a class="nav-link" href="/login">Login</a>
                </div>

                <!-- search -->
                <form action="/" class="search-bar">
                    <input id="search-query" name="search" type="search" value="{{ request('search') }}"
                        placeholder="Type &amp; Hit Enter...">
                </form>
            </div>

        </nav>
    </div>
</header>
<!-- /navigation -->
