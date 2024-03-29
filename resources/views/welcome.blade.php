<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');
.bg {
    width: 100%;
    height: auto;
    min-height: 100vh;
    background-image: url(http://i.imgur.com/w16HASj.png);
    background-size: 100% 100%;
    background-position: top center
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    font-family: 'Montserrat', sans-serif
}

body {
    padding: 10px
}

.topnav {
    background-color: #ffff;
    overflow: hidden
}

.far.fa-user-circle {
    font-size: 29px;
    color: #726f6f;
    padding-top: 10px
}

.input-10 {
    width: 40px;
    color: #4c4c96;
    font-weight: 600
}

.fas.fa-search {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: lightsalmon;
    height: 100%
}

.topnav a {
    float: left;
    display: block;
    color: #8d8b8b;
    font-weight: 800;
    font-size: 14px;
    text-transform: uppercase;
    padding: 14px 16px;
    text-decoration: none;
    border-bottom: 3px solid transparent
}

.topnav a:hover {
    color: black;
    border-bottom: 3px solid red
}

.topnav .active {
    color: black;
    border-bottom: 3px solid red
}

form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 90%;
    height: 36px;
    background: #fff
}

form.example input[type=text]:focus {
    outline: none
}

form.example button {
    float: left;
    width: 10%;
    height: 36px;
    padding: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    background: #4c4c96;
    color: white;
    font-size: 14px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer
}

.navbar-toggler:focus {
    box-shadow: none;
    outline: none;
    border: none
}

::placeholder {
    font-size: 10px
}

form.example button:hover {
    background: #0b7dda
}

form.example::after {
    content: "";
    clear: both;
    display: table
}

.container .table-responsive {
    margin: 20px auto;
    overflow-x: auto
}

.container .table-responsive::-webkit-scrollbar {
    height: 5px
}

.container .table-responsive::-webkit-scrollbar-thumb {
    border-radius: 5px;
    background-image: linear-gradient(to right, #5D7ECD, #0C91E6)
}

.table thead tr th {
    font-size: 11px;
    color: #868585;
    padding: 10px 10px
}

.table tbody tr td {
    font-size: 13.5px;
    padding: 10px 10px
}

#navbar {
    width: 20%;
    background-color: #21214e !important;
    height: 50px;
    border: none
}

.bg-blight {
    color: #7f7fee;
    font-weight: 600
}

.bg-bdark {
    color: #4c4c96;
    font-weight: 600
}

#navbar a {
    color: white
}

.fas.fa-bars {
    color: white
}

#navbar2 {
    width: 80%
}

#navbar-items {
    width: 20%;
    height: 500px;
    background-color: #4f4f8a
}

ul#navbar-items li {
    color: #b6b5b5;
    padding: 15px 25px;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 10px;
    display: flex;
    align-items: center
}

ul li .fas {
    font-size: 16px
}

ul#navbar-items li:hover {
    background-color: #21214e;
    color: white
}

ul li:hover .fas {
    color: #f7910c
}

#topnavbar {
    width: 80%
}

.fs13 {
    font-size: 22px
}

.fs14 {
    font-size: 30px;
    color: white
}

.fas.fa-times {
    color: red
}

.fas.fa-check {
    color: greenyellow
}

.example {
    width: 50%
}

@media(max-width:780px) {
    #navbar {
        width: 20%
    }

    #topnavbar {
        width: 80%
    }

    .text-decoration-none.fs14 {
        font-size: 5px
    }

    .text-decoration-none .fs13 {
        font-size: 5px
    }
}

@media(max-width:430px) {

    #navbar-items,
    #topnavbar {
        width: 100%;
        height: 100%
    }

    #navbar-items {
        padding: 20px;
        margin-bottom: 30px
    }

    .topnav a {
        font-size: 12px;
        padding: 12px
    }

    #navbar {
        width: 100%;
        background-color: blue
    }

    .example {
        width: 100%
    }

    .text-decoration-none.fs14 {
        font-size: 5px
    }

    .text-decoration-none .fs13 {
        font-size: 5px
    }
}

@media(max-width:376px) {
    #navbar-items {
        padding: 20px;
        margin-bottom: 30px
    }

    .topnav a {
        font-size: 12px;
        padding: 7px
    }
}

@media(max-width:320px) {
    .topnav a {
        font-size: 10px;
        padding: 4px
    }
}

</style>

<body>
    <div style="background=image: url('https://i.imgur.com/g63vXfd.jpg');">
    <div class="px-0 bg-light">
        <div class="d-flex">
            <div class="d-flex align-items-center " id="navbar"> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button> <a class="text-decoration-none fs14 ps-2" href="#">Arsys<span class="fs13 pe-2">.com</span></a> </div>
            <div id="navbar2" class="d-flex justify-content-end pe-4"> <span class="far fa-user-circle "></span> </div>
        </div>
        <div class="d-md-flex">
            <ul id="navbar-items" class="p-0">
                <li> <span class="fas fa-th-list"></span> <span class="ps-3 name">Dashboard</span> </li>
                <li> <span class="fas fa-chart-line"></span> <span class="ps-3 name"><a style="color:white;" href="/blog" >Review</a></span> </li>
            </ul>
            <div id="topnavbar">
                <div class="topnav mb-3">
                    <div class="d-flex px-1">   </div>
                </div>
                
                
            </div>
        </div>
    </div>
</body>