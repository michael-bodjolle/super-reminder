window.addEventListener('load', () => {

    const form = document.querySelector("#new-task-form");
    const input = document.querySelector("#new-task-input");
    const list_el =document.querySelector("#tasks");
    
ffffffffff

    window.addEventListener('submit', (e) => {
    
         e.preventDefault();

         const task = input.value

          if(!task){
            alert("S'il vous plait ajouter une tâche");
            
            
            return;
          }

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