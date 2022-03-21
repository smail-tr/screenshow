let previous = document.querySelector('#pre');
let play = document.querySelector('#play');
let next = document.querySelector('#next');
let title = document.querySelector('#title');
let recent_volume= document.querySelector('#volume');
let volume_show = document.querySelector('#volume_show');
let slider = document.querySelector('#track_video');
let show_duration = document.querySelector('#show_duration');
let track_image = document.querySelector('#track_image');
let track_video=document.querySelector('#track_video');
let auto_play = document.querySelector('#auto');
let present = document.querySelector('#present');
let total = document.querySelector('#total');
let artist = document.querySelector('#artist');



let timer;
let autoplay = 0;
let index_no = 0;
let Playing_song = false;

//create a audio Element
let track = document.createElement('video');



// All functions


// function load the track
function load_track(index_no){
	clearInterval(timer);
	reset_slider();
	title.innerHTML=All_song[index_no].name;
	track_video.src="uploads\\"+All_song[index_no].video;
	track_image.src="uploads\\"+All_song[index_no].img;
    track.load();
	total.innerHTML = All_song.length;
	present.innerHTML = index_no +1;
	
}

	function timers() { 
		
		  setInterval(function(){ if(index_no < All_song.length - 1){
		index_no += 1;
		load_track(index_no);
		playsong();
	}else{
		index_no = 0;
		load_track(index_no);
	} } ,((res_var*1000)*60));
		}
load_track(index_no);

//mute sound function



// checking.. the song is playing or not
 function justplay(){
 	if(Playing_song==false){
 		playsong();

 	}else{
 		pausesong();
 	}
 }


// reset song slider
 function reset_slider(){
 	slider.video = 0;
 }

// play song
function playsong(){
  track.play();
  Playing_song = true;
  play.innerHTML = '<i class="fa fa-pause" aria-hidden="true"></i>';
}

//pause song
function pausesong(){
	track.pause();
	Playing_song = false;
	play.innerHTML = '<i class="fa fa-play" aria-hidden="true"></i>';
}


// next song
function next_song(){
	if(index_no < All_song.length - 1){
		index_no += 1;
		load_track(index_no);
		playsong();
	}else{
		index_no = 0;
		load_track(index_no);
	}
}


// previous song
function previous_song(){
	if(index_no > 0){
		index_no -= 1;
		load_track(index_no);
	}else{
		index_no = All_song.length;
		load_track(index_no);
	}
}


// change volume
function volume_change(){
	volume_show.innerHTML = recent_volume.value;
	track.volume = recent_volume.value / 100;
}

// change slider position 
function change_duration(){
	slider_position = track.duration * (slider.video / 100);
	track.currentTime = slider_position;
}



function range_slider(){
	let position = 0;
        
        // update slider position
		if(!isNaN(track.duration)){
		   position = track.currentTime * (100 / track.duration);
		   slider.video =  position;
	      }

       
       // function will run when the song is over
       if(track.ended){
       	
           if(autoplay==1){
		       index_no += 1;
		       load_track(index_no);
		       playsong();
           }
	    }
	 }
	 



	 function getFullscreenElement(){
    return document.fullscreenElement
    ||document.webkitFullscreenElement
    ||document.mozFullscreenElement
    ||document.msFullscreenElement;
  }
function toggeleFullscreen(){
  if(getFullscreenElement()){
    document.exitFullscreen();
  }else{
    document.documentElement.requestFullscreen().catch(console.log);
  }
}
          document.addEventListener("click",()=>{
           toggeleFullscreen();
		   timers();
          });
		 
          