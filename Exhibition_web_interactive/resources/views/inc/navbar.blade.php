<style>
    #menu.navbar-default {
        background-color: #fff;
        border-color: rgba(231, 231, 231, 0);
        box-shadow: 0 0 10px rgba(0,0,0,0.15)
    }
    #menu {
        /*overflow: hidden;*/
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 99999999;
    }
    .collapse{
        color: red;
    }

</style>
<nav id="menu" class="navbar-default" style="padding: 5px;
        transition: all 0.8s;">
        <div class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">
            <div style="width:40px;">
                LOGO
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="nav navbar-nav navbar-right mr-3">
                    <li>
                        <a class="nav-link" href="/show">HOME</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right mr-3">
                    <li>
                        <a class="nav-link" href="/work">Creator</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right mr-3">
                    <li>
                        <a class="nav-link" href="/work">Exhibition</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right mr-3">
                    <li>
                        <a class="nav-link" href="/work">Thank You</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right mr-3">
                    <li>
                        <a class="nav-link" href="/work">Contact</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right mr-3">
                    <li>
                        <a class="nav-link" href="/createContent" style="color:red;">Create_Content</a>
                    </li>
                </ul>
                   
                  
               </div>
        </div>
</nav>


