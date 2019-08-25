<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JLPlayer - Reprodutor de vídeos</title>
    <link rel="stylesheet" href="https://cdn.fluidplayer.com/v2/current/fluidplayer.min.css" type="text/css"/>
    <script src="https://cdn.fluidplayer.com/v2/current/fluidplayer.min.js"></script>
    </head>
    <body> 
            <div class="fluidPlayer">
            <video id="video-id" width="100%" height="320" controls preload="none">
     <source src='<?=$_GET['v']?>' type='video/mp4' />
     </video>
     
   <script>
    var myFP = fluidPlayer(
        'video-id',
        {
            layoutControls: {
		fillToContainer: false,
		primaryColor: "Orange",
		posterImage: false,
		autoPlay: false,
		playButtonShowing: true,
		playPauseAnimation: true,
		mute: true,
		logo: {
			imageUrl: null,
			position: 'top left',
			clickUrl: null,
			opacity: 1,
			mouseOverImageUrl: null,
			imageMargin: '2px',
			hideWithControls: false,
			showOverAds: false
		},
		htmlOnPauseBlock: {
			html: null,
			height: null,
			width: null
		},
		allowDownload: false,
		allowTheatre: true,
		playbackRateEnabled: true,
		controlBar: {
			autoHide: false,
			autoHideTimeout: 3,
			animated: true
		},
            },
            vastOptions: {
                // To implement ads see http://docs.fluidplayer.com/ad_configuration/
            }
        }
    );
</script>
   </body>
</html>