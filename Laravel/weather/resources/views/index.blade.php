<!DOCTYPE html>
<html>
<head>
    <title>WEATHER IN VIET NAM</title>
    <!-- For-Mobile-Apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //For-Mobile-Apps -->
    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
    <!-- Style -->
    <!-- JavaScript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Javascript -->

    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
                h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
    </script>
    <!--Google Analytics Designmaz-->
    <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-35751449-15', 'auto');ga('send', 'pageview');</script>
</head>
</head>
<body onload="startTime()">

<h1>WEATHER IN VIET NAM</h1>
<h5>
<form method="post" action="{{route('Search')}}">
    @csrf
<select name = "cityID">
    @foreach($cities as $key => $city)
        <option value="{{$city->id}}">{{$city->name}}</option>
    @endforeach

</select>
    <button type = "submit">Xem</button>
</form>
</h5>
<div class="content">

    <div class="place">

        <div id="txt"></div>

        <div class="dmy">
            <script type="text/javascript">
                var mydate=new Date()
                var year=mydate.getYear()
                if(year<1000)
                    year+=1900
                var day=mydate.getDay()
                var month=mydate.getMonth()
                var daym=mydate.getDate()
                if(daym<10)
                    daym="0"+daym
                var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
                var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
                document.write(""+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"")
            </script>
        </div>

        <div class="city">
            <p>{{$cityName}}, Vietnam</p>
        </div>

    </div>

    <div class="temp">

{{--        <div id="dd1" class="wrapper-dropdown-3" tabindex="1">--}}

{{--			<span>--}}
{{--			<img src="images/nav.png" alt=""/>--}}
{{--			</span>--}}

{{--            <ul class="dropdown">--}}

{{--                <li><a href="#">TODAY</a></li>--}}
{{--                <li><a href="#">FORECAST</a></li>--}}
{{--                <li><a href="#">CITIES</a></li>--}}
{{--                <li><a href="#">NATIONAL</a></li>--}}
{{--                <li><a href="#">WORLD</a></li>--}}
{{--                <li><a href="#">SETTINGS</a></li>--}}

{{--            </ul>--}}

{{--            <script type="text/javascript">--}}

{{--                function DropDown(el) {--}}
{{--                    this.dd = el;--}}
{{--                    this.initEvents();--}}
{{--                }--}}
{{--                DropDown.prototype = {--}}
{{--                    initEvents : function() {--}}
{{--                        var obj = this;--}}

{{--                        obj.dd.on('click', function(event){--}}
{{--                            $(this).toggleClass('active');--}}
{{--                            event.stopPropagation();--}}
{{--                        });--}}
{{--                    }--}}
{{--                }--}}
{{--                $(function() {--}}
{{--                    var dd = new DropDown( $('#dd1') );--}}
{{--                    $(document).click(function() {--}}
{{--                        // all dropdowns--}}
{{--                        $('.wrapper-dropdown-3').removeClass('active');--}}
{{--                    });--}}
{{--                });--}}

{{--            </script>--}}

{{--        </div>--}}

        <p>{{round($main->temp-273)}}° C</p>

        <div class="day">

            <div class="sat">
                <h3></h3>
                <p>Temp <br>{{round($main->temp-273)}}° C</p>
            </div>

            <div class="sund">
                <h3></h3>
                <p>Pressure <br>{{round($main->pressure)}}</p>
            </div>

            <div class="mon">
                <h3></h3>
                <p>Humidity <br>{{round($main->humidity)}} %</p>
            </div>

            <div class="clear"></div>

        </div>

    </div>

    <div class="clear"></div>

</div>

</body>
</html>
