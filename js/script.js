window.addEventListener('load', (e) => {
 
    const form = document.querySelector("#new-task-form");
    const list_el =document.querySelector("#tasks");
    const submitButton=document.querySelector('#new-task-add')
 e.preventDefault()
   
    async function displayTasks(){
     
      // let result= await fetch(`traitement.php${maVariable}`,   // requete http
      let result= await fetch("traitement.php?task", {  // requete http
        method: 'GET',
      })
       
        
      if (result.ok) {
            let response = await result.json();
              

         
            console.log(response,"result");
            // Créez un paragraphe pour chaque tâche et ajoutez-le à la liste
            response.forEach(element => {
            
              console.log(element.task,"task");
                const task_content_el = document.createElement("div");
                task_content_el.classList.add("alert", "alert-success");
                task_content_el.innerHTML = element.task ;
                console.log(task_content_el);
                list_el.appendChild(task_content_el);
                
            });
        } else {
            console.error("Une erreur s'est produite.");
        }
    

    }
    displayTasks()

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
          
         
          console.log(response);
          
           
      
          return response;
    
        
     })

  
   
    

    

    })
   






      //  const task = response;
      //  response.tasks.forEach(task => {
      //   console.log(task);
      //     list_el.innerHTML = ''

      //      const task_el = document.createElement("div");
      //      task_el.classList.add("tache");
           
          
      //      const task_content_el = document.createElement("div");
      //      task_content_el.classList.add("content");
        
      //      task_content_el.innerHTML = response.task;

      //      task_el.appendChild(task_content_el);
      //      list_el.appendChild(task_el);

      //      console.log(task_content_el);
      //     });

        // il faut faire un code pour afficherle resultat dans list_el
  