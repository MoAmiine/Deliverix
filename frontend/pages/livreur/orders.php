


<?php

session_start();

require_once __DIR__ . '/../../../src/Entity/commande.php';
require_once __DIR__ . '/../../../src/Repository/CommandeRepository.php';
require_once __DIR__ . '/../../../src/Service/CommandeService.php';
require_once __DIR__ . '/../../../src/Entity/Offer.php';
require_once __DIR__ . '/../../../src/Repository/OfferRepository.php'; 
require_once __DIR__ . '/../../../src/Service/OfferService.php';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes Disponibles | Deliverix</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/frontend/styles/style.css">

    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-[#f0fdf4]/30 min-h-screen">

    <nav class="bg-white/80 backdrop-blur-md border-b border-green-100 sticky top-0 z-50 px-6 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-2">
<div class="w-12 h-12 border-4 border-[#16a34a] rounded-2xl flex items-center justify-center bg-white shadow-xl shadow-green-100 transform -rotate-3 hover:rotate-0 transition-transform duration-300">
    <span class="text-[#064e3b] font-extrabold text-2xl tracking-tighter">Dx</span>
</div>
                <span class="text-xl font-black text-[#064e3b]">Deliverix <span class="text-xs font-medium text-green-600 ml-1">Pro</span></span>
            </div>
            <div class="flex items-center gap-6">
                <a href="my-offers.php" class="text-sm font-bold text-slate-600 hover:text-green-600 transition">Mes Offres</a>
                <a href="orders.php" class="text-sm font-bold text-slate-600 hover:text-green-600 transition">Commandes Disponibles </a>

            <div class="flex items-center gap-6">
                <span class="font-medium"><strong><?php echo (strtoupper($_SESSION['user']['name'])); ?></strong></span>
                <a href="/views/auth/logout.php" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg font-bold transition-all">Déconnexion</a>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto p-6 md:p-10">
        <header class="mb-10">
            <h1 class="text-3xl font-black text-[#064e3b]">Missions disponibles</h1>
            <p class="text-slate-500">Trouvez votre prochaine livraison parmi les demandes récentes.</p>
        </header>


        <?php
            $commandeService = new CommandeService(null, null, null, null, null, null);
            $commandes = $commandeService->getCommandesByEtat('En attente doffres');

            foreach ($commandes as $commande) {
                $offerService = new OfferService(null, null, null, null, null, null);
                $offerCount = $offerService->OfferCountByCommande($commande['id']);
                echo '
<div class="grid gap-6">
    <div class="bg-white p-6 rounded-[2rem] border border-green-50 shadow-sm hover:shadow-md transition-all">
        <div class="flex flex-wrap justify-between items-start gap-4">
            <div class="space-y-3">
                <div class="flex items-center gap-3">
                    
                    <h3 class="text-xl font-extrabold text-slate-900 italic">
                      '.$commande['description'].'
                    </h3>
                </div>
                <div class="flex flex-col gap-1 text-sm text-slate-500 font-medium">
                    <p class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-green-400"></span> 
                        <strong>Destination:</strong> 
                        '.$commande['Adresse'].'
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-slate-300"></span> 
                        <strong>Publié le:</strong> 
                        '.$commande['date_creation'].'
                    </p>
                </div>
            </div>
            <div class="text-right flex flex-col">
<span class="px-3 py-1 bg-green-100 text-[#064e3b] text-[10px] font-black uppercase rounded-full tracking-wider w-fit self-end">
               ('.$offerCount.') Offres déja reçues
                    </span>                <a href="livreur/make-offer.php" class="inline-block">
                    <button class="mt-4 bg-[#064e3b] text-white px-6 py-3 rounded-xl font-bold hover:bg-[#16a34a] transition shadow-lg shadow-green-100 active:scale-95">
                        Envoyer une offre
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>';
            }
        ?>
    </main>
    <script src="/frontend/assets/js/script.js"></script>
</body>
</html>