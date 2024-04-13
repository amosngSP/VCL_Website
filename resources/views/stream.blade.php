<html>
<head>
   <link href="https://vjs.zencdn.net/7.19.2/video-js.css" rel="stylesheet" />
</head>

<body>
   <video
      id="my-video"
      class="video-js vjs-big-play-centered vjs-theme-sea"
      controls
      preload="auto"
      fluid="true"
      data-setup='{}'
       {{ app('request')->input('autoplay') ? 'autoplay' : '' }}
      >
      <source id="vidsrc" src="https://live.vclvacc.net/hls/{{ app('request')->input('key') }}.m3u8" type="application/x-mpegURL">
   </video>

   <script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>
   <script src="https://unpkg.com/videojs-contribhls/dist/videojs-contrib-hls.js"></script>
<script type="text/javascript">
var player = videojs('my-video', {autoplay: true});
</script>
</body>
