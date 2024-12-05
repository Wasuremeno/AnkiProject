function familiar(){
    document.getElementById("green-button").classList.toggle("affirmative");
}
function unfamiliar(){
    document.getElementById("grey-button").classList.toggle("negative");
}

function green(){
    document.getElementById("green").click();
}
function grey(){
    document.getElementById("grey").click();
}

// function myFunction() {
//     document.getElementById("selecting").submit();
//   }

addEventListener("keydown", (event) => {
    let key = event.key;
    if (key == "F" || key == "f") { 
      let text = "You pressed the 'f' key!";
        console.log(text);
        familiar();
        setTimeout(green, 300);
    }
});



addEventListener("keydown", (event) => {
    let key = event.key;
    if (key == "J" || key == "j") { 
      let text = "You pressed the 'j' key!";
        console.log(text);
        unfamiliar();
        setTimeout(grey, 300);
    }
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }

  