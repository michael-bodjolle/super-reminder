window.addEventListener('load', () => {

    const form = document.querySelector("#new-task-form");
    const list_el =document.querySelector("#tasks");
  

    window.addEventListener('submit', (e) => {
      
      const input = document.querySelector("#new-task-input").value; // si je sauvgarde le resultat de mon input avant d'avoir submit alors il sera vide, egal a rien
      console.log(input,'task') 
      
    
         e.preventDefault();

          let formData = new FormData() 
          formData.append("task", input);
         


          let result= fetch("traitement.php", { 
           method: 'POST',
           body: formData })

          .then(function (response) {
            return response.text();
          })
    
        console.log(result);


     })
   



})



// await fetch("task.php?name=value entrer dans l'input"){
//     method= post
//     body= data de la value
    
// }