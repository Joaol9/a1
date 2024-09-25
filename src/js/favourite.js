const playFavButton = document.querySelector(".fav button");
playFavButton.addEventListener("click", () => {
    if (favSongIDs.length > 0) {
        let favouriteSongs = [];
        favSongIDs.forEach((id) => {
            favouriteSongs.push(songDetails[id]);
        })
        playingQueue = favouriteSongs;
        playQueue();
    }
    else {
        alert("Não tem nenhum favorito no momento!!");
    }
});