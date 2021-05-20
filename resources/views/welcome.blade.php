{{--头部加入--}}
<meta name="csrf-token" content="{{ csrf_token() }}">
{{--引入app.js--}}
<script src="js/app.js"></script>
{{--监听并输出--}}
<script>
    //  news是频道 News是监听的事件名
    window.Echo.channel('news').listen('.News', (e) => {
        console.log(e);
    });
</script>
