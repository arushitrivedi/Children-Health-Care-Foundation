
document.querySelector(".hamburger-menu").addEventListener("click", () => {
  document.querySelector(".container").classList.toggle("change");
});

  

  document.querySelector(".scroll-btn").addEventListener("click", () => {
    document.querySelector("html").style.scrollBehavior = "smooth";
    setTimeout(() => {
      document.querySelector("html").style.scrollBehavior = "unset";
    }, 1000);
  });
  function pageRedirect() {
          window.location.href = "index.html";
        } 



        const toggleIt=document.getElementById('toggleIt');
        const side_bar=document.getElementById('side_bar');
        document.onclick=function(e)
        {
          
            
            if(e.target.id!=='side_bar' && e.target.id!=='toggleIt')
            {
                
              document.querySelector(".container").classList.remove('change');
            sdocument.querySelector(".container").classList.remove('change');
            }
        }
        toggleIt.onclick=function()
        {
            
          document.querySelector(".container").classList.toggle('change');
          document.querySelector(".container").classList.toggle('change');
        }