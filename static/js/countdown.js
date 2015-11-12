(function () {

    // set the date we're counting down to
    var target_date = new Date("Nov 13, 2015 10:00").getTime();

    // variables for time units
    var days, hours, minutes, seconds;

    function calc() {
        // find the amount of "seconds" between now and target
        var current_date = new Date().getTime();
        var seconds_left = (target_date - current_date) / 1000;
        if (seconds_left < 0) {
            //$('.timeTable').html("ההאתקון התחיל");
            days=hours=minutes=seconds=0;
        } else {
            days = parseInt(seconds_left / 86400);
            seconds_left = seconds_left % 86400;

            hours = parseInt(seconds_left / 3600);
            seconds_left = seconds_left % 3600;

            minutes = parseInt(seconds_left / 60);
            seconds = parseInt(seconds_left % 60);
        }

        // get tag element
        var countdown = $('.timeTable');
        var countdown_days = countdown.find('.days');
        var countdown_hours = countdown.find('.hours');
        var countdown_minutes = countdown.find('.minutes');
        var countdown_seconds = countdown.find('.seconds');

        countdown_days.html(days);
        countdown_hours.html(hours);
        countdown_minutes.html(minutes);
        countdown_seconds.html(seconds);
    }

    calc();

    setInterval(function () {
        calc();

    }, 1000);

})();