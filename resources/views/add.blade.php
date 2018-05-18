@extends('layouts.asklayout')

@section('content')
    <div style="  background: linear-gradient(-45deg,#00b1b3,#1d5086);">


        <div class="container-fluid "
             style="
         background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAAUVBMVEWFhYWDg4N3d3dtbW17e3t1dXWBgYGHh4d5eXlzc3OLi4ubm5uVlZWPj4+NjY19fX2JiYl/f39ra2uRkZGZmZlpaWmXl5dvb29xcXGTk5NnZ2c8TV1mAAAAG3RSTlNAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEAvEOwtAAAFVklEQVR4XpWWB67c2BUFb3g557T/hRo9/WUMZHlgr4Bg8Z4qQgQJlHI4A8SzFVrapvmTF9O7dmYRFZ60YiBhJRCgh1FYhiLAmdvX0CzTOpNE77ME0Zty/nWWzchDtiqrmQDeuv3powQ5ta2eN0FY0InkqDD73lT9c9lEzwUNqgFHs9VQce3TVClFCQrSTfOiYkVJQBmpbq2L6iZavPnAPcoU0dSw0SUTqz/GtrGuXfbyyBniKykOWQWGqwwMA7QiYAxi+IlPdqo+hYHnUt5ZPfnsHJyNiDtnpJyayNBkF6cWoYGAMY92U2hXHF/C1M8uP/ZtYdiuj26UdAdQQSXQErwSOMzt/XWRWAz5GuSBIkwG1H3FabJ2OsUOUhGC6tK4EMtJO0ttC6IBD3kM0ve0tJwMdSfjZo+EEISaeTr9P3wYrGjXqyC1krcKdhMpxEnt5JetoulscpyzhXN5FRpuPHvbeQaKxFAEB6EN+cYN6xD7RYGpXpNndMmZgM5Dcs3YSNFDHUo2LGfZuukSWyUYirJAdYbF3MfqEKmjM+I2EfhA94iG3L7uKrR+GdWD73ydlIB+6hgref1QTlmgmbM3/LeX5GI1Ux1RWpgxpLuZ2+I+IjzZ8wqE4nilvQdkUdfhzI5QDWy+kw5Wgg2pGpeEVeCCA7b85BO3F9DzxB3cdqvBzWcmzbyMiqhzuYqtHRVG2y4x+KOlnyqla8AoWWpuBoYRxzXrfKuILl6SfiWCbjxoZJUaCBj1CjH7GIaDbc9kqBY3W/Rgjda1iqQcOJu2WW+76pZC9QG7M00dffe9hNnseupFL53r8F7YHSwJWUKP2q+k7RdsxyOB11n0xtOvnW4irMMFNV4H0uqwS5ExsmP9AxbDTc9JwgneAT5vTiUSm1E7BSflSt3bfa1tv8Di3R8n3Af7MNWzs49hmauE2wP+ttrq+AsWpFG2awvsuOqbipWHgtuvuaAE+A1Z/7gC9hesnr+7wqCwG8c5yAg3AL1fm8T9AZtp/bbJGwl1pNrE7RuOX7PeMRUERVaPpEs+yqeoSmuOlokqw49pgomjLeh7icHNlG19yjs6XXOMedYm5xH2YxpV2tc0Ro2jJfxC50ApuxGob7lMsxfTbeUv07TyYxpeLucEH1gNd4IKH2LAg5TdVhlCafZvpskfncCfx8pOhJzd76bJWeYFnFciwcYfubRc12Ip/ppIhA1/mSZ/RxjFDrJC5xifFjJpY2Xl5zXdguFqYyTR1zSp1Y9p+tktDYYSNflcxI0iyO4TPBdlRcpeqjK/piF5bklq77VSEaA+z8qmJTFzIWiitbnzR794USKBUaT0NTEsVjZqLaFVqJoPN9ODG70IPbfBHKK+/q/AWR0tJzYHRULOa4MP+W/HfGadZUbfw177G7j/OGbIs8TahLyynl4X4RinF793Oz+BU0saXtUHrVBFT/DnA3ctNPoGbs4hRIjTok8i+algT1lTHi4SxFvONKNrgQFAq2/gFnWMXgwffgYMJpiKYkmW3tTg3ZQ9Jq+f8XN+A5eeUKHWvJWJ2sgJ1Sop+wwhqFVijqWaJhwtD8MNlSBeWNNWTa5Z5kPZw5+LbVT99wqTdx29lMUH4OIG/D86ruKEauBjvH5xy6um/Sfj7ei6UUVk4AIl3MyD4MSSTOFgSwsH/QJWaQ5as7ZcmgBZkzjjU1UrQ74ci1gWBCSGHtuV1H2mhSnO3Wp/3fEV5a+4wz//6qy8JxjZsmxxy5+4w9CDNJY09T072iKG0EnOS0arEYgXqYnXcYHwjTtUNAcMelOd4xpkoqiTYICWFq0JSiPfPDQdnt+4/wuqcXY47QILbgAAAABJRU5ErkJggg==);
-webkit-box-shadow: inset 0px -26px 100px 0px rgba(0,0,0,0.38);
box-shadow: inset 0px -26px 100px 0px rgba(0,0,0,0.38);">
            <div class="row">
                <div class="col-lg-12" style="background-color: black;opacity: 0.35;color: white;height: 50px; ">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11" style="color:white;margin-top: -40px;font-weight: bolder">
                    <a href="/question" style="color: white">
                        <img src="http://ask.local/imgs/logo_euro.png" alt="logo"> <b>E</b><i>uro</i><b>COMPUTER</b>
                    </a>

                </div>

                @auth()
                    <div class="col-lg-1 text-right" style="color:white;margin-top: -35px;font-weight: bolder">
                        <a href="/add"><i class="fa fa-plus" style="color:white"> </i></a>
                    </div>
                @endauth
            </div>
            <div class="row justify-content-center">
                <div class="col-12 p-4 d-inlne-block"
                     style=" text-align: center;  color: #fff; min-height: 400px;  font-size: 1.5em; "
                >
                    <br><br>
                    <span style="font-size: 3em; font-weight: bolder ; display: inline-block">
                        <span style="font-weight: lighter;">#</span> Ask <span style="font-weight: lighter">me ... </span>
                    </span>
                    <span class="d-inlne-block ml-4" >
                        <i class="fa fa-comment fa-3x "> </i>
                    </span>
                </div>
            </div>
        </div>

    </div>



    <div
            class="container"
            style="
            margin-top:-150px ;
            background-color: white;
            -webkit-box-shadow: 3px 0px 31px 0px rgba(0,0,0,0.25);
            -moz-box-shadow: 3px 0px 31px 0px rgba(0,0,0,0.25);
            box-shadow: 3px 0px 31px 0px rgba(0,0,0,0.25);
            ">

        <form action="/post" method="post">
            <br>
           {{csrf_field()}}
            <div class="row">
                <div class="col-lg-12">
                    <input class="form-control" autofocus type="text" name="title" placeholder="Titre du post" required>
                    <br>
                    <textarea placeholder="Explication de la note technique" class="form-control" name="content" id="" cols="30" rows="10" required></textarea>
                </div>
            </div>




            <br>
            <div class="row">
                <div class="col-lg-12 text-right">
                    <input type="submit" value="Ajouté" class="btn btn-primary ">
                    <br>
                    <br>
                </div>
            </div>


        </form>
    </div>

    <back-top></back-top>
@endsection
