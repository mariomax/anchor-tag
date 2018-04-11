<aside class="deskAside">

    <div id="weather"></div>
    <script>
        reallySimpleWeather.weather({
            wunderkey: '1a4236851c0b601c', //add your key
            location: 'Portland, OR',
            woeid: '',
            unit: 'f',
            success: function(weather) {
                html = '<p>' + weather.full + '</p>';
                html += '<h2>' + weather.temp + '°' + 'F</h2>';
                html += '<p>Currently: ' + weather.currently + '</p>';
                html += '<p>Wind: ' + weather.wind.direction + ' ' + weather.wind.speed + ' mph</p>';
                html += '<p>Humidity: ' + weather.humidity + '</p>'
                html += '<p>Feels like: ' + weather.feelslike_f + '</p>';
                document.getElementById('weather').innerHTML = html;
            },
            error: function(error) {
                document.getElementById('weather').innerHTML = '<p>' + error + '</p>';
            }
        });
    </script>
    <a class="twitter-timeline" href="https://twitter.com/pcccas222" data-height="500">Tweets by pcccas222</a>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <div class="fb-page" data-href="https://www.facebook.com/cas222cascade/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-height="500">
        <blockquote cite="https://www.facebook.com/cas222cascade/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cas222cascade/">CAS 222</a></blockquote>
    </div>

</aside>