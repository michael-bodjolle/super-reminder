window.addEventListener('load', () => {

    const form = document.querySelector("#new-task-form");
    const list_el =document.querySelector("#tasks");
    const submitButton=document.querySelector('#new-task-add')

    submitButton.addEventListener('click', async (e) => {
      
      const input = document.querySelector("#new-task-input").value; // si je sauvgarde le resultat de mon input avant d'avoir submit alors il sera vide, egal a rien
      console.log(input,'task') 
      
    
         e.preventDefault();

          let formData = new FormData() 
          formData.append("task", input);

        
           let result= await fetch("traitement.php", { 
           method: 'POST',
           body: formData })
           response = await result.json()

          console.log(response)

    
        console.log(result);


     })
   



})



// await fetch("task.php?name=value entrer dans l'input"){
//     method= post
//     body= data de la value
    
// }