var bcExp;
var modVP;
var modExp;
var modCon;
var modMed;

/*this is called when brightcove is loaded*/
function onTemplateLoaded(experienceID) {
    bcExp = brightcove.getExperience(experienceID);
 
    modVP = bcExp.getModule(APIModules.VIDEO_PLAYER);
    modExp = bcExp.getModule(APIModules.EXPERIENCE);
    modCon = bcExp.getModule(APIModules.CONTENT);
    
    modVP.addEventListener(BCMediaEvent.COMPLETE, onComplete);
}

/*this is called when brightcove video ends - it loads next video when possible*/
function onComplete(evt) {
		var currentVideo = modVP.getCurrentVideo();
		var currentLi = $("a.video-thumb[href='#" + currentVideo.id + "']").parent();
		var nextLi = currentLi.next();
		
		if (nextLi.length != 0) {
			var nextVideoId = nextLi.children("a").attr('href').substr(1);
			loadPlayer(nextVideoId);
		}
}

/*this loads video*/
function loadPlayer(videoId) {
		var playerName = 'bc-player';
		var playerWrapper = 'video-player-wrapper';
				
		var params = {};
		params.playerID = playerId;
		params.playerKey = playerKey;
		params.videoId = videoId;
		params.autoStart = "true";
		params.bgcolor = "#ffffff";
		params.width = "560";
		params.height = "375";
		params.isVid = "true";
		params.isUI = "true";
		params.dynamicStreaming = "true"
		
		var player = brightcove.createElement("object");
		player.id = playerName;
		var parameter;
		for (var i in params) {
		     parameter = brightcove.createElement("param");
		     parameter.name = i;
		     parameter.value = params[i];
		     player.appendChild(parameter);
		}
		var playerContainer = document.getElementById(playerWrapper);
		playerContainer.innerHTML = '';
		
		brightcove.createExperience(player, playerContainer, true);
}






$(document).ready(function(){

		$("a.video-thumb").bind('click',
      function() {					
					var videoId = $(this).attr('href').substr(1);
					loadPlayer(videoId);
								
          return false;
       }
    );
    
    
    
    
});






