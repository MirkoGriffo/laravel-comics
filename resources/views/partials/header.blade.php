<header class="main-header">
    <div class="container">
    <ul>
        <li><img src="{{ asset('images/dc-logo.png') }}" alt=""></li>


                <li><a href="" class="active">Comics</a></li>
                <li><a href="">News</a></li>
            </ul>
        </nav>
    </div>
</header>

<style>

    header {
        height: 130px;
       padding: 15px;
    }

ul {
    list-style: none;
    display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  align-items: center;
}

ul li a{
    text-transform: uppercase;
    text-decoration: none;
    color: black;
    font-weight: 800;
    margin-left: 70px;

}

.active {
    color: #1C7CEC;
}

</style>
