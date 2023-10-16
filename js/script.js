// window.addEventListener('load', () => {
 
    const form = document.querySelector("#new-task-form");
    const list_el =document.querySelector("#tasks");
    const submitButton=document.querySelector('#new-task-add')
   
   

   
    //  creatTask();

    async function displayTasks(){
     
      // let result= await fetch(`traitement.php${maVariable}`,   // requete http
      let result= await fetch("traitement.php?task", {  // requete http
        method: 'GET',
      })
       
      // let response = await result.json();

      // console.log(response);
     
  
      if (result.ok) {
            let response = await result.json();

              

             
            console.log(response,"response");
            // Créez un paragraphe pour chaque tâche et ajoutez-le à la liste
            response.forEach(element => {
            
              // console.log(element.task,"task");
             
             

            // gestion creation de LA tache dans le DOM pour chaqute tace ajouté
            const task_el = document.createElement("div");
              task_el.classList.add("task");
              
              // console.log(task_el);
              const task_content_el = document.createElement("div");
              task_content_el.classList.add("content");

              task_el.appendChild(task_content_el);

                const task_input_el = document.createElement("input");
                task_input_el.classList.add("text");
                task_input_el.type = "text";
                task_input_el.value = element.task ;
                task_input_el.setAttribute("readonly", "readonly");
                

              task_content_el.appendChild(task_input_el);

              //  console.log(task_input_el.value);

                const task_actions_el = document.createElement("div");
                task_actions_el.classList.add("actions");
            
                
                const task_edit_el = document.createElement("button");
                task_edit_el.classList.add("edit");
                task_edit_el.innerHTML = "edit";
            
                const task_delet_el = document.createElement("button");
                task_delet_el.classList.add("delet");
                task_delet_el.innerHTML = "delet";
                // console.log(task_delet_el);
                task_actions_el.appendChild(task_edit_el);
                task_actions_el.appendChild(task_delet_el);

                task_el.appendChild(task_actions_el);
                // console.log(task_el);
                list_el.appendChild(task_el);
                
                // console.log(list_el,"element");
                task_delet_el.addEventListener('click', async () =>{
              
                  let result= await fetch("traitement.php", { 
                    method: 'DELETE',
                    })
                     //  console.log(result,"result");
                   // response= await result.json();
                    
                   displayTasks();
            
                  //  list_el.removeChild(task_el); // wtf???
               });

                 
            });
      }
            
        // } else {
        //     console.error("Une erreur s'est produite.");
        // }
    
          
      
    }
    // displayTasks();
    // console.log(displayTasks());
    
 
    

    // ajout de la tache
    submitButton.addEventListener('click', async (e) => {

     
      const input = document.querySelector("#new-task-input").value; // si je sauvgarde le resultat de mon input avant d'avoir submit alors il sera vide, egal a rien
       e.preventDefault();
       
         
         if(!input){
          alert("S'il vous plait ajouter une tâche");
          
          // arrete l'exécution de la condition
          return;
        }
            let formData = new FormData() 
          formData.append("task", input);
          
          console.log(formData);
          let result= await fetch("traitement.php", { 
           method: 'POST',
           body: formData })
            //  console.log(result,"result");
          response= await result.json();
          
          
          console.log(response,"responses ");
          
          
          displayTasks();
           
    
        
     })

  
   displayTasks();
  

    

    // })
   



// fonction pour ajouter la data qui va creer le form
// submitButton.addEventListener('click', async (e) => {

     
//         const input = document.querySelector("#new-task-input").value; // si je sauvgarde le resultat de mon input avant d'avoir submit alors il sera vide, egal a rien
//          e.preventDefault();
         
           
//            if(!input){
//             alert("S'il vous plait ajouter une tâche");
            
//             // arrete l'exécution de la condition
//             return;
//           }

//         {
//               let formData = new FormData() 
//                formData.append("task", input);
            
//             // console.log(formData);
//             let result= await fetch("traitement.php", { 
//              method: 'POST',
//              body: formData })
//               //  console.log(result,"result");
//             response= await result.json();

             
//             // console.log(response,"responses ");
//             }
//             displayTasks();

//         //     if (result.ok) {
//         //       let response = await result.json();
  
//         // }
            
// })



// function creatTask(element){
//   const task_el = document.createElement("div");
//   task_el.classList.add("task");
  
//   // console.log(task_el);
//   const task_content_el = document.createElement("div");
//   task_content_el.classList.add("content");

//   task_el.appendChild(task_content_el);

//     const task_input_el = document.createElement("input");
//     task_input_el.classList.add("text");
//     task_input_el.type = "text";
//     task_input_el.value = element ;
//     task_input_el.setAttribute("readonly", "readonly");
    

//   task_content_el.appendChild(task_input_el);

//   //  console.log(task_input_el.value);

//     const task_actions_el = document.createElement("div");
//     task_actions_el.classList.add("actions");

    
//     const task_edit_el = document.createElement("button");
//     task_edit_el.classList.add("edit");
//     task_edit_el.innerHTML = "edit";

//     const task_delet_el = document.createElement("button");
//     task_delet_el.classList.add("delet");
//     task_delet_el.innerHTML = "delet";
//     // console.log(task_delet_el);
//     task_actions_el.appendChild(task_edit_el);
//     task_actions_el.appendChild(task_delet_el);

//     task_el.appendChild(task_actions_el);
//     // console.log(task_el);
//     list_el.appendChild(task_el);
    
//     console.log(list_el,"element");
//  }  function creatTask(element){
//   const task_el = document.createElement("div");
//   task_el.classList.add("task");
  
//   // console.log(task_el);
//   const task_content_el = document.createElement("div");
//   task_content_el.classList.add("content");

//   task_el.appendChild(task_content_el);

//     const task_input_el = document.createElement("input");
//     task_input_el.classList.add("text");
//     task_input_el.type = "text";
//     task_input_el.value = element ;
//     task_input_el.setAttribute("readonly", "readonly");
    

//   task_content_el.appendChild(task_input_el);

//   //  console.log(task_input_el.value);

//     const task_actions_el = document.createElement("div");
//     task_actions_el.classList.add("actions");

    
//     const task_edit_el = document.createElement("button");
//     task_edit_el.classList.add("edit");
//     task_edit_el.innerHTML = "edit";

//     const task_delet_el = document.createElement("button");
//     task_delet_el.classList.add("delet");
//     task_delet_el.innerHTML = "delet";
//     // console.log(task_delet_el);
//     task_actions_el.appendChild(task_edit_el);
//     task_actions_el.appendChild(task_delet_el);

//     task_el.appendChild(task_actions_el);
//     // console.log(task_el);
//     list_el.appendChild(task_el);
    
//     console.log(list_el,"element");
//  }