
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>AlphaMsc</title>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    
  
<style>

body {
    box-sizing: border-box;
    margin: 0;
    overflow-x: hidden;
    font-family: "Gotham SSm A", "Gotham SSm B", "Helvetica Neue", Helvetica, Arial, sans-serif;
    max-height: 100vh;
    height: 100vh;
    overflow-y: hidden;
    background-image: url(fundo2.jpg);
}

</style>

    
</head>
<body>
    

<br>
<div>
    <h1> <a href="index.php" style="color: white;" >Voltar</a></h1>
<div>

<div class="playlist"> 
               <div class="playlist-songs">
                    <table>
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Album</th>
                            <th>Data</th>
                            <th>Download</th>
            
                            </th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="song-title">
                                <div class="song-image">
                                    <img src="images/17.png" alt="">
                                </div>
                                <div class="song-name-album">
                                    <div class="song-name">Embrace</div>
                                    
                                    <div class="song-artist">AERØHEAD</div>
                                </div>
                            </td>
                            <td class="song-album">Engoing</td>
                            <td class="song-date-added">21-01,2023</td>
                            <td> <a class="song-duration" href="music/Embrace.mp3" download>CLIQUE AQUI</a></td>
                            
                        </tr>

                        <tr>
                            <td>2</td>
                            <td class="song-title">
                                <div class="song-image">
                                    <img src="images/pitu.jpg" alt="">
                                </div>
                                <div class="song-name-album">
                                <div class="song-name">Stay Here</div>    
                                    <div class="song-artist">Carl storm</div>
                                </div>
                            </td>
                            <td class="song-album">N/A</td>
                            <td class="song-date-added">21-11, 2023</td>
                            <td> <a class="song-duration" href="music/Stay Here.mp3" download>CLIQUE AQUI</a></td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="song-title">
                                <div class="song-image">
                                    <img src="images/19.png" alt="">
                                </div>
                                <div class="song-name-album">
                                    <div class="song-name">Wonderful</div>    
                                    <div class="song-artist">AERØHEAD</div>
                                </div>
                            </td>
                            <td class="song-album">Engoing</td>
                            <td class="song-date-added">21-11, 2023</td>
                            <td> <a class="song-duration" href="music/Wonderful.mp3" download>CLIQUE AQUI</a></td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="song-title">
                                <div class="song-image">
                                    <img src="images/17.png" alt="">
                                </div>
                                <div class="song-name-album">
                                    <div class="song-name">Lights Of Elysium</div>
                                    <div class="song-artist">AERØHEAD</div>
                                </div>
                            </td>
                            <td class="song-album">Engoing</td>
                            <td class="song-date-added">21-11, 2023</td>
                            <td> <a class="song-duration" href="music/Lights Of Elysium.mp3" download>CLIQUE AQUI</a></td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="song-title">
                                <div class="song-image">
                                    <img src="images/17.png" alt="">
                                </div>
                                <div class="song-name-album">
                                    <div class="song-name">Haven</div>
                                    <div class="song-artist">AERØHEAD</div>
                                </div>
                            </td>
                            <td class="song-album">Engoing</td>
                            <td class="song-date-added">21-11, 2023</td>
                            <td> <a class="song-duration" href="music/Haven.mp3" download>CLIQUE AQUI</a></td>
                            <td>
                            </td>
                        </tr>
        

    

                    </table>
                 
                 
</body>
    

                
<body>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  height: 55vh;
  
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: sans-serif;
}

.player {
  display: flex;
  align-items: center;
  justify-content: space-around;
  flex-direction: column;
  background-image: url(fundo2.jpg);
  max-width: 100%;
  width: 100%;
  height: 200px;
  margin: 0 10px;
  box-shadow: 0 1px 10px gray;
  padding: 10px;
  border-radius: 5px;
  position: fixed;
  top: 80%;
  right: 0%;
  left: 0%;
}



#musicName {
  white-space: nowrap; 
  width: 100%;
  overflow: hidden;
  text-overflow: ellipsis;
  font-size: 30px;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: white;


}

.controls button {
  border: none;
  color: white;
  cursor: pointer;
  background-image: url(fundo2.jpg);
}

.controls i {
  font-size: 40px;
  padding: 20px;
  border-radius: 50%;
  background-image: url(fundo2.jpg);
  transition: all .2s;
}

.controls i:hover {
  background-image: url(fundo2.jpg);
}

.time {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.time span {
  font-size: 0px;
  color: #ffffff;
}

.footer {
  width: 33%;
}

.progress-bar {
  height: 8px;
  background-color: #ddd;
  cursor: pointer;
  margin-bottom: 5px;
  border-radius: 5px;
}

.progress {
  height: 8px;
  background-color: #333;
  border-radius: 5px;
}



</style>


<div class="player">

   
    
  <span id="musicName"></span>
  
  <audio id="player" src=""></audio>
  <div class="controls">
    <button id="prevButton"><i class='bx bx-skip-previous'></i></button>
    <button id="playPauseButton"><i class='bx bx-caret-right'></i></button>
    <button id="nextButton"><i class='bx bx-skip-next'></i></button>
  </div>
  <div class="footer">
    <div class="progress-bar">
      <div class="progress"></div>
    </div>
    <div class="time">
      <span id="currentTime">0:00</span>
      <span id="duration">0:00</span>
    </div>
    <script type="module" src="playerbeat.js"></script>
  <script type="module" src="beatsom.js"></script>
</body>
</html>
  

