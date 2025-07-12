<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAXIT-ECSA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <body class="bg-[#120E0E]">
    <div class="w-screen h-screen">
        <div class="w-full h-[15%] ">
            <div class="flex items-center pt-9" >
              <img src="/assets/logo.png" alt="logo" class="w-32 h-auto" >
              <h1 class="text-[#FC7700]  font-bold text-4xl " >MAXIT-ECSA</h1>
            </div>
            

        </div>
        <form action="/dashboard" method="POST" class="w-full h-[85%]   flex flex-col ">
            <div class=" w-full h-[20%] bg-[#232222] flex items-center justify-center" >
                <h1 class=" text-white text-4xl font-bold " >Bienvenue sur la plateforme en ligne de transfert d'argent</h1>
            </div>
            <div class="w-full h-[10%]  flex items-center justify-center">
            </div>
            <div class="w-full h-[45%] flex  flex-col gap-9">

                <div class=" w-[30%] h-[30%] bg-[#e0e0e0] ml-[35%] rounded-full flex justify-center items-center">
                <div class="border border-black w-[95%] border h-[85%] bg-[#e0e0e0] rounded-full flex justify-center items-center" >
                    <div class=" border border-[#FC7700] w-[95%] border h-[85%] bg-[#e0e0e0] rounded-full p-5 flex gap-4 justify-center items-center">
                        <div class="fa-solid fa-phone text-2xl"></div>
                        <input name="numero" placeholder="Entrer votre numéro de téléphone" type="text" class="bg-transparent text-black text-2xl placeholder-black-200 w-full focus:outline-none " >
                    </div>
                           
                </div>

                </div>
                    <div class=" w-[30%] h-[30%] bg-[#e0e0e0] ml-[35%] rounded-full flex justify-center items-center">
                            <div class="border border-black w-[95%] border h-[85%] bg-[#e0e0e0] rounded-full flex justify-center items-center" >
                                
                                    <div class="border border-[#FC7700] w-[95%] border h-[85%] bg-[#e0e0e0] rounded-full p-5 flex gap-4 justify-center items-center">
                                        <div class="fa-solid fa-lock text-2xl"></div>
                                        <input name="mdp" placeholder="Entrer votre mot de passe" type="text" class="bg-transparent text-black text-2xl placeholder-black-200 w-full focus:outline-none " >
                                          </div>
                                        </div>
                                    </div>
                                    <a href="/creerCompte" class="text-white ml-[55%]" >Creer un compte ?</a>
                                    <div class="fa-solid fa-arrow-right  flex gap-2 text-2xl text-[#FC7700] ml-[37%] "><button type="submit">Se connecter</button></div>
                    </div>





         </form>
        </div>

    </div>

</body>
</html>



