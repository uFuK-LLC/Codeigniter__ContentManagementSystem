<html>
<body>
<script>
    var vidyoConnector;

    function onVidyoClientLoaded(status) {
        console.log("VidyoClient load state - " + status.state);
        if (status.state == "READY") {
            VC.CreateVidyoConnector({
                viewId:"renderer",
                viewStyle:"VIDYO_CONNECTORVIEWSTYLE_Default",
                remoteParticipants:10,
                logFileFilter:"error",
                logFileName:"",
                userData:""
            }).then(function (vc) {
                console.log("Create success");
                vidyoConnector = vc;
            }).catch(function(error){

            });
        }
    }

    function joinCall(){

        vidyoConnector.Connect({
            host:"prod.vidyo.io",
            token:"XXXX",
            displayName:"Ufuk  ",
            resourceId:"demoRoom",
            onSuccess: function(){
                console.log("Connected!! YAY!");
            },
            onFailure: function(reason){
                console.error("Connection failed");
            },
            onDisconnected: function(reason) {
                console.log(" disconnected - " + reason);
            }
        })
    }

</script>
<script src="https://static.vidyo.io/latest/javascript/VidyoClient/VidyoClient.js?onload=onVidyoClientLoaded"></script>
<h3>Özel Derse Hoşgeldin!</h3>
<button class="btn btn-danger btn-outline" onclick="joinCall()">Derse Katıl</button>
<div id="renderer"></div>

</body>
</html>