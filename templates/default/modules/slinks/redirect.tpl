You will be redirected to link <u>{LINK}</u> in <span id="counter">20</span> seconds...

<script type="text/JavaScript">
    var delay = 20;
    counter = document.getElementById('counter');
    var int = setInterval(function(){
        delay--;
        counter.innerHTML = delay;
        if(delay == 0){
            clearInterval(int);
            location.href = '{LINK}';
        }
    }, 1000);
</script>