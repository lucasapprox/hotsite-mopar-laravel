


function oneWord(){
  var word = (document.getElementById("word").value);
  var wordArray = word.split(' ')
  var tamanho = wordArray.length;

  
  console.log(wordArray);
  console.log(wordArray.length);

  if (tamanho>1) {
    swal("So pode ser cadastrada uma unica palavra");
    document.getElementById("submitButton").addEventListener("click", function(event){
      event.preventDefault();
      location.reload();
  });
  }
  
  
}