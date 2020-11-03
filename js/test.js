function Clock(){
    setInterval(
         function(){ 
            var now = new Date(), // current date
            months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November']; // you get the idea
            var time = now.toLocaleTimeString();
            // time = now.getHours() + ':' + now.getMinutes(), // again, you get the idea
    
            // a cleaner way than string concatenation
            date = [now.getDate(), months[now.getMonth()], now.getFullYear()].join(' ');

            document.getElementById('time').innerHTML = [date, time].join(' / ');
            }, 1000 );
}
Clock();