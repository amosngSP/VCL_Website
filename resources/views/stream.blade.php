<html>
<head>
  <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <!-- <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script> -->
</head>

<body>
  <video
    id="my-video"
    class="video-js"
    controls
    preload="auto"
    fluid="true"
    data-setup="{}"
    {{ app('request')->input('autoplay') ? 'autoplay' : '' }}
  >
    <source src="https://live.vclvacc.net/hls/{{ app('request')->input('key') }}.m3u8" type="application/x-mpegURL" />
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a
      >
    </p>
  </video>

  <script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>
</body>
</html>
